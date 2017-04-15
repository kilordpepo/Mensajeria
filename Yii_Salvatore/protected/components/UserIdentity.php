<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{

	private $_id;
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

		$record=EjUsuario::model()->findByAttributes(array('nombre'=>$this->username)); 
        if($record===null)
                {
                    $this->_id='user Null';
                    $this->errorCode=self::ERROR_USERNAME_INVALID;
                }
        else if($record->contrasena!==$this->password)
                {        
                	$this->_id=$this->username;
                    $this->errorCode=self::ERROR_PASSWORD_INVALID;
                }
        else
        {  
           	$this->_id=$record['nombre'];
            $this->errorCode=self::ERROR_NONE;
 
        }
        return !$this->errorCode;
   	}

  	public function getId(){
  	    return $this->_id;
  	}


		/*$users=array(
			// username => password
			'admin'=>'admin',
			'trabajador'=>'123456',
			'secretaria'=>'123456',
		);
		if(!isset($users[$this->username]))
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		elseif($users[$this->username]!==$this->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
			$this->errorCode=self::ERROR_NONE;
		return !$this->errorCode;*/
	
}