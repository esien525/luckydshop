<?php

/**
 * This is the model class for table "contactus".
 *
 * The followings are the available columns in table 'contactus':
 * @property string $contact_id
 * @property string $contact_title
 * @property string $contact_description
 * @property string $contact_address
 * @property string $contact_map
 * @property string $contact_phone
 * @property string $contact_email
 * @property string $contact_facebook
 * @property string $contact_tweeter
 * @property string $contact_google
 * @property string $contact_skype
 */
class Contactus extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Contactus the static model class
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
		return 'contactus';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('contact_title, contact_email', 'length', 'max'=>300),
			array('contact_title, contact_description,contact_email,contact_phone', 'required'),
			array('contact_phone', 'length', 'max'=>100),
			array('contact_description, contact_address, contact_map, contact_facebook, contact_tweeter, contact_google, contact_skype', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('contact_id, contact_title, contact_description, contact_address, contact_map, contact_phone, contact_email, contact_facebook, contact_tweeter, contact_google, contact_skype', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'contact_id' => 'Contact',
			'contact_title' => 'Display Title',
			'contact_description' => 'Display Description',
			'contact_address' => 'Address',
			'contact_map' => 'Map',
			'contact_phone' => 'Phone',
			'contact_email' => 'Email',
			'contact_facebook' => 'Facebook URL',
			'contact_tweeter' => 'Tweeter URL',
			'contact_google' => 'Google+ URL',
			'contact_skype' => 'Skype',
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

		$criteria->compare('contact_id',$this->contact_id,true);
		$criteria->compare('contact_title',$this->contact_title,true);
		$criteria->compare('contact_description',$this->contact_description,true);
		$criteria->compare('contact_address',$this->contact_address,true);
		$criteria->compare('contact_map',$this->contact_map,true);
		$criteria->compare('contact_phone',$this->contact_phone,true);
		$criteria->compare('contact_email',$this->contact_email,true);
		$criteria->compare('contact_facebook',$this->contact_facebook,true);
		$criteria->compare('contact_tweeter',$this->contact_tweeter,true);
		$criteria->compare('contact_google',$this->contact_google,true);
		$criteria->compare('contact_skype',$this->contact_skype,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}