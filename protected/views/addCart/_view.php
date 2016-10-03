<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ac_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ac_id), array('view', 'id'=>$data->ac_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ac_cart_id')); ?>:</b>
	<?php echo CHtml::encode($data->ac_cart_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ac_product_id')); ?>:</b>
	<?php echo CHtml::encode($data->ac_product_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ac_quantity')); ?>:</b>
	<?php echo CHtml::encode($data->ac_quantity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ac_amount')); ?>:</b>
	<?php echo CHtml::encode($data->ac_amount); ?>
	<br />


</div>