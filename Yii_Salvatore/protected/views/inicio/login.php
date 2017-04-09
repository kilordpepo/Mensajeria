<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="en">

	<head>

	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">


	    <!-- Custom CSS -->
	    <link href="<?php echo Yii::app()->request->baseUrl; ?>/vendor/materialize/css/materialize.min.css" rel="stylesheet">

	    <!-- Custom CSS -->
	    <link href="<?php echo Yii::app()->request->baseUrl; ?>/vendor/materialize/css/materialize.css" rel="stylesheet">


	    <!-- Custom Fonts -->
	    <link href="<?php echo Yii::app()->request->baseUrl; ?>/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->

		<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	</head>
<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<div class="container">
        <div class="row">
            <div class="col m4 offset-m4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                    	<a class="thumbnail"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/construccion.png"></a>
                        <h3 class="panel-title text-center"><b>Inicio de sesión</b></h3>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <fieldset>
                                <div class="input-field" >
                                    <?php echo $form->labelEx($model,''); ?>
									<?php echo $form->textField($model,'usuario',array(
                                    		'class' => 'validate',
                                    		'type'=>'text',
                                    		'placeholder'=>'Usuario'
                                    	)); ?>
									<a style="color: #F44336"><?php echo $form->error($model,'usuario'); ?></a>
                                </div>
                                <div class="input-field validate">
                                    <?php echo $form->labelEx($model,''); ?>
									<?php echo $form->passwordField($model,'contraseña',array(
                                    		'class' => 'validate',
                                    		'type'=>'text',
                                    		'placeholder'=>'Contraseña'
                                    	)); ?>
									<a style="color: #F44336"><?php echo $form->error($model,'contraseña'); ?></a>
                                </div>
                                <div class="row rememberMe" style="padding-left:10px; padding-bottom:10px; padding-top: 10px">
									<?php echo $form->checkBox($model,'rememberMe'); ?>
									<?php echo $form->label($model,'rememberMe'); ?>
									<?php echo $form->error($model,'rememberMe'); ?>
								</div>
                                <!-- Change this to a button or input when using this as a form -->
                                
                               	<?php echo CHtml::ajaxSubmitButton('Login','','',array(
                                				"class"=>"btn btn-lg btn-success btn-block"
                                				)); ?>
                                	
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $this->endWidget(); ?>
</div><!-- form -->

	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-lg-offset-4">
				<div id="footer" class="text-center">
					Copyright &copy; <?php echo date('Y'); ?> por Creaciones Ben-Hur C.A.<br/>
					Todos los derechos reservados.<br/>
				</div>
			</div>
		</div>
	</div>

    <script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/materialize/js/materialize.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/materialize/js/materialize.min.js"></script>

	</body>

</html>
