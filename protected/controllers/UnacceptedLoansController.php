<?php

class UnacceptedLoansController extends Controller
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
				'actions'=>array('index','view','call','call_list'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('@'),
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

        $model2 = new UnacceptedLoansCalls;
        //$model2->boi_id = $id;
        //$model2->member_id = $id;

        if(isset($_POST['UnacceptedLoansCalls']))
        {
            $model2->attributes=$_POST['UnacceptedLoansCalls'];
            if($model2->validate())
            {
                if($model2->save()){
                    $this->redirect(array('view','id'=>$id));
                    echo "<script> 
                    alert('Successfully Submitted');
                         </script>";
                }else{}
            }
        }


        $this->render('view',array(
            'model'=>$this->loadModel($id),'model2'=>$model2,
        ));

//		$this->render('view',array(
//			'model'=>$this->loadModel($id),
//		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new UnacceptedLoans;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['UnacceptedLoans']))
		{
			$model->attributes=$_POST['UnacceptedLoans'];
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

		if(isset($_POST['UnacceptedLoans']))
		{
			$model->attributes=$_POST['UnacceptedLoans'];
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
		$dataProvider=new CActiveDataProvider('UnacceptedLoans');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new UnacceptedLoans('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['UnacceptedLoans']))
			$model->attributes=$_GET['UnacceptedLoans'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return UnacceptedLoans the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=UnacceptedLoans::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}


//    public function actionCall()
//    {
//        $model=new UnacceptedLoansCalls;
//
//        // Uncomment the following line if AJAX validation is needed
//        // $this->performAjaxValidation($model);
//
//        if(isset($_POST['UnacceptedLoansCalls']))
//        {
//            $model->attributes=$_POST['UnacceptedLoansCalls'];
//            if($model->save())
//                $this->redirect(array('view','id'=>$model->id));
//        }
//
//        $this->render('create',array(
//            'model'=>$model,
//        ));
//    }

    public function actionCall($id)
    {
        $model=new Conversations;
        print_r($model);die();
        // uncomment the following code to enable ajax-based validation


        $this->render('UnacceptedLoansCalls',array('model'=>$model));
    }

    /**
	 * Performs the AJAX validation.
	 * @param UnacceptedLoans $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='unaccepted-loans-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
