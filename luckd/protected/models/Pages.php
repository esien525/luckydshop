<?php

/**
 * This is the model class for table "pages".
 *
 * The followings are the available columns in table 'pages':
 * @property string $pages_id
 * @property string $pages_title
 * @property string $pages_content
 */
class Pages extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Pages the static model class
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
		return 'pages';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pages_title', 'length', 'max'=>300),
			array('pages_content', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('pages_id, pages_title, pages_content', 'safe', 'on'=>'search'),
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
			'pages_id' => 'Pages',
			'pages_title' => 'Pages Title',
			'pages_content' => 'Pages Content',
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

		$criteria->compare('pages_id',$this->pages_id,true);
		$criteria->compare('pages_title',$this->pages_title,true);
		$criteria->compare('pages_content',$this->pages_content,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}