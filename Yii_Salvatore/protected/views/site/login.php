<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="en">

	<head>

	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">

	    <!-- Bootstrap Core CSS -->
	    <link href="<?php echo Yii::app()->request->baseUrl; ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	    <!-- MetisMenu CSS -->
	    <link href="<?php echo Yii::app()->request->baseUrl; ?>/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

	    <!-- Custom CSS -->
	    <link href="<?php echo Yii::app()->request->baseUrl; ?>/dist/css/sb-admin-2.css" rel="stylesheet">

	    <!-- Morris Charts CSS -->
	    <link href="<?php echo Yii::app()->request->baseUrl; ?>/vendor/morrisjs/morris.css" rel="stylesheet">

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
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <fieldset>
                                <div class="form-group">
                                    <?php echo $form->labelEx($model,'username'); ?>
									<?php echo $form->textField($model,'username'); ?>
									<?php echo $form->error($model,'username'); ?>
                                </div>
                                <div class="form-group">
                                    <?php echo $form->labelEx($model,'password'); ?>
									<?php echo $form->passwordField($model,'password'); ?>
									<?php echo $form->error($model,'password'); ?>
									<p class="hint">
										Hint: You may login with <kbd>demo</kbd>/<kbd>demo</kbd> or <kbd>admin</kbd>/<kbd>admin</kbd>.
									</p>
                                </div>
                                <div class="row rememberMe">
									<?php echo $form->checkBox($model,'rememberMe'); ?>
									<?php echo $form->label($model,'rememberMe'); ?>
									<?php echo $form->error($model,'rememberMe'); ?>
								</div>
                                <!-- Change this to a button or input when using this as a form -->
                                
                                <a href="index" class="btn btn-lg btn-success btn-block"><?php echo CHtml::submitButton('Login'); ?></a>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php $this->endWidget(); ?>
</div><!-- form -->

    <!-- jQuery -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/dist/js/sb-admin-2.js"></script>

	</body>

</html>
