<?php

/**
 * This is the model class for table "car_contact".
 *
 * The followings are the available columns in table 'car_contact':
 * @property string $contact_id
 * @property string $contact_address
 * @property string $contact_phone
 * @property string $contact_email
 * @property string $contact_facebook
 * @property string $contact_tweeter
 * @property string $contact_google
 * @property string $contact_feedback
 * @property string $contact_franchise
 * @property string $contact_join
 */
class Contact extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Contact the static model class
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
		return 'content_contact';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('contact_phone', 'length', 'max'=>100),
			array('contact_email', 'length', 'max'=>300),
			array('contact_feedback, contact_franchise, contact_join', 'length', 'max'=>200),
			array('contact_address, contact_facebook, contact_tweeter, contact_google', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('contact_id, contact_address, contact_phone, contact_email, contact_facebook, contact_tweeter, contact_google, contact_feedback, contact_franchise, contact_join', 'safe', 'on'=>'search'),
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
			'contact_address' => 'Address',
			'contact_phone' => 'Phone',
			'contact_email' => 'Email',
			'contact_facebook' => 'Facebook Link',
			'contact_tweeter' => 'Tweeter Link',
			'contact_google' => 'Instagram Link',
			'contact_feedback' => 'Contact Feedback',
			'contact_franchise' => 'Contact Franchise',
			'contact_join' => 'Contact Join',
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
		$criteria->compare('contact_address',$this->contact_address,true);
		$criteria->compare('contact_phone',$this->contact_phone,true);
		$criteria->compare('contact_email',$this->contact_email,true);
		$criteria->compare('contact_facebook',$this->contact_facebook,true);
		$criteria->compare('contact_tweeter',$this->contact_tweeter,true);
		$criteria->compare('contact_google',$this->contact_google,true);
		$criteria->compare('contact_feedback',$this->contact_feedback,true);
		$criteria->compare('contact_franchise',$this->contact_franchise,true);
		$criteria->compare('contact_join',$this->contact_join,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}