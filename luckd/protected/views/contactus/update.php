<?php include("js/side_opening.php");?>
<!-- Content section -->
<section class="content">
	<div class="container">
<?php
include("js/databaseconnection.php");
?>

<h4  class="pagestitle">Contact Us Info Management</h4>


<br/>



<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>
</section>

<?php include("js/side_closing.php");?>