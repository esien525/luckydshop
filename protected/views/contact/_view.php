<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->contact_id), array('view', 'id'=>$data->contact_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_address')); ?>:</b>
	<?php echo CHtml::encode($data->contact_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_phone')); ?>:</b>
	<?php echo CHtml::encode($data->contact_phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_email')); ?>:</b>
	<?php echo CHtml::encode($data->contact_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_facebook')); ?>:</b>
	<?php echo CHtml::encode($data->contact_facebook); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_tweeter')); ?>:</b>
	<?php echo CHtml::encode($data->contact_tweeter); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_google')); ?>:</b>
	<?php echo CHtml::encode($data->contact_google); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_feedback')); ?>:</b>
	<?php echo CHtml::encode($data->contact_feedback); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_franchise')); ?>:</b>
	<?php echo CHtml::encode($data->contact_franchise); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_join')); ?>:</b>
	<?php echo CHtml::encode($data->contact_join); ?>
	<br />

	*/ ?>

</div>