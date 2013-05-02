<?php
class UserReservationController extends Controller
{
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
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
//			array('deny',  // deny all users
//				'users'=>array('*'),
//			),
		);
	}

        /**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	
    public function actionIndex()
    {
       $data = 'You must increase your experience';
        $this->render('index',array('data'=>$data,'data2'=>'this is data2 pass from controller'));
    }
    public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}
    public function actionCreate()
	{
        //echo Yii::app()->baseUrl.'/assets/js/jquery-1.9.1.js';exit;
        
        //die(Yii::app()->request->baseUrl.'/assets/js');
		$model=new UserReservation;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
//echo '<pre>';
//print_r($_POST['UserReservation']);
//echo '</pre>';
//exit;
                $model->total_seats = '50';
                $model->available_seats = '20';
                $model->reserve_date_time = '2013-04-27';
		if(isset($_POST['UserReservation']))
		{
			$model->attributes=$_POST['UserReservation'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}
        public function loadModel($id)
	{
		$model=Reservation::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}


}
