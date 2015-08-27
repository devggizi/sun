<?php

class PropiedadController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/intralayout';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view', 'ver', 'imagen', 'busqueda'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update', 'upload'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
    public function actionView($id)
    {
        $this->render('vista',array(
            'model'=>$this->loadModel($id),
        ));
    }
	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */


	public function actionCreate()
	{
		$model=new Propiedad;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);


		if(isset($_POST['Propiedad']))
		{
			$model->attributes=$_POST['Propiedad'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->IDPROP));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Propiedad']))
		{
			$model->attributes=$_POST['Propiedad'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->IDPROP));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}
	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$model=new Propiedad;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		if(isset($_POST['Propiedad']))
		{
			$model->attributes=$_POST['Propiedad'];
			if($model->save())
				$this->redirect(array('propiedad/imagen', 'id'=>$model->IDPROP, 'rut'=>$model->RUTCLIENTE));
		}

		$this->render('gestion',array('model'=>$model,));


	}

    public function actionImagen($id,$rut){
        $model1=new Imagen();
        $model2 = new Cliente();
        $model2 = Cliente::model()->findByPk($rut);
        // this is my model related to table
        if(isset($_POST['Imagen']))
        {
            $rnd = rand(0,9999);  // generate random number between 0-9999
            $model1->attributes=$_POST['Imagen'];

            $uploadedFile=CUploadedFile::getInstance($model1,'URLIMAGEN');
            $fileName = "{$rnd}-{$uploadedFile}";  // random number + file name
            $model1->URLIMAGEN = $fileName;
            $model1->IDPROP = $id;

            if($model1->save())
            {
                $uploadedFile->saveAs(Yii::app()->basePath.'/../images/'.$fileName);
                $this->redirect(array('site/index'));
            }
        }
        $this->render('imagen',array(
            'model'=>$this->loadModel($id),
            'model2'=>$model2,'model1'=>$model1,
        ));
    }





    public function actionVer(){
        $dataProvider=new CActiveDataProvider('Propiedad',array(
            'pagination'=>array(
                'pageSize'=>20,
            ),
        ));
        $this->render('index',array(
            'dataProvider'=>$dataProvider,
        ));
    }

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Propiedad('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Propiedad']))
			$model->attributes=$_GET['Propiedad'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Propiedad the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Propiedad::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Propiedad $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='propiedad-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
