<?php

/**
 * This is the model class for table "product_category".
 *
 * The followings are the available columns in table 'product_category':
 * @property string $cat_id
 * @property string $cat_name
 * @property string $cat_name_cn
 * @property string $cat_name_bm
 */
class ProductCategory extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return ProductCategory the static model class
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
		return 'product_category';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cat_name, cat_name_cn, cat_name_bm', 'length', 'max'=>200),
			array('cat_name, cat_name_cn, cat_name_bm', 'required'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cat_id, cat_name, cat_name_cn, cat_name_bm', 'safe', 'on'=>'search'),
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
			'cat_id' => 'Cat',
			'cat_name' => 'Category Name',
			'cat_name_cn' => 'Category Name Chinese',
			'cat_name_bm' => 'Category Name BM',
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

		$criteria->compare('cat_id',$this->cat_id,true);
		$criteria->compare('cat_name',$this->cat_name,true);
		$criteria->compare('cat_name_cn',$this->cat_name_cn,true);
		$criteria->compare('cat_name_bm',$this->cat_name_bm,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}