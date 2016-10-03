<?php

/**
 * This is the model class for table "luckydraw".
 *
 * The followings are the available columns in table 'luckydraw':
 * @property string $luckydraw_id
 * @property string $luckydraw_refno1
 * @property string $luckydraw_refno2
 * @property string $luckydraw_userid
 * @property integer $luckydraw_amount
 * @property string $luckydraw_datetime
 * @property string $luckydraw_status
 */
class Luckydraw extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Luckydraw the static model class
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
		return 'luckydraw';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('luckydraw_amount', 'numerical', 'integerOnly'=>true),
			array('luckydraw_refno1, luckydraw_refno2, luckydraw_status', 'length', 'max'=>100),
			array('luckydraw_userid,luckydraw_productid', 'length', 'max'=>20),
			array('luckydraw_datetime', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('luckydraw_id, luckydraw_refno1, luckydraw_refno2, luckydraw_userid,luckydraw_productid, luckydraw_amount, luckydraw_datetime, luckydraw_status', 'safe', 'on'=>'search'),
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
			'luckydraw_id' => 'Luckydraw',
			'luckydraw_refno1' => 'REF No (1)',
			'luckydraw_refno2' => 'REF No (2)',
			'luckydraw_userid' => 'User',
			'luckydraw_productid'=>'Product',
			'luckydraw_amount' => 'Amount',
			'luckydraw_datetime' => 'Date',
			'luckydraw_status' => 'Status',
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

		$criteria->compare('luckydraw_id',$this->luckydraw_id,true);
		$criteria->compare('luckydraw_refno1',$this->luckydraw_refno1,true);
		$criteria->compare('luckydraw_refno2',$this->luckydraw_refno2,true);
		$criteria->compare('luckydraw_userid',$this->luckydraw_userid,true);
		$criteria->compare('luckydraw_productid',$this->luckydraw_productid,true);
		$criteria->compare('luckydraw_amount',$this->luckydraw_amount);
		$criteria->compare('luckydraw_datetime',$this->luckydraw_datetime,true);
		$criteria->compare('luckydraw_status',$this->luckydraw_status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}