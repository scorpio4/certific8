<?php

/**
 * This is the model class for table "{{social}}".
 *
 * The followings are the available columns in table '{{social}}':
 * @property integer $id
 * @property string $title
 * @property string $website
 * @property string $small_logo_url
 * @property string $large_logo_url
 * @property string $username_title
 * @property string $url_template
 * @property string $oauth_url
 *
 * The followings are the available model relations:
 * @property SocialProfile[] $socialProfiles
 */
class Social extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{social}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, website, small_logo_url, large_logo_url, username_title, url_template, oauth_url', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, title, website, small_logo_url, large_logo_url, username_title, url_template, oauth_url', 'safe', 'on'=>'search'),
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
			'socialProfiles' => array(self::HAS_MANY, 'SocialProfile', 'social_id'),
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
			'website' => 'Website',
			'small_logo_url' => 'Small Logo Url',
			'large_logo_url' => 'Large Logo Url',
			'username_title' => 'Username Title',
			'url_template' => 'Url Template',
			'oauth_url' => 'Oauth Url',
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
		$criteria->compare('website',$this->website,true);
		$criteria->compare('small_logo_url',$this->small_logo_url,true);
		$criteria->compare('large_logo_url',$this->large_logo_url,true);
		$criteria->compare('username_title',$this->username_title,true);
		$criteria->compare('url_template',$this->url_template,true);
		$criteria->compare('oauth_url',$this->oauth_url,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Social the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
