<?php
/**
* 
*/
class MessageForm extends CFormModel
{
	public static $types= array("comun","importante","urgente","llamada","correo");
	public $usuario;
	public $mensaje;
	public $fecha;
	public $type=0;

	public function rules(){
		return array(
			array('usuario,type,mensaje','required', 'message'=>'{attribute} no puede estar vacio.'),
			array('fecha','safe'),
		);
	}
}