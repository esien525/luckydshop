<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('package_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->package_id), array('view', 'id'=>$data->package_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('package_name')); ?>:</b>
	<?php echo CHtml::encode($data->package_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('package_price_normal')); ?>:</b>
	<?php echo CHtml::encode($data->package_price_normal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('package_price_promotion')); ?>:</b>
	<?php echo CHtml::encode($data->package_price_promotion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('package_coin_amount')); ?>:</b>
	<?php echo CHtml::encode($data->package_coin_amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('package_status')); ?>:</b>
	<?php echo CHtml::encode($data->package_status); ?>
	<br />


</div>