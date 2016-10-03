<p class="note">Fields with <span class="required">*</span> are required.</p>

<b>Upload Product Photo:</b><br/><br/>
			
				<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/ajaxupload.js"></script>
				<form action="js/ajaxuploadbanner.php" method="post" name="sleeker" id="sleeker" enctype="multipart/form-data">
					<input type="hidden" name="maxSize" value="3000000" />
					<input type="hidden" name="maxW" value="800" />
					<input type="hidden" name="fullPath" value="images/banner/" />
					<input type="hidden" name="relPath" value="../images/banner/" />
					<input type="hidden" name="colorR" value="255" />
					<input type="hidden" name="colorG" value="255" />
					<input type="hidden" name="colorB" value="255" />
					<input type="hidden" name="maxH" value="600" />
					<input type="hidden" name="filename" value="filename" />
					<p><input type="file" name="filename" onchange="ajaxUpload(this.form,'<?php echo Yii::app()->request->baseUrl; ?>/js/ajaxuploadbanner.php?filename=name&amp;maxSize=3000000&amp;maxW=800&amp;fullPath=images/banner/&amp;relPath=../images/banner/&amp;colorR=255&amp;colorG=255&amp;colorB=255&amp;maxH=600','upload_area','File Uploading Please Wait...&lt;br /&gt;&lt;img src=\'images/loader_light_blue.gif\' width=\'128\' height=\'15\' border=\'0\' /&gt;','&lt;img src=\'images/error.gif\' width=\'16\' height=\'16\' border=\'0\' /&gt; Error in Upload, check settings and path info in source code.'); return false;" /></p>
				</form>
				<div id="upload_area">
					<?php if($model->banner_photo==""){?>
					<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/nophoto.jpg" height="200px"/>
					<?php
					} else{
					?>
					<img src="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo $model->banner_photo;?>" height="200px"/>
					<?php }?>
				</div><br/>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'banner-form',
	'enableAjaxValidation'=>false,
)); ?>

	

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->hiddenField($model,'banner_photo',array('size'=>60,'maxlength'=>500)); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'banner_title'); ?>
		<?php echo $form->textField($model,'banner_title',array('size'=>60,'maxlength'=>300)); ?>
		
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'banner_link'); ?>
		<?php echo $form->textField($model,'banner_link',array('size'=>60,'maxlength'=>300)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'banner_order'); ?>
		# <?php echo $form->textField($model,'banner_order'); ?>
		
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'banner_location'); ?>
		<?php echo $form->dropdownlist($model,'banner_location',array('Home Page'=>'Home Page','Product Page'=>'Product Page','Featured Product Page'=>'Featured Product Page')); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->