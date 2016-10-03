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
		<td><?php echo $form->passwordField($model,'password',array('size'=>40,'maxlength'=>300,'value'=>base64_decode($model->password))); ?></td>
		
	</tr>

	<tr>
		<td><?php echo $form->labelEx($model,'password2'); ?></td>
		<td><?php echo $form->passwordField($model,'password2',array('size'=>40,'maxlength'=>300,'value'=>base64_decode($model->password))); ?></td>
		
	</tr>

	<tr>
		<td><?php echo $form->labelEx($model,'user_type'); ?></td>
		<td><?php echo $form->dropdownlist($model,'user_type',array('admin'=>'admin','normal'=>'normal','vendor'=>'vendor')); ?></td>
		
	</tr>

	<?php echo $form->hiddenField($model,'user_datejoin',array('size'=>40,'maxlength'=>300,'value'=>date('Y-m-d H:i:s'))); ?>

			<tr>
				<td colspan="2" height="5px" style="padding-top:15px;font-weight:bold;color:#aaaaaa">Company Details</td>
			<tr>
			<tr>
				<td><?php echo $form->labelEx($model,'company_name'); ?></td>
				<td><?php echo $form->textField($model,'company_name',array('size'=>40,'maxlength'=>300)); ?>
				</td>
			</tr>
			
			<tr>
				<td><?php echo $form->labelEx($model,'company_tel1'); ?></td>
				<td><?php echo $form->textField($model,'company_tel1',array('size'=>40,'maxlength'=>100)); ?>
				</td>
			</tr>
			<tr>
				<td><?php echo $form->labelEx($model,'company_tel2'); ?></td>
				<td><?php echo $form->textField($model,'company_tel2',array('size'=>40,'maxlength'=>100)); ?>
				</td>
			</tr>
			<tr>
				<td><?php echo $form->labelEx($model,'company_fax'); ?></td>
				<td><?php echo $form->textField($model,'company_fax',array('size'=>40,'maxlength'=>100)); ?>
				</td>
			</tr>
			<tr>
				<td><?php echo $form->labelEx($model,'company_email'); ?></td>
				<td><?php echo $form->textField($model,'company_email',array('size'=>40,'maxlength'=>100)); ?>
				</td>
			</tr>
			
			<tr>
				<td><?php echo $form->labelEx($model,'company_website'); ?></td>
				<td><?php echo $form->textField($model,'company_website',array('size'=>40,'maxlength'=>300)); ?>
				</td>
			</tr>
			<tr>
				<td><?php echo $form->labelEx($model,'company_address'); ?></td>
				<td><?php echo $form->textField($model,'company_address',array('size'=>40,'maxlength'=>500)); ?>
				</td>
			</tr>
			<tr>
				<td><b>Postcode / State</b></td>
				<td>
					<?php echo $form->textField($model,'company_postcode',array('size'=>15,'maxlength'=>500)); ?>
					<?php echo $form->dropdownlist($model,'company_state',array('Johor'=>'Johor','Kedah'=>'Kedah','Kelantan'=>'Kelantan','Kuala Lumpur'=>'Kuala Lumpur','Melaka'=>'Melaka','Negeri Sembilan'=>'Negeri Sembilan','Pahang'=>'Pahang','Perak'=>'Perak','Perlis'=>'Perlis','Pulau Pinang'=>'Pulau Pinang','Sabah'=>'Sabah','Sarawak'=>'Sarawak','Selangor'=>'Selangor','Terengganu'=>'Terengganu' ),array('style'=>'width:145px')); ?>
			
				</td>
			</tr>

	<tr>
		<td><?php echo $form->labelEx($model,'user_status'); ?></td>
		<td><?php echo $form->dropdownlist($model,'user_status',array('active'=>'active','pending'=>'pending')); ?></td>
		
	</tr>

	<tr>
		<td><?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?></td>
	</tr>
	</table>

<?php $this->endWidget(); ?>

</div><!-- form -->