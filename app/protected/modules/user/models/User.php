<?php

/**
 * This is the model class for table "{{user}}".
 *
 * The followings are the available columns in table '{{user}}':
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $full_name
 * @property string $email
 * @property string $mobile
 * @property string $house_unit_number
 * @property string $street
 * @property string $suburb
 * @property string $state
 * @property string $postcode
 * @property string $country
 * @property string $username
 * @property string $password_sha256
 * @property string $registration_token
 * @property string $avatar
 * @property integer $is_registered
 * @property integer $is_paid
 * @property integer $is_test
 * @property integer $membership_id
 * @property integer $profile_id
 * @property integer $current_salary
 * @property string $geo_territory
 * @property string $ipv4address
 * @property string $first_joined
 * @property string $last_seen
 * @property string $last_valdiated
 *
 * The followings are the available model relations:
 * @property HrShortlist[] $hrShortlists
 * @property HrTeam[] $hrTeams
 * @property Invite[] $invites
 * @property Org[] $orgs
 * @property Org[] $orgs1
 * @property Profile[] $profiles
 * @property Membership $membership
 * @property Profile $profile
 * @property UserRole[] $userRoles
 * @property UserSkill[] $userSkills
 * @property View[] $views
 * @property Vouch[] $vouches
 * @property Vouch[] $vouches1
 */
class User extends CActiveRecord
{
	public $oldpassword;
        public $newpassword;
        public $password2;
        public $message;
        /**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{user}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
                        array('email', 'required','on'=>'password-reset'),
			array('full_name,password_sha256, email', 'required','on'=>'register'),
                        array('first_name,last_name, email, mobile', 'required','on'=>'create,update'),
                        array('email, mobile, webpage', 'required','on'=>'contact,contact-update'),
                        array('avatar', 'file','types'=>'jpg, gif, png', 'allowEmpty'=>true, 'on'=>'create,update'),
                        array('password_sha256, email', 'required','on'=>'login'),
                        array('oldpassword, newpassword,password2', 'required', 'on' => 'changepassword'),
                        array('password2', 'compare', 'compareAttribute' => 'newpassword', 'on' => 'changepassword'),
                        array('oldpassword', 'checkpassword', 'on' => 'changepassword'),
                        array('full_name,message, email', 'required','on'=>'sendmail'),
			array('is_registered, is_paid, is_test, membership_id, profile_id, current_salary', 'numerical', 'integerOnly'=>true),
			array('first_name, last_name, full_name, email, mobile, house_unit_number, street, suburb, state, postcode, country, username, registration_token, avatar', 'length', 'max'=>255),
			array('geo_territory', 'length', 'max'=>32),
			array('ipv4address', 'length', 'max'=>16),
                        array('email', 'email'),
                        array('email', 'haveMail','on'=>'password-reset'),
                        array('email', 'unique','on'=>'register,update,contact'),
                        array('webpage', 'url', 'defaultScheme' => 'http'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, first_name, last_name, full_name, email, mobile, house_unit_number, street, suburb, state, postcode, country, username, password_sha256, registration_token, avatar, is_registered, is_paid, is_test, membership_id, profile_id, current_salary, geo_territory, ipv4address, first_joined, last_seen, last_valdiated, webpage', 'safe', 'on'=>'search,contact,contact-update,contact'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'hrShortlists' => array(self::HAS_MANY, 'HrShortlist', 'user_id'),
			'hrTeams' => array(self::HAS_MANY, 'HrTeam', 'user_id'),
			'invites' => array(self::HAS_MANY, 'Invite', 'user_id'),
			'orgs' => array(self::HAS_MANY, 'Org', 'billing_user_id'),
			'orgs1' => array(self::HAS_MANY, 'Org', 'admin_user_id'),
			'profiles' => array(self::HAS_MANY, 'Profile', 'user_id'),
			'membership' => array(self::BELONGS_TO, 'Membership', 'membership_id'),
			'profile' => array(self::BELONGS_TO, 'Profile', 'profile_id'),
			'userRoles' => array(self::HAS_MANY, 'UserRole', 'user_id'),
			'userSkills' => array(self::HAS_MANY, 'UserSkill', 'user_id'),
			'views' => array(self::HAS_MANY, 'View', 'user_id'),
			'vouches' => array(self::HAS_MANY, 'Vouch', 'from_user_id'),
			'vouches1' => array(self::HAS_MANY, 'Vouch', 'to_user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'first_name' => 'First name',
			'last_name' => 'Last name',
			'full_name' => 'Your name',
			'email' => 'Email',
			'mobile' => 'Mobile',
			'house_unit_number' => 'House unit number',
			'street' => 'Street',
			'suburb' => 'Suburb',
			'state' => 'State',
			'postcode' => 'Postcode',
			'country' => 'Country',
			'username' => 'Username',
			'password_sha256' => 'Password',
			'registration_token' => 'Registration Token',
			'avatar' => 'Avatar',
			'is_registered' => 'Is Registered',
			'is_paid' => 'Is Paid',
			'is_test' => 'Is Test',
			'membership_id' => 'Membership',
			'profile_id' => 'Profile',
			'current_salary' => 'Current Salary',
			'geo_territory' => 'Geo Territory',
			'ipv4address' => 'Ipv4address',
			'first_joined' => 'First Joined',
			'last_seen' => 'Last Seen',
			'last_valdiated' => 'Last Valdiated',
                        'password2' => 'Confirm Password',
                        'oldpassword' => 'Current Password',
                        'newpassword' => 'New Password',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('full_name',$this->full_name,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('mobile',$this->mobile,true);
		$criteria->compare('house_unit_number',$this->house_unit_number,true);
		$criteria->compare('street',$this->street,true);
		$criteria->compare('suburb',$this->suburb,true);
		$criteria->compare('state',$this->state,true);
		$criteria->compare('postcode',$this->postcode,true);
		$criteria->compare('country',$this->country,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password_sha256',$this->password_sha256,true);
		$criteria->compare('registration_token',$this->registration_token,true);
		$criteria->compare('avatar',$this->avatar,true);
		$criteria->compare('is_registered',$this->is_registered);
		$criteria->compare('is_paid',$this->is_paid);
		$criteria->compare('is_test',$this->is_test);
		$criteria->compare('membership_id',$this->membership_id);
		$criteria->compare('profile_id',$this->profile_id);
		$criteria->compare('current_salary',$this->current_salary);
		$criteria->compare('geo_territory',$this->geo_territory,true);
		$criteria->compare('ipv4address',$this->ipv4address,true);
		$criteria->compare('first_joined',$this->first_joined,true);
		$criteria->compare('last_seen',$this->last_seen,true);
		$criteria->compare('last_valdiated',$this->last_valdiated,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        /**
	 * returns a random string from array
	 */ 
        public function randString($length) 
        {
            $str = '';
            $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
            $size = strlen($chars);
            for ($i = 0; $i < $length; $i++) {
                $str .= $chars[rand(0, $size - 1)];
            }
            
            return $str;
        }
        
