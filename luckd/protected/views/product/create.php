<?php include("js/side_opening.php");?>
<div style="float:right"><?php echo CHtml::link('<button class="btn btn--wd btn--with-icon btn--sm wave">Back to Product List</button>',  array('admin')); ?></div>

<h4 class="pagestitle">Create New Product</h4>

<br/>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>



<?php include("js/side_closing.php");?>
<?php
Yii::app()->clientScript->scriptMap=array(
		'jquery.js'=>false,
);
?>