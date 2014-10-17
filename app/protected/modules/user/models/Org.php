<?php

/**
 * This is the model class for table "{{org}}".
 *
 * The followings are the available columns in table '{{org}}':
 * @property integer $id
 * @property string $legal_name
 * @property string $tax_number
 * @property string $logo
 * @property integer $billing_user_id
 * @property integer $admin_user_id
 * @property integer $is_registered
 *
 * The followings are the available model relations:
 * @property Hr[] $hrs
 * @property HrTeam[] $hrTeams
 * @property User $billingUser
 * @property User $adminUser
 * @property ProfileJob[] $profileJobs
 * @property Provider[] $providers
 * @property Trainer[] $trainers
 */
class Org extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{org}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('billing_user_id, admin_user_id, is_registered', 'numerical', 'integerOnly'=>true),
			array('legal_name, tax_number, logo', 'length', 'max'=>255),
                        array('logo', 'file', 'allowEmpty'=>true,'types'=>'jpg,png,gif','on'=>'update'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, legal_name, tax_number, logo, billing_user_id, admin_user_id, is_registered', 'safe', 'on'=>'search'),
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
			'hrs' => array(self::HAS_MANY, 'Hr', 'org_id'),
			'hrTeams' => array(self::HAS_MANY, 'HrTeam', 'org_id'),
			'billingUser' => array(self::BELONGS_TO, 'User', 'billing_user_id'),
			'adminUser' => array(self::BELONGS_TO, 'User', 'admin_user_id'),
			'profileJobs' => array(self::HAS_MANY, 'ProfileJob', 'org_id'),
			'providers' => array(self::HAS_MANY, 'Provider', 'org_id'),
			'trainers' => array(self::HAS_MANY, 'Trainer', 'org_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'legal_name' => 'Legal Name',
			'tax_number' => 'Tax Number',
			'logo' => 'Logo',
			'billing_user_id' => 'Billing User',
			'admin_user_id' => 'Admin User',
			'is_registered' => 'Is Registered',
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
		$criteria->compare('legal_name',$this->legal_name,true);
		$criteria->compare('tax_number',$this->tax_number,true);
		$criteria->compare('logo',$this->logo,true);
		$criteria->compare('billing_user_id',$this->billing_user_id);
		$criteria->compare('admin_user_id',$this->admin_user_id);
		$criteria->compare('is_registered',$this->is_registered);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Org the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        /*
         * List all organization.
         */
        public function getAllOrg()
        {
            $criteria = new CDbCriteria;
            $criteria->select = 't.logo,t.legal_name'; 
            $orgs = Org::model()->findAll($criteria);
            
            return $orgs;
        }
}
