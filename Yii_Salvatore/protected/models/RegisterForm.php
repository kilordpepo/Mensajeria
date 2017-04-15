<?php

/**
 * RegisterForm class.
 * RegisterForm is the data structure for keeping
 * user Register form data. It is used by the 'Register' action of 'InicioController'.
 */
class RegisterForm extends CFormModel
{
	public $usuario;
	public $contraseña;
	public $contraseña_r;
	public $telefono_celular;
	public $telefono_hab;
	public $email;
	public $tipo_p=false;
	public $tipo_s=false;

	private $_identity;

	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			// usuario y contraseña son requeridos
			array('usuario, contraseña, contraseña_r, telefono_hab, telefono_celular, email', 'required', 'message'=>'{attribute} no puede estar vacio.'),
		);
	}

	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels()
	{
		return array(
			'tipo_p'=>'Personal',
			'tipo_s'=>'Secretaria',

		);
	}

	/**
	 * Authenticates the password.
	 * This is the 'authenticate' validator as declared in rules().
	 */
	public function authenticate($attribute,$params)
	{
		if(!$this->hasErrors())
		{
			$this->_identity=new UserIdentity($this->usuario,$this->contraseña);
			if(!$this->_identity->authenticate())
				$this->addError('contraseña','Usuario o contraseña incorrectos.');
		}
	}

	/**
	 * Logs in the user using the given username and password in the model.
	 * @return boolean whether login is successful
	 */
	public function login()
	{
		if($this->_identity===null)
		{
			$this->_identity=new UserIdentity($this->usuario,$this->contraseña);
			$this->_identity->authenticate();
		}
		if($this->_identity->errorCode===UserIdentity::ERROR_NONE)
		{
			$duration=$this->rememberMe ? 3600*24*30 : 0; // 30 days
			Yii::app()->user->login($this->_identity,$duration);
			return true;
		}
		else
			return false;
	}
}
