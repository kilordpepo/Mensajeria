<?php
/**
* 
*/
class MessageForm extends CFormModel
{
	public static $types= array("comun","importante","urgente","llamada","correo");
	public $usuario;
	public $mensaje;
	public $type=0;

	public function rules(){
		return array(
			array("usuario,type","required"),
			array("mensaje","safe"),
		);
	}
}