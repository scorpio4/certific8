<?php

/**
 * This is the model class for table "{{profile}}".
 *
 * The followings are the available columns in table '{{profile}}':
 * @property integer $id
 * @property string $slugname
 * @property string $full_name
 * @property string $short_title
 * @property string $short_bio
 * @property string $avatar
 * @property integer $template_id
 * @property integer $is_active
 * @property integer $is_public
 * @property integer $can_contact
 * @property integer $show_vouches
 * @property integer $min_salary
 * @property integer $user_id
 * @property integer $hr_id
 * @property integer $membership_id
 *
 * The followings are the available model relations:
 * @property HrCandidate[] $hrCandidates
 * @property User $user
 * @property Hr $hr
 * @property Membership $membership
 * @property ProfileTemplate $template
 * @property ProfileJob[] $profileJobs
 * @property ProfileSkill[] $profileSkills
 * @property SocialProfile[] $socialProfiles
 * @property User[] $users
 * @property View[] $views
 */
class Profile extends CActiveRecord
{
    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return '{{profile}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('short_bio', 'required'),
            array('template_id, is_active, is_public, can_contact, show_vouches, min_salary, user_id, hr_id, membership_id', 'numerical', 'integerOnly' => true),
            array('slugname', 'length', 'max' => 16),
            array('avatar', 'file', 'allowEmpty'=>true,'types'=>'jpg,png,gif','on'=>'update'),
            array('full_name, short_title, avatar, label', 'length', 'max' => 255),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, slugname, full_name, short_title, short_bio, avatar, template_id, is_active, is_public, can_contact, show_vouches, min_salary, user_id, hr_id, membership_id', 'safe', 'on' => 'search'),
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
            'hrCandidates' => array(self::HAS_MANY, 'HrCandidate', 'profile_id'),
            'user' => array(self::BELONGS_TO, 'User', 'user_id'),
            'hr' => array(self::BELONGS_TO, 'Hr', 'hr_id'),
            'membership' => array(self::BELONGS_TO, 'Membership', 'membership_id'),
            'template' => array(self::BELONGS_TO, 'ProfileTemplate', 'template_id'),
            'profileJobs' => array(self::HAS_MANY, 'ProfileJob', 'profile_id'),
            'profileSkills' => array(self::HAS_MANY, 'ProfileSkill', 'profile_id'),
            'socialProfiles' => array(self::HAS_MANY, 'SocialProfile', 'profile_id'),
            'users' => array(self::HAS_MANY, 'User', 'profile_id'),
            'views' => array(self::HAS_MANY, 'View', 'profile_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'slugname' => 'Slugname',
            'full_name' => 'Full Name',
            'short_title' => 'Short Title',
            'short_bio' => 'Short Bio',
            'avatar' => 'Avatar',
            'template_id' => 'Template',
            'is_active' => 'Active',
            'is_public' => 'Public',
            'can_contact' => 'Can Contact',
            'show_vouches' => 'Show Vouches',
            'min_salary' => 'Min Salary',
            'user_id' => 'User',
            'hr_id' => 'Hr',
            'membership_id' => 'Membership',
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

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('slugname', $this->slugname, true);
        $criteria->compare('full_name', $this->full_name, true);
        $criteria->compare('short_title', $this->short_title, true);
        $criteria->compare('short_bio', $this->short_bio, true);
        $criteria->compare('avatar', $this->avatar, true);
        $criteria->compare('template_id', $this->template_id);
        $criteria->compare('is_active', $this->is_active);
        $criteria->compare('is_public', $this->is_public);
        $criteria->compare('can_contact', $this->can_contact);
        $criteria->compare('show_vouches', $this->show_vouches);
        $criteria->compare('min_salary', $this->min_salary);
        $criteria->compare('user_id', $this->user_id);
        $criteria->compare('hr_id', $this->hr_id);
        $criteria->compare('membership_id', $this->membership_id);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Profile the static model class
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

}
