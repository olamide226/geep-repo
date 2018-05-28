<?php

class EnquiryController extends Controller
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
				'actions'=>array('index','view'),
				'users'=>array('@'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('admin','create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('delete','excel','excelDaily'),
				'users'=>array('admin','Cynthia_Onwumah','Isaac_Fasoyin'),
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
		$model=new Enquiry;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Enquiry']))
		{
            $model->attributes=$_POST['Enquiry'];
            $model->created_by =Yii::app()->user->id;
            if($model->save())

                $this->redirect(array('view','id'=>$model->id));
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

		if(isset($_POST['Enquiry']))
		{
			$model->attributes=$_POST['Enquiry'];
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
		$dataProvider=new CActiveDataProvider('Enquiry');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Enquiry('search');
		$model->unsetAttributes();  // clear any default values
        $model->created_by =Yii::app()->user->id;
		if(isset($_GET['Enquiry']))
			$model->attributes=$_GET['Enquiry'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Enquiry the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Enquiry::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
	
	
    public function actionExcel()
    {	
		$get_start = $_POST['start_date'] ;
		$get_end = $_POST['end_date'] ;
		
		//$use_start = isset($get_start) ? $get_start : //else use start of the week
		//$use_start = isset($end_date)  ? $get_end  : //else use start of the week
		
        Yii::import('ext.ECSVExport');
		$criteria = new CDbCriteria;
		$criteria->addBetweenCondition('date', $get_start, $get_end, 'AND') ;
		
		$dataProvider = new CActiveDataProvider('Enquiry',array('criteria' => $criteria) );
        $csv = new ECSVExport($dataProvider);
        $output = $csv->toCSV();
		Yii::app()->getRequest()->sendFile("fullEnquiryReport.csv", $output, true);


    }

    public function actionExcelDaily()
    {
        $date = date('Y-m-d');

//        $date=new DateTime(); //this returns the current date time
//        $result = $date->format('d-m-Y');
//        $krr = explode('-',$result);
//        $result = implode("-",$krr);

        Yii::import('ext.ECSVExport');
        $dataProvider=new CActiveDataProvider('Enquiry' ,array('criteria'=>array( 'condition'=>'LEFT(date,10)="'.$date.'"')));

        $csv = new ECSVExport($dataProvider);
        $output = $csv->toCSV();
        Yii::app()->getRequest()->sendFile("dailyEnquiryReport.csv", $output, true);


    }

    /**
	 * Performs the AJAX validation.
	 * @param Enquiry $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='enquiry-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
