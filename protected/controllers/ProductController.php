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
				'actions'=>array('joined','participate','addCart'),
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
			$_POST['Product']['image'] = $model->product_photo;
			$_POST['Product']['image2'] = $model->product_photo2;
			$_POST['Product']['image3'] = $model->product_photo3;
			$_POST['Product']['image4'] = $model->product_photo4;
			$_POST['Product']['image5'] = $model->product_photo5;
			$_POST['Product']['image6'] = $model->product_photo6;
			$_POST['Product']['image7'] = $model->product_photo7;
			$_POST['Product']['image8'] = $model->product_photo8;
			$_POST['Product']['image9'] = $model->product_photo9;
			$_POST['Product']['image10'] = $model->product_photo10;
			$model->attributes=$_POST['Product'];
			
			$uploadedFile=CUploadedFile::getInstance($model,'image');
			if(!empty($uploadedFile) and $uploadedFile->getSize()<=2097152)  // check if uploaded file is set or not
			{
				$extension = pathinfo($uploadedFile, PATHINFO_EXTENSION);
				$newname = pathinfo($uploadedFile, PATHINFO_FILENAME)."_1".time();
				$fileName = "images/product/".$newname.".".$extension;  // random number + file name	
				$model->product_photo = $fileName;	
			}
			
			$uploadedFile2=CUploadedFile::getInstance($model,'image2');
			if(!empty($uploadedFile2) and $uploadedFile2->getSize()<=2097152)  // check if uploaded file is set or not
			{
				$extension2 = pathinfo($uploadedFile2, PATHINFO_EXTENSION);
				$newname2 = pathinfo($uploadedFile2, PATHINFO_FILENAME)."_2".time();
				$fileName2 = "images/product/".$newname2.".".$extension2;  // random number + file name	
				$model->product_photo2 = $fileName2;		
			}
			
			$uploadedFile3=CUploadedFile::getInstance($model,'image3');
			if(!empty($uploadedFile3) and $uploadedFile3->getSize()<=2097152)  // check if uploaded file is set or not
			{
				$extension3 = pathinfo($uploadedFile3, PATHINFO_EXTENSION);
				$newname3 = pathinfo($uploadedFile3, PATHINFO_FILENAME)."_3".time();
				$fileName3 = "images/product/".$newname3.".".$extension3;  // random number + file name	
				$model->product_photo3 = $fileName3;	
			}
			
			$uploadedFile4=CUploadedFile::getInstance($model,'image4');
			if(!empty($uploadedFile4) and $uploadedFile4->getSize()<=2097152)  // check if uploaded file is set or not
			{
				$extension4 = pathinfo($uploadedFile4, PATHINFO_EXTENSION);
				$newname4 = pathinfo($uploadedFile4, PATHINFO_FILENAME)."_4".time();
				$fileName4 = "images/product/".$newname4.".".$extension4;  // random number + file name	
				$model->product_photo4 = $fileName4;	
			}
			
			$uploadedFile5=CUploadedFile::getInstance($model,'image5');
			if(!empty($uploadedFile5) and $uploadedFile5->getSize()<=2097152)  // check if uploaded file is set or not
			{
				$extension5 = pathinfo($uploadedFile5, PATHINFO_EXTENSION);
				$newname5 = pathinfo($uploadedFile5, PATHINFO_FILENAME)."_5".time();
				$fileName5 = "images/product/".$newname5.".".$extension5;  // random number + file name	
				$model->product_photo5 = $fileName5;	
			}
			
			$uploadedFile6=CUploadedFile::getInstance($model,'image6');
			if(!empty($uploadedFile6) and $uploadedFile6->getSize()<=2097152)  // check if uploaded file is set or not
			{
				$extension6 = pathinfo($uploadedFile6, PATHINFO_EXTENSION);
				$newname6 = pathinfo($uploadedFile6, PATHINFO_FILENAME)."_6".time();
				$fileName6 = "images/product/".$newname6.".".$extension6;  // random number + file name	
				$model->product_photo6 = $fileName6;	
			}
			
			$uploadedFile7=CUploadedFile::getInstance($model,'image7');
			if(!empty($uploadedFile7) and $uploadedFile7->getSize()<=2097152)  // check if uploaded file is set or not
			{
				$extension7 = pathinfo($uploadedFile7, PATHINFO_EXTENSION);
				$newname7 = pathinfo($uploadedFile7, PATHINFO_FILENAME)."_7".time();
				$fileName7 = "images/product/".$newname7.".".$extension7;  // random number + file name	
				$model->product_photo7 = $fileName7;	
			}
			
			$uploadedFile8=CUploadedFile::getInstance($model,'image8');
			if(!empty($uploadedFile8) and $uploadedFile8->getSize()<=2097152)  // check if uploaded file is set or not
			{
				$extension8 = pathinfo($uploadedFile8, PATHINFO_EXTENSION);
				$newname8 = pathinfo($uploadedFile8, PATHINFO_FILENAME)."_8".time();
				$fileName8 = "images/product/".$newname8.".".$extension8;  // random number + file name	
				$model->product_photo8 = $fileName8;	
			}
			
			$uploadedFile9=CUploadedFile::getInstance($model,'image9');
			if(!empty($uploadedFile9) and $uploadedFile9->getSize()<=2097152)  // check if uploaded file is set or not
			{
				$extension9 = pathinfo($uploadedFile9, PATHINFO_EXTENSION);
				$newname9 = pathinfo($uploadedFile9, PATHINFO_FILENAME)."_9".time();
				$fileName9 = "images/product/".$newname9.".".$extension9;  // random number + file name	
				$model->product_photo9 = $fileName9;	
			}

			$uploadedFile10=CUploadedFile::getInstance($model,'image10');
			if(!empty($uploadedFile10) and $uploadedFile10->getSize()<=2097152)  // check if uploaded file is set or not
			{
				$extension10 = pathinfo($uploadedFile10, PATHINFO_EXTENSION);
				$newname10 = pathinfo($uploadedFile10, PATHINFO_FILENAME)."_10".time();
				$fileName10 = "images/product/".$newname10.".".$extension10;  // random number + file name	
				$model->product_photo10 = $fileName10;	
			}

			if(isset($_POST['Product']['product_category']) && $_POST['Product']['product_category']!==array() && $_POST['Product']['product_category']!='')
                        $model->product_category=implode(',',$_POST['Product']['product_category']);

			$valid=$model->validate();

			if($valid)
			{
				if($model->save())
				{
					if(!empty($uploadedFile) and $uploadedFile->getSize()<=2097152)  // check if uploaded file is set or not
					{
						$uploadedFile->saveAs(Yii::app()->basePath.'/../'.$fileName);
					}
					if(!empty($uploadedFile2) and $uploadedFile2->getSize()<=2097152)  // check if uploaded file is set or not
					{
						$uploadedFile2->saveAs(Yii::app()->basePath.'/../'.$fileName2);
					}
					if(!empty($uploadedFile3) and $uploadedFile3->getSize()<=2097152)  // check if uploaded file is set or not
					{
						$uploadedFile3->saveAs(Yii::app()->basePath.'/../'.$fileName3);
					}
					if(!empty($uploadedFile4) and $uploadedFile4->getSize()<=2097152)  // check if uploaded file is set or not
					{
						$uploadedFile4->saveAs(Yii::app()->basePath.'/../'.$fileName4);
					}
					if(!empty($uploadedFile5) and $uploadedFile5->getSize()<=2097152)  // check if uploaded file is set or not
					{
						$uploadedFile5->saveAs(Yii::app()->basePath.'/../'.$fileName5);
					}
					if(!empty($uploadedFile6) and $uploadedFile6->getSize()<=2097152)  // check if uploaded file is set or not
					{
						$uploadedFile6->saveAs(Yii::app()->basePath.'/../'.$fileName6);
					}
					if(!empty($uploadedFile7) and $uploadedFile7->getSize()<=2097152)  // check if uploaded file is set or not
					{
						$uploadedFile7->saveAs(Yii::app()->basePath.'/../'.$fileName7);
					}
					if(!empty($uploadedFile8) and $uploadedFile8->getSize()<=2097152)  // check if uploaded file is set or not
					{
						$uploadedFile8->saveAs(Yii::app()->basePath.'/../'.$fileName8);
					}
					if(!empty($uploadedFile9) and $uploadedFile9->getSize()<=2097152)  // check if uploaded file is set or not
					{
						$uploadedFile9->saveAs(Yii::app()->basePath.'/../'.$fileName9);
					}
					if(!empty($uploadedFile10) and $uploadedFile10->getSize()<=2097152)  // check if uploaded file is set or not
					{
						$uploadedFile10->saveAs(Yii::app()->basePath.'/../'.$fileName10);
					}
					$this->redirect(array('view','id'=>$model->product_id));
				}
			}
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
			$_POST['Product']['image'] = $model->product_photo;
			$_POST['Product']['image2'] = $model->product_photo2;
			$_POST['Product']['image3'] = $model->product_photo3;
			$_POST['Product']['image4'] = $model->product_photo4;
			$_POST['Product']['image5'] = $model->product_photo5;
			$_POST['Product']['image6'] = $model->product_photo6;
			$_POST['Product']['image7'] = $model->product_photo7;
			$_POST['Product']['image8'] = $model->product_photo8;
			$_POST['Product']['image9'] = $model->product_photo9;
			$_POST['Product']['image10'] = $model->product_photo10;
			$model->attributes=$_POST['Product'];

			$uploadedFile=CUploadedFile::getInstance($model,'image');
			if(!empty($uploadedFile) and $uploadedFile->getSize()<=2097152)  // check if uploaded file is set or not
			{
				$extension = pathinfo($uploadedFile, PATHINFO_EXTENSION);
				$newname = pathinfo($uploadedFile, PATHINFO_FILENAME)."_1".time();
				$fileName = "images/product/".$newname.".".$extension;  // random number + file name	
				$model->product_photo = $fileName;	
			}
			
			$uploadedFile2=CUploadedFile::getInstance($model,'image2');
			if(!empty($uploadedFile2) and $uploadedFile2->getSize()<=2097152)  // check if uploaded file is set or not
			{
				$extension2 = pathinfo($uploadedFile2, PATHINFO_EXTENSION);
				$newname2 = pathinfo($uploadedFile2, PATHINFO_FILENAME)."_2".time();
				$fileName2 = "images/product/".$newname2.".".$extension2;  // random number + file name	
				$model->product_photo2 = $fileName2;		
			}
			
			$uploadedFile3=CUploadedFile::getInstance($model,'image3');
			if(!empty($uploadedFile3) and $uploadedFile3->getSize()<=2097152)  // check if uploaded file is set or not
			{
				$extension3 = pathinfo($uploadedFile3, PATHINFO_EXTENSION);
				$newname3 = pathinfo($uploadedFile3, PATHINFO_FILENAME)."_3".time();
				$fileName3 = "images/product/".$newname3.".".$extension3;  // random number + file name	
				$model->product_photo3 = $fileName3;	
			}
			
			$uploadedFile4=CUploadedFile::getInstance($model,'image4');
			if(!empty($uploadedFile4) and $uploadedFile4->getSize()<=2097152)  // check if uploaded file is set or not
			{
				$extension4 = pathinfo($uploadedFile4, PATHINFO_EXTENSION);
				$newname4 = pathinfo($uploadedFile4, PATHINFO_FILENAME)."_4".time();
				$fileName4 = "images/product/".$newname4.".".$extension4;  // random number + file name	
				$model->product_photo4 = $fileName4;	
			}
			
			$uploadedFile5=CUploadedFile::getInstance($model,'image5');
			if(!empty($uploadedFile5) and $uploadedFile5->getSize()<=2097152)  // check if uploaded file is set or not
			{
				$extension5 = pathinfo($uploadedFile5, PATHINFO_EXTENSION);
				$newname5 = pathinfo($uploadedFile5, PATHINFO_FILENAME)."_5".time();
				$fileName5 = "images/product/".$newname5.".".$extension5;  // random number + file name	
				$model->product_photo5 = $fileName5;	
			}
			
			$uploadedFile6=CUploadedFile::getInstance($model,'image6');
			if(!empty($uploadedFile6) and $uploadedFile6->getSize()<=2097152)  // check if uploaded file is set or not
			{
				$extension6 = pathinfo($uploadedFile6, PATHINFO_EXTENSION);
				$newname6 = pathinfo($uploadedFile6, PATHINFO_FILENAME)."_6".time();
				$fileName6 = "images/product/".$newname6.".".$extension6;  // random number + file name	
				$model->product_photo6 = $fileName6;	
			}
			
			$uploadedFile7=CUploadedFile::getInstance($model,'image7');
			if(!empty($uploadedFile7) and $uploadedFile7->getSize()<=2097152)  // check if uploaded file is set or not
			{
				$extension7 = pathinfo($uploadedFile7, PATHINFO_EXTENSION);
				$newname7 = pathinfo($uploadedFile7, PATHINFO_FILENAME)."_7".time();
				$fileName7 = "images/product/".$newname7.".".$extension7;  // random number + file name	
				$model->product_photo7 = $fileName7;	
			}
			
			$uploadedFile8=CUploadedFile::getInstance($model,'image8');
			if(!empty($uploadedFile8) and $uploadedFile8->getSize()<=2097152)  // check if uploaded file is set or not
			{
				$extension8 = pathinfo($uploadedFile8, PATHINFO_EXTENSION);
				$newname8 = pathinfo($uploadedFile8, PATHINFO_FILENAME)."_8".time();
				$fileName8 = "images/product/".$newname8.".".$extension8;  // random number + file name	
				$model->product_photo8 = $fileName8;	
			}
			
			$uploadedFile9=CUploadedFile::getInstance($model,'image9');
			if(!empty($uploadedFile9) and $uploadedFile9->getSize()<=2097152)  // check if uploaded file is set or not
			{
				$extension9 = pathinfo($uploadedFile9, PATHINFO_EXTENSION);
				$newname9 = pathinfo($uploadedFile9, PATHINFO_FILENAME)."_9".time();
				$fileName9 = "images/product/".$newname9.".".$extension9;  // random number + file name	
				$model->product_photo9 = $fileName9;	
			}

			$uploadedFile10=CUploadedFile::getInstance($model,'image10');
			if(!empty($uploadedFile10) and $uploadedFile10->getSize()<=2097152)  // check if uploaded file is set or not
			{
				$extension10 = pathinfo($uploadedFile10, PATHINFO_EXTENSION);
				$newname10 = pathinfo($uploadedFile10, PATHINFO_FILENAME)."_10".time();
				$fileName10 = "images/product/".$newname10.".".$extension10;  // random number + file name	
				$model->product_photo10 = $fileName10;	
			}
			
			if(isset($_POST['Product']['product_category']) && $_POST['Product']['product_category']!==array() && $_POST['Product']['product_category']!='')
                        $model->product_category=implode(',',$_POST['Product']['product_category']);
			
			$valid=$model->validate();

			if($valid)
			{
				if($model->save())
				{
					if(!empty($uploadedFile) and $uploadedFile->getSize()<=2097152)  // check if uploaded file is set or not
					{
						$uploadedFile->saveAs(Yii::app()->basePath.'/../'.$fileName);
					}
					if(!empty($uploadedFile2) and $uploadedFile2->getSize()<=2097152)  // check if uploaded file is set or not
					{
						$uploadedFile2->saveAs(Yii::app()->basePath.'/../'.$fileName2);
					}
					if(!empty($uploadedFile3) and $uploadedFile3->getSize()<=2097152)  // check if uploaded file is set or not
					{
						$uploadedFile3->saveAs(Yii::app()->basePath.'/../'.$fileName3);
					}
					if(!empty($uploadedFile4) and $uploadedFile4->getSize()<=2097152)  // check if uploaded file is set or not
					{
						$uploadedFile4->saveAs(Yii::app()->basePath.'/../'.$fileName4);
					}
					if(!empty($uploadedFile5) and $uploadedFile5->getSize()<=2097152)  // check if uploaded file is set or not
					{
						$uploadedFile5->saveAs(Yii::app()->basePath.'/../'.$fileName5);
					}
					if(!empty($uploadedFile6) and $uploadedFile6->getSize()<=2097152)  // check if uploaded file is set or not
					{
						$uploadedFile6->saveAs(Yii::app()->basePath.'/../'.$fileName6);
					}
					if(!empty($uploadedFile7) and $uploadedFile7->getSize()<=2097152)  // check if uploaded file is set or not
					{
						$uploadedFile7->saveAs(Yii::app()->basePath.'/../'.$fileName7);
					}
					if(!empty($uploadedFile8) and $uploadedFile8->getSize()<=2097152)  // check if uploaded file is set or not
					{
						$uploadedFile8->saveAs(Yii::app()->basePath.'/../'.$fileName8);
					}
					if(!empty($uploadedFile9) and $uploadedFile9->getSize()<=2097152)  // check if uploaded file is set or not
					{
						$uploadedFile9->saveAs(Yii::app()->basePath.'/../'.$fileName9);
					}
					if(!empty($uploadedFile10) and $uploadedFile10->getSize()<=2097152)  // check if uploaded file is set or not
					{
						$uploadedFile10->saveAs(Yii::app()->basePath.'/../'.$fileName10);
					}
					$this->redirect(array('view','id'=>$model->product_id));
				}
			}
		}

		if(isset($model->product_category) && $model->product_category!=='')
                $model->product_category=explode(',',$model->product_category);

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

	public function actionAddCart($quantity,$product_id)
	{
		include("js/databaseconnection.php");
		$currentUser = Yii::app()->user->id;
		$product = $this->loadModel($product_id);
		if ($product->product_promotion_price!="") 
		{
			$product_promotion_price = $product->product_promotion_price;
		}
		else
		{
			$product_promotion_price = $product->product_price;
		}
		$amount = $quantity * $product_promotion_price;

		$query_cart = "select * from cart where cart_user='$currentUser' and cart_status='0' order by cart_id desc limit 1";
		$result_cart= mysql_query($query_cart) or die (mysql_error());
		$count_cart = mysql_num_rows($result_cart);

		if ($count_cart == 0) //insert if cart do not exist
		{
			mysql_query("INSERT INTO `cart`(`cart_user`, `cart_total_amount`) VALUES ('$currentUser','$amount')") or die (mysql_error());
			$insert_cart_id = mysql_insert_id();
			mysql_query("INSERT INTO `add_cart`(`ac_cart_id`, `ac_product_id`, `ac_quantity`, `ac_amount`) VALUES ('$insert_cart_id','$product_id','$quantity','$product_promotion_price')") or die (mysql_error());

			$new_quantity = 1;
		}
		else //add, update or delete if cart exist
		{
			while ($row = mysql_fetch_array($result_cart)) 
			{
				$currentCart = $row['cart_id'];

				$query_checkCart = "select * from add_cart where ac_cart_id='$currentCart' and ac_product_id='$product_id'";
				$result_checkCart= mysql_query($query_checkCart) or die (mysql_error());
				$count_checkCart = mysql_num_rows($result_checkCart);

				if ($count_checkCart == 0) 
				{
					mysql_query("INSERT INTO `add_cart`(`ac_cart_id`, `ac_product_id`, `ac_quantity`, `ac_amount`) VALUES ('$currentCart','$product_id','$quantity','$product_promotion_price')") or die (mysql_error());
				}
				else
				{
					while ($row_checkCart = mysql_fetch_array($result_checkCart)) 
					{
						$currentAC = $row_checkCart['ac_id'];
						$currentQuantity = $row_checkCart['ac_quantity'];

						$newQuantity = $currentQuantity + $quantity;

						if ($newQuantity > 0) 
						{
							mysql_query("UPDATE `add_cart` SET `ac_quantity`='$newQuantity' where `ac_id`='$currentAC'") or die (mysql_error());
						}
						else
						{
							mysql_query("DELETE FROM `add_cart` WHERE `ac_id`='$currentAC'") or die (mysql_error());
						}
					}
				}
			}

			$sql_AC = "SELECT  COUNT(ac_id) as total_product, SUM(ac_quantity*ac_amount) as total_amount FROM `add_cart` WHERE ac_cart_id='$currentCart'";
			$res_AC = mysql_query($sql_AC) or die (mysql_error());
			while ($row_AC = mysql_fetch_array($res_AC)) 
			{
				$total_amount = $row_AC['total_amount'];
				$total_product = $row_AC['total_product'];

				mysql_query("UPDATE `cart` SET `cart_total_amount`='$total_amount' where cart_id='$currentCart'");

				$new_quantity = $total_product;
			}
		}
		echo $total_product;
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
