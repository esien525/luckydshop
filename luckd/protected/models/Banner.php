<?php

/**
 * This is the model class for table "banner".
 *
 * The followings are the available columns in table 'banner':
 * @property string $banner_id
 * @property string $banner_photo
 * @property string $banner_title
 * @property string $banner_description
 * @property string $banner_link
 * @property integer $banner_order
 * @property string $banner_language
 */
class Banner extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Banner the static model class
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
		return 'banner';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('banner_title,banner_photo', 'required'),
			array('banner_order', 'numerical', 'integerOnly'=>true),
			array('banner_title', 'length', 'max'=>300),
			array('banner_description', 'length', 'max'=>500),
			array('banner_language,banner_location', 'length', 'max'=>100),
			array('banner_photo, banner_link', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('banner_id, banner_photo, banner_title, banner_description, banner_link, banner_order, banner_language,banner_location', 'safe', 'on'=>'search'),
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
			'banner_id' => 'Banner',
			'banner_photo' => 'Photo',
			'banner_title' => 'Title',
			'banner_description' => 'Description',
			'banner_link' => 'Link',
			'banner_order' => 'Order',
			'banner_language' => 'Language',
			'banner_location' => 'Location',
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

		$criteria->compare('banner_id',$this->banner_id,true);
		$criteria->compare('banner_photo',$this->banner_photo,true);
		$criteria->compare('banner_title',$this->banner_title,true);
		$criteria->compare('banner_description',$this->banner_description,true);
		$criteria->compare('banner_link',$this->banner_link,true);
		$criteria->compare('banner_order',$this->banner_order);
		$criteria->compare('banner_language',$this->banner_language,true);
		$criteria->compare('banner_location',$this->banner_location,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}