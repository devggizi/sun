<?php
class SiteController extends CController {
    public function actionIndex() {

        $model=new LoginForm;
        $model1=new Solicitud;
        $model2=new Propiedad();

        // validación de ajax
        if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
        if(isset($_POST['BusquedaForm'])) {
            $this->render('busqueda');
        }elseif(isset($_POST['LoginForm'])) {
            $model->attributes = $_POST['LoginForm'];
            // validate user input and redirect to the previous page if valid
            if ($model->validate() && $model->login())
                $this->redirect("?r=Intra/index");
        }

        // desplegar el login
        $this->render('principal',array('model'=>$model, 'model1'=>$model1, 'model2'=>$model2));


    }

    public function actionBusqueda(){
        $this->layout = 'main';
        $model2=new Propiedad();
        $this->render('busqueda',array('model2'=>$model2));
    }

    public function actionError()
    {
        if($error=Yii::app()->errorHandler->error)
        {
            if(Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

    public function actionLogin()
    {
        $model=new LoginForm;

        // if it is ajax validation request
        if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        // collect user input data
        if(isset($_POST['LoginForm']))
        {
            $model->attributes=$_POST['LoginForm'];
            // validate user input and redirect to the previous page if valid
            if($model->validate() && $model->login())
                $this->redirect("?r=administrador/index");
        }
        // display the login form
        $this->render('login',array('model'=>$model));
    }
    public function actionAccess(){
        $this->render('access');
    }


}