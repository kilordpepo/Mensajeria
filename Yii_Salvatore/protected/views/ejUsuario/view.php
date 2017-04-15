<?php
/* @var $this EjUsuarioController */
/* @var $model EjUsuario */

$this->breadcrumbs=array(
	'Ej Usuarios'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List EjUsuario', 'url'=>array('index')),
	array('label'=>'Create EjUsuario', 'url'=>array('create')),
	array('label'=>'Update EjUsuario', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete EjUsuario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EjUsuario', 'url'=>array('admin')),
);
?>

<h1>View EjUsuario #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'contrasena',
	),
)); ?>
