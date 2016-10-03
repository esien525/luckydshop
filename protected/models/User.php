<?php

/**
 * This is the model class for table "mixmix_user".
 *
 * The followings are the available columns in table 'mixmix_user':
 * @property string $user_id
 * @property string $user_name
 * @property string $user_email
 * @property string $password
 * @property string $password2
 * @property string $user_type
 * @property string $user_datejoin
 * @property string $user_contactnumber
 * @property string $user_status
 * @property string $last_login
 */
class User extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_firstname,user_lastname,user_name, user_email, password, password2, company_name, company_email', 'length', 'max'=>300),
			array('user_title,company_postcode, company_state, company_tel1, company_tel2, company_fax,user_dob,user_gender,user_refer_code,refer_by', 'length', 'max'=>100),
			array('user_firstname,user_lastname, user_email, password, password2', 'required'),
			array('user_dtoken,user_dcoin', 'length', 'max'=>20),
			array('user_email', 'unique'),
			array('user_email', 'email'),
			array('password2', 'compare', 'compareAttribute'=>'password','message'=>'Passwords do not match!'),
			array('user_type, user_contactnumber', 'length', 'max'=>200),
			array('user_status', 'length', 'max'=>100),
			array('user_datejoin, last_login, user_address, company_address, company_website,company_logo,user_description,user_photo', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
									
			array('user_id, user_firstname,user_lastname,user_name,user_title, user_email, password, password2, user_type, user_datejoin, user_contactnumber, company_name, company_email, company_address,company_postcode, company_state, company_tel1, company_tel2, company_fax,company_logo, company_website, user_status, last_login,user_description,user_photo,user_dob,user_gender,user_dtoken,user_dcoin,user_refer_code,refer_by', 'safe', 'on'=>'search'),
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
			//'userlevelarr' => array(self::BELONGS_TO, 'Userlevel', 'user_type'),
			//'brancharr' => array(self::BELONGS_TO, 'Branch', 'company_name'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'user_id' => 'User',
			'user_name' => 'Username',
			'user_firstname'=>'First Name',
			'user_lastname'=>'Last Name',
			'user_title' => 'Job Title',
			'user_email' => 'Email Address',
			'password' => 'Password',
			'password2' => 'Confirm Password',
			'user_type' => 'User Type',
			'user_datejoin' => 'User Datejoin',
			'user_contactnumber' => 'Contact Number',
			'user_status' => 'User Status',
			'user_address' => 'Address',
			'company_name' => 'Branch',
			'company_website' => 'Website Url',
			'company_email' => 'Company Email',
			'company_address' => 'Company Address',
			'company_postcode' => 'Postcode',
			'company_state' => 'State',
			'company_tel1' => 'Contact Number(1)',
			'company_tel2' => 'Contact Number(2)',
			'company_fax' => 'Fax',
			'company_logo' => 'Logo',
			'last_login' => 'Last Login',
			'user_description' => 'Description',
			'user_photo' => 'Photo',
			'user_dob' => 'D.O.B',
			'user_gender' => 'Gender',
			'user_dtoken' => 'DToken',
			'user_dcoin' => 'DCoin',
			'user_refer_code' => 'Refer Code',
			'refer_by' => 'Refer By',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;
		//$criteria->with=array('userlevelarr','brancharr');
		$criteria->compare('user_id',$this->user_id,true);
		$criteria->compare('user_firstname',$this->user_firstname,true);
		$criteria->compare('user_lastname',$this->user_lastname,true);
		$criteria->compare('user_name',$this->user_name,true);
		$criteria->compare('user_title',$this->user_title,true);
		$criteria->compare('user_email',$this->user_email,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('password2',$this->password2,true);
		$criteria->compare('user_type',$this->user_type,true);
		$criteria->compare('user_datejoin',$this->user_datejoin,true);
		$criteria->compare('user_contactnumber',$this->user_contactnumber,true);
		$criteria->compare('user_status',$this->user_status,true);
		$criteria->compare('company_name',$this->company_name,true);
		$criteria->compare('company_website',$this->company_website,true);
		$criteria->compare('company_email',$this->company_email,true);
		$criteria->compare('company_address',$this->company_address,true);
		$criteria->compare('company_postcode',$this->company_postcode,true);
		$criteria->compare('company_state',$this->company_state,true);
		$criteria->compare('company_tel1',$this->company_tel1,true);
		$criteria->compare('company_tel2',$this->company_tel2,true);
		$criteria->compare('company_fax',$this->company_fax,true);
		$criteria->compare('company_logo',$this->company_logo,true);
		$criteria->compare('last_login',$this->last_login,true);
		$criteria->compare('user_description',$this->user_description,true);
		$criteria->compare('user_photo',$this->user_photo,true);
		$criteria->compare('user_dob',$this->user_dob,true);
		$criteria->compare('user_gender',$this->user_gender,true);
		$criteria->compare('user_dtoken',$this->user_dtoken,true);
		$criteria->compare('user_dcoin',$this->user_dcoin,true);
		$criteria->compare('user_refer_code',$this->user_refer_code,true);
		$criteria->compare('refer_by',$this->refer_by,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	public function getpassword($password) 
	{
		$password=base64_decode($password);
		
		return $password;
	}
	public function searchsupervisor()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;
		$criteria->condition="user_type='supervisor'";
		$criteria->compare('user_id',$this->user_id,true);
		$criteria->compare('user_name',$this->user_name,true);
		$criteria->compare('user_title',$this->user_title,true);
		$criteria->compare('user_email',$this->user_email,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('password2',$this->password2,true);
		$criteria->compare('user_type',$this->user_type,true);
		$criteria->compare('user_datejoin',$this->user_datejoin,true);
		$criteria->compare('user_contactnumber',$this->user_contactnumber,true);
		$criteria->compare('user_status',$this->user_status,true);
		$criteria->compare('company_name',$this->company_name,true);
		$criteria->compare('company_website',$this->company_website,true);
		$criteria->compare('company_email',$this->company_email,true);
		$criteria->compare('company_address',$this->company_address,true);
		$criteria->compare('company_postcode',$this->company_postcode,true);
		$criteria->compare('company_state',$this->company_state,true);
		$criteria->compare('company_tel1',$this->company_tel1,true);
		$criteria->compare('company_tel2',$this->company_tel2,true);
		$criteria->compare('company_fax',$this->company_fax,true);
		$criteria->compare('company_logo',$this->company_logo,true);
		$criteria->compare('last_login',$this->last_login,true);
		$criteria->compare('user_description',$this->user_description,true);
		$criteria->compare('user_photo',$this->user_photo,true);
		$criteria->compare('user_dob',$this->user_dob,true);
		$criteria->compare('user_gender',$this->user_gender,true);
		$criteria->compare('user_dtoken',$this->user_dtoken,true);
		$criteria->compare('user_dcoin',$this->user_dcoin,true);
		$criteria->compare('user_refer_code',$this->user_refer_code,true);
		$criteria->compare('refer_by',$this->refer_by,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function searchdealer()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;
		$criteria->condition="user_type='dealer'";
		$criteria->compare('user_id',$this->user_id,true);
		$criteria->compare('user_name',$this->user_name,true);
		$criteria->compare('user_title',$this->user_title,true);
		$criteria->compare('user_email',$this->user_email,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('password2',$this->password2,true);
		$criteria->compare('user_type',$this->user_type,true);
		$criteria->compare('user_datejoin',$this->user_datejoin,true);
		$criteria->compare('user_contactnumber',$this->user_contactnumber,true);
		$criteria->compare('user_status',$this->user_status,true);
		$criteria->compare('company_name',$this->company_name,true);
		$criteria->compare('company_website',$this->company_website,true);
		$criteria->compare('company_email',$this->company_email,true);
		$criteria->compare('company_address',$this->company_address,true);
		$criteria->compare('company_postcode',$this->company_postcode,true);
		$criteria->compare('company_state',$this->company_state,true);
		$criteria->compare('company_tel1',$this->company_tel1,true);
		$criteria->compare('company_tel2',$this->company_tel2,true);
		$criteria->compare('company_fax',$this->company_fax,true);
		$criteria->compare('company_logo',$this->company_logo,true);
		$criteria->compare('last_login',$this->last_login,true);
		$criteria->compare('user_description',$this->user_description,true);
		$criteria->compare('user_photo',$this->user_photo,true);
		$criteria->compare('user_dob',$this->user_dob,true);
		$criteria->compare('user_gender',$this->user_gender,true);
		$criteria->compare('user_dtoken',$this->user_dtoken,true);
		$criteria->compare('user_dcoin',$this->user_dcoin,true);
		$criteria->compare('user_refer_code',$this->user_refer_code,true);
		$criteria->compare('refer_by',$this->refer_by,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function searchnuser()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;
		$criteria->condition="user_type='normal user'";
		$criteria->compare('user_id',$this->user_id,true);
		$criteria->compare('user_name',$this->user_name,true);
		$criteria->compare('user_title',$this->user_title,true);
		$criteria->compare('user_email',$this->user_email,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('password2',$this->password2,true);
		$criteria->compare('user_type',$this->user_type,true);
		$criteria->compare('user_datejoin',$this->user_datejoin,true);
		$criteria->compare('user_contactnumber',$this->user_contactnumber,true);
		$criteria->compare('user_status',$this->user_status,true);
		$criteria->compare('company_name',$this->company_name,true);
		$criteria->compare('company_website',$this->company_website,true);
		$criteria->compare('company_email',$this->company_email,true);
		$criteria->compare('company_address',$this->company_address,true);
		$criteria->compare('company_postcode',$this->company_postcode,true);
		$criteria->compare('company_state',$this->company_state,true);
		$criteria->compare('company_tel1',$this->company_tel1,true);
		$criteria->compare('company_tel2',$this->company_tel2,true);
		$criteria->compare('company_fax',$this->company_fax,true);
		$criteria->compare('company_logo',$this->company_logo,true);
		$criteria->compare('last_login',$this->last_login,true);
		$criteria->compare('user_description',$this->user_description,true);
		$criteria->compare('user_photo',$this->user_photo,true);
		$criteria->compare('user_dob',$this->user_dob,true);
		$criteria->compare('user_gender',$this->user_gender,true);
		$criteria->compare('user_dtoken',$this->user_dtoken,true);
		$criteria->compare('user_dcoin',$this->user_dcoin,true);
		$criteria->compare('user_refer_code',$this->user_refer_code,true);
		$criteria->compare('refer_by',$this->refer_by,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	protected function afterValidate()
	{
	parent::afterValidate();
	$this->password=$this->encrypt($this->password);
	$this->password2=$this->encrypt($this->password2);
	}

	public function encrypt($value)
	{
	    return base64_encode($value);
	}
}
