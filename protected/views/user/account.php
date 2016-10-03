<?php
	include("js/cpanel_side_opening.php");
?>
<div class="cpanel_holder">
			<!--<div class="bb">
				<?php echo CHtml::link('Home', array('site/index')); ?>
				<small> > </small>
				Update Profile
			</div>-->
			
				<h26>Account Details</h26>
			
			
			<br/><br/>
			<?php echo $this->renderPartial('_formaccount', array('model'=>$model1)); ?>
			
			<?php if($userlevel_user_module_edit!="0"){?>
			<?php echo CHtml::link('<button>Update Profile</button>',  array('user/profile'),array('class'=>'dashboard_link_white')); ?>
			<?php }?>
			<?php if($userlevel_user_module_password!="0"){?>
			<?php echo CHtml::link('<button>Change Password</button>',  array('user/password'),array('class'=>'dashboard_link_white')); ?>
			<?php }?>
			<br/><br/>
</div>
<?php
	include("js/cpanel_side_closing.php");
?>		