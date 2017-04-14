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
			// if it is ajax validation request
			if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
			{
				echo CActiveForm::validate($model);
				Yii::app()->end();
			}
	
			// collect user input data
			if(isset($_POST['LoginForm']))
			{
				$model->attributes=$_POST['LoginForm'];
				// validate user input and redirect to the previous page if valid
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