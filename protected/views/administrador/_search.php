<?php
/* @var $this AdministradorController */
/* @var $model Administrador */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'RUTADMIN'); ?>
		<?php echo $form->textField($model,'RUTADMIN',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NOMBRESADMIN'); ?>
		<?php echo $form->textField($model,'NOMBRESADMIN',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'APELLIDOSADMIN'); ?>
		<?php echo $form->textField($model,'APELLIDOSADMIN',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CONTRAADMIN'); ?>
		<?php echo $form->textField($model,'CONTRAADMIN',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TELEFONOADMIN'); ?>
		<?php echo $form->textField($model,'TELEFONOADMIN',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CORREOADMIN'); ?>
		<?php echo $form->textField($model,'CORREOADMIN',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->