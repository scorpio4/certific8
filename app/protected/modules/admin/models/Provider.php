<?php

/**
 * This is the model class for table "{{provider}}".
 *
 * The followings are the available columns in table '{{provider}}':
 * @property integer $id
 * @property integer $org_id
 * @property integer $membership_id
 * @property string $cert_website
 * @property string $cert_email
 * @property string $description
 * @property integer $is_registered
 * @property integer $is_paid
 * @property string $first_joined
 * @property string $last_seen
 * @property string $last_valdiated
 *
 * The followings are the available model relations:
 * @property Org $org
 * @property Membership $membership
 * @property ProviderTrainer[] $providerTrainers
 * @property Skill[] $skills
 */
class Provider extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{provider}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('description, first_joined, last_seen, last_valdiated', 'required'),
			array('org_id, membership_id, is_registered, is_paid', 'numerical', 'integerOnly'=>true),
			array('cert_website, cert_email', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, org_id, membership_id, cert_website, cert_email, description, is_registered, is_paid, first_joined, last_seen, last_valdiated', 'safe', 'on'=>'search'),
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
			'org' => array(self::BELONGS_TO, 'Org', 'org_id'),
			'membership' => array(self::BELONGS_TO, 'Membership', 'membership_id'),
			'providerTrainers' => array(self::HAS_MANY, 'ProviderTrainer', 'provider_id'),
			'skills' => array(self::HAS_MANY, 'Skill', 'provider_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'org_id' => 'Org',
			'membership_id' => 'Membership',
			'cert_website' => 'Cert Website',
			'cert_email' => 'Cert Email',
			'description' => 'Description',
			'is_registered' => 'Registered',
			'is_paid' => 'Paid',
			'first_joined' => 'First Joined',
			'last_seen' => 'Last Seen',
			'last_valdiated' => 'Last Valdiated',
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
		$criteria->compare('org_id',$this->org_id);
		$criteria->compare('membership_id',$this->membership_id);
		$criteria->compare('cert_website',$this->cert_website,true);
		$criteria->compare('cert_email',$this->cert_email,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('is_registered',$this->is_registered);
		$criteria->compare('is_paid',$this->is_paid);
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
	 * @return Provider the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
