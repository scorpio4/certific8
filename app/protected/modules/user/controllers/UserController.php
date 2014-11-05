<?php

class UserController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() 
    {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() 
    {
        return array(
            array('allow', 
                'actions' => array('index', 'register', 'login', 'changeFrom', 'socialLogin', 'verify','sendPassword'),
                'users' => array('?'),
            ),
            array('allow', 
                'actions' => array('index', 'socialResponse','accountadded'),
                'users' => array('*'),
            ),
            array('allow', 
                'actions' => array('changepassword'),
                'users' => array('@'),
            ),
            array('allow', 
                'actions' => array('update'),
                'roles' => array('members'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Creates a new model.
     */
    public function actionRegister() 
    {
        $model = new User;
        $model->scenario = 'register';

        if (isset($_POST['ajax']) && $_POST['ajax'] === 'user-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        if (isset($_POST['User'])) {
            $model->attributes = $_POST['User'];
            if ($model->validate()) {
                $token = $model->randString(10);
                $model->ipv4address = ip2long(Yii::app()->request->getUserHostAddress());
                $model->last_valdiated = date('Y-m-d');
                $model->is_registered = 0;
                $model->registration_token = $token;
                $model->password_sha256 = CPasswordHelper::hashPassword($model->password_sha256);
                $model->membership_id = 1;
                $model->save(false);
                $role = Role::model()->findByAttributes(array('name' => 'Members'));
                if ($role) {
                    $roleId = $role->id;
                } else {
                    $roleId = 1;
                }
                $userRole = new UserRole;
                $userRole->role_id = $roleId;
                $userRole->user_id = $model->id;
                $userRole->save(false);
                $message = 'Email has been sent to your email address. Please verify your email.';
                Yii::app()->user->setFlash('success', $message);
                echo CJSON::encode(array(
                    'status' => 'success',
                    'message' => $message
                ));

                $template = EmailTemplate::model()->findByAttributes(array('type' => 'email_verify'));
                if ($template) {
                    $to = $model->email;
                    $from = Yii::app()->params['adminEmail'];
                    $sub = $template->subject;
                    $msg = $template->template;
                    $url = Yii::app()->createAbsoluteUrl('/verify/' . $token);
                    $msg = str_replace('{Confirm_Email_URL}', $url, $msg);
                    $model->sendMail($to, $from, $msg, $sub);
                }
                Yii::app()->end();
            } else {
                $error = CActiveForm::validate($model);
                if ($error != '[]')
                    echo $error;
                Yii::app()->end();
            }
        }
    }

    /**
     * Manage user login
     */
    public function actionLogin() 
    {
        $model = new LoginForm;

        // if it is ajax validation request
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        if (isset($_POST['LoginForm'])) {
            $model->attributes = $_POST['LoginForm'];
            if ($model->validate() && $model->login()) {
                $user = User::model()->findByAttributes(array('email' => $model->username));
                if ($user) {
                    $user->last_seen = date('Y-m-d');
                    $user->save(false);
                }
                echo CJSON::encode(array(
                    'status' => 'success',
                ));
            } else {
                $error = CActiveForm::validate($model);
                if ($error != '[]')
                    echo $error;
                Yii::app()->end();
            }
        }
    }

    /* Change display form */

    public function actionChangeFrom() 
    {
        if (isset($_POST['type'])) {
            $type = $_POST['type'];
            Yii::app()->clientScript->scriptMap['jquery-1.11.1.min.js'] = false;
            Yii::app()->clientScript->scriptMap['jquery.js'] = false;
            if ($type == 'login') {
                $model = new LoginForm;
                $this->renderPartial('login', array('model' => $model), false, true);
            } elseif ($type == 'register') {
                $model = new User;
                $this->renderPartial('register', array('model' => $model), false, true);
            }
        }
    }

    /**
     * Lists all models.
     */
    public function actionIndex() 
    {
        if (!Yii::app()->user->isGuest) {
            $this->redirect(array('/user'));
        }
        $this->layout = 'login';
        $model = new User;
      
        $this->render('index', array(
            'model' => $model,
        ));
    }

    /**
     * Create/ Updates a particular user.
     */
    public function actionUpdate()
    {
        $model = $this->loadModel(Yii::app()->user->id);
        $model->scenario ='create';
        $email = $model->email;
        if(isset($_POST['ajax']) && $_POST['ajax']==='user-form') {
                echo CActiveForm::validate($model);
                Yii::app()->end();
        }
        if (isset($_POST['User'])) {

            $model->attributes = $_POST['User'];
            $photos = CUploadedFile::getInstances($model,'avatar');
            if($email != $model->email) {
                $model->scenario ='update';
            }
            if ($model->save()) {
                if (isset($photos) && count($photos) > 0) {
                    foreach ($photos as $image => $pic) {
                        $url = $pic->tempName;
                        $ext = substr(strrchr($pic->name, "."), 1);
                        if(!$ext) {
                            $ext = 'png';
                        }
                        $image = 'avatar_' . $model->id . '.'.$ext;
                        $model->avatar = $image;
                        $destination = Yii::getPathOfAlias('webroot') . '/uploads/avatar/' . $model->id;
                        if (!file_exists($destination)) {
                            mkdir($destination);
                        }
                        $destination = $destination . '/' . $image;
                        file_put_contents($destination, file_get_contents($url));
                        Yii::import('application.extensions.EWideImage.EWideImage');
                        $imgload = EWideImage::load($destination);
                        $image = $imgload->resize(50,50,'fill');
                        $tempname = Yii::getPathOfAlias('webroot') . '/uploads/avatar/' . $model->id.'/thumb';
                        if (!file_exists($tempname)) {
                            mkdir($tempname);
                        }
                        $tempname = $tempname . '/' . $model->avatar;
                        file_put_contents($tempname, file_get_contents($url));
                        $image->saveToFile($tempname);
                        
                        $image = $imgload->resize(150,150,'fill');
                        $tempname = Yii::getPathOfAlias('webroot') . '/uploads/avatar/' . $model->id.'/profile';
                        if (!file_exists($tempname)) {
                            mkdir($tempname);
                        }
                        $tempname = $tempname . '/' . $model->avatar;
                        file_put_contents($tempname, file_get_contents($url));
                        $image->saveToFile($tempname);
                        
                        $image = $imgload->resize(171,174,'fill');
                        $tempname = Yii::getPathOfAlias('webroot') . '/uploads/avatar/' . $model->id.'/user';
                        if (!file_exists($tempname)) {
                            mkdir($tempname);
                        }
                        $tempname = $tempname . '/' . $model->avatar;
                        file_put_contents($tempname, file_get_contents($url));
                        $image->saveToFile($tempname);
                        
                        $model->save(false);
                    }
                }
                Yii::app()->user->setFlash('success', 'Profle saved successfully.');
                $this->redirect(array('/user'));
                exit;
            }
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * User login by social api.
    */
    public function actionSocialLogin($provider) 
    {
        error_reporting(E_ERROR);
        $path = Yii::getPathOfAlias('ext.hybridauth');
        $config = $path . '/config.php';
        require_once( $path . "/Hybrid/Auth.php" );
        try {
            $hybridauth = new Hybrid_Auth($config);
            $adapter = $hybridauth->authenticate($provider);
            if (Hybrid_Auth::isConnectedWith($provider)) {
                $profile = $adapter->getUserProfile();
                $identifier = $profile->identifier;
                $social = Social::model()->findByAttributes(array('title' => $provider));
                if ($social) {
                    $socialid = $social->id;
                } else {
                    $socialid = 1;
                }
                $socialprofile = SocialProfile::model()->findByAttributes(array('identifier' => $identifier, 'social_id' => $socialid));
                if ($socialprofile) {
                    $user = User::model()->findByPk($socialprofile->user_id);
                    if ($user) {
                        $user->last_seen = date('Y-m-d');
                        $url = $profile->photoURL;
                        if ($url <> '') {
                            $image = 'avatar_' . $user->id . '.png';
                            $user->avatar = $image;
                            $destination = Yii::getPathOfAlias('webroot') . '/uploads/avatar/' . $user->id;
                            if (!file_exists($destination)) {
                                mkdir($destination);
                            }
                            $destination = $destination . '/' . $image;
                            file_put_contents($destination, file_get_contents($url));
                            Yii::import('application.extensions.EWideImage.EWideImage');
                            $imgload = EWideImage::load($destination);
                            $image = $imgload->resize(50,50,'fill');
                            $tempname = Yii::getPathOfAlias('webroot') . '/uploads/avatar/' . $user->id.'/thumb';
                            if (!file_exists($tempname)) {
                                mkdir($tempname);
                            }
                            $tempname = $tempname . '/' . $user->avatar;
                            file_put_contents($tempname, file_get_contents($url));
                            $image->saveToFile($tempname);
                            
                            $image = $imgload->resize(150,150,'fill');
                            $tempname = Yii::getPathOfAlias('webroot') . '/uploads/avatar/' . $user->id.'/profile';
                            if (!file_exists($tempname)) {
                                mkdir($tempname);
                            }
                            $tempname = $tempname . '/' . $user->avatar;
                            file_put_contents($tempname, file_get_contents($url));
                            $image->saveToFile($tempname);

                            $image = $imgload->resize(171,174,'fill');
                            $tempname = Yii::getPathOfAlias('webroot') . '/uploads/avatar/' . $user->id.'/user';
                            if (!file_exists($tempname)) {
                                mkdir($tempname);
                            }
                            $tempname = $tempname . '/' . $user->avatar;
                            file_put_contents($tempname, file_get_contents($url));
                            $image->saveToFile($tempname);
                        }
                        $user->save(false);
                        unset($profile->identifier);
                        $json = json_encode($profile);
                        $name = 'json_' . $user->id . '.json';
                        $destination = Yii::getPathOfAlias('webroot') . '/uploads/json/' . $user->id;
                        if (!file_exists($destination)) {
                            mkdir($destination);
                        }
                        $destination = $destination . '/' . $name;
                        $myfile = fopen($destination, "w");
                        fwrite($myfile, $json);
                        fclose($myfile);
                        $role = '';
                        $identity = new UserIdentity($user->full_name, '');
                        $identity->setUser($user->id);
                        $userRole = UserRole::model()->findByAttributes(array('user_id' => $user->id));
                        if (isset($userRole->role)) {
                            $role = strtolower($userRole->role->name);
                        }
                        $identity->setState('role', $role);
                        if(Yii::app()->user->login($identity)) {
                            $this->redirect(array('user/accountadded'));
                        }
                        
                    }
                } else {
                    $user = User::model()->findByAttributes(array('email'=>$profile->email));
                    if(!$user) {
                        $user = new User;
                        $user->email = $profile->email;
                        $user->membership_id = 1;
                    }
                    if($user->full_name == '') {
                        $user->full_name = $profile->firstName . ' ' . $profile->lastName;
                    }
                    if($user->first_name == '') {
                        $user->first_name = $profile->firstName;
                    }
                    if($user->last_name == '') {
                        $user->last_name =  $profile->lastName;
                    }
                    if($user->country == '') {
                        $user->country = $profile->country;
                    }
                    if($user->mobile == '') {
                        $user->mobile = $profile->phone;
                    }
                    if($user->postcode == '') {
                        $user->postcode = $profile->zip;
                    }
                    if($user->first_joined == '') {
                        $user->first_joined = date('Y-m-d');
                    }
                    if($user->ipv4address == '') {
                        $user->ipv4address = ip2long(Yii::app()->request->getUserHostAddress());
                    }
                    $user->last_valdiated = date('Y-m-d');
                    $user->last_seen = date('Y-m-d');
                    $user->ipv4address = ip2long(Yii::app()->request->getUserHostAddress());
                    $user->is_registered = 1;
                    $user->save(false);
                    $url = $profile->photoURL;
                    if ($url <> '' && ($user->avatar == '' || $user->avatar == 'avatar.png')) {
                        $image = 'avatar_' . $user->id . '.png';
                        $user->avatar = $image;
                        $destination = Yii::getPathOfAlias('webroot') . '/uploads/avatar/' . $user->id;
                        if (!file_exists($destination)) {
                            mkdir($destination);
                        }
                        $destination = $destination . '/' . $image;
                        file_put_contents($destination, file_get_contents($url));
                        Yii::import('application.extensions.EWideImage.EWideImage');
                        $imgload = EWideImage::load($destination);
                        $image = $imgload->resize(50,50,'fill');
                        $tempname = Yii::getPathOfAlias('webroot') . '/uploads/avatar/' . $user->id.'/thumb';
                        if (!file_exists($tempname)) {
                            mkdir($tempname);
                        }
                        $tempname = $tempname . '/' . $user->avatar;
                        file_put_contents($tempname, file_get_contents($url));
                        $image->saveToFile($tempname);
                        
                        $image = $imgload->resize(150,150,'fill');
                        $tempname = Yii::getPathOfAlias('webroot') . '/uploads/avatar/' . $user->id.'/profile';
                        if (!file_exists($tempname)) {
                            mkdir($tempname);
                        }
                        $tempname = $tempname . '/' . $user->avatar;
                        file_put_contents($tempname, file_get_contents($url));
                        $image->saveToFile($tempname);

                        $image = $imgload->resize(171,174,'fill');
                        $tempname = Yii::getPathOfAlias('webroot') . '/uploads/avatar/' . $user->id.'/user';
                        if (!file_exists($tempname)) {
                            mkdir($tempname);
                        }
                        $tempname = $tempname . '/' . $user->avatar;
                        file_put_contents($tempname, file_get_contents($url));
                        $image->saveToFile($tempname);
                    }
                    $user->save(false);
                    $socialprofile = SocialProfile::model()->findByAttributes(array('identifier' => $identifier,'user_id'=>$user->id));
                    if(!$socialprofile) {
                        $socialprofile = new SocialProfile;
                    }
                    $socialprofile->user_id = $user->id;
                    $socialprofile->identifier = $identifier;
                    $socialprofile->social_id = $socialid;
                    $socialprofile->save(false);

                    $role = Role::model()->findByAttributes(array('name' => 'Members'));
                    if ($role) {
                        $roleId = $role->id;
                    } else {
                        $roleId = 1;
                    }
                    $userRole = UserRole::model()->findByAttributes(array('role_id' => $roleId,'user_id'=>$user->id));
                    if(!$userRole) {
                        $userRole = new UserRole;
                    }
                    $userRole->role_id = $roleId;
                    $userRole->user_id = $user->id;
                    $userRole->save(false);

                    $json = json_encode($profile);
                    $name = 'json_' . $user->id . '.json';
                    $destination = Yii::getPathOfAlias('webroot') . '/uploads/json/' . $user->id;
                    if (!file_exists($destination)) {
                        mkdir($destination);
                    }
                    $destination = $destination . '/' . $name;
                    $myfile = fopen($destination, "w");
                    fwrite($myfile, $json);
                    fclose($myfile);
                    $role = '';
                    $identity = new UserIdentity($user->full_name, '');
                    $identity->setUser($user->id);
                    if (isset($userRole->role)) {
                        $role = strtolower($userRole->role->name);
                    }
                    $identity->setState('role', $role);
                    if(Yii::app()->user->login($identity)) {
                        $this->redirect(array('user/accountadded'));
                    } 
                }
                $this->redirect(array('user/accountadded'));
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
       
    }
    
    /*
     * Display page after social login 
     */
    public function actionAccountadded()
    {
        $this->layout = 'social';
        $this->render('account-added');
    }
    /**
     * Hybridauth redirect url.
     */
    public function actionSocialResponse() 
    {
        $path = Yii::getPathOfAlias('ext.hybridauth');
        require_once $path . '/index.php';
    }

    /**
     *  Verify email
     */
    public function actionVerify() 
    {
        if (isset($_GET['id']) && Yii::app()->user->isGuest) {
            $user = User::model()->findByAttributes(array('registration_token' => $_GET['id']));
            if ($user) {
                $user->first_joined = date('Y-m-d');
                $user->last_seen = date('Y-m-d');
                $user->is_registered = 1;
                $user->save(false);
                $identity = new UserIdentity($user->full_name, '');
                $identity->setUser($user->id);
                $userRole = UserRole::model()->findByAttributes(array('user_id' => $user->id));
                if (isset($userRole->role)) {
                    $role = strtolower($userRole->role->name);
                }
                $identity->setState('role', $role);
                Yii::app()->user->login($identity);
            }
        }
        $this->redirect(array('/'));
    }
    
    /*
    * Change user password.
    */
    public function actionChangepassword()
    {
        $model = User::model()->findByPk(Yii::app()->user->id);
        $model->scenario = 'changepassword';
        if (isset($_POST['User'])) {
            $model->attributes = $_POST['User'];
            if ($model->validate()) {
                $model->password_sha256 = CPasswordHelper::hashPassword($model->newpassword);
                $model->save(false);
                Yii::app()->user->setFlash('success', "Password changed successfully.");
                $this->redirect(array('changepassword'));
            }
        }
        $this->render('change-password', array(
            'model' => $model,
        ));
    }
    
    /*
    * Send mail to user for reset password.
    */
    public function actionSendPassword()
    {
        $user = new User;
        $user->scenario = 'password-reset';
        if (isset($_POST['User'])) {
            $user->attributes = $_POST['User'];
            if ($user->validate()) {
                $user = User::model()->findByAttributes(array('email' => $user->email));
                $password = $user->randString(8);
                $user->password_sha256 = CPasswordHelper::hashPassword($password);
                $user->save(false);
                $template = EmailTemplate::model()->findByAttributes(array('type'=>'forgot_password'));
                $to = $user->email;
                $from = Yii::app()->params['adminEmail'];
                $msg = $template->template;
                $msg = str_replace('{full_name}',$user->full_name,$msg);
                $msg = str_replace('{temp_password}',$password,$msg);
                $sub = $template->subject;
                if($user->sendMail($to,$from,$msg,$sub)) {
                }
                echo CJSON::encode(array(
                   'status' => 'success',
                   'message'=>'Password has been reset.Please check your email.'
               ));
           } else {
               $error = CActiveForm::validate($user);
               if ($error != '[]')
                   echo $error;
               Yii::app()->end();
           }
        }
    }
    
    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return User the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) 
    {
        $model = User::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param User $model the model to be validated
     */
    protected function performAjaxValidation($model) 
    {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'user-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
