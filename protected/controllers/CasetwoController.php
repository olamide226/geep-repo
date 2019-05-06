<?php

class CasetwoController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

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
				'actions'=>array('index','view', 'aggregator', 'dta', 'admin'),
				'users'=>array('@'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','admin'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('delete','excel','excelDaily'),
				'users'=>array('ADMIN','Isaac_Fasoyin'),
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
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		// $get_boi_rec=Boi::model()->findByPk($id);

       // $model->date =Yii::app()->user->id;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		$model = new Casetwo;
		if(isset($_POST['Casetwo']))
		{
			$model->attributes=$_POST['Casetwo'];
            $model->created_by =Yii::app()->user->id;
			if($model->save())

				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
			// 'get_boi_rec'=>$get_boi_rec,
		));
	}
	
	
	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionAggregator($id=0)
	{
		$get_boi_rec =Boi::model()->findByPk($id);
		$model = new Casetwo;

       // $model->date =Yii::app()->user->id;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Casetwo']))
		{
			$model->attributes = $_POST['Casetwo'];
            $model->created_by =Yii::app()->user->id;
			$model->application_source = 'aggregator' ;
			
			if($model->save())
				$this->redirect( array('view','id'=>$model->id, 'view' => 'aggregator'));
		}

		$this->render('create',array(
			'model'=>$model,
			'get_boi_rec'=>$get_boi_rec,
			 'view' => 'aggregator'
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	 
	 public function actionDtA($id=0)
	{
		$get_boi_rec =Boi::model()->findByPk($id); 
		$model = new Casetwo;

       // $model->date =Yii::app()->user->id;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Casetwo']))
		{
			$model->attributes=$_POST['Casetwo'];
            $model->created_by =Yii::app()->user->id;
			$model->application_source = 'dta' ;
			
			if($model->save())
				$this->redirect( array('view', 'id'=>$model->id, 'view' => 'dta'));
		}

		$this->render('create',array(
			'model'=>$model,
			'get_boi_rec'=>$get_boi_rec,
			 'view' => 'dta'
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

		if(isset($_POST['Casetwo']))
		{
			$model->attributes=$_POST['Casetwo'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
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
		$dataProvider=new CActiveDataProvider('Casetwo');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Casetwo('search');
		$model->unsetAttributes();  // clear any default values
        $model->created_by =Yii::app()->user->id;
		
		if(isset($_GET['Casetwo']))
			$model->attributes=$_GET['Casetwo'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Casetwo the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Casetwo::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

    public function actionExcel()
    {
		
		$get_start = $_POST['start_date'] ;
		$get_end = $_POST['end_date'] ;
		$get_source = isset( $_POST['application_source'] ) ? $_POST['application_source'] : "dta";
		
		//$use_start = isset($get_start) ? $get_start : //else use start of the week
		//$use_start = isset($end_date)  ? $get_end  : //else use start of the week
		
        Yii::import('ext.ECSVExport');
		$criteria = new CDbCriteria;
		$criteria->addBetweenCondition('date', $get_start, $get_end, 'AND') ;
		$criteria->addSearchCondition('application_source', $get_source) ;
		
		
		$dataProvider = new CActiveDataProvider('Casetwo',array('criteria' => $criteria) );
        $csv = new ECSVExport($dataProvider);
        $output = $csv->toCSV();
		Yii::app()->getRequest()->sendFile("fullMarketMoniReport.csv", $output, true);


    }

    public function actionExcelDaily()
    {
        $date = date('Y-m-d');

//        $date=new DateTime(); //this returns the current date time
//        $result = $date->format('d-m-Y');
//        $krr = explode('-',$result);
//        $result = implode("-",$krr);

        Yii::import('ext.ECSVExport');
        $dataProvider=new CActiveDataProvider('Casetwo' ,array('criteria'=>array( 'condition'=>'LEFT(date,10)="'.$date.'"')));

        $csv = new ECSVExport($dataProvider);
        $output = $csv->toCSV();
        Yii::app()->getRequest()->sendFile("dailyDTAReport.csv", $output, true);


    }



    /**
	 * Performs the AJAX validation.
	 * @param Casetwo $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='casetwo-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
