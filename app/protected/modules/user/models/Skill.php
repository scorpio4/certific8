<?php

/**
 * This is the model class for table "{{skill}}".
 *
 * The followings are the available columns in table '{{skill}}':
 * @property integer $id
 * @property string $title
 * @property string $details
 * @property string $keywords
 * @property string $logo
 * @property string $webpage
 * @property string $certified_by
 * @property integer $provider_id
 * @property integer $skill_discipline_id
 * @property integer $level
 * @property string $start_date
 * @property string $end_date
 * @property integer $status
 *
 * The followings are the available model relations:
 * @property HrShortlistSkill[] $hrShortlistSkills
 * @property ProfileSkill[] $profileSkills
 * @property Provider $provider
 * @property SkillDiscipline $skillDiscipline
 * @property SkillTrainer[] $skillTrainers
 * @property UserSkill[] $userSkills
 */
class Skill extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{skill}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('details, keywords', 'required'),
			array('provider_id, skill_discipline_id, level, status', 'numerical', 'integerOnly'=>true),
			array('title, logo, webpage, certified_by', 'length', 'max'=>255),
			array('start_date, end_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, title, details, keywords, logo, webpage, certified_by, provider_id, skill_discipline_id, level, start_date, end_date, status', 'safe', 'on'=>'search'),
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
			'hrShortlistSkills' => array(self::HAS_MANY, 'HrShortlistSkill', 'skill_id'),
			'profileSkills' => array(self::HAS_MANY, 'ProfileSkill', 'skill_id'),
			'provider' => array(self::BELONGS_TO, 'Provider', 'provider_id'),
			'skillDiscipline' => array(self::BELONGS_TO, 'SkillDiscipline', 'skill_discipline_id'),
			'skillTrainers' => array(self::HAS_MANY, 'SkillTrainer', 'skill_id'),
			'userSkills' => array(self::HAS_MANY, 'UserSkill', 'skill_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'title' => 'Title',
			'details' => 'Details',
			'keywords' => 'Keywords',
			'logo' => 'Logo',
			'webpage' => 'Webpage',
			'certified_by' => 'Certified By',
			'provider_id' => 'Provider',
			'skill_discipline_id' => 'Skill Discipline',
			'level' => 'Level',
			'start_date' => 'Start Date',
			'end_date' => 'End Date',
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
		$criteria->compare('title',$this->title,true);
		$criteria->compare('details',$this->details,true);
		$criteria->compare('keywords',$this->keywords,true);
		$criteria->compare('logo',$this->logo,true);
		$criteria->compare('webpage',$this->webpage,true);
		$criteria->compare('certified_by',$this->certified_by,true);
		$criteria->compare('provider_id',$this->provider_id);
		$criteria->compare('skill_discipline_id',$this->skill_discipline_id);
		$criteria->compare('level',$this->level);
		$criteria->compare('start_date',$this->start_date,true);
		$criteria->compare('end_date',$this->end_date,true);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Skill the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        /*
        * Return certificate logo
        */
        public function getLogo()
        {
           $path = Yii::getPathOfAlias('webroot'). '/uploads/skill/'.$this->logo;
           if(file_exists($path)) {
               $logo = Yii::app()->baseUrl. '/uploads/skill/'.$this->logo;
           } else {
               $logo = Yii::app()->theme->baseUrl."/images/certified.png";
           }
           return $logo;
        }
        
}
