<?php
	
		include("js/cpanel_side_opening.php");
	
?>
<div class="cpanel_holder">
			<!--<div class="bb">
				<?php echo CHtml::link('Home', array('site/index')); ?>
				<small> > </small>
				Update Profile
			</div>-->
			
			<h26>Update Company Details</h26><br/><br/>
			<?php echo $this->renderPartial('_formcompanyedit', array('model'=>$model1)); ?>
</div>
<?php
	
		include("js/cpanel_side_closing.php");
	
?>		