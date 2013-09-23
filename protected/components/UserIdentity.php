<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
        private $_id;
        private $_privilages;
        const ERROR_USERNAME_NOT_ACTIVE = 3;
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
            Yii::import("application.modules.Admin.models.User");
            $record=User::model()->findByAttributes(array('username'=>$this->username));
            
            if($record===null)
                $this->errorCode=self::ERROR_USERNAME_INVALID;
            else
            {
                $entered_pass = User::generateHash($this->password,$record->password);
                if($record->password !== $entered_pass)
                    $this->errorCode=self::ERROR_PASSWORD_INVALID;
                elseif($record->active === 0)
                {
                    $this->errorCode=self::ERROR_USERNAME_NOT_ACTIVE;
                }
                else
                {
                    $this->_id=$record->id;
                    $this->errorCode=self::ERROR_NONE;
                }
            }
            return !$this->errorCode;
	}
        
        public function getId(){
            return $this->_id;
        }
        
        public function getRole(){
            return $this->roles;
        }
}