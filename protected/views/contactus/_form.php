<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contactus-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_title'); ?>
		<?php echo $form->textField($model,'contact_title',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'contact_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_description'); ?>
		<?php echo $form->textArea($model,'contact_description',array('rows'=>4, 'cols'=>60)); ?>
		<?php echo $form->error($model,'contact_description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_address'); ?>
		<?php echo $form->textArea($model,'contact_address',array('rows'=>4, 'cols'=>60)); ?>
		<?php echo $form->error($model,'contact_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_map'); ?>
		<?php echo $form->textArea($model,'contact_map',array('rows'=>4, 'cols'=>60)); ?>
		<?php echo $form->error($model,'contact_map'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_phone'); ?>
		<?php echo $form->textField($model,'contact_phone',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'contact_phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_email'); ?>
		<?php echo $form->textField($model,'contact_email',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'contact_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_facebook'); ?>
		<?php echo $form->textField($model,'contact_facebook',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'contact_facebook'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_tweeter'); ?>
		<?php echo $form->textField($model,'contact_tweeter',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'contact_tweeter'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_google'); ?>
		<?php echo $form->textField($model,'contact_google',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'contact_google'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_skype'); ?>
		<?php echo $form->textField($model,'contact_skype',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'contact_skype'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->