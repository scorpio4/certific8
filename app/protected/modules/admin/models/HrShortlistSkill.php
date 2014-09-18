<?php

/**
 * This is the model class for table "{{hr_shortlist_skill}}".
 *
 * The followings are the available columns in table '{{hr_shortlist_skill}}':
 * @property integer $is_required
 * @property integer $hr_shortlist_id
 * @property integer $skill_id
 *
 * The followings are the available model relations:
 * @property HrShortlist $hrShortlist
 * @property Skill $skill
 */
class HrShortlistSkill extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{hr_shortlist_skill}}';
	}
	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('is_required, hr_shortlist_id, skill_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('is_required, hr_shortlist_id, skill_id', 'safe', 'on'=>'search'),
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
			'hrShortlist' => array(self::BELONGS_TO, 'HrShortlist', 'hr_shortlist_id'),
			'skill' => array(self::BELONGS_TO, 'Skill', 'skill_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'is_required' => 'Is Required',
			'hr_shortlist_id' => 'Hr Shortlist',
			'skill_id' => 'Skill',
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

		$criteria->compare('is_required',$this->is_required);
		$criteria->compare('hr_shortlist_id',$this->hr_shortlist_id);
		$criteria->compare('skill_id',$this->skill_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return HrShortlistSkill the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
