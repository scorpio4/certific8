<?php

/**
 * This is the model class for table "{{hr_shortlist}}".
 *
 * The followings are the available columns in table '{{hr_shortlist}}':
 * @property integer $id
 * @property integer $hr_id
 * @property integer $user_id
 * @property string $name
 * @property string $client
 * @property integer $max_results
 * @property string $geo_territory
 * @property string $ipv4address
 * @property integer $is_archived
 * @property string $create_date
 * @property string $expire_date
 *
 * The followings are the available model relations:
 * @property HrCandidate[] $hrCandidates
 * @property HrComment[] $hrComments
 * @property Hr $hr
 * @property User $user
 * @property HrShortlistSkill[] $hrShortlistSkills
 */
class HrShortlist extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{hr_shortlist}}';
	}
        public function primaryKey()
        {
           return 'id';
        }
	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('hr_id, user_id, max_results, is_archived', 'numerical', 'integerOnly'=>true),
			array('name, client', 'length', 'max'=>255),
			array('geo_territory', 'length', 'max'=>32),
			array('ipv4address', 'length', 'max'=>16),
			array('create_date, expire_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, hr_id, user_id, name, client, max_results, geo_territory, ipv4address, is_archived, create_date, expire_date', 'safe', 'on'=>'search'),
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
			'hrCandidates' => array(self::HAS_MANY, 'HrCandidate', 'hr_shortlist_id'),
			'hrComments' => array(self::HAS_MANY, 'HrComment', 'hr_shortlist_id'),
			'hr' => array(self::BELONGS_TO, 'Hr', 'hr_id'),
			'user' => array(self::BELONGS_TO, 'User', 'user_id'),
			'hrShortlistSkills' => array(self::HAS_MANY, 'HrShortlistSkill', 'hr_shortlist_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'hr_id' => 'Hr',
			'user_id' => 'User',
			'name' => 'Name',
			'client' => 'Client',
			'max_results' => 'Max Results',
			'geo_territory' => 'Geo Territory',
			'ipv4address' => 'Ipv4address',
			'is_archived' => 'Is Archived',
			'create_date' => 'Create Date',
			'expire_date' => 'Expire Date',
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
		$criteria->compare('hr_id',$this->hr_id);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('client',$this->client,true);
		$criteria->compare('max_results',$this->max_results);
		$criteria->compare('geo_territory',$this->geo_territory,true);
		$criteria->compare('ipv4address',$this->ipv4address,true);
		$criteria->compare('is_archived',$this->is_archived);
		$criteria->compare('create_date',$this->create_date,true);
		$criteria->compare('expire_date',$this->expire_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return HrShortlist the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
