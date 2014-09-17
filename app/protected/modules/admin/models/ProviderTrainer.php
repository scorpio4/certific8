<?php

/**
 * This is the model class for table "{{provider_trainer}}".
 *
 * The followings are the available columns in table '{{provider_trainer}}':
 * @property integer $trainer_id
 * @property integer $provider_id
 * @property string $valid_until
 *
 * The followings are the available model relations:
 * @property Provider $provider
 * @property Trainer $trainer
 */
class ProviderTrainer extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{provider_trainer}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('trainer_id, provider_id', 'numerical', 'integerOnly'=>true),
			array('valid_until', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('trainer_id, provider_id, valid_until', 'safe', 'on'=>'search'),
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
			'provider' => array(self::BELONGS_TO, 'Provider', 'provider_id'),
			'trainer' => array(self::BELONGS_TO, 'Trainer', 'trainer_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'trainer_id' => 'Trainer',
			'provider_id' => 'Provider',
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
		$criteria->compare('provider_id',$this->provider_id);
		$criteria->compare('valid_until',$this->valid_until,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ProviderTrainer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
