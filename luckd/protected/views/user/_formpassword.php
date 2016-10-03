<div class="form" style="color:black">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	<div class="row">
		<?php echo $form->labelEx($model,'New Password'); ?>
		<?php echo $form->passwordfield($model,'password',array('size'=>60,'maxlength'=>300,'value'=>'')); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Re-type New Password'); ?>
		<?php echo $form->passwordfield($model,'password2',array('size'=>60,'maxlength'=>300,'value'=>'')); ?>
		<?php echo $form->error($model,'password2'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Change Password' : 'Change Password'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
