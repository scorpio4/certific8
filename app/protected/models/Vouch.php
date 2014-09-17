<?php

/**
 * This is the model class for table "{{vouch}}".
 *
 * The followings are the available columns in table '{{vouch}}':
 * @property integer $from_user_id
 * @property integer $to_user_id
 * @property string $comment
 * @property integer $rating
 * @property string $create_date
 *
 * The followings are the available model relations:
 * @property User $fromUser
 * @property User $toUser
 */
class Vouch extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{vouch}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('from_user_id, to_user_id, rating', 'numerical', 'integerOnly'=>true),
			array('comment', 'length', 'max'=>255),
			array('create_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('from_user_id, to_user_id, comment, rating, create_date', 'safe', 'on'=>'search'),
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
			'fromUser' => array(self::BELONGS_TO, 'User', 'from_user_id'),
			'toUser' => array(self::BELONGS_TO, 'User', 'to_user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'from_user_id' => 'From User',
			'to_user_id' => 'To User',
			'comment' => 'Comment',
			'rating' => 'Rating',
			'create_date' => 'Create Date',
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

		$criteria->compare('from_user_id',$this->from_user_id);
		$criteria->compare('to_user_id',$this->to_user_id);
		$criteria->compare('comment',$this->comment,true);
		$criteria->compare('rating',$this->rating);
		$criteria->compare('create_date',$this->create_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Vouch the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
