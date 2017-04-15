<?php
/* @var $this EjUsuarioController */
/* @var $model EjUsuario */

$this->breadcrumbs=array(
	'Ej Usuarios'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List EjUsuario', 'url'=>array('index')),
	array('label'=>'Create EjUsuario', 'url'=>array('create')),
	array('label'=>'View EjUsuario', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage EjUsuario', 'url'=>array('admin')),
);
?>

<h1>Update EjUsuario <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>