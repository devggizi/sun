<?php
class AccessController extends CController{
    public $layout='//layouts/loginLayout';

    public function actionIndex() {
        $model=new LoginForm;

        // validación de ajax
        if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        // obtener datos del usuario
        if(isset($_POST['LoginForm']))
        {
            $model->attributes=$_POST['LoginForm'];
            // validate user input and redirect to the previous page if valid
            if($model->validate() && $model->login())
                $this->redirect("?r=Intra/index");
        }
        // desplegar el login
        $this->render('login',array('model'=>$model));
    }
    public function actionLogout()
    {
        Yii::app()->user->logout();
        Yii::app()->session->destroy();
        $this->redirect('?r=site/index');


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
}
