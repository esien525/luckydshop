<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<table>
	<tr>
		<td width="140px"><?php echo $form->labelEx($model,'user_name'); ?></td>
		<td><?php echo $model->user_name; ?></td>
	</tr>

	<tr>
		<td><?php echo $form->labelEx($model,'user_email'); ?></td>
		<td><?php echo $model->user_email; ?></td>
	</tr>

	
	
	<tr>
		<td><?php echo $form->labelEx($model,'user_contactnumber'); ?></td>
		<td><?php echo $model->user_contactnumber; ?></td>
	</tr>
	
	
	<!--<tr>
		<td><?php echo $form->labelEx($model,'user_type'); ?></td>
		<td><?php echo $model->user_type; ?></td>
	</tr>-->
	<tr>
		<td><?php echo $form->labelEx($model,'user_datejoin'); ?></td>
		<td><?php echo $model->user_datejoin; ?></td>
	</tr>
	<!--<tr>
		<td><?php echo $form->labelEx($model,'user_status'); ?></td>
		<td><?php echo $model->user_status; ?></td>
	</tr>-->
	
	</table>
	
	

<?php $this->endWidget(); ?>

</div><!-- form -->