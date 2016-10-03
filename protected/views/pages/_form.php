<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pages-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'pages_title'); ?>
		<?php echo $form->textField($model,'pages_title',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'pages_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pages_content'); ?>
		<?php echo $form->textArea($model,'pages_content',array('rows'=>30, 'cols'=>50,'style'=>'width:100%')); ?>
		<?php echo $form->error($model,'pages_content'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->