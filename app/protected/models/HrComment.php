<?php

/**
 * This is the model class for table "{{hr_comment}}".
 *
 * The followings are the available columns in table '{{hr_comment}}':
 * @property integer $id
 * @property integer $hr_shortlist_id
 * @property integer $hr_candidate_id
 * @property integer $user_id
 * @property string $comment
 * @property integer $preference
 * @property integer $status
 *
 * The followings are the available model relations:
 * @property HrShortlist $hrShortlist
 */
class HrComment extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{hr_comment}}';
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
			array('hr_shortlist_id, hr_candidate_id, user_id, preference, status', 'numerical', 'integerOnly'=>true),
			array('comment', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, hr_shortlist_id, hr_candidate_id, user_id, comment, preference, status', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'hr_shortlist_id' => 'Hr Shortlist',
			'hr_candidate_id' => 'Hr Candidate',
			'user_id' => 'User',
			'comment' => 'Comment',
			'preference' => 'Preference',
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
		$criteria->compare('hr_shortlist_id',$this->hr_shortlist_id);
		$criteria->compare('hr_candidate_id',$this->hr_candidate_id);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('comment',$this->comment,true);
		$criteria->compare('preference',$this->preference);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return HrComment the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
