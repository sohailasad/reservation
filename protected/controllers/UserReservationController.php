<?php
class UserReservationController extends Controller
{
    public $layout='//layouts/column2';
    public function actionIndex()
    {
       $data = 'You must increase your experience';
        $this->render('index',array('data'=>$data,'data2'=>'this is data2 pass from controller'));
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


}
