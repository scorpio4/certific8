<?php

class ProfileController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

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
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','setMenu','saveContact','saveProfile','saveJob','saveEditable','saveSocial','editData','deleteData'),
				'roles'=>array('members'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'roles'=>array('members'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('delete'),
				'roles'=>array('members'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Profile;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Profile']))
		{
			$model->attributes=$_POST['Profile'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id = 0)
	{
             $socialProfile = new SocialProfile;
             $socialProfile->scenario = 'save';
             $profileJob = new ProfileJob;
             $profileJob->scenario = 'save';
             $userSkill = new UserSkill;
             $userSkill->scenario = 'save';
             if($id == 0) {
                $profile = new Profile;
                $profile->scenario = 'save';
                $user = User::model()->findByPk(Yii::app()->user->id);
            } else {
                $id = substr($id, 3, -3);
                $profile = $this->loadModel($id);
                if(!$profile) {
                    $this->redirect(array('/profile'));
                }
                $user = User::model()->findByPk($profile->user_id);
            }
            
            if (isset($_POST['Profile'])) {
                $profile->attributes = $_POST['Profile'];
            }

            $this->render('update',compact('profile','user','socialProfile','profileJob','userSkill'));
        }

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
                $profile = new Profile;
                $id = Yii::app()->user->id;
                $profile= new Profile('search');
		$profile->unsetAttributes();  
		if(isset($_GET['Profile'])) {
                    $profile->attributes=$_GET['Profile'];
                }
		$this->render('profile-list',  compact('profile','id'));
        }        
	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Profile('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Profile']))
			$model->attributes=$_GET['Profile'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Profile the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Profile::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Profile $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='profile-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
        
        /**
	 * Set cookie for folding menu.
	 */
	public function actionSetMenu()
	{
            $value = 0;
            if(isset(Yii::app()->request->cookies['menu_fold'])) {
                $value = Yii::app()->request->cookies['menu_fold']->value;
                if($value == 0) {
                    $value = 1;
                } else {
                    $value = 0;
                }
            } 
            Yii::app()->request->cookies['menu_fold'] = new CHttpCookie('menu_fold', $value);
            echo $value;
	}
        
        /**
        * Save user contact details
        */
       public function actionSaveContact() 
       {
           $model = new User;
           $model->scenario = 'contact';
           // if it is ajax validation request
           if (isset($_POST['ajax']) && $_POST['ajax'] === 'contact-form') {
               echo CActiveForm::validate($model);
               Yii::app()->end();
           }
           if (isset($_POST['User'])) {
               $user = new User;
               $user->scenario = 'contact';
               $model->attributes = $_POST['User'];
               if($model->id >0 ) {
                  $user = User::model()->findByPk($model->id);
                  if($user) {
                      if($user->email == $model->email) {
                          $model->scenario = 'contact-update';
                          $user->scenario = 'contact-update';
                      }
                  }
               } 
               $user->email = $model->email;
               $user->webpage = $model->webpage;
               $user->mobile = $model->mobile;
               if ($user->save()) {
                   echo CJSON::encode(array(
                       'status' => 'success',
                       'message'=>'User has been updated successfully.'
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
        * Save user's profile details
        */
       public function actionSaveProfile() 
       {
           $profile = new Profile;
           $profile->scenario = 'save';
           // if it is ajax validation request
           if (isset($_POST['ajax']) && $_POST['ajax'] === 'profile-form') {
               echo CActiveForm::validate($profile);
               Yii::app()->end();
           }
           if (isset($_POST['Profile'])) {
               
               $profile->attributes = $_POST['Profile'];
               $profile->user_id = Yii::app()->user->id;
               if ($profile->save()) {
                   $id = rand(100,999).$profile->id.rand(100,999);
                   echo CJSON::encode(array(
                       'status' => 'success',
                       'message'=>'Profile been created successfully.',
                       'profid'=>$id
                   ));
               } else {
                   $error = CActiveForm::validate($profile);
                   if ($error != '[]')
                       echo $error;
                   Yii::app()->end();
               }
           }
       }
       /*Save user basic details*/
       public function actionSaveEditable() 
       {
           if (isset($_POST['name'])) {
                $user = User::model()->findByPk(Yii::app()->user->id);
                $name = $_POST['name'];
                if($user) {
                    $profile = Profile::model()->findByPk($_POST['pk']);
                    if ($name == 'username') {
                        if (isset($_POST['value']['firstName'])) {
                            $user->first_name = $_POST['value']['firstName'];
                            $user->last_name = $_POST['value']['lastName'];
                        }
                    } elseif ($name == 'designation' && $profile) {
                        $profile->short_title = $_POST['value'];
                        $profile->save();
                    } elseif ($name == 'biodata' && $profile) {
                        $profile->short_bio = $_POST['value'];
                        $profile->save();
                    }
                    $user->save();
                }
            }
        }
        
        /**
        * Save user's social details
        */
       public function actionSaveSocial() 
       {
           $profile = new SocialProfile;
           $profile->scenario = 'save';
           $message = 'Social profile been created successfully.';
           // if it is ajax validation request
           if (isset($_POST['ajax']) && $_POST['ajax'] === 'social-form') {
               echo CActiveForm::validate($profile);
               Yii::app()->end();
           }
           if (isset($_POST['SocialProfile'])) {
               
               if(isset($_POST['SocialProfile']['id']) && $_POST['SocialProfile']['id']>0) {
                   $profile = SocialProfile::model()->findByPk($_POST['SocialProfile']['id']);
                   if(!$profile) {
                       $profile = new SocialProfile;
                       $profile->scenario = 'save';
                   } else {
                       $message = 'Social profile been updated successfully.';
                       $profile->scenario = 'save';
                   }
               }
               $profile->attributes = $_POST['SocialProfile'];
               $profile->user_id = Yii::app()->user->id;
               if ($profile->save()) {
                   echo CJSON::encode(array(
                       'status' => 'success',
                       'message'=>$message,
                   ));
               } else {
                   $error = CActiveForm::validate($profile);
                   if ($error != '[]')
                       echo $error;
                   Yii::app()->end();
               }
           }
       }
       
       /**
        * Save user's profile job
        */
       public function actionSaveJob() 
       {
           $profile = new ProfileJob;
           $profile->scenario = 'save';
           $message = 'Job been created successfully.';
           // if it is ajax validation request
           if (isset($_POST['ajax']) && $_POST['ajax'] === 'jobs-form') {
               echo CActiveForm::validate($profile);
               Yii::app()->end();
           }
            
           if (isset($_POST['ProfileJob'])) {
               
               if(isset($_POST['ProfileJob']['id']) && $_POST['ProfileJob']['id']>0) {
                   $profile = ProfileJob::model()->findByPk($_POST['ProfileJob']['id']);
                   if(!$profile) {
                       $profile = new ProfileJob;
                       $profile->scenario = 'save';
                   } else {
                       $profile->org_id = $profile->org->legal_name;
                       $profile->scenario = 'save';
                       $message = 'Job been updated successfully.';
                   }
               }
               $profile->attributes = $_POST['ProfileJob'];
               if ($profile->validate()) {
                   $org = Org::model()->findByAttributes(array('legal_name'=>$profile->org_id));
                   if($org) {
                       $profile->org_id = $org->id;
                   } else {
                       $org = new Org;
                       $org->legal_name = $profile->org_id;
                       $org->save(false);
                       $profile->org_id = $org->id;
                   }
                   $year = date('Y');
                   $profile->start_date = date('Y-m-d',strtotime($profile->start_date.'/'.$year));
                   $profile->end_date = date('Y-m-d',strtotime($profile->end_date.'/'.$year));
                   $profile->save(false);
                   echo CJSON::encode(array(
                       'status' => 'success',
                       'message'=>$message,
                   ));
               } else {
                   $error = CActiveForm::validate($profile);
                   if ($error != '[]')
                       echo $error;
                   Yii::app()->end();
               }
           }
       }
       
       /**
        * Return user's profile data.
        */
       public function actionEditData() 
       {
           $type= $_POST['type'];
           $id = $_POST['id'];
           $data = array();
           if($type == 'social') {
               $socialProfile = SocialProfile::model()->findByPk($id);
               if($socialProfile) {
                   $data['SocialProfile_social_id'] = $socialProfile->social_id;
                   $data['SocialProfile_username'] = $socialProfile->username;
                   $data['SocialProfile_id'] = $id;
               }
           } elseif($type == 'jobs') {
               $profileJob = ProfileJob::model()->findByPk($id);
               if($profileJob) {
                   $data['ProfileJob_org_id'] = $profileJob->org->legal_name;
                   $data['ProfileJob_job_title'] = $profileJob->job_title;
                   $data['ProfileJob_comment'] = $profileJob->comment;
                   $data['ProfileJob_start_date'] = date('m/Y',strtotime($profileJob->start_date));
                   $data['ProfileJob_end_date'] = date('m/Y',strtotime($profileJob->end_date));
                   $data['ProfileJob_id'] = $id;
               }
           }
           echo CJSON::encode($data);
       }
       
       /**
        * Remove user's profile data.
        */
       public function actionDeleteData() 
       {
           $type= $_POST['type'];
           $id = $_POST['id'];
           if($type == 'social') {
               $socialProfile = SocialProfile::model()->deleteByPk($id);
               echo 'Social profile been deleted successfully.';
           } elseif($type == 'jobs') {
               ProfileJob::model()->deleteByPk($id);
               echo 'Job been deleted successfully.';
           }
       }
}   
