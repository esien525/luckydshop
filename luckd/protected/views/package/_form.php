<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'package-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'package_name'); ?>
		<?php echo $form->textField($model,'package_name',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'package_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'package_price_normal'); ?>
		<?php echo $form->textField($model,'package_price_normal'); ?>
		<?php echo $form->error($model,'package_price_normal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'package_price_promotion'); ?>
		<?php echo $form->textField($model,'package_price_promotion'); ?>
		<?php echo $form->error($model,'package_price_promotion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'package_coin_amount'); ?>
		<?php echo $form->textField($model,'package_coin_amount'); ?>
		<?php echo $form->error($model,'package_coin_amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'package_status'); ?>
		<?php echo $form->dropdownlist($model,'package_status',array('Active'=>'Active','Hidden'=>'Hidden')); ?>
		<?php echo $form->error($model,'package_status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->