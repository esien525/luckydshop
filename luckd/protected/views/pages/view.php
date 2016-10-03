<?php include("js/side_opening.php");?>
<!-- Content section -->
<section class="content">
	<div class="container">
<?php
include("js/databaseconnection.php");
$pages_id=$model->pages_id;
$pages_title=$model->pages_title;
$pages_content=$model->pages_content; $pages_content= str_replace("\n", "<br />",$pages_content);
?>
<div style="float:right"><?php echo CHtml::link('<button class="btn btn--wd btn--with-icon btn--sm wave">Update Info</button>',  array('update','id'=>$pages_id)); ?></div>

<h4  class="pagestitle">Pages Management - <?php echo $model->pages_title; ?></h4>


<br/>
<?php

if($pages_content==""){$pages_content="No content. Please update it via button on top right.";}
echo $pages_content;
?>
</div>
</section>

<?php include("js/side_closing.php");?>