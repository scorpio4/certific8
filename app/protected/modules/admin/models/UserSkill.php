<?php

/**
 * This is the model class for table "{{user_skill}}".
 *
 * The followings are the available columns in table '{{user_skill}}':
 * @property integer $user_id
 * @property integer $skill_id
 * @property integer $trainer_id
 * @property string $award_number
 * @property integer $award_rank
 * @property string $award_date
 * @property string $expiry_date
 *
 * The followings are the available model relations:
 * @property User $user
 * @property Skill $skill
 * @property Trainer $trainer
 */
class UserSkill extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{user_skill}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, skill_id, trainer_id, award_rank', 'numerical', 'integerOnly'=>true),
			array('award_number', 'length', 'max'=>255),
			array('award_date, expiry_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('user_id, skill_id, trainer_id, award_number, award_rank, award_date, expiry_date', 'safe', 'on'=>'search'),
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
			'user' => array(self::BELONGS_TO, 'User', 'user_id'),
			'skill' => array(self::BELONGS_TO, 'Skill', 'skill_id'),
			'trainer' => array(self::BELONGS_TO, 'Trainer', 'trainer_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'user_id' => 'User',
			'skill_id' => 'Skill',
			'trainer_id' => 'Trainer',
			'award_number' => 'Award Number',
			'award_rank' => 'Award Rank',
			'award_date' => 'Award Date',
			'expiry_date' => 'Expiry Date',
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

		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('skill_id',$this->skill_id);
		$criteria->compare('trainer_id',$this->trainer_id);
		$criteria->compare('award_number',$this->award_number,true);
		$criteria->compare('award_rank',$this->award_rank);
		$criteria->compare('award_date',$this->award_date,true);
		$criteria->compare('expiry_date',$this->expiry_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return UserSkill the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
