<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pages_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pages_id), array('view', 'id'=>$data->pages_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pages_title')); ?>:</b>
	<?php echo CHtml::encode($data->pages_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pages_content')); ?>:</b>
	<?php echo CHtml::encode($data->pages_content); ?>
	<br />


</div>