<?php
include("js/databaseconnection.php");

class AddCartController extends Controller
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
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','deleteProduct','deleteCart','changeQuantity'),
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
		$model=new AddCart;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['AddCart']))
		{
			$model->attributes=$_POST['AddCart'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->ac_id));
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

		if(isset($_POST['AddCart']))
		{
			$model->attributes=$_POST['AddCart'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->ac_id));
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
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('AddCart');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new AddCart('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['AddCart']))
			$model->attributes=$_GET['AddCart'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	public function actionDeleteProduct($ac_id)
	{
		mysql_query("Delete from add_cart where ac_id='$ac_id'") or die(mysql_error());
	}

	public function actionDeleteCart($cart_id)
	{
		mysql_query("Delete from add_cart where ac_cart_id='$cart_id'") or die(mysql_error());
		mysql_query("Delete from cart where cart_id='$cart_id'") or die(mysql_error());
	}

	public function actionChangeQuantity($count,$ac_id,$cart_id)
	{
		mysql_query("Update add_cart set ac_quantity = ac_quantity+$count WHERE ac_id = '$ac_id'") or die(mysql_error());

		$query_subtotal = "SELECT  SUM(ac_quantity*ac_amount) as subtotal_amount FROM `add_cart` WHERE ac_id='$ac_id'";
		$result_subtotal= mysql_query($query_subtotal) or die (mysql_error());
		while ($row_subtotal = mysql_fetch_array($result_subtotal)) 
		{
			$subtotal_amount = $row_subtotal['subtotal_amount'];
		}
		
		$sql_AC = "SELECT  SUM(ac_quantity*ac_amount) as total_amount FROM `add_cart` WHERE ac_cart_id='$cart_id'";
		$res_AC = mysql_query($sql_AC) or die (mysql_error());
		while ($row_AC = mysql_fetch_array($res_AC)) 
		{
			$total_amount = $row_AC['total_amount'];

			mysql_query("UPDATE `cart` SET `cart_total_amount`='$total_amount' where cart_id='$cart_id'");
		}

		echo "RM ".number_format($subtotal_amount,2,'.',',')."@@@RM ".number_format($total_amount,2,'.',',')."@@@".$total_amount;
	}
	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=AddCart::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='add-cart-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
