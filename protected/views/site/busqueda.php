<div class="busqueda" id="templatemo_banner_slide">

</div>
<div id="templatemo_mobile_menu">
    <ul class="nav nav-pills nav-stacked">
        <li><a href="?r=site/index"><i class="glyphicon glyphicon-home"></i> &nbsp; Inicio</a></li>
        <li><a href="#templatemo_about"><i class="glyphicon glyphicon-briefcase"></i> &nbsp; ¿Quiénes Somos?</a></li>
        <li><a href="#templatemo_events"><i class="glyphicon glyphicon-search"></i> &nbsp; Buscar Propiedad</a></li>
        <li><a href="#templatemo_timeline"><i class="glyphicon glyphicon-calendar"></i> &nbsp; Servicios</a></li>

        <li><a href="#templatemo_contact"><i class="glyphicon glyphicon-phone-alt"></i> &nbsp; Contáctenos</a></li>
        <li><a href="?r=access"><i class="glyphicon glyphicon-user"></i> &nbsp; Iniciar Sesión</a></li>

    </ul>
</div>
<div class="container_wapper">
    <div id="templatemo_banner_menu">
        <div class="container-fluid">
            <div class="col-xs-4 templatemo_logo">
                <a href="#">
                    <img src="images/LogoV1.png" id="logo_img"  title="" />
                </a>
            </div>
            <div class="col-sm-8 hidden-xs">
                <ul class="nav nav-justified">
                    <li><a href="?r=site/index" class="external-link">Inicio</a></li>
                    <li><a href="#templatemo_about">¿Quiénes Somos?</a></li>
                    <li><a href="#templatemo_events">Buscar Propiedad</a></li>
                    <li><a href="#templatemo_timeline">Servicios</a></li>
                    <li><a href="#templatemo_contact">Contáctenos</a></li>

            </div>
        </div>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>
        </ul>
    </div>
    <div class="col-xs-8 visible-xs">
        <a href="#" id="mobile_menu"><span class="glyphicon glyphicon-th-list"></span></a>
    </div>
</div>
<div id="templatemo_about" class="container_wapper">
    <div class="container-fluid">
        <h1>Resultado de la busqueda</h1>
            <?php $form=$this->beginWidget('CActiveForm', array(
                'id'=>'busqueda-form',
                'action'=>Yii::app()->createUrl('/site/index'),
                // Please note: When you enable ajax validation, make sure the corresponding
                // controller action is handling ajax validation correctly.
                // There is a call to performAjaxValidation() commented in generated controller code.
                // See class documentation of CActiveForm for details on this.
                'enableAjaxValidation'=>false,
            )); ?>
        <div class="row row-centered">

            <div class="col-md-3 col-centered ">
                <blanco>Venta/Arriendo</blanco>

                <?php echo $form->dropDownList($model2,'SERVICIO',
                    array(
                        'Todas' => 'Todas',
                        'Venta' => 'Venta',
                        'Arriendo' => 'Arriendo',
                    ),
                    array("class"=>"form-control select2"),
                    array('empty' => '(Tipo de propiedad)')); ?>
                <?php echo $form->error($model2,'SERVICIO');?>

            </div>
            <div class="col-md-3">
                <blanco>Donde</blanco>
                <?php echo $form->dropDownList($model2,'COMUNAPROPIEDAD',
                    array(
                        'Antofagasta' => 'Antofagasta',
                        'Arica' => 'Arica',
                        'Calama' => 'Calama',
                        'Iquique' => 'Iquique',
                    ),
                    array("class"=>"form-control select2"),
                    array('empty' => '(Tipo de propiedad)')); ?>
                <?php echo $form->error($model2,'COMUNAPROPIEDAD');?>
            </div>
            <div class="col-md-3">
                <blanco>Típo de propiedad</blanco>
                <?php echo $form->dropDownList($model2,'TIPO',
                    array(
                        'Departamento Habitación' => 'Departamento Habitación',
                        'Local' => 'Local',
                        'Oficina Casa' => 'Oficina Casa',
                        'Galpón' => 'Galpón',
                        'Oficina Departamento' => 'Oficina Departamento',
                        'Sitio Comercial' => 'Sitio Comercial',
                        'Sitio Recidencial' => 'Sitio Recidencial',
                        'Propiedad de inversión' => 'Propiedad de inversión',
                        'Terreno' => 'Terreno'
                    ),
                    array("class"=>"form-control select2"),
                    array('empty' => '(Tipo de propiedad)')); ?>
                <?php echo $form->error($model2,'COMUNAPROPIEDAD');?>
            </div>
        </div>
        <br>
        <div class="col-xs-8 col-sm-3">
            <?php echo CHtml::submitButton('Buscar', array("class"=>"btn") ); ?>
        </div>
        <?php $this->endWidget(); ?>


    </div>
</div><!--buscar-->

<div class="navbar-fixed-bottom" id="templatemo_footer">
    <div>
        <p id="footer">Calama &copy; 2015. Propiedades Sol y Cobre.</p>
    </div>
</div>
<script src="/js/jquery.min.js"></script>
<script src="/js/jquery-ui.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.singlePageNav.min.js"></script>
<script src="/js/unslider.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
<script src="/js/templatemo_script.js"></script>


