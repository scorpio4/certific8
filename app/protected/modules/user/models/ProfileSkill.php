<?php

/**
 * This is the model class for table "{{profile_skill}}".
 *
 * The followings are the available columns in table '{{profile_skill}}':
 * @property integer $id
 * @property integer $profile_id
 * @property integer $user_skill_id
 *
 * The followings are the available model relations:
 * @property Profile $profile
 * @property Skill $userSkill
 */
class ProfileSkill extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{profile_skill}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('profile_id, user_skill_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, profile_id, user_skill_id', 'safe', 'on'=>'search'),
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
			'profile' => array(self::BELONGS_TO, 'Profile', 'profile_id'),
			'userSkill' => array(self::BELONGS_TO, 'UserSkill', 'user_skill_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'profile_id' => 'Profile',
			'user_skill_id' => 'User Skill',
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
	public function search($id)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;
                $criteria->condition = '(t.profile_id="'.$id.'" and t.profile_id>0)';
                $criteria->order = 't.order';

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ProfileSkill the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	/*
	 * Return formatted url with scheme.
	 */
	public function formatUrl()
	{
		$url = $this->userSkill->skill->webpage;
		$formatUrl = parse_url($url);
		if(isset($formatUrl['scheme']) && $formatUrl['scheme'] == '') {
		   $url = 'http://'.$url;
		} elseif(!isset($url['scheme'])){
			$url = 'http://'.$url;
		} 
		
		return $url;	
	}
}
