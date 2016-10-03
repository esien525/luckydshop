<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
	<table>
	<tr>
		<td><?php echo $form->labelEx($model,'user_name'); ?></td>
		<td><?php echo $form->textField($model,'user_name',array('size'=>40,'maxlength'=>300)); ?></td>
		
	</tr>

	<tr>
		<td><?php echo $form->labelEx($model,'user_email'); ?></td>
		<td><?php echo $form->textField($model,'user_email',array('size'=>40,'maxlength'=>300)); ?></td>
		
	</tr>

	<tr>
		<td><?php echo $form->labelEx($model,'user_contactnumber'); ?></td>
		<td><?php echo $form->textField($model,'user_contactnumber',array('size'=>40,'maxlength'=>200)); ?></td>
		
	</tr>
	<tr>
		<td><?php echo $form->labelEx($model,'password'); ?></td>
		<td><?php echo $form->passwordField($model,'password',array('size'=>40,'maxlength'=>300)); ?></td>
		
	</tr>

	<tr>
		<td><?php echo $form->labelEx($model,'password2'); ?></td>
		<td><?php echo $form->passwordField($model,'password2',array('size'=>40,'maxlength'=>300)); ?></td>
		
	</tr>

	<tr>
		<td><?php echo $form->labelEx($model,'user_type'); ?></td>
		<td><?php echo $form->dropdownlist($model,'user_type',array('admin'=>'admin','normal'=>'normal','vendor'=>'vendor')); ?></td>
		
	</tr>

	<?php echo $form->hiddenField($model,'user_datejoin',array('size'=>40,'maxlength'=>300,'value'=>date('Y-m-d H:i:s'))); ?>

	

	<tr>
		<td><?php echo $form->labelEx($model,'user_status'); ?></td>
		<td><?php echo $form->dropdownlist($model,'user_status',array('active'=>'active','process'=>'process')); ?></td>
		
	</tr>

	<tr>
		<td><?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?></td>
	</tr>
	</table>

<?php $this->endWidget(); ?>

</div><!-- form -->