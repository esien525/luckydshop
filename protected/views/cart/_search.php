<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cart_id'); ?>
		<?php echo $form->textField($model,'cart_id',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cart_user'); ?>
		<?php echo $form->textField($model,'cart_user',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cart_status'); ?>
		<?php echo $form->textField($model,'cart_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cart_total_amount'); ?>
		<?php echo $form->textField($model,'cart_total_amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cart_payment_status'); ?>
		<?php echo $form->textField($model,'cart_payment_status',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cart_payment_refno'); ?>
		<?php echo $form->textField($model,'cart_payment_refno',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cart_payment_remark'); ?>
		<?php echo $form->textField($model,'cart_payment_remark',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cart_payment_time'); ?>
		<?php echo $form->textField($model,'cart_payment_time'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->