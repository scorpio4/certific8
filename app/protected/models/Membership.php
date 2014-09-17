<?php

/**
 * This is the model class for table "{{membership}}".
 *
 * The followings are the available columns in table '{{membership}}':
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $logo
 * @property string $price
 * @property integer $duration_days
 * @property integer $can_search
 * @property integer $can_contact
 * @property integer $max_skills
 * @property integer $status
 *
 * The followings are the available model relations:
 * @property Benefits[] $benefits
 * @property Hr[] $hrs
 * @property Profile[] $profiles
 * @property Provider[] $providers
 * @property Trainer[] $trainers
 * @property User[] $users
 */
class Membership extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{membership}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('description', 'required'),
			array('duration_days, can_search, can_contact, max_skills, status', 'numerical', 'integerOnly'=>true),
			array('name, logo', 'length', 'max'=>255),
			array('price', 'length', 'max'=>15),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, description, logo, price, duration_days, can_search, can_contact, max_skills, status', 'safe', 'on'=>'search'),
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
			'benefits' => array(self::HAS_MANY, 'Benefits', 'membership_id'),
			'hrs' => array(self::HAS_MANY, 'Hr', 'membership_id'),
			'profiles' => array(self::HAS_MANY, 'Profile', 'membership_id'),
			'providers' => array(self::HAS_MANY, 'Provider', 'membership_id'),
			'trainers' => array(self::HAS_MANY, 'Trainer', 'membership_id'),
			'users' => array(self::HAS_MANY, 'User', 'membership_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'description' => 'Description',
			'logo' => 'Logo',
			'price' => 'Price',
			'duration_days' => 'Duration Days',
			'can_search' => 'Can Search',
			'can_contact' => 'Can Contact',
			'max_skills' => 'Max Skills',
			'status' => 'Status',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('logo',$this->logo,true);
		$criteria->compare('price',$this->price,true);
		$criteria->compare('duration_days',$this->duration_days);
		$criteria->compare('can_search',$this->can_search);
		$criteria->compare('can_contact',$this->can_contact);
		$criteria->compare('max_skills',$this->max_skills);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Membership the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
