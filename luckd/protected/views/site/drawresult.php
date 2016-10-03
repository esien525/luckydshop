<?php
include("js/databaseconnection.php");

$queryInfo="Select * FROM pages WHERE pages_id=1";
$resultInfo=mysql_query($queryInfo);

while($rowInfo=mysql_fetch_array($resultInfo)){
	$pages_title=$rowInfo['pages_title'];
	$pages_content=$rowInfo['pages_content'];  $pages_content= str_replace("\n", "<br />",$pages_content);
}
?>

<!-- Breadcrumb section -->
    
    <section class="breadcrumbs  hidden-xs">
      <div class="container">
        <ol class="breadcrumb breadcrumb--wd pull-left">
          <li><?php echo CHtml::link("Home",  array('site/index')); ?></li>
          <li class="active">Draw Results</li>
        </ol>
      </div>
    </section>
    
    <!-- Content section -->
    <section class="content">
      <div class="container">
        <h2 class="text-uppercase">Coming Soon</h2>
			<br/><br/>
        </div>
    </section>
    <!-- End Content section --> 