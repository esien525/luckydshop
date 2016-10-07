<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'product-category-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cat_name'); ?>
		<?php echo $form->textField($model,'cat_name',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'cat_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cat_name_cn'); ?>
		<?php echo $form->textField($model,'cat_name_cn',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'cat_name_cn'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cat_name_bm'); ?>
		<?php echo $form->textField($model,'cat_name_bm',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'cat_name_bm'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->