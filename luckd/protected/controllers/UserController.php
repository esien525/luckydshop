<?php

class UserController extends Controller
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
				'actions'=>array('index','view','register'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('myluckydraw','invite','friend','friendprofile','friendrequest','editprofile','dcoin','searchresult','searchresult_invoice','searchresultown','searchresult_invoiceown','updatevoucher','deletevoucher','create','update','password','profile','account','company','companyedit','dashboard','cpanel','user_list','dealer_list','updatedealer','updatenuser','admin','create_supervisor','delete','deletesupervisor','updatesupervisor','deletedealer','deletenuser'),
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
		
		
		$this->render('view',array(
			'model'=>$this->loadModel($id),
			
		));
	}
	
	public function actionUpdatevoucher($id,$vid)
	{
		$model1=$this->loadModelVoucher($vid);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['UserVoucher']))
		{
			$model1->attributes=$_POST['UserVoucher'];
			if($model1->save())
				$this->redirect(array('view','id'=>$model1->user_id,'action'=>'voucherupdated'));
		}
		
		
		$this->render('updatevoucher',array(
			'model'=>$this->loadModel($id),
			'model1'=>$model1,
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new User;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['User']))
		{
			$model->attributes=$_POST['User'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->user_id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}
	
	public function actionDcoin()
	{
		$model=new User;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['User']))
		{
			$model->attributes=$_POST['User'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->user_id));
		}

		$this->render('dcoin',array(
			'model'=>$model,
		));
	}
	
	public function actionCreate_supervisor()
	{
		$model=new User;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['User']))
		{
			$model->attributes=$_POST['User'];
			if($model->save())
				$this->redirect(array('create_supervisor'));
		}

		$model1=new User('search');
		$model1->unsetAttributes();  // clear any default values
		if(isset($_GET['User']))
			$model1->attributes=$_GET['User'];
			
		$this->render('create_supervisor',array(
			'model'=>$model,
			'model1'=>$model1,
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

		if(isset($_POST['User']))
		{
			$model->attributes=$_POST['User'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->user_id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}
	
	public function actionUpdatedealer($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['User']))
		{
			$model->attributes=$_POST['User'];
			if($model->save())
				$this->redirect(array('dealer_list'));
		}

		$this->render('updatedealer',array(
			'model'=>$model,
		));
	}
	
	public function actionUpdatenuser($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['User']))
		{
			$model->attributes=$_POST['User'];
			if($model->save())
				$this->redirect(array('user_list'));
		}

		$this->render('updatenuser',array(
			'model'=>$model,
		));
	}
	
	public function actionUpdatesupervisor($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['User']))
		{
			$model->attributes=$_POST['User'];
			if($model->save())
				$this->redirect(array('create_supervisor'));
		}

		$this->render('updatesupervisor',array(
			'model'=>$model,
		));
	}

	public function actionRegister()
	{
		$model=new User;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['User']))
		{
			$model->attributes=$_POST['User'];
			if($model->save()){
				$userid=$model->user_id;
				$useremail=$model->user_email;
				$refer_by=$model->refer_by;
				include("js/databaseconnection.php");
				if($refer_by!=0){
					mysql_query("INSERT INTO friend (friend_from_id,friend_to_id,friend_datetime,friend_status) VALUES ('$userid','$refer_by',NOW(),'Friend');");
				}
				$encryptid=base64_encode(base64_encode(base64_encode($userid)));
				$message2="
					<p>Welcome to .com!</p>
					<p>Congratulations for successfully creating an account with us. Your user name is as per below. Note that it is in the form of an email address:</p>
					<p>User name: $useremail</p>
					<p>
					Please click the following link to verify your email address with us: <br/>
					<a href='http://" . $_SERVER['HTTP_HOST'] . "/site/verification&id=".$encryptid."'>http://" . $_SERVER['HTTP_HOST'] . "/site/verification&id=".$encryptid."</a>
					</p>
					<p>This will help keep your account safe. If you have any issues verifying your email we will be happy to help you. You can contact us at
					<a href='mailto:support@iapply.com'>support@iapply.com</a>.</p>
					
					<p>
					Sincerely,<br/>
					Iapply.com team
					</p>
					
				";
				//$to = "$useremail";/*Put Your Email Adress Here*/
				/*$subject = "Trademysuperbike Account Verification";
				$from_name = "Trademysuperbike";
				$from_email = "trademysuperbike@gmail.com";
				$message = $message2;
				$header = "From: $from_name <$from_email>";
				mail($to, $subject, $message, $header);*/
		
				/*
				include_once("js/PHPMailer/class.phpmailer.php");
				$mail = new PHPMailer();
				//$mail->IsSMTP();
				$mail->IsHTML(true);
				$mail->ContentType="MIME-Version: 1.0";
				$mail->CharSet="iso-8859-1";
				$mail->Host = 'mail.japaradise.com';
				$mail->Port = 587;
				//$mail->SMTPSecure = "ssl";
				//$mail->SMTPAuth = true;
				$mail->Username = 'iapply@japaradise.com';
				$mail->Password = 'abcd@1234';
				$mail->SetFrom('iapply@japaradise.com');
				$mail->Subject = 'Iapply Account Verification';
				$mail->Priority=1;
				$mail->AddAddress("$useremail");
				//$mail->AddBCC();
				//$mail->AddCC();
				
				$body= "<p>$message2</p>";
				$mail->MsgHTML($body); 
				$mail->AltBody = 'To view the message, please use an HTML compatible email viewer!';
				
				if(!$mail->Send()) { 
				
				} else {*/
				 $this->redirect(array('site/verification'));
				 
				//}
				
			}
		}

		$this->render('register',array(
			'model'=>$model,
		));
	}
	public function actionPassword()
	{
		$model=new User;
		$id=Yii::app()->user->id;
		$model1=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['User']))
		{
			$model1->attributes=$_POST['User'];
			if($model1->save())
				$this->redirect(array('user/account'));
		}

		$this->render('password',array(
			'model1'=>$model1,
			'model'=>$model,
		));
	}
	
	public function actionProfile()
	{
		$model=new User;
		$id=Yii::app()->user->id;
		$model1=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['User']))
		{
			$model1->attributes=$_POST['User'];
			if($model1->save())
				$this->redirect(array('user/account'));
		}

		$this->render('profile',array(
			'model1'=>$model1,
			'model'=>$model,
		));
	}
	public function actionAccount()
	{
		$model=new User;
		$id=Yii::app()->user->id;
		$model1=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['User']))
		{
			$model1->attributes=$_POST['User'];
			if($model1->save())
				$this->redirect(array('user/profile','action'=>'updated'));
		}

		$this->render('account',array(
			'model1'=>$model1,
			'model'=>$model,
		));
	}
	public function actionCompany()
	{
		$model=new User;
		$id=Yii::app()->user->id;
		$model1=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['User']))
		{
			$model1->attributes=$_POST['User'];
			if($model1->save())
				$this->redirect(array('user/profile','action'=>'updated'));
		}

		$this->render('company',array(
			'model1'=>$model1,
			'model'=>$model,
		));
	}
	public function actionCompanyedit()
	{
		$model=new User;
		$id=Yii::app()->user->id;
		$model1=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['User']))
		{
			$model1->attributes=$_POST['User'];
			if($model1->save())
				$this->redirect(array('user/company'));
		}

		$this->render('companyedit',array(
			'model1'=>$model1,
			'model'=>$model,
		));
	}
	public function actionCpanel()
	{
		$myid=Yii::app()->user->id;
		$model=$this->loadModel($myid);
		
		$gender=$model->user_gender;
		if($gender==""){
			$this->redirect(array('user/editprofile'));
		}
		$dataProvider=new CActiveDataProvider('User');
		$this->render('cpanel',array(
			'dataProvider'=>$dataProvider,
			'model'=>$model,
		));
	}
	
	public function actionFriendprofile($id)
	{
		
		$model=$this->loadModel($id);
		
		$gender=$model->user_gender;
		if($gender==""){
			$this->redirect(array('user/editprofile'));
		}
		$dataProvider=new CActiveDataProvider('User');
		$this->render('friendprofile',array(
			'dataProvider'=>$dataProvider,
			'model'=>$model,
		));
	}
	
	public function actionFriend()
	{
		$myid=Yii::app()->user->id;
		$model=$this->loadModel($myid);
		
		$gender=$model->user_gender;
		if($gender==""){
			$this->redirect(array('user/editprofile'));
		}
		$dataProvider=new CActiveDataProvider('User');
		$this->render('friend',array(
			'dataProvider'=>$dataProvider,
			'model'=>$model,
		));
	}
	
	public function actionFriendrequest()
	{
		$myid=Yii::app()->user->id;
		$model=$this->loadModel($myid);
		
		$gender=$model->user_gender;
		if($gender==""){
			$this->redirect(array('user/editprofile'));
		}
		$dataProvider=new CActiveDataProvider('User');
		$this->render('friendrequest',array(
			'dataProvider'=>$dataProvider,
			'model'=>$model,
		));
	}
	
	public function actionInvite()
	{
		$myid=Yii::app()->user->id;
		$model=$this->loadModel($myid);
		
		$gender=$model->user_gender;
		if($gender==""){
			$this->redirect(array('user/editprofile'));
		}
		$dataProvider=new CActiveDataProvider('User');
		$this->render('invite',array(
			'dataProvider'=>$dataProvider,
			'model'=>$model,
		));
	}
	
	public function actionMyluckydraw()
	{
		$myid=Yii::app()->user->id;
		$model=$this->loadModel($myid);
		
		$gender=$model->user_gender;
		if($gender==""){
			$this->redirect(array('user/editprofile'));
		}
		$dataProvider=new CActiveDataProvider('User');
		$this->render('myluckydraw',array(
			'dataProvider'=>$dataProvider,
			'model'=>$model,
		));
	}
	
	public function actionEditprofile()
	{
		$myid=Yii::app()->user->id;
		$model=$this->loadModel($myid);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['User']))
		{
			$model->attributes=$_POST['User'];
			if($model->save())
				$this->redirect(array('cpanel'));
		}
		$this->render('editprofile',array(
			'model'=>$model,
		));
	}
	
	public function actionDashboard()
	{
		$model=new Order('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Order']))
			$model->attributes=$_GET['Order'];
			
		$dataProvider=new CActiveDataProvider('User');
		$this->render('dashboard',array(
			'dataProvider'=>$dataProvider,
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
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}
	public function actionDeletesupervisor($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('create_supervisor'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}
	public function actionDeletedealer($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('dealer_list'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}
	
	public function actionDeletenuser($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('user_list'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}
	
	public function actionDeletevoucher($id,$uid)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModelVoucher($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('view','id'=>$uid));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('User');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}
	
	public function actionSearchresult()
	{
		$dataProvider=new CActiveDataProvider('User');
		$this->render('searchresult',array(
			'dataProvider'=>$dataProvider,
		));
	}
	public function actionSearchresultown()
	{
		$dataProvider=new CActiveDataProvider('User');
		$this->render('searchresultown',array(
			'dataProvider'=>$dataProvider,
		));
	}
	
	public function actionSearchresult_invoice()
	{
		$dataProvider=new CActiveDataProvider('User');
		$this->render('searchresult_invoice',array(
			'dataProvider'=>$dataProvider,
		));
	}
	
	public function actionSearchresult_invoiceown()
	{
		$dataProvider=new CActiveDataProvider('User');
		$this->render('searchresult_invoiceown',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new User('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['User']))
			$model->attributes=$_GET['User'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
	
	public function actionDealer_list()
	{
		$model=new User('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['User']))
			$model->attributes=$_GET['User'];

		$this->render('dealer_list',array(
			'model'=>$model,
		));
	}
	
	public function actionUser_list()
	{
		$model=new User('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['User']))
			$model->attributes=$_GET['User'];

		$this->render('user_list',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=User::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
	
	public function loadModelVoucher($id)
	{
		$model=UserVoucher::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='user-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
