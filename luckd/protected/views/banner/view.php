<?php include("js/side_opening.php");?>
<div style="float:right"><?php echo CHtml::link('<button class="btn btn--wd btn--with-icon btn--sm wave">Back to Banner List</button>',  array('admin')); ?></div>

<h4 class="pagestitle"><?php echo $model->banner_title;?></h4>

<br/>
<?php
	$banner_id=$model->banner_id;
	$banner_photo=$model->banner_photo;
	$banner_title=$model->banner_title;
	$banner_description=$model->banner_description;
	$banner_link=$model->banner_link;
	$banner_order=$model->banner_order;
	$banner_language=$model->banner_language;
	$banner_location=$model->banner_location;
?>
<img src="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo $banner_photo?>" width="100%"/><br/><br/>
<table class="padding-table1">
	<tr>
		<td><b>Title</b></td>
		<td><b>:</b></td>
		<td><?php echo $banner_title?></td>
	</tr>
	<tr>
		<td><b>Link</b></td><td><b>:</b></td>
		<td><?php echo $banner_link?></td>
	</tr>
	<tr>
		<td><b>Order</b></td><td><b>:</b></td>
		<td># <?php echo $banner_order?></td>
	</tr>
	<tr>
		<td><b>Location</b></td><td><b>:</b></td>
		<td><?php echo $banner_location?></td>
	</tr>
	
	<tr>
		<td colspan="3">
			<?php echo CHtml::link('<button class="btn btn--wd btn--with-icon btn--sm wave">Update Product Info</button>',  array('update','id'=>$banner_id)); ?>
		</td>
	</tr>
	
</table>
		




<?php include("js/side_closing.php");?>
<?php
Yii::app()->clientScript->scriptMap=array(
		'jquery.js'=>false,
);
?>