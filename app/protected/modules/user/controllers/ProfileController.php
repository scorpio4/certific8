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
			//'postOnly + delete', // we only allow deletion via POST request
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
				'actions'=>array('index',
                                                 'view',
                                                 'setMenu',
                                                 'saveContact',
                                                 'saveProfile',
                                                 'saveJob',
                                                 'saveSkill',
                                                 'saveEditable',
                                                 'saveSocial',
                                                 'editData',
                                                 'deleteData',
                                                 'changeOrder',
                                                 'editSetting',
                                                 'saveSetting',
                                                 'profileCopy',
                                                 'delete',
                                                 'create',
                                                 'update',
                                                 'searchSkill',
                                                 'saveTemplate',
                                                 //'vcard',
                                                 'contact',
                                                 'downloadVcf',
                                                 'shareProfile',
                                                 'getTwitterUrl'
                                    ),
				'roles'=>array('members'),
			),
                        array('allow', 
                            'actions' => array('vcard'),
                            'users' => array('*'),
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
	public function actionView($id = 0)
	{
            $socialProfile = new SocialProfile;
            $socialProfile->scenario = 'save';
            $profileJob = new ProfileJob;
            $profileJob->scenario = 'save';
            $userSkill = new UserSkill;
            $userSkill->scenario = 'save';
            if ($id == 0) {
                $this->redirect(array('/profile'));
            } else {
                $id = substr($id, 3, -3);
                $profile = $this->loadModel($id);
                if (!$profile) {
                    $this->redirect(array('/profile'));
                }
                $user = User::model()->findByPk($profile->user_id);
            }

            if (isset($_POST['Profile'])) {
                $profile->attributes = $_POST['Profile'];
            }
            $type = 'view';
            $this->render('update', compact('profile', 'user', 'socialProfile', 'profileJob', 'userSkill','type'));
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
             $type = '';
             if($id == 0) {
                $profile = new Profile;
                $user = User::model()->findByPk(Yii::app()->user->id);
                $profileDefault = Profile::model()->findByPk($user->profile_id);
                if($profileDefault) {
                    $profile->attributes = $profileDefault->attributes;
                    $profile->isNewRecord = true;
                }
                $profile->scenario = 'save';
                $type = 'view';
            } else {
                $id = substr($id, 3, -3);
                $profile = $this->loadModel($id);
                if(!$profile) {
                    $this->redirect(array('/profile'));
                }
                $user = User::model()->findByPk($profile->user_id);
            }
            $user->scenario = 'contact';
            if (isset($_POST['Profile'])) {
                $profile->attributes = $_POST['Profile'];
            }
            $this->render('update',compact('profile','user','socialProfile','profileJob','userSkill','type'));
        }

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete()
	{
            if(isset($_POST['id'])) {
                $id = $_POST['id'];
                $id = substr($id, 3, -3);
                if($this->loadModel($id)->delete()) {
                    echo CJSON::encode(array(
                        'status' => 'success',
                        'message' => 'Profile has been deleted successfully.',
                    ));
                    Yii::app()->user->setFlash('success','Profile has been deleted successfully.');
                }
            }

            // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
            if (!isset($_POST['ajax'])) {
                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
            }
        }

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
                $profile = new Profile;
                $contact = new ContactForm;
                $id = Yii::app()->user->id;
                $profile= new Profile('search');
		$profile->unsetAttributes();  
		if(isset($_GET['Profile'])) {
                    $profile->attributes=$_GET['Profile'];
                }
		$this->render('profile-list',  compact('profile','id','contact'));
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
                   $user = User::model()->findByPk(Yii::app()->user->id);
                   $profileDefault = Profile::model()->findByPk($user->profile_id);
                    if($profileDefault) {
                      $this->copyAllData($profileDefault->id,$profile->id); 
                    }
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
                       $order = 1;
                       $profile = SocialProfile::model()->findByAttributes(array('profile_id'=>$_POST['SocialProfile']['profile_id'],'user_id'=>Yii::app()->user->id),array('order'=>'t.order desc'));
                       if($profile) {
                           $order = $profile->order + 1;
                       }
                       $profile = new SocialProfile;
                       $profile->scenario = 'save';
                       $profile->order = $order;
                   } else {
                       $message = 'Social profile been updated successfully.';
                       $profile->scenario = 'save';
                   }
               } else {
                   $order = 1;
                    $profOrd = SocialProfile::model()->findByAttributes(array('profile_id'=>$_POST['SocialProfile']['profile_id'],'user_id'=>Yii::app()->user->id),array('order'=>'t.order desc'));
                    if($profOrd) {
                        $order = $profOrd->order + 1;
                        $profile->order = $order;
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

                if (isset($_POST['ProfileJob']['id']) && $_POST['ProfileJob']['id'] > 0) {
                    $profile = ProfileJob::model()->findByPk($_POST['ProfileJob']['id']);
                    if (!$profile) {
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
                    $org = Org::model()->findByAttributes(array('legal_name' => $profile->org_id));
                    if ($org) {
                        $profile->org_id = $org->id;
                    } else {
                        $org = new Org;
                        $org->legal_name = $profile->org_id;
                        $org->save(false);
                        $profile->org_id = $org->id;
                    }
                    $date = '01';
                    $profile->start_date = date('Y-d-m', strtotime($date . '/' . $profile->start_date));
                    if ($_POST['ProfileJob']['isCurrent'] == 1) {
                        $profile->end_date = NULL;
                    } else {
                        $profile->end_date = date('Y-d-m', strtotime($date . '/' . $profile->end_date));
                    }
                    $profile->save(false);
                    echo CJSON::encode(array(
                        'status' => 'success',
                        'message' => $message,
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
        * Save user's skill details
        */
        public function actionSaveSkill() 
        {
           $skill = new UserSkill;
           $skill->scenario = 'save';
           $message = 'Skill been created successfully.';
           if(isset($_POST['profile_id'])) {
               $profId = $_POST['profile_id'];
           } else {
               $profId = 0;
           }
           // if it is ajax validation request
           if (isset($_POST['ajax']) && $_POST['ajax'] === 'skill-form') {
               echo CActiveForm::validate($skill);
               Yii::app()->end();
           }
           if (isset($_POST['UserSkill'])) {
               
               if(isset($_POST['UserSkill']['id']) && $_POST['UserSkill']['id']>0) {
                   $skill = UserSkill::model()->findByPk($_POST['UserSkill']['id']);
                   if(!$skill) {
                       $skill = new UserSkill;
                       $skill->scenario = 'save';
                   } else {
                       $message = 'Skill been updated successfully.';
                       $skill->scenario = 'save';
                   }
               }
               $skill->attributes = $_POST['UserSkill'];
               $skill->user_id = Yii::app()->user->id;
               if ($skill->validate()) {
                   $date = '01';
                   $skill->award_date = date('Y-m-d',strtotime($date.'/'.$skill->award_date));
                   $skill->expiry_date = date('Y-m-d',strtotime($date.'/'.$skill->expiry_date));
                   $skill->save(false);
                   $skill->id = Yii::app()->db->getLastInsertID();
                   $profSkill = ProfileSkill::model()->findByAttributes(array('profile_id'=>$profId,'user_skill_id'=>$skill->id));
                   if(!$profSkill && $skill->id) {
                       $order = 1;
                       $profSkill = ProfileSkill::model()->findByAttributes(array('profile_id'=>$profId),array('order'=>'t.order desc'));
                       if($profSkill) {
                           $order = $profSkill->order + 1;
                       }
                       $profSkill = new ProfileSkill;
                       $profSkill->profile_id = $profId;
                       $profSkill->order = $order;
                       $profSkill->user_skill_id = $skill->id;
                       $profSkill->save();
                   }
                   echo CJSON::encode(array(
                       'status' => 'success',
                       'message'=>$message,
                   ));
               } else {
                   $error = CActiveForm::validate($skill);
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
                   if($profileJob->end_date == NULL) {
                       $data['ProfileJob_isCurrent'] = 1;
                   } else {
                       $endDate = date('m/Y',strtotime($profileJob->end_date));
                       $data['ProfileJob_end_date'] = $endDate;
                   }
                   $data['ProfileJob_id'] = $id;
               }
           } elseif($type == 'skill') {
               $skill = UserSkill::model()->findByPk($id);
               if($skill) {
                   $data['UserSkill_skill_id'] = $skill->skill_id;
                   $data['UserSkill_trainer_id'] = $skill->trainer_id;
                   $data['UserSkill_award_number'] = $skill->award_number;
                   $data['UserSkill_award_rank'] = $skill->award_rank;
                   $data['UserSkill_award_date'] = date('d/m',strtotime($skill->award_date));
                   $data['UserSkill_expiry_date'] = date('d/m',strtotime($skill->expiry_date));
                   $data['UserSkill_id'] = $id;
                   $data['title_data'] = array(
                                    array('id'=>$skill->skill_id,'title'=>$skill->skill->title)
                                );
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
           } elseif($type == 'skill') {
               ProfileSkill::model()->deleteByPk($id);
               echo 'Profile skill been deleted successfully.';
           }
        }
        
        /*
         * Change listing order of profile.
         */
        public function actionChangeOrder() 
        {
            $list = $_POST['order'];
            $type = $_POST['type'];
            $listarr = explode(',', $list);
            if($type == 'skill') {
                foreach ($listarr as $order=>$list) {
                    $data = explode(':',$list);
                    if(isset($data[1])) {
                        $order = $order+1;
                        $profileSkill = ProfileSkill::model()->findByPk($data[1]);
                        if($profileSkill) {
                            $profileSkill->order = $order;
                            $profileSkill->save(false);
                        }
                    }
                }
            } elseif($type == 'social') {
                foreach ($listarr as $order=>$list) {
                    $data = explode(':',$list);
                    if(isset($data[1])) {
                        $order = $order+1;
                        $profileSkill = SocialProfile::model()->findByPk($data[1]);
                        if($profileSkill) {
                            $profileSkill->order = $order;
                            $profileSkill->save(false);
                        }
                    }
                }
            }
            
        }
        
        /*
         * Display profile setting form.
         */
        public function actionEditSetting() 
        {
            $id = $_POST['id'];
            $profile = Profile::model()->findByPk($id);
            if($profile) {
                $form = $this->renderPartial('_setting-form',compact('profile'),true);
                echo CJSON::encode(compact('form'));
            }
        }
        
        /*
         * Save profile setting form.
         */
        public function actionSaveSetting() 
        {
            $id = $_POST['id'];
           
            $profile = Profile::model()->findByPk($id);
            $profile->attributes = $_POST['Profile'];
            if($profile->save()) {
                echo CJSON::encode(array('status'=>'success','message'=>'Profile setting saved successfully'));
            }
        }
        
        /*
         * Copy the existing profile.
         */
        public function actionProfileCopy() 
        {
            if(!isset($_GET['id'])) {
                $this->redirect(array('/profile'));
            }
            $id = $_GET['id'];
            $id = substr($id, 3, -3);
            $profile = Profile::model()->findByPk($id);
            if($profile) {
                $newProfile = new Profile;
                $newProfile->scenario = 'save';
                $newProfile->attributes = $profile->attributes;
                $newProfile->id = null;
                $newProfile->isNewRecord = true;
                $newProfile->save(false);
                $this->copyAllData($id,$newProfile->id);
                Yii::app()->user->setFlash('success','Your profile has been successfully copied.');
            } 
            $this->redirect(array('/listprofile'));
        }
        /*
        * Search skill based on title or keywords.
        */
        public function actionSearchSkill() 
        {
            $title = $_GET['title'];
            $skillArr = array();
            $resultArr = array();
            $criteria = new CDbCriteria;
            $criteria->select = 't.id,t.title';
            $criteria->order = 't.title';
            $criteria->compare('t.title',$title,true,'OR');
            $criteria->compare('t.keywords',$title,true,'OR');
            $criteria->group = 't.id';
            $skills = Skill::model()->findAll($criteria);
            foreach ($skills as $skill) {
                $skillArr[] = array('id'=>$skill->id,'title'=>$skill->title);
            }
            $resultArr['results'] = $skillArr;
            echo CJSON::encode($resultArr);
            
        }
        
        /*
         * Save profile template
         */
        public function actionSaveTemplate() 
        {
            $profile = Profile::model()->findByPk($_POST['Profile']['id']);
            $profile->scenario = 'template';
            $message = 'Profile been updated successfully.';
            // if it is ajax validation request
            if (isset($_POST['ajax']) && $_POST['ajax'] === 'template-form') {
                echo CActiveForm::validate($profile);
                Yii::app()->end();
            }

            if (isset($_POST['Profile'])) {

                $profile->attributes = $_POST['Profile'];
                if ($profile->save()) {
                    echo CJSON::encode(array(
                        'status' => 'success',
                        'message' => $message,
                    ));
                } else {
                    $error = CActiveForm::validate($profile);
                    if ($error != '[]')
                        echo $error;
                    Yii::app()->end();
                }
            }
        }
        
        /*
         * View profile template.
         */
        public function actionVcard() 
        {
            $this->layout = 'vcard';
            if(isset($_GET['vid']) && isset($_GET['pid'])) {
                $id = $_GET['pid'];
                $profile = Profile::model()->findByPk($id);
                if($profile) {
                    $vcardId = $_GET['vid'];
                    $user = User::model()->findByPk($profile->user_id);
                    $path = Yii::app()->baseUrl . '/vcard/'.$vcardId;
                    spl_autoload_unregister(array('YiiBase','autoload'));
                    Yii::import('application.vendor.mustache.*');
                    require_once('src/Mustache/Autoloader.php');
                    Mustache_Autoloader::register();
                    spl_autoload_register(array('YiiBase', 'autoload'));
                    try {
                        $path = Yii::getPathOfAlias('webroot') . '/vcard/'.$_GET['vid'];
                        $options =  array('extension' => '.mustache');
                        $mustache = new Mustache_Engine(array(
                            'loader'          => new Mustache_Loader_FilesystemLoader($path,$options),
                            //'partials_loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__).'/views/partials'),
                        ));
                        $mustache->addHelper('helper',array(
                            'titleMinimize' => function($value) { 
                                    if(strlen($value)>15) {
                                        $value = substr($value, 0,15).'..';
                                    }
                                    return ((string) $value); 
                            },
                            'detailMinimize' => function($value) { 
                                    if(strlen($value)>40) {
                                        $value = substr($value, 0,40).'..';
                                    }
                                    return ((string) $value); 
                            },
                            'jobMinimize' => function($value) { 
                                    if(strlen($value)>200) {
                                        $value = substr($value, 0,200).'..';
                                    }
                                    return ((string) $value); 
                            },
                        ));
                            
                        if($vcardId == 2) {
                            $isLabel = false;
                        } else {
                            $isLabel = true;
                        }
                        $profileId = $profile->id;
                        $userId = $profile->user_id;
                        $skills = ProfileSkill::model()->search($profileId)->getData();
                        $socialProfiles = SocialProfile::model()->search($userId,$profileId)->getData();
                        $jobs = ProfileJob::model()->search($profileId)->getData();
                        $path = Yii::app()->baseUrl. '/vcard/'.$_GET['vid'].'/';
                        $this->render('vcard',compact('profile','user','path','vcardId','mustache','profileId','skills','socialProfiles','isLabel','jobs'));
                        Yii::app()->end();
                    } catch (Exception $e) {
                        
                    }
                }
            }
            $this->redirect(array('/listprofile'));
        }
        
        /*
         * Send a mail to user.
         */
        public function actionContact() 
        {
           $model = new User;
           $model->scenario = 'sendmail';
           // if it is ajax validation request
           if (isset($_POST['ajax']) && $_POST['ajax'] === 'contactform') {
               echo CActiveForm::validate($model);
               Yii::app()->end();
           }
           if (isset($_POST['User'])) {
               $model->attributes = $_POST['User'];
               if ($model->validate()) {
                    $user = User::model()->findByPk(Yii::app()->user->id);
                    $to = $user->email;
                    $from = Yii::app()->params['adminEmail'];
                    $sub = 'Certific8 - Contact Enquiry';
                    $msg = 'Name: '.$model->full_name.'<br><br>
                            E-Mail: '.$model->email.'<br><br>
                            Message: '.$model->message.'<br><br>
                            ';
                    echo CJSON::encode(array(
                       'status' => 'success',
                       'message'=>'Email has been sent successfully.'
                    ));
                    
                    $model->sendMail($to, $from, $msg, $sub);
               } else {
                   $error = CActiveForm::validate($model);
                   if ($error != '[]')
                       echo $error;
                   Yii::app()->end();
               }
           }
        }
        
        /*
         * Download user vcf
         */
        public function actionDownloadVcf()
        {
            if(isset($_GET['id'])) {
                $profile = Profile::model()->findByPk($_GET['id']);
                if($profile) {
                    $user = User::model()->findByPk($profile->user_id);
                    $card = "BEGIN:VCARD\r\n";
                    $card .= "VERSION:3.0\r\n";
                    $card .= "PRODID:-//class_vcard from TroyWolf.com//NONSGML Version 1//EN\r\n";
                    $card .= "REV:".date('Y-m-d H:i:s')."\r\n";
                    $card .= "FN:".$profile->full_name."\r\n";
                    $card .= "N:"
                      .$user->last_name.";"
                      .$user->first_name.";"
                      ."\r\n";
                    $jobs = ProfileJob::model()->search($profile->id)->getData();
                    $title = array();
                    $org = array();
                    foreach ($jobs as $job) {
                        $title[] = $job->job_title.';';
                        $org[] = $job->org->legal_name;
                    }
                    if(count($title)>0) {
                        $card .= "TITLE:".implode(';',$title)."\r\n";
                    }
                    if(count($org)>0) {
                        $card .= "ORG:".implode(';',$org)."\r\n";
                    }
                    $card .= "\r\n";
                    $card .= "ADR;TYPE=home:"
                        .''.";"
                        .''.";"
                        .$user->street.";"
                        .$user->suburb.";"
                        .$user->state.";"
                        .$user->postcode.";"
                        .$user->country."\r\n";

                    $card .= "EMAIL;TYPE=internet,pref:".$user->email."\r\n"; 
                    $card .= "TEL;TYPE=cell,voice:".$user->mobile."\r\n"; 
                    $card .= "URL;TYPE=work:".$user->webpage."\r\n"; 
                    $card .= "END:VCARD\r\n";

                    header("Content-type: text/directory");
                    header("Content-Disposition: attachment; filename=".$profile->full_name.".vcf");
                    header("Pragma: public");
                    echo $card;
                    exit;
                }
            }
            $this->redirect(array('/listprofile'));
        }
        
        /*
         * Share profile with others. 
         */
        public function actionShareProfile()
        {
            if (isset($_POST['ContactForm'],$_POST['profileId'])) {
               $model = new ContactForm;
               $profileId = $_POST['profileId'];
               $profileId = substr($profileId, 3, -3);
               $model->attributes = $_POST['ContactForm'];
               if ($model->validate()) {
                    $profile = Profile::model()->findByPk($profileId);
                    if($profile) {
                        $url = Yii::app()->createAbsoluteUrl('/vcard')."/".$profile->template_id."/profile/".$profile->id;
                        $url = $profile->getBitlyUrl($url);
                        $to = $model->email;
                        $from = $profile->user->email;
                        $sub = $model->subject;
                        $msg = $model->body;
                        $msg.= '<br><br>
                               URL: '.$url.' 
                               ';
                        echo CJSON::encode(array(
                           'status' => 'success',
                           'message'=>'Email has been sent successfully.'
                        ));
                        $profile->user->sendMail($to, $from, $msg, $sub);
                    }
               } else {
                   $error = CActiveForm::validate($model);
                   if ($error != '[]')
                       echo $error;
                   Yii::app()->end();
               }
           }
        }
        
        /*
         * Get url to share profile on twitter. 
         */
        public function actionGetTwitterUrl()
        {
            if(isset($_POST['id'])) {
                $id = $_POST['id'];
                $id = substr($id, 3,-3);
                $profile = Profile::model()->findByPk($id);
                if($profile) {
                    $url = Yii::app()->createAbsoluteUrl('/vcard')."/".$profile->template_id."/profile/".$profile->id;
                    $url = $profile->getBitlyUrl($url);
                    $name = $profile->user->first_name.' '. $profile->user->last_name;
                    $url = 'http://twitter.com/intent/tweet?text='.$profile->user->first_name.' '. $profile->user->last_name.' profile @ Certific8 -  &url='.$url;
                    echo CJSON::encode(array('url'=>$url));
                }
            }
        }
        
        /*
         * Copy all the data with an existing profile.
        */
        public function copyAllData($id,$newProfileId)
        {
            $profileJobs = ProfileJob::model()->findAllByAttributes(array('profile_id'=>$id));
            foreach ($profileJobs as $profileJob) {
                $newProfJob = new ProfileJob;
                $newProfJob->scenario = 'save';
                $newProfJob->attributes = $profileJob->attributes;
                $newProfJob->profile_id = $newProfileId;
                $newProfJob->id = '';
                $newProfJob->isNewRecord = true;
                $newProfJob->save(false);
            }

            $profileSkills = ProfileSkill::model()->findAllByAttributes(array('profile_id'=>$id));
            foreach ($profileSkills as $profileSkill) {
                $newProfSkill = new ProfileSkill;
                $newProfSkill->scenario = 'save';
                $newProfSkill->attributes = $profileSkill->attributes;
                $newProfSkill->profile_id = $newProfileId;
                $newProfSkill->id = '';
                $newProfSkill->isNewRecord = true;
                $newProfSkill->save(false);
            }

            $socilaProfiles = SocialProfile::model()->findAllByAttributes(array('profile_id'=>$id));
            foreach ($socilaProfiles as $socilaProfile) {
                $newsocilaProf = new SocialProfile;
                $newsocilaProf->scenario = 'save';
                $newsocilaProf->attributes = $socilaProfile->attributes;
                $newsocilaProf->profile_id = $newProfileId;
                $newsocilaProf->id = '';
                $newsocilaProf->isNewRecord = true;
                $newsocilaProf->save(false);
            }
       }
        
}    
