<?php

class SiteController extends Controller
{
    /**
     * Declares class-based actions.
     */
    public function actions()
    {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page' => array(
                'class' => 'CViewAction',
            ),
        );
    }

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex()
    {
        // renders the view file 'protected/views/site/index.php'
        // using the default layout 'protected/views/layouts/main.php'
        $this->render('index');
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError()
    {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

    /**
     * Displays the contact page
     */
    public function actionContact()
    {
        $model = new ContactForm;
        if (isset($_POST['ContactForm'])) {
            $model->attributes = $_POST['ContactForm'];
            if ($model->validate()) {
                $name = '=?UTF-8?B?' . base64_encode($model->name) . '?=';
                $subject = '=?UTF-8?B?' . base64_encode($model->subject) . '?=';
                $headers = "From: $name <{$model->email}>\r\n" .
                        "Reply-To: {$model->email}\r\n" .
                        "MIME-Version: 1.0\r\n" .
                        "Content-Type: text/plain; charset=UTF-8";

                mail(Yii::app()->params['adminEmail'], $subject, $model->body, $headers);
                Yii::app()->user->setFlash('contact', 'Thank you for contacting us. We will respond to you as soon as possible.');
                $this->refresh();
            }
        }
        $this->render('contact', array('model' => $model));
    }

    /**
     * Displays the login page
     */
    public function actionLogin()
    {
        if(!Yii::app()->user->isGuest) 
            $this->redirect(array('user/admin'));
        $model = new LoginForm;
        $this->layout = 'login';
        // if it is ajax validation request
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        // collect user input data
        if (isset($_POST['LoginForm'])) {
            $model->attributes = $_POST['LoginForm'];
            // validate user input and redirect to the previous page if valid
            if ($model->validate() && $model->login())
                $this->redirect(array('user/admin'));
        }
        // display the login form
        $this->render('login', array('model' => $model));
    }

    /**
     * Logs out the current user and redirect to homepage.
     */
    public function actionLogout()
    {
        Yii::app()->user->logout();
        $this->redirect(array('site/login'));
    }

    public function actionUserfaker()
    {
        Yii::import('application.vendor.*');
        require_once('Faker/src/autoload.php');
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 100; $i++) {
            $user = new User;
            $user->first_name = $faker->firstName;
            $user->last_name = $faker->lastName;
            $user->full_name = $faker->name;
            $user->email = $faker->email;
            $user->mobile = $faker->phoneNumber;
            $user->house_unit_number = $faker->buildingNumber;
            $user->street = $faker->streetName;
            $user->suburb = $faker->streetAddress;
            $user->state = $faker->state;
            $user->postcode = $faker->postcode;
            $user->country = $faker->country;
            $user->username = $faker->userName;
            $user->password_sha256 = $faker->sha256;
            $user->registration_token = $faker->sha1;
            $user->membership_id = 9;
            $user->geo_territory = $faker->country;
            $user->ipv4address = $faker->ipv4;
            $user->first_joined = $faker->date;
            $user->last_seen = $faker->date;
            $user->last_valdiated = $faker->date;
            $user->save(false);
        }
    }
    public function actionOrgfake()
    {
        Yii::import('application.vendor.*');
        require_once('Faker/src/autoload.php');
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 100; $i++) {
            $org = new Org;
            $org->legal_name = $faker->company;
            $org->tax_number = $faker->creditCardNumber;
            $org->billing_user_id = '5';
            $org->admin_user_id = '7';
            $org->save(false);
        }
    }
    public function actionHrfake()
    {
        Yii::import('application.vendor.*');
        require_once('Faker/src/autoload.php');
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 100; $i++) {
            $org = Org::model()->find(array('order'=>'RAND()'));
            $mem = Membership::model()->find(array('order'=>'RAND()'));
            $hr = new Hr;
            $hr->org_id = $org->id;
            $hr->membership_id = $mem->id;
            $hr->save(false);
        }
    }
    public function actionProviderfake()
    {
        Yii::import('application.vendor.*');
        require_once('Faker/src/autoload.php');
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 100; $i++) {
            $org = Org::model()->find(array('order'=>'RAND()'));
            $mem = Membership::model()->find(array('order'=>'RAND()'));
            $provider = new Provider;
            $provider->org_id = $org->id;
            $provider->membership_id = $mem->id;
            $provider->cert_website = $faker->domainName;
            $provider->cert_email = $faker->email;
            $provider->description = $faker->text(100);
            $provider->save(false);
        }
    }
    public function actionTrainerfake()
    {
        Yii::import('application.vendor.*');
        require_once('Faker/src/autoload.php');
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 100; $i++) {
            $org = Org::model()->find(array('order'=>'RAND()'));
            $mem = Membership::model()->find(array('order'=>'RAND()'));
            $hr = new Trainer;
            $hr->org_id = $org->id;
            $hr->membership_id = $mem->id;
            $hr->save(false);
        }
    }
    public function actionSkillfake()
    {
        Yii::import('application.vendor.*');
        require_once('Faker/src/autoload.php');
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 100; $i++) {
            $org = Provider::model()->find(array('order'=>'RAND()'));
            $mem = Membership::model()->find(array('order'=>'RAND()'));
            $skill = new Skill;
            $skill->title = $faker->sentence(6);
            $skill->details = $faker->text(300);
            $skill->keywords = $faker->text(100);
            $skill->webpage = $faker->domainName;
            $skill->provider_id = $org->id;
            $skill->skill_discipline_id = 1;
            $skill->save(false);
        }
    }
    public function actionProfilefake()
    {
        Yii::import('application.vendor.*');
        require_once('Faker/src/autoload.php');
        $faker = Faker\Factory::create();
        $users = User::model()->findAll();
        foreach($users as $user){
            for ($i = 0; $i < 3; $i++) {
                $hr = Hr::model()->find(array('order'=>'RAND()'));
                $mem = Membership::model()->find(array('order'=>'RAND()'));
                $profile = new Profile;
                $profile->slugname = $faker->slug;
                $profile->full_name = $faker->name;
                $profile->short_title = $faker->sentence(6);
                $profile->short_bio = $faker->text(300);
                $profile->template_id = '2';
                $profile->min_salary = 10000;
                $profile->user_id = $user->id;
                $profile->hr_id = $hr->id;
                $profile->membership_id = $mem->id;
                if($profile->save(false))
                {
                    for ($i = 0; $i < 3; $i++) {
                        $skill = Skill::model()->find(array('order'=>'RAND()'));
                        $profileSkill = new ProfileSkill;
                        $profileSkill->skill_id = $skill->id;
                        $profileSkill->profile_id = $profile->id;
                        $profileSkill->save(false);
                    }
                    for ($i = 0; $i < 3; $i++) {
                        $org = Org::model()->find(array('order'=>'RAND()'));
                        $hr = Hr::model()->find(array('order'=>'RAND()'));
                        $profileJob = new ProfileJob;
                        $profileJob->profile_id = $profile->id;
                        $profileJob->org_id = $org->id;
                        $profileJob->job_title = $faker->sentence(3);
                        $profileJob->hr_id = $hr->id;
                        $profileJob->save(false);
                    }
                }
            }
        }
    }
}
