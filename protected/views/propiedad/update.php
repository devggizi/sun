<?php
/* @var $this PropiedadController */
/* @var $model Propiedad */

$this->breadcrumbs=array(
	'Propiedads'=>array('index'),
	$model->IDPROP=>array('view','id'=>$model->IDPROP),
	'Update',
);

$this->menu=array(
	array('label'=>'List Propiedad', 'url'=>array('index')),
	array('label'=>'Create Propiedad', 'url'=>array('create')),
	array('label'=>'View Propiedad', 'url'=>array('view', 'id'=>$model->IDPROP)),
	array('label'=>'Manage Propiedad', 'url'=>array('admin')),
);
?>

<h1>Update Propiedad <?php echo $model->IDPROP; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>