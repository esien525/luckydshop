<?php
$this->pageTitle=Yii::app()->name . ' - Login';
if(isset($_GET['action'])){
	echo "<script>";
	echo "alert('Thanks for your registration. Please login to get more information.');";
	echo "</script>";
}
?>

<!-- Content section -->
    
<section class="content content--fill top-null">
  <div class="container">
	<h2 class="h-pad-sm text-uppercase text-center">Already Registered?</h2>
	<h6 class="text-uppercase text-center">If you have an account with us, please log in.</h6>
	<div class="divider divider--sm"></div>
	
	
			
				<div class="row">
				  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
					<div class="card card--form"> <a href="#" class="icon card--form__icon icon-user-circle"></a>
					 
						<div class="contact-form">
						<?php $form=$this->beginWidget('CActiveForm', array(
							'id'=>'login-form',
							'enableAjaxValidation'=>true,
						)); ?>
						<?php echo $form->textField($model,'username',array('class'=>'input--wd input--wd--full','placeholder'=>'Email')); ?>
						<?php echo $form->passwordField($model,'password',array('class'=>'input--wd input--wd--full','placeholder'=>'Password')); ?>
						<!--
						<div class="checkbox-group">
						  <input type="checkbox" id="checkBox1">
						  <label for="checkBox1"> <span class="check"></span> <span class="box"></span>Remember me</label>
						</div>-->
						<div class="divider divider--xs"></div>
						<?php echo CHtml::submitButton('Sign In',array('class'=>'btn btn--wd text-uppercase wave waves-effect')); ?>
						
					<?php $this->endWidget(); ?>
					</div><!-- form -->
					  <div class="card--form__footer">
						<a href="#">Forgot Your Password?</a><br>
						<?php echo CHtml::link("&lt;&nbsp;Back",  array('site/index'));?>
						
					  </div>
					</div>
				  </div>
				</div>
		
	<div class="divider divider--md"></div>
	<h2 class="h-pad-sm text-uppercase text-center">New Here?</h2>
	<h6 class="text-uppercase text-center">Registration is free and easy!</h6>
	<div class="divider divider--xs"></div>
	<div class="text-center">
		<?php echo CHtml::link("create an account",  array('user/register'),array('class'=>'btn btn--wd text-uppercase wave'));?>
	<div class="divider divider--md"></div>
  </div>
</section>

<!-- End Content section -->