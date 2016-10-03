<?php include("js/side_opening.php");?>
<!-- Content section -->
<section class="content">
	<div class="container">
<?php
include("js/databaseconnection.php");
?>
<div style="float:right"><?php echo CHtml::link('<button class="btn btn--wd btn--with-icon btn--sm wave">Update Info</button>',  array('update')); ?></div>

<h4  class="pagestitle">Contact Us Info Management</h4>


<br/>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'contact_id',
		'contact_title',
		'contact_description',
		'contact_address',
		array(
            'label'=>'Map',
            'type'=>'raw',
            'value'=>$model->contact_map,

        ),
		'contact_phone',
		'contact_email',
		'contact_facebook',
		'contact_tweeter',
		'contact_google',
		'contact_skype',
	),
)); ?>
	
	</div>
</section>

<?php include("js/side_closing.php");?>
