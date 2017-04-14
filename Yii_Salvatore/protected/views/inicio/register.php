<?php
/* @var $this UsersController */
/* @var $model Inicio */

$this->breadcrumbs=array(
    'Inicio'=>array('panel'),
    'register',
);


?>

<h1>Register Users</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>