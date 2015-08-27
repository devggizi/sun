<?php
/* @var $this ClienteController */
/* @var $model Cliente */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cliente-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'RUTCLIENTE'); ?>
		<?php echo $form->textField($model,'RUTCLIENTE',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'RUTCLIENTE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NOMBRESCLIENTE'); ?>
		<?php echo $form->textField($model,'NOMBRESCLIENTE',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'NOMBRESCLIENTE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'APELLIDOSCLIENTE'); ?>
		<?php echo $form->textField($model,'APELLIDOSCLIENTE',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'APELLIDOSCLIENTE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TELEFONOCLIENTE'); ?>
		<?php echo $form->textField($model,'TELEFONOCLIENTE',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'TELEFONOCLIENTE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DIRECCIONCLIENTE'); ?>
		<?php echo $form->textField($model,'DIRECCIONCLIENTE',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'DIRECCIONCLIENTE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CORREOCLIENTE'); ?>
		<?php echo $form->textField($model,'CORREOCLIENTE',array('size'=>60,'maxlength'=>75)); ?>
		<?php echo $form->error($model,'CORREOCLIENTE'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->