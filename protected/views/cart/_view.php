<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cart_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cart_id), array('view', 'id'=>$data->cart_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cart_user')); ?>:</b>
	<?php echo CHtml::encode($data->cart_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cart_status')); ?>:</b>
	<?php echo CHtml::encode($data->cart_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cart_total_amount')); ?>:</b>
	<?php echo CHtml::encode($data->cart_total_amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cart_payment_status')); ?>:</b>
	<?php echo CHtml::encode($data->cart_payment_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cart_payment_refno')); ?>:</b>
	<?php echo CHtml::encode($data->cart_payment_refno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cart_payment_remark')); ?>:</b>
	<?php echo CHtml::encode($data->cart_payment_remark); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('cart_payment_time')); ?>:</b>
	<?php echo CHtml::encode($data->cart_payment_time); ?>
	<br />

	*/ ?>

</div>