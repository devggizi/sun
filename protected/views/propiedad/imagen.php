<?php
Yii::app()->user->setState('salt', rand(10, 99));
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Configuración
            <small>Registrar propiedad </small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="?r=intra/index">
                    <i class="fa fa-dashboard"></i>Inicio</a></li>
            <li class="active">Propiedades</li>
            <li><a href="?r=intra/index">Gestión</a></li>
            <li class="active">Registrar propiedad</li>
        </ol>
    </section>
    <section class="content">
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Datos de la propiedad</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <?php
                            /* @var $this PropiedadController */
                            /* @var $model Propiedad */

                            $this->breadcrumbs=array(
                                'Propiedads'=>array('index'),
                                $model->IDPROP,
                            );
                            ?>
                            <?php $this->widget('zii.widgets.CDetailView', array(
                                'data'=>$model,
                                'attributes'=>array(
                                    'DIRECCION',
                                    'CANTPIEZA',
                                    'CANTBANO',
                                    'TERRENO',
                                    'TERRENOCONSTRUIDO',
                                    'TIPO',
                                    'SERVICIO',
                                    'ESTADO',
                                    'DESCRIPCION',
                                    'COMUNAPROPIEDAD',
                                ),
                            )); ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <?php
                        /* @var $this PropiedadController */
                        /* @var $model Propiedad */

                        $this->breadcrumbs=array(
                            'Propiedads'=>array('index'),
                            $model->IDPROP,
                        );
                        ?>
                        <?php $this->widget('zii.widgets.CDetailView', array(
                            'data'=>$model2,
                            'attributes'=>array(
                                'RUTCLIENTE',
                                'NOMBRESCLIENTE' ,
                                'APELLIDOSCLIENTE',
                                'TELEFONOCLIENTE' ,
                                'DIRECCIONCLIENTE',
                                'CORREOCLIENTE',
                            ),
                        )); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Subir de fotos de propiedad</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <?php $form=$this->beginWidget('CActiveForm', array(
                                'id'=>'upload-form',
                                // Please note: When you enable ajax validation, make sure the corresponding
                                // controller action is handling ajax validation correctly.
                                // There is a call to performAjaxValidation() commented in generated controller code.
                                // See class documentation of CActiveForm for details on this.
                                'enableAjaxValidation'=>false,
                                'htmlOptions' => array(
                                    'enctype' => 'multipart/form-data',
                                ),
                            )); ?>
                                <?php echo $form->labelEx($model1,'IDIMAGEN'); ?>
                                <?php echo CHtml::activeFileField($model1, 'URLIMAGEN'); ?>  //con esto levantamos la imagen
                                <?php echo $form->error($model1,'URLIMAGEN'); ?>

                        </div>
                    </div>
                </div>
                <div class="center-block">
                    <div class="row buttons" style="display: block; margin-left: auto; margin-right: auto; ">
                        <?php echo CHtml::submitButton('Guardar', array('class'=>'boton center-block')); ?>
                    </div>
                    <?php $this->endWidget(); ?>
                </div>
            </div>
            <div class="box-footer">

            </div>
        </div>
    </section>
</div>