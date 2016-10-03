<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionPackage()
	{
		
		$this->render('package');
	}
	
	public function actionDrawresult()
	{
		
		$this->render('drawresult');
	}
	
	public function actionDiscovery()
	{
		
		$this->render('discovery');
	}
	
	public function actionOrderandreturns()
	{
		
		$this->render('orderandreturns');
	}
	public function actionPrivacynotice()
	{
		
		$this->render('privacynotice');
	}
	public function actionConditionofuse()
	{
		
		$this->render('conditionofuse');
	}
	
	public function actionSuccesspackage()
	{
		
		$this->render('successpackage');
	}
	
	public function actionPurchasepackage($id)
	{
		
		$myid=Yii::app()->user->id;
		$myusercoin=Yii::app()->user->usercoin;
		$packageid=$id;
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < 6; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
	
		include("js/databaseconnection.php");
		$queryPackage="Select * FROM package WHERE package_id='$id'";		
		$resultPackage=mysql_query($queryPackage);
		while($rowPackage=mysql_fetch_array($resultPackage)){
			$package_id=$rowPackage['package_id'];
			$package_name=$rowPackage['package_name'];
			$package_price_normal=$rowPackage['package_price_normal'];
			$package_price_promotion=$rowPackage['package_price_promotion'];
			$package_coin_amount=$rowPackage['package_coin_amount'];
			$package_status=$rowPackage['package_status'];
			if($package_price_promotion!=""){
				$thisprice=$package_price_promotion;
			} else{
				$thisprice=$package_price_normal;
			}
		}
		$myusercoin=$myusercoin+$package_coin_amount;
		mysql_query("INSERT INTO transaction_coin (transactionc_refno1,transactionc_refno2,transactionc_userid,transactionc_packageid,transactionc_price,transactionc_amount,transactionc_status,transactionc_datetime) VALUES ('$randomString','','$myid','$packageid','$thisprice','$package_coin_amount','Successful',NOW());");
		mysql_query("UPDATE user SET user_dcoin='$myusercoin' WHERE user_id='$myid'");
		
		$queryTransaction="Select * FROM transaction_coin WHERE transactionc_userid='$myid' ORDER BY transactionc_id DESC LIMIT 1";		
		$resultTransaction=mysql_query($queryTransaction);
		while($rowTransaction=mysql_fetch_array($resultTransaction)){
			$transactionc_id=$rowTransaction['transactionc_id'];
		}
		$this->redirect(array('successpackage','id'=>$transactionc_id));
		$this->render('purchasepackage');
	}
	
	public function actionIndex()
	{
		/*$model=new Car;
		$limit=20;
		$dataProvider=new CActiveDataProvider('Request',
		array(
		'criteria'=>array(
		'order'=>'request_id DESC',
		),
		'pagination'=>array(
		'pageSize'=>$limit,
		),
		));
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		
		$model1=new Subscribe;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Subscribe']))
		{
			$model1->attributes=$_POST['Subscribe'];
			if($model1->save())
				$this->redirect(array('mag_subscribe'));
		}
		
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
			'model'=>$model,
			'model1'=>$model1,
		));*/
		$this->render('index');
	}
	public function actionSelectdaily()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('selectdaily');
	}
	public function actionSelectweekly()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('selectweekly');
	}
	public function actionSelectmonthly()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('selectmonthly');
	}
	public function actionForgetpassword()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('forgetpassword');
	}
	public function actionHome()
	{
		$model=new Car;
		$limit=20;
		$dataProvider=new CActiveDataProvider('Request',
		array(
		'criteria'=>array(
		'order'=>'request_id DESC',
		),
		'pagination'=>array(
		'pageSize'=>$limit,
		),
		));
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('home',array(
			'dataProvider'=>$dataProvider,
			'model'=>$model,
		));
	}
	public function actionDirectory()
	{
		$model=new Car;
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('directory',array(
			'model'=>$model,
		));
	}
	public function actionBrand()
	{
		$model=new Car;
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('brand',array(
			'model'=>$model,
		));
	}
	public function actionLoan_calculator()
	{
		$model=new User;
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('loan_calculator',array(
			'model'=>$model,
		));
	}
	
	public function actionBrand_car($id)
	{
		$model=new Car;
		$where = "car_status='Active' and car_make='$id'";
		$limit=20;
		$dataProvider=new CActiveDataProvider('Car',
		array(
		'criteria'=>array(
		'condition'=>$where,
		'order'=>'car_id DESC',
		),
		'pagination'=>array(
		'pageSize'=>$limit,
		),
		));
		$this->render('brand_car',array(
			'dataProvider'=>$dataProvider,
			'model'=>$model,
		));
	}
	public function actionNewsletter_subscribe()
	{
		$model=new Car;
		$n_username=$_POST['newsletter_name'];
		$n_email=$_POST['newsletter_email'];
			include("js/databaseconnection.php");
			$queryN="Select * FROM newsletter where newsletter_email='$n_email'";
			$resultN=mysql_query($queryN);
			$num_rows_N = mysql_num_rows($resultN);
			
			if($num_rows_N==0){
			mysql_query("INSERT INTO newsletter (newsletter_username, newsletter_email, newsletter_datetime) VALUES ('$n_username', '$n_email', NOW());");
			}
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('newsletter_subscribe',array(
			'model'=>$model,
		));
	}
	
	public function actionMag_subscribe()
	{
		$model=new Car;
		
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('mag_subscribe',array(
			'model'=>$model,
		));
	}
	public function actionList()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('list');
	}
	
	
	public function actionRoom()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('room');
	}
	
	public function actionWaiting_verification()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('waiting_verification');
	}
	
	public function actionVerification()
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
			if($model->validate() && $model->login()){
				$thisuid=Yii::app()->user->id;
				include("js/databaseconnection.php");
				$query="Select * FROM user where user_id=$thisuid";
				$result=mysql_query($query);
				
				while($row=mysql_fetch_array($result))
				{
					$user_status=$row['user_status'];
				}
				if($user_status=="active"){
					if(Yii::app()->user->returnUrl=="user/register"){
						$this->redirect(array('site/index'));
					}
					else{
						$myuserlevel=Yii::app()->user->usertype;
						if($myuserlevel=="admin"){
							$this->redirect(array('user/cpanel'));
						}
						else{
							$this->redirect(array('user/dashboard'));
						}
					
					}
				}else{
					Yii::app()->user->logout();
					$this->redirect(array('site/verification'));
				}
				
				
			}
				
				//$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('verification',array('model'=>$model));
	}

	public function actionAboutus()
	{
		$model=new User;
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('aboutus',array(
			'model'=>$model,
		));
	}
	
	public function actionAdvertise()
	{
		$model=new User;
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('advertise',array(
			'model'=>$model,
		));
	}
	
	public function actionTerms()
	{
		$model=new User;
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('terms',array(
			'model'=>$model,
		));
	}
	
	public function actionPrivacy_policy()
	{
		$model=new User;
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('privacy_policy',array(
			'model'=>$model,
		));
	}
	
	public function actionGift_certificate()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('gift_certificate');
	}
	
	public function actionKids_birthday()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('kids_birthday');
	}
	
	public function actionSet_lunch()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('set_lunch');
	}
	
		public function actionMenu()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('menu');
	}
	
	public function actionRestaurant_gallery()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('restaurant_gallery');
	}
	public function actionFood_gallery()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('food_gallery');
	}
	
	public function actionOutlet()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('outlet');
	}
	
	public function actionIndex2()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index2');
	}
	
	public function actionPromotion()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('promotion');
	}
	
	public function actionCompany_profile()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('company_profile');
	}
	public function actionHow_to_order()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('how_to_order');
	}
	public function actionGallery()
	{
		$model=new Car;
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('gallery',array(
			'model'=>$model,
		));
	}
	
	public function actionVideo()
	{
		$model=new Car;
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('video',array(
			'model'=>$model,
		));
	}
	
	public function actionEbook()
	{
		$model=new Car;
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('ebook',array(
			'model'=>$model,
		));
	}
	public function actionThankyou()
	{
		$model=new User;
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('thankyou',array(
			'model'=>$model,
		));
	}
	
	public function actionRental()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('rental');
	}
	
	public function actionEvent()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$headers="From: {$model->email}\r\nReply-To: {$model->email}";
				mail($model->receipt,$model->subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		
		$model1=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model1->attributes=$_POST['ContactForm'];
			if($model1->validate())
			{
				$headers="From: {$model1->email}\r\nReply-To: {$model1->email}";
				mail($model1->receipt,$model1->subject,$model1->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		
		$model2=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model2->attributes=$_POST['ContactForm'];
			if($model2->validate())
			{
				$headers="From: {$model2->email}\r\nReply-To: {$model2->email}";
				mail($model2->receipt,$model2->subject,$model2->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('event',array('model'=>$model,'model1'=>$model1,'model2'=>$model2));
	}
	
	
	/**
	 * This is the action to handle external exceptions.
	 */
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

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new User;
		$model1=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model1->attributes=$_POST['ContactForm'];
			if($model1->validate())
			{
				$headers="From: {$model1->email}\r\nReply-To: {$model1->email}";
				mail($model1->receipt,$model1->subject,$model1->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		
		$this->render('contact',array('model'=>$model,'model1'=>$model1));
	}
	
	public function actionContact_franchise()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$headers="From: {$model->email}\r\nReply-To: {$model->email}";
				mail($model->receipt,$model->subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		
		$this->render('contact_franchise',array('model'=>$model));
	}
	
	public function actionContact_join()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$headers="From: {$model->email}\r\nReply-To: {$model->email}";
				//mail($model->receipt,$model->subject,$model->body,$headers);
				$email = Yii::app()->email;
				$email->to = 'jeff_yeoh87@hotmail.com';
				$email->subject = 'Hello';
				$email->message = 'Hello brother';
				$email->send();
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		
		$this->render('contact_join',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
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
			if($model->validate() && $model->login()){
				$thisuid=Yii::app()->user->id;
				$this->redirect(array('user/cpanel'));
				/*include("js/databaseconnection.php");
				$query="Select * FROM user where user_id=$thisuid";
				$result=mysql_query($query);
				
				while($row=mysql_fetch_array($result))
				{
					$user_status=$row['user_status'];
				}
				if($user_status=="active"){
					if(Yii::app()->user->returnUrl=="user/register"){
						$this->redirect(array('site/index'));
					}
					else{
						$myuserlevel=Yii::app()->user->usertype;
						$this->redirect(array('user/cpanel'));
					
					}
				}else{
					Yii::app()->user->logout();
					$this->redirect(array('site/verification'));
				}*/
				
				
			}
				
				//$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}
