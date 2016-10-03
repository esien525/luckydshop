<?php

/**
 * This is the model class for table "package".
 *
 * The followings are the available columns in table 'package':
 * @property string $package_id
 * @property string $package_name
 * @property double $package_price_normal
 * @property double $package_price_promotion
 * @property integer $package_coin_amount
 * @property string $package_status
 */
class Package extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Package the static model class
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
		return 'package';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('package_coin_amount', 'numerical', 'integerOnly'=>true),
			array('package_price_normal, package_price_promotion', 'numerical'),
			array('package_name,package_price_normal, package_coin_amount,package_status', 'required'),
			array('package_name', 'length', 'max'=>300),
			array('package_status', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('package_id, package_name, package_price_normal, package_price_promotion, package_coin_amount, package_status', 'safe', 'on'=>'search'),
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
			'package_id' => 'Package',
			'package_name' => 'Package Name',
			'package_price_normal' => 'Normal Price  (RM)',
			'package_price_promotion' => 'Promotion Price (RM)',
			'package_coin_amount' => 'Coin Amount',
			'package_status' => 'Status',
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

		$criteria->compare('package_id',$this->package_id,true);
		$criteria->compare('package_name',$this->package_name,true);
		$criteria->compare('package_price_normal',$this->package_price_normal);
		$criteria->compare('package_price_promotion',$this->package_price_promotion);
		$criteria->compare('package_coin_amount',$this->package_coin_amount);
		$criteria->compare('package_status',$this->package_status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}