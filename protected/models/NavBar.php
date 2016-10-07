<?php

/**
 * This is the model class for table "nav_bar".
 *
 * The followings are the available columns in table 'nav_bar':
 * @property string $nb_id
 * @property string $nb_title
 * @property string $nb_title_cn
 * @property string $nb_title_bm
 */
class NavBar extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return NavBar the static model class
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
		return 'nav_bar';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nb_title, nb_title_cn, nb_title_bm', 'length', 'max'=>50),
			array('nb_link', 'length', 'max'=>200),
			array('nb_title, nb_title_cn, nb_title_bm, nb_link', 'required'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('nb_id, nb_title, nb_title_cn, nb_title_bm', 'safe', 'on'=>'search'),
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
			'nb_id' => 'Nb',
			'nb_title' => 'Navigation Bar Title',
			'nb_title_cn' => 'Navigation Bar Title (CN)',
			'nb_title_bm' => 'Navigation Bar Title (BM)',
			'nb_link' => 'Navigation Bar Link',
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

		$criteria->compare('nb_id',$this->nb_id,true);
		$criteria->compare('nb_title',$this->nb_title,true);
		$criteria->compare('nb_title_cn',$this->nb_title_cn,true);
		$criteria->compare('nb_title_bm',$this->nb_title_bm,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}