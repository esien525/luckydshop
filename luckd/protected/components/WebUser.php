<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class WebUser extends CWebUser {

  // Store model to not repeat query.
  private $_model;

  // Return first name.
  // access it by Yii::app()->user->first_name
  


  function getuseremail(){
  if(Yii::app()->user->id!=null){
        $user = Yii::app()->user->id;
        $criteria=new CDbCriteria;
		$criteria->select='user_email';
        $criteria->condition='user_id='.$user;
		$quseremail=User::model()->findAll($criteria);
		foreach ($quseremail as $p){
		$useremail= $p->user_email;}
        return $useremail;
	}

  }
  
  function getdisplayname(){
  if(Yii::app()->user->id!=null){
        $user = Yii::app()->user->id;
        $criteria=new CDbCriteria;
		$criteria->select='user_name';
        $criteria->condition='user_id='.$user;
		$qusername=User::model()->findAll($criteria);
		foreach ($qusername as $p){
		$displayname= $p->user_name;}
        return $displayname;
	}

  }
  
  function getuserphone(){
  if(Yii::app()->user->id!=null){
        $user = Yii::app()->user->id;
        $criteria=new CDbCriteria;
		$criteria->select='user_contactnumber';
        $criteria->condition='user_id='.$user;
		$quserphone=User::model()->findAll($criteria);
		foreach ($quserphone as $p){
		$userphone= $p->user_contactnumber;}
        return $userphone;
	}

  }
  

  
  function getusertype(){
  if(Yii::app()->user->id!=null){
        $user = Yii::app()->user->id;
        $criteria=new CDbCriteria;
		$criteria->select='user_type';
        $criteria->condition='user_id='.$user;
		$qusertype=User::model()->findAll($criteria);
		foreach ($qusertype as $p){
		$usertype= $p->user_type;}
        return $usertype;
	}

  }
  
   function getuserfirstname(){
	  if(Yii::app()->user->id!=null){
        $user = Yii::app()->user->id;
        $criteria=new CDbCriteria;
		$criteria->select='user_firstname';
        $criteria->condition='user_id='.$user;
		$quser_firstname=User::model()->findAll($criteria);
		foreach ($quser_firstname as $p){
		$user_firstname= $p->user_firstname;}
        return $user_firstname;
	  }

  }
  
  function getusercoin(){
	  if(Yii::app()->user->id!=null){
        $user = Yii::app()->user->id;
        $criteria=new CDbCriteria;
		$criteria->select='user_dcoin';
        $criteria->condition='user_id='.$user;
		$quser_dcoin=User::model()->findAll($criteria);
		foreach ($quser_dcoin as $p){
		$user_dcoin= $p->user_dcoin;}
        return $user_dcoin;
	  }

  }
  
  function getuserlastname(){
	  if(Yii::app()->user->id!=null){
        $user = Yii::app()->user->id;
        $criteria=new CDbCriteria;
		$criteria->select='user_lastname';
        $criteria->condition='user_id='.$user;
		$quser_lastname=User::model()->findAll($criteria);
		foreach ($quser_lastname as $p){
		$user_lastname= $p->user_lastname;}
        return $user_lastname;
	  }

  }
  
  function getuserbranch(){
  if(Yii::app()->user->id!=null){
        $user = Yii::app()->user->id;
        $criteria=new CDbCriteria;
		$criteria->select='company_name';
        $criteria->condition='user_id='.$user;
		$qusertype=User::model()->findAll($criteria);
		foreach ($qusertype as $p){
		$companyname= $p->company_name;}
        return $companyname;
	}

  }
  
  

  // Load user model.
  protected function loadUser($id=null)
    {
        if($this->_model===null)
        {
            if($id!==null)
                $this->_model=User::model()->findByPk($id);
        }
        return $this->_model;
    }
}
?>
