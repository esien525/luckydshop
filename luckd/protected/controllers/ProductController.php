<?php

class ProductController extends Controller
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
				'actions'=>array('index','list','featured'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('joined','participate'),
				'users'=>array('@'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('view','create','update','admin','delete'),
				//'users'=>array('@'),
				'expression'=>'Yii::app()->user->usertype=="Administrator"',
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
	public function actionList()
	{
		$dataProvider=new CActiveDataProvider('Product');
		$this->render('list',array(
			'dataProvider'=>$dataProvider,
		));
		
	}
	
	public function actionFeatured()
	{
		$datenow=date("Y-m-d H:i:s");
		$dataProvider = new CActiveDataProvider ('Product', array ( 
			'criteria' => array (
				'condition' => 'product_featured="Yes"',
			), 
			'pagination' => array ( 
				'PageSize' => 28, 
			) 
		));
		$this->render('featured',array(
			'dataProvider'=>$dataProvider,
		));
		
	}
	
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
		$model=new Product;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Product']))
		{
			$model->attributes=$_POST['Product'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->product_id));
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

		if(isset($_POST['Product']))
		{
			$model->attributes=$_POST['Product'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->product_id));
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

	/**
	 * Lists all models.
	 */
	public function actionIndex($id)
	{
		$model1=new Luckydraw;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Luckydraw']))
		{
			$model1->attributes=$_POST['Luckydraw'];
			if($model1->save())
				$this->redirect(array('participate','id'=>$model1->luckydraw_productid,'lid'=>$model1->luckydraw_id));
		}
		$this->render('index',array(
			'model'=>$this->loadModel($id),
			'model1'=>$model1,
		));
	}
	
	public function actionJoined($id)
	{
		$model1=new Luckydraw;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Luckydraw']))
		{
			$model1->attributes=$_POST['Luckydraw'];
			if($model1->save())
				$this->redirect(array('participate','id'=>$model1->luckydraw_productid,'lid'=>$model1->luckydraw_id));
		}
		$this->render('joined',array(
			'model'=>$this->loadModel($id),
			'model1'=>$model1,
		));
	}
	
	public function actionParticipate($id,$lid)
	{
		$model1=$this->loadModelLuckydraw($lid);

		if(isset($_POST['Luckydraw']))
		{
			$model1->attributes=$_POST['Luckydraw'];
			if($model1->save()){
				include("js/databaseconnection.php");
				$luckydraw_id=$model1->luckydraw_id;
				$luckydraw_refno1=$model1->luckydraw_refno1;
				$luckydraw_userid=$model1->luckydraw_userid;
				$luckydraw_productid=$model1->luckydraw_productid;
				$luckydraw_amount=$model1->luckydraw_amount;
				for ($i = 1; $i <= $luckydraw_amount; $i++) {
				mysql_query("INSERT INTO luckydraw_code (luckydraw_id,lcode_userid,lcode_productid,lcode_status) VALUES ('$luckydraw_id','$luckydraw_userid','$luckydraw_productid','Confirmed');");
				}
				$myid=Yii::app()->user->id;
				$mycoin=Yii::app()->user->usercoin;
				$mynewcoin=$mycoin-$luckydraw_amount;
				mysql_query("UPDATE user SET user_dcoin='$mynewcoin' WHERE 	user_id	='$myid'");
				mysql_query("INSERT INTO transaction_coin (transactionc_refno1,transactionc_userid,transactionc_productid,transactionc_luckydrawid,transactionc_amount,transactionc_status,transactionc_datetime) VALUES ('$luckydraw_refno1','$luckydraw_userid','$luckydraw_productid','$luckydraw_id','$luckydraw_amount','Successful',NOW());");
				$this->redirect(array('index','id'=>$model1->luckydraw_productid));
			}
		}
		
		$this->render('participate',array(
			'model'=>$this->loadModel($id),
			'model1'=>$model1,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Product('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Product']))
			$model->attributes=$_GET['Product'];

		$this->render('admin',array(
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
		$model=Product::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
	
	public function loadModelLuckydraw($id)
	{
		$model=Luckydraw::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='product-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
