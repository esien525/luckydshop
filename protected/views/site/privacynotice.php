<?php
include("js/databaseconnection.php");
include("js/language.php");

$queryInfo="Select * FROM pages WHERE pages_id=3";
$resultInfo=mysql_query($queryInfo);

while($rowInfo=mysql_fetch_array($resultInfo)){
	$pages_title=$rowInfo['pages_title'.$lang];
	$pages_content=$rowInfo['pages_content'.$lang];  $pages_content= str_replace("\n", "<br />",$pages_content);
}
?>

<!-- Breadcrumb section -->
    
    <section class="breadcrumbs  hidden-xs">
      <div class="container">
        <ol class="breadcrumb breadcrumb--wd pull-left">
          <li><?php echo CHtml::link("Home",  array('site/index')); ?></li>
          <li class="active"><?php echo $pages_title;?></li>
        </ol>
      </div>
    </section>
    
    <!-- Content section -->
    <section class="content">
      <div class="container">
        <h2 class="text-uppercase"><?php echo $pages_title;?></h2>
			<p><?php echo $pages_content;?></p><br/><br/>
        </div>
    </section>
    <!-- End Content section --> 