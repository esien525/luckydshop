<?php

/**
 * This is the model class for table "cart".
 *
 * The followings are the available columns in table 'cart':
 * @property string $cart_id
 * @property string $cart_user
 * @property integer $cart_status
 * @property double $cart_total_amount
 * @property string $cart_payment_status
 * @property string $cart_payment_refno
 * @property string $cart_payment_remark
 * @property string $cart_payment_time
 */
class Cart extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Cart the static model class
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
		return 'cart';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cart_status', 'numerical', 'integerOnly'=>true),
			array('cart_total_amount', 'numerical'),
			array('cart_deliver_address', 'required'),
			array('cart_user, cart_payment_refno', 'length', 'max'=>20),
			array('cart_payment_status', 'length', 'max'=>10),
			array('cart_payment_remark', 'length', 'max'=>200),
			array('cart_payment_time', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cart_id, cart_user, cart_status, cart_total_amount, cart_payment_status, cart_payment_refno, cart_payment_remark, cart_payment_time', 'safe', 'on'=>'search'),
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
			'cart_id' => 'Cart',
			'cart_user' => 'Cart User',
			'cart_status' => 'Cart Status',
			'cart_total_amount' => 'Cart Total Amount',
			'cart_payment_status' => 'Cart Payment Status',
			'cart_payment_refno' => 'Cart Payment Refno',
			'cart_payment_remark' => 'Cart Payment Remark',
			'cart_payment_time' => 'Cart Payment Time',
			'cart_deliver_address' => 'Shipping Address',
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

		$criteria->compare('cart_id',$this->cart_id,true);
		$criteria->compare('cart_user',$this->cart_user,true);
		$criteria->compare('cart_status',$this->cart_status);
		$criteria->compare('cart_total_amount',$this->cart_total_amount);
		$criteria->compare('cart_payment_status',$this->cart_payment_status,true);
		$criteria->compare('cart_payment_refno',$this->cart_payment_refno,true);
		$criteria->compare('cart_payment_remark',$this->cart_payment_remark,true);
		$criteria->compare('cart_payment_time',$this->cart_payment_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}