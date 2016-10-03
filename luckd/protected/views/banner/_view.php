<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('banner_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->banner_id), array('view', 'id'=>$data->banner_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('banner_photo')); ?>:</b>
	<?php echo CHtml::encode($data->banner_photo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('banner_title')); ?>:</b>
	<?php echo CHtml::encode($data->banner_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('banner_description')); ?>:</b>
	<?php echo CHtml::encode($data->banner_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('banner_link')); ?>:</b>
	<?php echo CHtml::encode($data->banner_link); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('banner_order')); ?>:</b>
	<?php echo CHtml::encode($data->banner_order); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('banner_language')); ?>:</b>
	<?php echo CHtml::encode($data->banner_language); ?>
	<br />


</div>