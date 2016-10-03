<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cart-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cart_user'); ?>
		<?php echo $form->textField($model,'cart_user',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'cart_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cart_status'); ?>
		<?php echo $form->textField($model,'cart_status'); ?>
		<?php echo $form->error($model,'cart_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cart_total_amount'); ?>
		<?php echo $form->textField($model,'cart_total_amount'); ?>
		<?php echo $form->error($model,'cart_total_amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cart_payment_status'); ?>
		<?php echo $form->textField($model,'cart_payment_status',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'cart_payment_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cart_payment_refno'); ?>
		<?php echo $form->textField($model,'cart_payment_refno',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'cart_payment_refno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cart_payment_remark'); ?>
		<?php echo $form->textField($model,'cart_payment_remark',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'cart_payment_remark'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cart_payment_time'); ?>
		<?php echo $form->textField($model,'cart_payment_time'); ?>
		<?php echo $form->error($model,'cart_payment_time'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->