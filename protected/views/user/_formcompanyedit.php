<div class="form">
<b>Company Logo :</b><br/>
				<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/ajaxupload.js"></script>
				<form action="js/ajaxuploadlogo.php" method="post" name="sleeker" id="sleeker" enctype="multipart/form-data">
					<input type="hidden" name="maxSize" value="1000000" />
					<input type="hidden" name="maxW" value="800" />
					<input type="hidden" name="fullPath" value="images/logo/" />
					<input type="hidden" name="relPath" value="../images/logo/" />
					<input type="hidden" name="colorR" value="255" />
					<input type="hidden" name="colorG" value="255" />
					<input type="hidden" name="colorB" value="255" />
					<input type="hidden" name="maxH" value="600" />
					<input type="hidden" name="filename" value="filename" />
					<p><input type="file" name="filename" onchange="ajaxUpload(this.form,'<?php echo Yii::app()->request->baseUrl; ?>/js/ajaxuploadlogo.php?filename=name&amp;maxSize=1000000&amp;maxW=800&amp;fullPath=images/logo/&amp;relPath=../images/logo/&amp;colorR=255&amp;colorG=255&amp;colorB=255&amp;maxH=600','upload_area','File Uploading Please Wait...&lt;br /&gt;&lt;img src=\'images/loader_light_blue.gif\' width=\'128\' height=\'15\' border=\'0\' /&gt;','&lt;img src=\'images/error.gif\' width=\'16\' height=\'16\' border=\'0\' /&gt; Error in Upload, check settings and path info in source code.'); return false;" /></p>
				</form>
				<div id="upload_area">
					
					<?php
					$photologo=$model->company_logo;
					if($photologo==""){
					?>
					
					<?php } else{?>
					<img src="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo $model->company_logo;?>" height="80px"/>
					<?php }?>
				</div>
				
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<table>
	<tr>
		<td><?php echo $form->labelEx($model,'company_name'); ?></td>
		<td><?php echo $form->textField($model,'company_name',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'company_name'); ?></td>
	</tr>

	<tr>
		<td><?php echo $form->labelEx($model,'company_tel1'); ?></td>
		<td><?php echo $form->textField($model,'company_tel1',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'company_tel1'); ?></td>
	</tr>

	<?php echo $form->hiddenField($model,'password',array('size'=>60,'maxlength'=>300,'value'=>base64_decode($model->password))); ?>
	<?php echo $form->hiddenField($model,'password2',array('size'=>60,'maxlength'=>300,'value'=>base64_decode($model->password))); ?>
		
	<tr>
		<td><?php echo $form->labelEx($model,'company_tel2'); ?></td>
		<td><?php echo $form->textField($model,'company_tel2',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'company_tel2'); ?></td>
	</tr>
	<tr>
		<td><?php echo $form->labelEx($model,'company_fax'); ?></td>
		<td><?php echo $form->textField($model,'company_fax',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'company_fax'); ?></td>
	</tr>
	<tr>
		<td><?php echo $form->labelEx($model,'company_email'); ?></td>
		<td><?php echo $form->textField($model,'company_email',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'company_email'); ?></td>
	</tr>
	<tr>
		<td><?php echo $form->labelEx($model,'company_website'); ?></td>
		<td><?php echo $form->textField($model,'company_website',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'company_website'); ?></td>
	</tr>
	<tr>
		<td><?php echo $form->labelEx($model,'company_address'); ?></td>
		<td><?php echo $form->textField($model,'company_address',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'company_address'); ?></td>
	</tr>
	<tr>
		<td><b>Postcode / State</b></td>
		<td>
			<?php echo $form->textField($model,'company_postcode',array('size'=>15,'maxlength'=>500)); ?>
			<?php echo $form->dropdownlist($model,'company_state',array('Johor'=>'Johor','Kedah'=>'Kedah','Kelantan'=>'Kelantan','Kuala Lumpur'=>'Kuala Lumpur','Melaka'=>'Melaka','Negeri Sembilan'=>'Negeri Sembilan','Pahang'=>'Pahang','Perak'=>'Perak','Perlis'=>'Perlis','Pulau Pinang'=>'Pulau Pinang','Sabah'=>'Sabah','Sarawak'=>'Sarawak','Selangor'=>'Selangor','Terengganu'=>'Terengganu' ),array('style'=>'width:145px')); ?>
	
		</td>
	</tr>
	
		<?php echo $form->hiddenField($model,'company_logo',array('size'=>60,'maxlength'=>500)); ?>
		
	</table>
	
		<?php echo $form->hiddenField($model,'user_type',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->hiddenField($model,'user_datejoin',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->hiddenField($model,'user_status',array('size'=>60,'maxlength'=>100)); ?>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Update Profile'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->