<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'friend-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'friend_from_id'); ?>
		<?php echo $form->textField($model,'friend_from_id',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'friend_from_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'friend_to_id'); ?>
		<?php echo $form->textField($model,'friend_to_id',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'friend_to_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'friend_datetime'); ?>
		<?php echo $form->textField($model,'friend_datetime'); ?>
		<?php echo $form->error($model,'friend_datetime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'friend_status'); ?>
		<?php echo $form->textField($model,'friend_status',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'friend_status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->