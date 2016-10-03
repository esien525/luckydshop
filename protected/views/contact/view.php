<?php include("js/cpanel_side_opening.php");?>
<div class="cpanel_holder">
<h22>Contact Us Info - <a onclick="display_editform()">[ Click Here to Edit ]</a></h22>
<br/><br/>
	
	<div id="updatediv" style="display:none">
		<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
	</div>
	
	<div id="viewdiv">
		<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$modelview,
			'attributes'=>array(
				//'contact_id',
				'contact_address',
				'contact_phone',
				'contact_email',
				'contact_facebook',
				'contact_tweeter',
				'contact_google',
				//'contact_feedback',
				//'contact_franchise',
				//'contact_join',
			),
		)); ?>
	</div>
	
</div>
<?php include("js/cpanel_side_closing.php");?>

<script type="text/javascript">
	function display_editform() {
		jQuery('#updatediv').show();
		jQuery('#viewdiv').hide();
	}
</script>
