<div class="form">
<?php
$currenttime = date("Y-m-d H:i:s");
?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
)); ?>
	
	<input type="radio" name="sellertype" value="Normal" checked="checked" onclick="chossy()"> &nbsp;&nbsp;<b>Normal User</b>
	&nbsp;&nbsp;&nbsp;
	<input type="radio" name="sellertype" value="Supplier" onclick="chossy()">&nbsp;&nbsp;<b>Supplier</b>
	&nbsp;&nbsp;&nbsp;
	<input type="radio" name="sellertype" value="Distributor" onclick="chossy()">&nbsp;&nbsp;<b>Distributor</b>

	<?php echo $form->hiddenfield($model,'user_datejoin',array('value'=>$currenttime)); ?>
	<?php echo $form->hiddenfield($model,'last_login',array('value'=>$currenttime)); ?>
	<?php echo $form->hiddenfield($model,'user_status',array('size'=>40,'maxlength'=>100,'value'=>'pending')); ?>
	<div class="row">
	<table style="margin:0px">
		<tr>
			<td colspan="2" height="5px"></td>
		<tr>
		<tr>
			<td width="150px"><?php echo $form->labelEx($model,'user_name'); ?></td>
			<td><?php echo $form->textField($model,'user_name',array('size'=>35,'maxlength'=>300)); ?>
			<?php echo $form->error($model,'user_name'); ?>
			</td>
		</tr>
	
		<tr>
			<td><?php echo $form->labelEx($model,'user_email'); ?></td>
			<td><?php echo $form->textField($model,'user_email',array('size'=>35,'maxlength'=>300)); ?>
			<?php echo $form->error($model,'user_email'); ?>
			</td>
		</tr>
	
		<tr>
			<td><?php echo $form->labelEx($model,'password'); ?></td>
			<td><?php echo $form->passwordField($model,'password',array('size'=>35,'maxlength'=>300,'value'=>'')); ?>
			<?php echo $form->error($model,'password'); ?>
			</td>
		</tr>
	
		<tr>
			<td><?php echo $form->labelEx($model,'password2'); ?></td>
			<td><?php echo $form->passwordField($model,'password2',array('size'=>35,'maxlength'=>300,'value'=>'')); ?>
			<?php echo $form->error($model,'password2'); ?>
			
		</tr>
	
		<tr>
			<td><?php echo $form->labelEx($model,'user_contactnumber'); ?></td>
			<td><?php echo $form->textField($model,'user_contactnumber',array('size'=>35,'maxlength'=>200)); ?>
			<?php echo $form->error($model,'user_contactnumber'); ?>
			</td>
		</tr>
	</table>
	<div id="vendordiv" style="display:none">
		<table style="margin:0px">
			<tr>
				<td colspan="2" height="5px" style="padding-top:15px;font-weight:bold;color:#aaaaaa">Company Details</td>
			<tr>
			<tr>
				<td width="150px"><?php echo $form->labelEx($model,'company_name'); ?></td>
				<td><?php echo $form->textField($model,'company_name',array('size'=>35,'maxlength'=>300)); ?>
				<?php echo $form->error($model,'company_name'); ?>
				</td>
			</tr>
			
			<tr>
				<td><?php echo $form->labelEx($model,'company_tel1'); ?></td>
				<td><?php echo $form->textField($model,'company_tel1',array('size'=>35,'maxlength'=>100)); ?>
				<?php echo $form->error($model,'company_tel1'); ?>
				</td>
			</tr>
			<tr>
				<td><?php echo $form->labelEx($model,'company_tel2'); ?></td>
				<td><?php echo $form->textField($model,'company_tel2',array('size'=>35,'maxlength'=>100)); ?>
				<?php echo $form->error($model,'company_tel2'); ?>
				</td>
			</tr>
			<tr>
				<td><?php echo $form->labelEx($model,'company_fax'); ?></td>
				<td><?php echo $form->textField($model,'company_fax',array('size'=>35,'maxlength'=>100)); ?>
				<?php echo $form->error($model,'company_fax'); ?>
				</td>
			</tr>
			<tr>
				<td><?php echo $form->labelEx($model,'company_email'); ?></td>
				<td><?php echo $form->textField($model,'company_email',array('size'=>35,'maxlength'=>100)); ?>
				<?php echo $form->error($model,'company_email'); ?>
				</td>
			</tr>
			
			<tr>
				<td><?php echo $form->labelEx($model,'company_website'); ?></td>
				<td><?php echo $form->textField($model,'company_website',array('size'=>35,'maxlength'=>300)); ?>
				<?php echo $form->error($model,'company_website'); ?>
				</td>
			</tr>
			<tr>
				<td><?php echo $form->labelEx($model,'company_address'); ?></td>
				<td><?php echo $form->textField($model,'company_address',array('size'=>35,'maxlength'=>500)); ?>
				<?php echo $form->error($model,'company_address'); ?>
				</td>
			</tr>
			<tr>
				<td><b>Postcode / State</b></td>
				<td>
					<?php echo $form->textField($model,'company_postcode',array('size'=>10,'maxlength'=>500)); ?>
					<?php echo $form->dropdownlist($model,'company_state',array('Johor'=>'Johor','Kedah'=>'Kedah','Kelantan'=>'Kelantan','Kuala Lumpur'=>'Kuala Lumpur','Melaka'=>'Melaka','Negeri Sembilan'=>'Negeri Sembilan','Pahang'=>'Pahang','Perak'=>'Perak','Perlis'=>'Perlis','Pulau Pinang'=>'Pulau Pinang','Sabah'=>'Sabah','Sarawak'=>'Sarawak','Selangor'=>'Selangor','Terengganu'=>'Terengganu' ),array('style'=>'width:145px')); ?>
			
				</td>
			</tr>
			
		</table>
	</div>
	
	<table style="margin:0px">
		
		
			<?php echo $form->hiddenField($model,'user_type',array('size'=>25,'maxlength'=>200,'value'=>'Normal')); ?>
		
			
		<tr>
			<td colspan="2" height="5px"></td>
		<tr>
		<tr>
			<td colspan="2">
			By clicking Sign Up, you agree to our <?php echo CHtml::link('Tems of use', array('site/terms'));?> and that<br/> you have read and understood our <?php echo CHtml::link('Privacy policy', array('site/privacy_policy'));?>.
			
			</td>
		<tr>
			<td><?php echo CHtml::submitButton($model->isNewRecord ? 'Sign Up' : 'Save',array('style'=>'padding:5px 10px')); ?></td>
		</tr>
	</table>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<script>
	function chossy(){
		var v=$('input:radio[name=sellertype]:checked').val();
		$('#User_user_type').val(v);
		if(v=="Supplier"){$('#vendordiv').show();}
		else{$('#vendordiv').hide();}
	}
</script>