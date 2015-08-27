<?php
/* @var $this AdministradorController */
/* @var $model Administrador */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'administrador-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'RUTADMIN'); ?>
		<?php echo $form->textField($model,'RUTADMIN',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'RUTADMIN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NOMBRESADMIN'); ?>
		<?php echo $form->textField($model,'NOMBRESADMIN',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'NOMBRESADMIN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'APELLIDOSADMIN'); ?>
		<?php echo $form->textField($model,'APELLIDOSADMIN',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'APELLIDOSADMIN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CONTRAADMIN'); ?>
		<?php echo $form->textField($model,'CONTRAADMIN',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'CONTRAADMIN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TELEFONOADMIN'); ?>
		<?php echo $form->textField($model,'TELEFONOADMIN',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'TELEFONOADMIN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CORREOADMIN'); ?>
		<?php echo $form->textField($model,'CORREOADMIN',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'CORREOADMIN'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->