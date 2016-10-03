<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'add-cart-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ac_cart_id'); ?>
		<?php echo $form->textField($model,'ac_cart_id',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'ac_cart_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ac_product_id'); ?>
		<?php echo $form->textField($model,'ac_product_id',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'ac_product_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ac_quantity'); ?>
		<?php echo $form->textField($model,'ac_quantity'); ?>
		<?php echo $form->error($model,'ac_quantity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ac_amount'); ?>
		<?php echo $form->textField($model,'ac_amount'); ?>
		<?php echo $form->error($model,'ac_amount'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->