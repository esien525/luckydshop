<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<table>
	<tr>
		<td><?php echo $form->labelEx($model,'user_name'); ?></td>
		<td><?php echo $form->textField($model,'user_name',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'user_name'); ?></td>
	</tr>

	<tr>
		<td><?php echo $form->labelEx($model,'user_email'); ?></td>
		<td><?php echo $form->textField($model,'user_email',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'user_email'); ?></td>
	</tr>

	<tr>
		<td><?php echo $form->labelEx($model,'password'); ?></td>
		<td><?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>300,'value'=>'')); ?>
		<?php echo $form->error($model,'password'); ?></td>
	</tr>

	<tr>
		<td><?php echo $form->labelEx($model,'password2'); ?></td>
		<td><?php echo $form->passwordField($model,'password2',array('size'=>60,'maxlength'=>300,'value'=>'')); ?>
		<?php echo $form->error($model,'password2'); ?></td>
	</tr>
	<tr>
		<td><?php echo $form->labelEx($model,'user_contactnumber'); ?></td>
		<td><?php echo $form->textField($model,'user_contactnumber',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'user_contactnumber'); ?></td>
	</tr>
	</table>
	
		<?php echo $form->hiddenField($model,'user_type',array('size'=>60,'maxlength'=>200,'value'=>'supervisor')); ?>
		<?php echo $form->hiddenField($model,'user_datejoin',array('size'=>60,'maxlength'=>200,'value'=>date('Y-m-d H:i:s'))); ?>
		<?php echo $form->hiddenField($model,'user_status',array('size'=>60,'maxlength'=>100,'value'=>'active')); ?>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create Supervisor' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->