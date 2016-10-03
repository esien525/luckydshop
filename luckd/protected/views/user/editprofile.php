<?php include("js/side_opening.php");?>
<?php
include("js/databaseconnection.php");
$burl=Yii::app()->request->baseUrl;
$user_id=$model->user_id;
$user_name=$model->user_name;
$user_firstname=$model->user_firstname;
$user_lastname=$model->user_lastname;
$user_title=$model->user_title;
$user_email=$model->user_email;
$password=$model->password;
$password2=$model->password2;
$user_type=$model->user_type;
$user_datejoin=$model->user_datejoin;
$user_contactnumber=$model->user_contactnumber;
$user_status=$model->user_status;
$last_login=$model->last_login;
$user_description=$model->user_description;    $user_description= str_replace("\n", "<br />",$user_description);
$user_photo=$model->user_photo; if($user_photo==""){$user_photo="images/nophoto.jpg";}
$user_dob=$model->user_dob;
$user_gender=$model->user_gender;
$user_dtoken=$model->user_dtoken;
$user_dcoin=$model->user_dcoin;
$user_refer_code=$model->user_refer_code;
$refer_by=$model->refer_by;

?>
<!-- Content section -->
<section class="content">
	<div class="container">
		<h4>Update Profile</h4>
		<div class="row">
			<div class='col-md-12'>
				<?php echo $this->renderPartial('_formprofile', array('model'=>$model)); ?>
			</div>
			
		</div>
	</div>
</section>

<?php include("js/side_closing.php");?>