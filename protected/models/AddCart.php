<?php

/**
 * This is the model class for table "add_cart".
 *
 * The followings are the available columns in table 'add_cart':
 * @property string $ac_id
 * @property string $ac_cart_id
 * @property string $ac_product_id
 * @property integer $ac_quantity
 * @property double $ac_amount
 */
class AddCart extends CActiveRecord
{
	public $total_amount;
	/**
	 * Returns the static model of the specified AR class.
	 * @return AddCart the static model class
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
		return 'add_cart';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ac_quantity', 'numerical', 'integerOnly'=>true),
			array('ac_amount', 'numerical'),
			array('ac_cart_id, ac_product_id', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ac_id, ac_cart_id, ac_product_id, ac_quantity, ac_amount', 'safe', 'on'=>'search'),
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
			'ac_id' => 'Ac',
			'ac_cart_id' => 'Ac Cart',
			'ac_product_id' => 'Ac Product',
			'ac_quantity' => 'Ac Quantity',
			'ac_amount' => 'Ac Amount',
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

		$criteria->compare('ac_id',$this->ac_id,true);
		$criteria->compare('ac_cart_id',$this->ac_cart_id,true);
		$criteria->compare('ac_product_id',$this->ac_product_id,true);
		$criteria->compare('ac_quantity',$this->ac_quantity);
		$criteria->compare('ac_amount',$this->ac_amount);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function getProduct($cart_id)
	{
		$criteria=new CDbCriteria;
		$criteria->condition = "ac_cart_id='$cart_id'";
		
		//query items
		$sql = AddCart::model()->findAll($criteria);

		return $sql;
	}

	public function getTotalAmount($cart_id)
	{
		$total_amount = 0;
		$criteria=new CDbCriteria;
		$criteria->select = "SUM(ac_quantity*ac_amount) as total_amount";
		$criteria->condition = "ac_cart_id='$cart_id'";
		
		//query items
		$sql = AddCart::model()->findAll($criteria);
		foreach ($sql as $p)
		{
			$total_amount = $p->total_amount;
		}
		return $total_amount;
	}
}