        /**
	 * Send mail with given attributes
	 */
        public function sendMail($to, $from, $msg, $sub,$path=null,$from_name=null)
        {
            $mailer = Yii::createComponent('application.extensions.mailer.EMailer');
            $mailer->IsSMTP();
            $mailer->IsHTML(true);
            $mailer->From = $from;
            if(isset($from)) {
                $mailer->FromName = $from_name;
            } else {
                $mailer->FromName = "Certific8.com"; 
            }
            $mailer->AddAddress($to);
            $mailer->Subject = $sub;
            $mailer->Body = $msg;
            $mailer->AddAttachment($path, $name = "", $encoding = "base64",$type = "application/octet-stream");
            if ($mailer->Send()) {
                return true;
                exit();
            } else {
                return false;
                exit();
            }
        }
        
        /*
         * Check current password.
         */
        public function checkpassword($attribute, $params)
        {
            $user = User::model()->findByPk(Yii::app()->user->id);
            if ($this->oldpassword != '') {
                if (!CPasswordHelper::verifyPassword($this->oldpassword, $user->password_sha256)) {
                    $this->addError($attribute, 'Invalid old password');
                }
            }
        }
        
        /*
        * Return avatar of user.
        */
        public function getAvatar()
        {
           $path = Yii::getPathOfAlias('webroot'). '/uploads/avatar/' . $this->id.'/profile/'.$this->avatar;
            if(file_exists($path)) {
                $path = Yii::app()->baseUrl. '/uploads/avatar/' . $this->id.'/profile/'.$this->avatar;
            } else {
                $path = Yii::app()->theme->baseUrl."/images/photos/profile.png";
            }
            
            return $path;
        }
        
        /*
         * Check current password.
         */
        public function haveMail($attribute, $params)
        {
            if (!$this->getError('email')) {
                $user = User::model()->findByAttributes(array('email' => $this->email));
                if (!$user) {
                    $this->addError($attribute, 'There is no password set for this email address. Please register with this email address.');
                }
            }
        }
}       
