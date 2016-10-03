<!-- Content section -->
    
<section class="content content--fill top-null">
  <div class="container">
	<h2 class="h-pad-sm text-uppercase text-center">Create an Account</h2>
	<h6 class="text-uppercase text-center">Please enter the following information to create your account.</h6>
	<div class="divider divider--sm"></div>
	
	
		<div class="row">
		  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
			<div class="card card--form">
			  <div class="divider divider--xs"></div>
			  <div class="form">
				<?php
					$currenttime = date("Y-m-d H:i:s");
					$user_id=0;
					if(isset($_GET['refer'])){
						$refercode=$_GET['refer'];
						include("js/databaseconnection.php");
						$queryRefer="Select * FROM user WHERE user_refer_code='$refercode'";		
						$resultRefer=mysql_query($queryRefer);
						
						while($rowRefer=mysql_fetch_array($resultRefer)){
							$user_id=$rowRefer['user_id'];
						}
					}
					
					$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
					$charactersLength = strlen($characters);
					$randomString = '';
					for ($i = 0; $i < 6; $i++) {
						$randomString .= $characters[rand(0, $charactersLength - 1)];
					}
				?>
				<?php $form=$this->beginWidget('CActiveForm', array(
					'id'=>'user-form',
					'enableAjaxValidation'=>false,
				)); ?>
				<?php echo $form->errorSummary($model); ?>
					<h6 class="text-uppercase text-left">Personal Information</h6>
					<?php echo $form->textField($model,'user_firstname',array('size'=>35,'maxlength'=>300,'class'=>'input--wd input--wd--full','placeholder'=>'First name *')); ?>
					<?php echo $form->textField($model,'user_lastname',array('size'=>35,'maxlength'=>300,'class'=>'input--wd input--wd--full','placeholder'=>'Last name *')); ?>
					<?php echo $form->textField($model,'user_email',array('size'=>35,'maxlength'=>300,'class'=>'input--wd input--wd--full','placeholder'=>'Email address *')); ?>
					
					
					<div class="divider divider--xs"></div>
					<h6 class="text-uppercase text-left">Login Information</h6>
					<?php echo $form->passwordField($model,'password',array('size'=>35,'maxlength'=>300,'value'=>'','class'=>'input--wd input--wd--full','placeholder'=>'Password *')); ?>
					<?php echo $form->passwordField($model,'password2',array('size'=>35,'maxlength'=>300,'value'=>'','class'=>'input--wd input--wd--full','placeholder'=>'Confirm password *')); ?>
					<?php echo $form->hiddenField($model,'user_refer_code',array('size'=>35,'maxlength'=>300,'class'=>'input--wd input--wd--full','value'=>"$randomString")); ?>
					<?php echo $form->hiddenField($model,'refer_by',array('size'=>35,'maxlength'=>300,'class'=>'input--wd input--wd--full','value'=>"$user_id")); ?>
					
					<div class="divider divider--xs"></div>
					<?php echo CHtml::submitButton('Submit',array('class'=>'btn btn--wd text-uppercase wave waves-effect')); ?>
				<?php $this->endWidget(); ?>
			  </div>
			  <div class="card--form__footer"> <?php echo CHtml::link("&lt;&nbsp;Back",  array('site/index'));?> </div>
			</div>
		  </div>
		</div>
		
	
	<div class="divider divider--xl"></div>
  </div>
</section>

<!-- End Content section --> 