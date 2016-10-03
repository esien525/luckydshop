
<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('friend_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->friend_id), array('view', 'id'=>$data->friend_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('friend_from_id')); ?>:</b>
	<?php echo CHtml::encode($data->friend_from_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('friend_to_id')); ?>:</b>
	<?php echo CHtml::encode($data->friend_to_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('friend_datetime')); ?>:</b>
	<?php echo CHtml::encode($data->friend_datetime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('friend_status')); ?>:</b>
	<?php echo CHtml::encode($data->friend_status); ?>
	<br />


</div>