<?php include("js/side_opening.php");?>
<div style="float:right"><?php echo CHtml::link('<button class="btn btn--wd btn--with-icon btn--sm wave">Back to Package List</button>',  array('admin')); ?></div>

<h4 class="pagestitle">Create New Package</h4>

<br/>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>



<?php include("js/side_closing.php");?>