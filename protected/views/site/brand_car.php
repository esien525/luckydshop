<?php
	if(isset($_GET['id'])){$makeid=$_GET['id'];} else{$makeid="1";}
	
	include("js/databaseconnection.php");
	
	$queryCarN_active="Select * FROM car WHERE car_make='$makeid' and car_status='Active'";
	$resultCarN_active=mysql_query($queryCarN_active);
	$num_rows_carn_active = mysql_num_rows($resultCarN_active);
	
?>
<table class="table_nomargin">
	<tr>
		<td class="td_nopadding_main" style="width:240px">
			<?php include("js/auto_leftsidebar.php");?>
			
			
		</td>
		<td class="td_10padding_main">
			<div class="bb">
				<?php echo CHtml::link('Home', array('site/index')); ?>
				<small> > </small>
				<?php echo CHtml::link('Brand We Offer', array('site/brand')); ?>
				<small> > </small>
				<?php echo $model->getmake_name($makeid);?>
			</div>
			
			<h26><?php echo $model->getmake_name($makeid);?> </h26><h22 class='car_info_title'>(<?php echo number_format($num_rows_carn_active);?>)</h22><br/>
			<?php $this->widget('zii.widgets.CListView', array(
				'dataProvider'=>$dataProvider,
				'itemView'=>'/car/_viewpublic',
			)); ?>
		</td>
	</tr>
</table>