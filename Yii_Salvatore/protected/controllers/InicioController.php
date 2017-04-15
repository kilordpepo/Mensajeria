<?php

class InicioController extends Controller
{
	public $model;
	public $defaultAction = 'panel';
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
			$this->render('../inicio/panel');
		}
	}

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
	 * Displays the Mensajes Importantes page
	 */
	public function actionMensajes_importantes(){

		if (Yii::app()->user->isGuest) {	
			Yii::app()->homeUrl = '../inicio/login';
			$this->redirect(Yii::app()->homeUrl);
		}
		else{
			$this->render('../inicio/mensajes_importantes');
		}
	}

	/**
	 * Displays the Mensajes Urgentes page
	 */
	public function actionMensajes_urgentes(){

		if (Yii::app()->user->isGuest) {	
			Yii::app()->homeUrl = '../inicio/login';
			$this->redirect(Yii::app()->homeUrl);
		}
		else{
			$this->render('../inicio/mensajes_urgentes');
		}
	}

	/**
	 * Displays the Mensajes comunes page
	 */
	public function actionMensajes_comunes(){

		if (Yii::app()->user->isGuest) {	
			Yii::app()->homeUrl = '../inicio/login';
			$this->redirect(Yii::app()->homeUrl);
		}
		else{
			$this->render('../inicio/mensajes_comunes');
		}
	}

	/**
	 * Displays the Llamadas perdidas page
	 */
	public function actionLlamadas_perdidas(){

		if (Yii::app()->user->isGuest) {	
			Yii::app()->homeUrl = '../inicio/login';
			$this->redirect(Yii::app()->homeUrl);
		}
		else{
			$this->render('../inicio/llamadas_perdidas');
		}
	}

	/**
	 * Displays the Correo page
	 */
	public function actionCorreo(){

		if (Yii::app()->user->isGuest) {	
			Yii::app()->homeUrl = '../inicio/login';
			$this->redirect(Yii::app()->homeUrl);
		}
		else{
			$this->render('../inicio/correo');
		}
	}

	/**
	 * Displays the register page
	 */
	public function actionRegister(){

		$model=new User;

		if(isset($_POST['Users']))
		{
			$model->attributes=$_POST['Users'];
			if($model->save()){
				Yii::app()->user->setFlash('register','Gracias por registrarte.');
				$this->refresh();
			}
		}

		$this->render('register',array(
			'model'=>$model,
		));
		
	}

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