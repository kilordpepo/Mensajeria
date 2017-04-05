<?php
#http://localhost/Prueba_Yii/test/index
class TestController extends Controller
{
	public function actionIndex()
	{
		$twitter="@techiendca";
		$this->render("index",array("model"=>$model,"twitter"=>$twitter));
	}
}