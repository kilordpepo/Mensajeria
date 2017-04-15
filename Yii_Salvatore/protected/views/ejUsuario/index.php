<?php
/* @var $this EjUsuarioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ej Usuarios',
);

$this->menu=array(
	array('label'=>'Create EjUsuario', 'url'=>array('create')),
	array('label'=>'Manage EjUsuario', 'url'=>array('admin')),
);
?>

<h1>Ej Usuarios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
