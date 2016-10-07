<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('nb_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nb_id), array('view', 'id'=>$data->nb_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nb_title')); ?>:</b>
	<?php echo CHtml::encode($data->nb_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nb_title_cn')); ?>:</b>
	<?php echo CHtml::encode($data->nb_title_cn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nb_title_bm')); ?>:</b>
	<?php echo CHtml::encode($data->nb_title_bm); ?>
	<br />


</div>