<p class="note">Fields with <span class="required">*</span> are required.</p>
<table class="padding-table">
	<tr>
		<td style="vertical-align:top">
			<b>Upload Profile Photo:</b><br/><br/>
			
				<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/ajaxupload.js"></script>
				<form action="js/ajaxuploadprofile.php" method="post" name="sleeker" id="sleeker" enctype="multipart/form-data">
					<input type="hidden" name="maxSize" value="3000000" />
					<input type="hidden" name="maxW" value="800" />
					<input type="hidden" name="fullPath" value="images/profile/" />
					<input type="hidden" name="relPath" value="../images/profile/" />
					<input type="hidden" name="colorR" value="255" />
					<input type="hidden" name="colorG" value="255" />
					<input type="hidden" name="colorB" value="255" />
					<input type="hidden" name="maxH" value="600" />
					<input type="hidden" name="filename" value="filename" />
					<p><input type="file" name="filename" onchange="ajaxUpload(this.form,'<?php echo Yii::app()->request->baseUrl; ?>/js/ajaxuploadprofile.php?filename=name&amp;maxSize=3000000&amp;maxW=800&amp;fullPath=images/profile/&amp;relPath=../images/profile/&amp;colorR=255&amp;colorG=255&amp;colorB=255&amp;maxH=600','upload_area','File Uploading Please Wait...&lt;br /&gt;&lt;img src=\'images/loader_light_blue.gif\' width=\'128\' height=\'15\' border=\'0\' /&gt;','&lt;img src=\'images/error.gif\' width=\'16\' height=\'16\' border=\'0\' /&gt; Error in Upload, check settings and path info in source code.'); return false;" /></p>
				</form>
				<div id="upload_area">
					<?php if($model->user_photo==""){?>
					<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/nophoto.jpg" width="200px"/>
					<?php
					} else{
					?>
					<img src="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo $model->user_photo;?>" width="200px"/>
					<?php }?>
				</div>
		</td>
		<td>
			<div class="form">
			
			<?php $form=$this->beginWidget('CActiveForm', array(
				'id'=>'user-form',
				'enableAjaxValidation'=>false,
			)); ?>
			
			
				<?php echo $form->errorSummary($model); ?>
			
				<table class="padding-table">
				<tr>
					<td width="150px"><?php echo $form->labelEx($model,'user_firstname'); ?></td>
					<td><?php echo $form->textField($model,'user_firstname',array('size'=>40,'maxlength'=>300,'style'=>'width:100%')); ?>
					</td>
				</tr>
				<tr>
					<td><?php echo $form->labelEx($model,'user_lastname'); ?></td>
					<td><?php echo $form->textField($model,'user_lastname',array('size'=>40,'maxlength'=>300,'style'=>'width:100%')); ?>
					<?php echo $form->hiddenField($model,'user_photo',array('size'=>40,'maxlength'=>500,'style'=>'width:100%')); ?>
					</td>
				</tr>
			
				<tr>
					<td><?php echo $form->labelEx($model,'user_email'); ?></td>
					<td><?php echo $form->textField($model,'user_email',array('size'=>40,'maxlength'=>300,'style'=>'width:100%')); ?>
					</td>
				</tr>
				<tr>
					<td><?php echo $form->labelEx($model,'user_contactnumber'); ?></td>
					<td><?php echo $form->textField($model,'user_contactnumber',array('size'=>40,'maxlength'=>200,'style'=>'width:100%')); ?>
					<?php echo $form->error($model,'user_contactnumber'); ?></td>
				</tr>
				
				<tr>
					<td><?php echo $form->labelEx($model,'user_gender'); ?></td>
					<td><?php echo $form->dropdownlist($model,'user_gender',array(''=>'Please select','Male'=>'Male','Female'=>'Female'),array('style'=>'width:100%')); ?>
					</td>
				</tr>
				
				<tr>
					<td><?php echo $form->labelEx($model,'user_description'); ?></td>
					<td>
						<?php echo $form->textArea($model,'user_description',array('rows'=>5, 'cols'=>50,'style'=>'width:100%')); ?>
					</td>
				</tr>
			
				<?php echo $form->hiddenField($model,'password',array('size'=>40,'maxlength'=>300,'value'=>base64_decode($model->password))); ?>
				<?php echo $form->hiddenField($model,'password2',array('size'=>40,'maxlength'=>300,'value'=>base64_decode($model->password))); ?>
					
				
				</table>
				
					<?php echo $form->hiddenField($model,'user_type',array('size'=>60,'maxlength'=>200)); ?>
					<?php echo $form->hiddenField($model,'user_datejoin',array('size'=>60,'maxlength'=>200)); ?>
					<?php echo $form->hiddenField($model,'user_status',array('size'=>60,'maxlength'=>100)); ?>
				<div class="row buttons">
					<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Update Profile'); ?>
				</div>
			
			<?php $this->endWidget(); ?>
			
			</div><!-- form -->
		<td>
	</tr>
</table>