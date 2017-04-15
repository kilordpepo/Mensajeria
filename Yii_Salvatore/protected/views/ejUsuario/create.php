<?php
/* @var $this EjUsuarioController */
/* @var $model EjUsuario */

$this->breadcrumbs=array(
	'Ej Usuarios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EjUsuario', 'url'=>array('index')),
	array('label'=>'Manage EjUsuario', 'url'=>array('admin')),
);
?>

<h1>Create EjUsuario</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>