<?php

class HomeController extends Controller
{
	public function actionIndex()
	{

            if (!Yii::app()->user->isAdmin){
                $timestamp = time();
                $user = User::model()->findByPk(Yii::app()->user->getId());
                $requests = $user->getCurrentRequests();
                $devices = Device::model()->newest()->findAll();
                $this->render('index',array(
                    'devices' => $devices, 'requests' => $requests, 'timestamp' => $timestamp
                ));
            } else {
                $timestamp = time();
                $criteria = new CDbCriteria;
                $criteria->order = 'created_at DESC';
                $criteria->condition = 'status = 0';
                $new_requests = Request::model()->findAll($criteria);

                $criteria->order = 'end_time ASC';
                $criteria->condition = "status = 1 AND request_end_time > {$timestamp}";
                $unexpired_requests = Request::model()->findAll($criteria);

                $criteria->order = 'end_time ASC';
                $criteria->condition = "status = 1 AND request_end_time <= {$timestamp}";
                $expired_requests = Request::model()->findAll($criteria);

                $this->render('admin_page', 
                    array('new_requests' => $new_requests, 
                        'unexpired_requests' => $unexpired_requests,
                        'expired_requests' => $expired_requests,
                        'timestamp' => $timestamp)
                    );
            }
	}
        
        // Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}
?>
