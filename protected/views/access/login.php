<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

?>

<div class="container">
    <div class="codrops-top">
        <div class="clr"></div>
    </div>
    <header>
        <p><ul>
            <li>
                <h1><a href="?r=site/index" class="fa fa-home fa-4x ">Volver al inicio</a></h1>
            </li>
        </p></ul>
        <span><h1>Ingreso al sitio administrativo</span></h1>
    </header>
    <section>
        <div id="container_demo" >
            <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
            <a class="hiddenanchor" id="toregister"></a>
            <a class="hiddenanchor" id="tologin"></a>
            <div id="wrapper">
                <?php $form=$this->beginWidget('CActiveForm'); ?>
                <div id="login" class="animate form">
                    <!-- <form  action="includes/process_login.php" method="post" name="login_form" > -->
                    <h1>Iniciar Sesión</h1>
                    <p>
                        <label for="username" class="uname" data-icon="u"  >Correo de usuario.</label>
                        <?php echo $form->textField($model,'username'); ?>
                        <?php echo $form->error($model,'username'); ?>
                    </p>
                    <p>
                        <label for="password" class="youpasswd" data-icon="p"> Contraseña. </label>
                        <?php echo $form->passwordField($model,'password'); ?>
                        <?php echo $form->error($model,'password'); ?>
                    </p>
                    <p class="login button">
                        <input  type=submit  value ="Ingresar" name ="Ingresar" id ="Ingresar"  />
                    </p>
                <?php $this->endWidget(); ?>

         </div>


            </div>
        </div>
    </section>
</div>