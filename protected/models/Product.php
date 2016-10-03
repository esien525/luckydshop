<?php

/**
 * This is the model class for table "product".
 *
 * The followings are the available columns in table 'product':
 * @property string $product_id
 * @property string $product_title
 * @property string $product_description
 * @property string $product_importantinfo
 * @property string $product_photo
 * @property double $product_price
 * @property double $product_promotion_price
 * @property integer $product_coin
 * @property string $product_allow_groupbuy
 * @property string $product_start_date
 * @property string $product_end_date
 * @property string $product_status
 * @property string $product_luckydraw_status
 * @property string $product_featured
 * @property string $product_posted_date
 * @property string $product_posted_by
 */
class Product extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Product the static model class
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
		return 'product';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('product_coin', 'numerical', 'integerOnly'=>true),
			array('product_title,product_photo,product_description,product_price,product_coin,product_start_date, product_end_date', 'required'),
			array('product_price, product_promotion_price', 'numerical'),
			array('product_title', 'length', 'max'=>500),
			array('product_allow_groupbuy, product_status, product_luckydraw_status, product_featured', 'length', 'max'=>100),
			array('product_posted_by', 'length', 'max'=>20),
			array('product_description, product_importantinfo, product_photo2, product_photo3, product_photo4, product_photo5, product_photo6, product_photo7, product_photo8, product_photo9, product_photo10, product_start_date, product_end_date, product_posted_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('product_id, product_title, product_description, product_importantinfo, product_photo, product_price, product_promotion_price, product_coin, product_allow_groupbuy, product_start_date, product_end_date, product_status, product_luckydraw_status, product_featured, product_posted_date, product_posted_by', 'safe', 'on'=>'search'),
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
			'product_id' => 'Product',
			'product_title' => 'Title',
			'product_description' => 'Description',
			'product_importantinfo' => 'Important info',
			'product_photo' => 'Main Photo',
			'product_photo2' => 'Photo 2',
			'product_photo3' => 'Photo 3',
			'product_photo4' => 'Photo 4',
			'product_photo5' => 'Photo 5',
			'product_photo6' => 'Photo 6',
			'product_photo7' => 'Photo 7',
			'product_photo8' => 'Photo 8',
			'product_photo9' => 'Photo 9',
			'product_photo10' => 'Photo 10',
			'product_price' => 'Price (RM)',
			'product_promotion_price' => 'Promotion Price (RM)',
			'product_coin' => 'Coin',
			'product_allow_groupbuy' => 'Allow Group Buy',
			'product_start_date' => 'Start Date',
			'product_end_date' => 'End Date',
			'product_status' => 'Status',
			'product_luckydraw_status' => 'Luckydraw Status',
			'product_featured' => 'Featured',
			'product_posted_date' => 'Posted Date',
			'product_posted_by' => 'Posted By',
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

		$criteria->compare('product_id',$this->product_id,true);
		$criteria->compare('product_title',$this->product_title,true);
		$criteria->compare('product_description',$this->product_description,true);
		$criteria->compare('product_importantinfo',$this->product_importantinfo,true);
		$criteria->compare('product_photo',$this->product_photo,true);
		$criteria->compare('product_price',$this->product_price);
		$criteria->compare('product_promotion_price',$this->product_promotion_price);
		$criteria->compare('product_coin',$this->product_coin);
		$criteria->compare('product_allow_groupbuy',$this->product_allow_groupbuy,true);
		$criteria->compare('product_start_date',$this->product_start_date,true);
		$criteria->compare('product_end_date',$this->product_end_date,true);
		$criteria->compare('product_status',$this->product_status,true);
		$criteria->compare('product_luckydraw_status',$this->product_luckydraw_status,true);
		$criteria->compare('product_featured',$this->product_featured,true);
		$criteria->compare('product_posted_date',$this->product_posted_date,true);
		$criteria->compare('product_posted_by',$this->product_posted_by,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function getProductName($product_id)
	{
		$product_title = "";
		$criteria=new CDbCriteria;
		$criteria->condition = "product_id='$product_id'";
		
		//query items
		$sql = Product::model()->findAll($criteria);
		foreach ($sql as $p)
		{
			$product_title = $p->product_title;
		}
		return $product_title;
	}

	public function getProductImage($product_id)
	{
		$product_photo = "";
		$criteria=new CDbCriteria;
		$criteria->condition = "product_id='$product_id'";
		
		//query items
		$sql = Product::model()->findAll($criteria);
		foreach ($sql as $p)
		{
			$product_photo = Yii::app()->request->baseUrl."/".$p->product_photo;
		}
		return $product_photo;
	}
}