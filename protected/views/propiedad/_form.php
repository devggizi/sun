<?php
/* @var $this PropiedadController */
/* @var $model Propiedad */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'propiedad-form',
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
		<?php echo $form->labelEx($model,'DIRECCION'); ?>
		<?php echo $form->textField($model,'DIRECCION',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'DIRECCION'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CANTPIEZA'); ?>
		<?php echo $form->textField($model,'CANTPIEZA'); ?>
		<?php echo $form->error($model,'CANTPIEZA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CANTBANO'); ?>
		<?php echo $form->textField($model,'CANTBANO'); ?>
		<?php echo $form->error($model,'CANTBANO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TERRENO'); ?>
		<?php echo $form->textField($model,'TERRENO'); ?>
		<?php echo $form->error($model,'TERRENO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TERRENOCONSTRUIDO'); ?>
		<?php echo $form->textField($model,'TERRENOCONSTRUIDO'); ?>
		<?php echo $form->error($model,'TERRENOCONSTRUIDO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TIPO'); ?>
		<?php echo $form->textField($model,'TIPO',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'TIPO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SERVICIO'); ?>
		<?php echo $form->textField($model,'SERVICIO',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'SERVICIO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ESTADO'); ?>
		<?php echo $form->textField($model,'ESTADO'); ?>
		<?php echo $form->error($model,'ESTADO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DESCRIPCION'); ?>
		<?php echo $form->textField($model,'DESCRIPCION',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'DESCRIPCION'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'COMUNAPROPIEDAD'); ?>
		<?php echo $form->textField($model,'COMUNAPROPIEDAD',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'COMUNAPROPIEDAD'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->