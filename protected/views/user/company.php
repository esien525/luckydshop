<?php
	
		include("js/cpanel_side_opening.php");
	
?>
<div class="cpanel_holder">
			<!--<div class="bb">
				<?php echo CHtml::link('Home', array('site/index')); ?>
				<small> > </small>
				Update Profile
			</div>-->
		
			<h26>Company Details </h26>
			
			
			
			<br/><br/>
			<?php echo $this->renderPartial('_formcompany', array('model'=>$model1)); ?>
			
			<?php echo CHtml::link('<button>Update Company Details</button>',  array('user/companyedit'),array('class'=>'dashboard_link_white')); ?>
			
			
			<br/><br/>
</div>
<?php
	
		include("js/cpanel_side_closing.php");
	
?>		