<?php

/**
 * This is the model class for table "friend".
 *
 * The followings are the available columns in table 'friend':
 * @property string $friend_id
 * @property string $friend_from_id
 * @property string $friend_to_id
 * @property string $friend_datetime
 * @property string $friend_status
 */
class Friend extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Friend the static model class
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
		return 'friend';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('friend_from_id, friend_to_id', 'length', 'max'=>20),
			array('friend_status', 'length', 'max'=>100),
			array('friend_datetime', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('friend_id, friend_from_id, friend_to_id, friend_datetime, friend_status', 'safe', 'on'=>'search'),
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
			'friend_id' => 'Friend',
			'friend_from_id' => 'Friend From',
			'friend_to_id' => 'Friend To',
			'friend_datetime' => 'Friend Datetime',
			'friend_status' => 'Friend Status',
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

		$criteria->compare('friend_id',$this->friend_id,true);
		$criteria->compare('friend_from_id',$this->friend_from_id,true);
		$criteria->compare('friend_to_id',$this->friend_to_id,true);
		$criteria->compare('friend_datetime',$this->friend_datetime,true);
		$criteria->compare('friend_status',$this->friend_status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}