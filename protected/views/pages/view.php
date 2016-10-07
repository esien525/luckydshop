<?php include("js/side_opening.php");?>
<!-- Content section -->
<section class="content">
	<div class="container">
<?php
include("js/databaseconnection.php");
$pages_id=$model->pages_id;
$pages_title=$model->pages_title;
$pages_title_cn=$model->pages_title_cn;
$pages_title_bm=$model->pages_title_bm;
$pages_content=$model->pages_content; $pages_content= str_replace("\n", "<br />",$pages_content);
$pages_content_cn=$model->pages_content_cn; $pages_content_cn= str_replace("\n", "<br />",$pages_content_cn);
$pages_content_bm=$model->pages_content_bm; $pages_content_bm= str_replace("\n", "<br />",$pages_content_bm);
?>
<div style="float:right"><?php echo CHtml::link('<button class="btn btn--wd btn--with-icon btn--sm wave">Update Info</button>',  array('update','id'=>$pages_id)); ?></div>

<h4  class="pagestitle">Pages Management - <?php echo $model->pages_title; ?></h4>
<br/>
<?php

if($pages_content==""){$pages_content="No content. Please update it via button on top right.";}
echo $pages_content;
?>
<hr/>
<h4  class="pagestitle">Pages Management Chinese- <?php echo $model->pages_title_cn; ?></h4>
<br/>
<?php

if($pages_content_cn==""){$pages_content_cn="No content. Please update it via button on top right.";}
echo $pages_content_cn;
?>
<hr/>
<h4  class="pagestitle">Pages Management BM- <?php echo $model->pages_title_bm; ?></h4>
<br/>
<?php

if($pages_content_bm==""){$pages_content_bm="No content. Please update it via button on top right.";}
echo $pages_content_bm;
?>
<hr/>
</div>
</section>

<?php include("js/side_closing.php");?>