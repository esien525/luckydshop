<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	private $_id;
	public function authenticate()
	{
		$user=User::model()->findByAttributes(array(
			'user_email'=>$this->username));
		if($user==null)
			{
				$this->errorCode=self::ERROR_USERNAME_INVALID;
			}

		else
		{
			if($user->password!==$user->encrypt($this->password))	
			{

				$this->errorCode=self::ERROR_PASSWORD_INVALID;
			}
			else
			{
				$this->_id=$user->user_id; //set the 1st yii::app()->user->id;
				$logintime = date("Y-m-d H:i:s");
				$user->last_login = $logintime;
				$user->password = $this->password;
				$user->save();
				$this->errorCode=self::ERROR_NONE;
			}
		}
		return!$this->errorCode;
	}

	public function getID()
	{
		return $this->_id;
	}
}
