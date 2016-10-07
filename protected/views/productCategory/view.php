<?php include("js/side_opening.php");?>
<div style="float:right"><?php echo CHtml::link('<button class="btn btn--wd btn--with-icon btn--sm wave">Back to Product Category List</button>',  array('admin')); ?></div>

<h4 class="pagestitle"><?php echo $model->cat_name;?></h4>

<br/>
<?php
	include("js/databaseconnection.php");
	$burl=Yii::app()->request->baseUrl; 
	$cat_id = $model->cat_id;
	$cat_name = $model->cat_name;
	$cat_name_cn = $model->cat_name_cn;
	$cat_name_bm = $model->cat_name_bm;
?>
<table  class="padding-table1">
	<tr>		
		<td>
			<table>
				<tr>
					<td><b>Category Name</b></td>
					<td><b>:</b></td>
					<td><?php echo $cat_name?></td>
				</tr>
				<tr>
					<td><b>Category Name Chinese</b></td>
					<td><b>:</b></td>
					<td><?php echo $cat_name_cn?></td>
				</tr>
				<tr>
					<td><b>Category Name BM</b></td>
					<td><b>:</b></td>
					<td><?php echo $cat_name_bm?></td>
				</tr>
				<tr>
					<td colspan="3">
						<?php echo CHtml::link('<button class="btn btn--wd btn--with-icon btn--sm wave">Update Product Category Info</button>',  array('update','id'=>$cat_id)); ?>
					</td>
				</tr>
				
			</table>
		</td>
	</tr>
</table>
<div style='clear:both'></div>


<?php include("js/side_closing.php");?>
<?php
Yii::app()->clientScript->scriptMap=array(
		'jquery.js'=>false,
);