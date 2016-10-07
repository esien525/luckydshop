<?php include("js/side_opening.php");?>
<!-- Content section -->
<section class="content">
	<div class="container">
<?php
include("js/databaseconnection.php");
$nb_id=$model->nb_id;
$nb_title=$model->nb_title;
$nb_title_cn=$model->nb_title_cn;
$nb_title_bm=$model->nb_title_bm;
?>
<div style="float:right"><?php echo CHtml::link('<button class="btn btn--wd btn--with-icon btn--sm wave">Update Info</button>',  array('update','id'=>$nb_id)); ?></div>

<h4  class="nbtitle">Navigation Bar Management</h4>
<b>EN</b> : <?php echo $model->nb_title; ?><br/>
<b>CN</b> : <?php echo $model->nb_title_cn; ?><br/>
<b>BM</b> : <?php echo $model->nb_title_bm; ?>

</div>
</section>

<?php include("js/side_closing.php");?>