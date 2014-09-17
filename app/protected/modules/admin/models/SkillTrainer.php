<?php

/**
 * This is the model class for table "{{skill_trainer}}".
 *
 * The followings are the available columns in table '{{skill_trainer}}':
 * @property integer $trainer_id
 * @property integer $skill_id
 * @property string $webpage
 * @property string $valid_until
 *
 * The followings are the available model relations:
 * @property Trainer $trainer
 * @property Skill $skill
 */
class SkillTrainer extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{skill_trainer}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('trainer_id, skill_id', 'numerical', 'integerOnly'=>true),
			array('webpage', 'length', 'max'=>255),
			array('valid_until', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('trainer_id, skill_id, webpage, valid_until', 'safe', 'on'=>'search'),
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
			'trainer' => array(self::BELONGS_TO, 'Trainer', 'trainer_id'),
			'skill' => array(self::BELONGS_TO, 'Skill', 'skill_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'trainer_id' => 'Trainer',
			'skill_id' => 'Skill',
			'webpage' => 'Webpage',
			'valid_until' => 'Valid Until',
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

		$criteria->compare('trainer_id',$this->trainer_id);
		$criteria->compare('skill_id',$this->skill_id);
		$criteria->compare('webpage',$this->webpage,true);
		$criteria->compare('valid_until',$this->valid_until,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SkillTrainer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
