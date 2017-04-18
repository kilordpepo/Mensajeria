<?php

class SecretariaController extends Controller
{
	public $model;
	public $defaultAction = 'login';
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionPanel()
	{
		
		// renders the view file 'protected/views/site/panel.php'
		// using the default layout 'protected/views/layouts/main.php'
		//$this->render('panel');

		if (Yii::app()->user->isGuest) {	
			Yii::app()->homeUrl = '../inicio/login';
			$this->redirect(Yii::app()->homeUrl);
		}
		else{	
			$this->render('../secretaria/panel');
		}
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	/**
	 * Displays the notificaciones page
	 */
	public function actionNotificaciones(){

		if (Yii::app()->user->isGuest) {	
			Yii::app()->homeUrl = '../inicio/login';
			$this->redirect(Yii::app()->homeUrl);
		}
		else{
			$this->render('../inicio/notificaciones');
		}
	}

	/**
	 * Displays the mensajes page
	 */
	public function actionMensajes(){

		$mensaje = new MessageForm;

		if (Yii::app()->user->isGuest) {	
			Yii::app()->homeUrl = '../inicio/login';
			$this->redirect(Yii::app()->homeUrl);
		}
		else{
			if(isset($_POST['MessageForm']))
			{
				$mensaje->attributes=$_POST['MessageForm'];
				if($mensaje->validate() && $mensaje->login()){
					$this->render('../secretaria/mensajes',array('mensaje'=>$mensaje));
				}
			}
			$this->render('../secretaria/mensajes',array('mensaje'=>$mensaje));
		}
	}

	/**
	 * Displays the llamdas page
	 */
	public function actionLlamadas(){

		if (Yii::app()->user->isGuest) {	
			Yii::app()->homeUrl = '../inicio/login';
			$this->redirect(Yii::app()->homeUrl);
		}
		else{
			$this->render('../secretaria/llamadas');
		}
	}

	/**
	 * Displays the correos page
	 */
	public function actionCorreos(){

		if (Yii::app()->user->isGuest) {	
			Yii::app()->homeUrl = '../inicio/login';
			$this->redirect(Yii::app()->homeUrl);
		}
		else{
			$this->render('../secretaria/correos');
		}
	}

	/**
	 * Displays the contact page
	 */
	/*public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}*/

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;
		if(Yii::app()->user->isGuest){
			if(isset($_POST['LoginForm']))
			{
				$model->attributes=$_POST['LoginForm'];
				if($model->validate() && $model->login()){
					Yii::app()->homeUrl = '../inicio/panel';
					$this->redirect(Yii::app()->homeUrl);
				}
			}
			// display the login form
			$this->renderPartial('login',array('model'=>$model));
		}
		else{
			Yii::app()->homeUrl = '../inicio/panel';
			$this->redirect(Yii::app()->homeUrl);
		}
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		Yii::app()->homeUrl = '../inicio/login';
		$this->redirect(Yii::app()->homeUrl);
	}
}