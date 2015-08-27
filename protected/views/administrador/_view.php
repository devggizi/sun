<?php
/* @var $this AdministradorController */
/* @var $data Administrador */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('RUTADMIN')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->RUTADMIN), array('view', 'id'=>$data->RUTADMIN)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOMBRESADMIN')); ?>:</b>
	<?php echo CHtml::encode($data->NOMBRESADMIN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('APELLIDOSADMIN')); ?>:</b>
	<?php echo CHtml::encode($data->APELLIDOSADMIN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CONTRAADMIN')); ?>:</b>
	<?php echo CHtml::encode($data->CONTRAADMIN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TELEFONOADMIN')); ?>:</b>
	<?php echo CHtml::encode($data->TELEFONOADMIN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CORREOADMIN')); ?>:</b>
	<?php echo CHtml::encode($data->CORREOADMIN); ?>
	<br />


</div>