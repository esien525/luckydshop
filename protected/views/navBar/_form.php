<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'nav-bar-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nb_title'); ?>
		<?php echo $form->textField($model,'nb_title',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nb_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nb_title_cn'); ?>
		<?php echo $form->textField($model,'nb_title_cn',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nb_title_cn'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nb_title_bm'); ?>
		<?php echo $form->textField($model,'nb_title_bm',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nb_title_bm'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->