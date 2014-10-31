<?php

/**
 * This is the model class for table "{{profile_template}}".
 *
 * The followings are the available columns in table '{{profile_template}}':
 * @property integer $id
 * @property string $template_name
 *
 * The followings are the available model relations:
 * @property Profile[] $profiles
 */
class ProfileTemplate extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{profile_template}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('template_name', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, template_name', 'safe', 'on'=>'search'),
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
			'profiles' => array(self::HAS_MANY, 'Profile', 'template_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'template_name' => 'Template Name',
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
		$criteria->compare('template_name',$this->template_name,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ProfileTemplate the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        /*
        * Get template structure for profile.
        */
        public function getProfileTemplate($id)
	{
            $template = array();
            switch ($id) {
                case 1:
                    $template['main-class'] = 'vcard-body blue-body';
                    $template['inner-class'] = 'v-bio blue-light-body';
                    break;
                case 2:
                    $template['main-class'] = 'vcard-body red-body';
                    $template['inner-class'] = 'v-bio black-body';
                    break;
                case 3:
                    $template['main-class'] = 'vcard-body blue-dark-body';
                    $template['inner-class'] = 'v-bio black-dark-body';
                    break;
                case 4:
                    $template['main-class'] = 'vcard-body gray-light-body';
                    $template['inner-class'] = 'v-bio gray-dark-body';
                    break;

                default:
                    $template['main-class'] = 'vcard-body';
                    $template['inner-class'] = 'v-bio';
            }
            
            return $template;
        }
}
