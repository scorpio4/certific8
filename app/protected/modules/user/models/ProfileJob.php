<?php

/**
 * This is the model class for table "{{profile_job}}".
 *
 * The followings are the available columns in table '{{profile_job}}':
 * @property integer $profile_id
 * @property integer $org_id
 * @property string $job_title
 * @property integer $hr_id
 * @property integer $rating
 * @property string $comment
 * @property string $start_date
 * @property string $end_date
 *
 * The followings are the available model relations:
 * @property Profile $profile
 * @property Org $org
 * @property Hr $hr
 */
class ProfileJob extends CActiveRecord
{
        public $isCurrent;
        /**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{profile_job}}';
	}
	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('comment, job_title, org_id,start_date', 'required','on'=>'save'),
                        array('end_date', 'checkEndDate','on'=>'save'),
			array('profile_id, hr_id, rating', 'numerical', 'integerOnly'=>true),
			array('job_title', 'length', 'max'=>255),
			array('end_date', 'checkDate'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, profile_id, org_id, job_title, hr_id, rating, comment, start_date, end_date, isCurrent', 'safe', 'on'=>'search,save'),
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
			'org' => array(self::BELONGS_TO, 'Org', 'org_id'),
			'hr' => array(self::BELONGS_TO, 'Hr', 'hr_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'profile_id' => 'Profile',
			'org_id' => 'Org',
			'job_title' => 'Title',
			'hr_id' => 'Hr',
			'rating' => 'Rating',
			'comment' => 'Description',
			'start_date' => 'Start Date',
			'end_date' => 'End Date',
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
	public function search($profId)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;
                $criteria->condition = '(t.profile_id="'.$profId.'" and t.profile_id>0)';
                
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ProfileJob the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        /*
         * Compare date and check if error
         */
        public function checkDate()
        {
            if(($this->start_date <> '' || $this->end_date <> '') && !$this->hasErrors('start_date') && !$this->hasErrors('end_date')) {
                $date= '01';
                $startdt = $date.'/'.$this->start_date;
                $endate = $date.'/'.$this->end_date;
                if(strtotime($startdt) > strtotime($endate) && $this->isCurrent == 0 ) {
                    $this->addError('end_date', 'End date must be greater than "Start date"');
                } elseif ($this->isCurrent == 1) {
                    $endate = $date.'/'.date('m/Y');
                    if(strtotime($startdt) > strtotime($endate)) {
                         $this->addError('start_date', 'Start date must be lesser than this month');
                    }
                }
            }
        }
        
        /*
         * Compare date and check if error
         */
        public function checkEndDate()
        {
            if($this->isCurrent == 0) {
                if($this->end_date == '') {
                    $this->addError('end_date', 'End Date cannot be blank.');
                }
            }
        }
        
        /*
        * Get current company status of user.
        */
        public function getJobDetatil()
        {
            $status = '';
            if($this->end_date <> '' && $this->end_date > 0) {
                $endate = strtotime($this->end_date);
                $status = date('Y',strtotime($this->start_date)).' - '.date('Y',$endate);
            }
            return $status;
        }
        
        /*
        * Get current company status of user.
        */
        public function getExperience($job)
        {
            $start = $job->start_date;
            if($job->end_date == NULL) {
                $end = date('Y-m-d');
            } else {
                $end = $job->end_date;
            }
            $start = new DateTime($start);
            $end = new DateTime($end);
            $interval = $start->diff($end);
            $experience = '';
            if($interval->y > 1) {
                $experience = $interval->y.' years and ';
            } else {
                $experience = $interval->y.' year and ';
            }
            if($interval->m > 1) {
                $experience.= $interval->m.' months';
            } else {
                $experience.= $interval->m.' month';
            }
            return $experience;
        }
}
