<?php

/**
 * This is the model class for table "{{social_profile}}".
 *
 * The followings are the available columns in table '{{social_profile}}':
 * @property integer $id
 * @property integer $social_id
 * @property integer $user_id
 * @property string $username
 * @property integer $profile_id
 * @property string $identifier
 *
 * The followings are the available model relations:
 * @property Social $social
 * @property Profile $profile
 * @property User $user
 */
class SocialProfile extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{social_profile}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('social_id, username', 'required','on'=>'save'),
			array('social_id, user_id, profile_id', 'numerical', 'integerOnly'=>true),
			array('username, identifier', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, social_id, user_id, username, profile_id, identifier', 'safe', 'on'=>'search,save'),
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
			'social' => array(self::BELONGS_TO, 'Social', 'social_id'),
			'profile' => array(self::BELONGS_TO, 'Profile', 'profile_id'),
			'user' => array(self::BELONGS_TO, 'User', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'social_id' => 'Social',
			'user_id' => 'User',
			'username' => 'Username',
			'profile_id' => 'Profile',
			'identifier' => 'Identifier',
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
	public function search($userId,$profileId)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('user_id',$userId);
		$criteria->compare('profile_id',$profileId);
                $criteria->order = 't.order';
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SocialProfile the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
