<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('luckydraw_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->luckydraw_id), array('view', 'id'=>$data->luckydraw_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luckydraw_refno1')); ?>:</b>
	<?php echo CHtml::encode($data->luckydraw_refno1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luckydraw_refno2')); ?>:</b>
	<?php echo CHtml::encode($data->luckydraw_refno2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luckydraw_userid')); ?>:</b>
	<?php echo CHtml::encode($data->luckydraw_userid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luckydraw_amount')); ?>:</b>
	<?php echo CHtml::encode($data->luckydraw_amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luckydraw_datetime')); ?>:</b>
	<?php echo CHtml::encode($data->luckydraw_datetime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luckydraw_status')); ?>:</b>
	<?php echo CHtml::encode($data->luckydraw_status); ?>
	<br />


</div>