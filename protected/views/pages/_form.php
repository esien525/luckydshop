<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pages-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<input class='lang_input' id="tab1" type="radio" name="tabs" checked>
	<label class='lang_label' for="tab1">English</label>

	<input class='lang_input' id="tab2" type="radio" name="tabs">
	<label class='lang_label' for="tab2">Chinese</label>

	<input class='lang_input' id="tab3" type="radio" name="tabs">
	<label class='lang_label' for="tab3">BM</label>

	<section id="content1">
		<div class="row">
			<?php echo $form->labelEx($model,'pages_title'); ?>
			<?php echo $form->textField($model,'pages_title',array('size'=>60,'maxlength'=>300)); ?>
			<?php echo $form->error($model,'pages_title'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'pages_content'); ?>
			<?php echo $form->textArea($model,'pages_content',array('rows'=>30, 'cols'=>50,'style'=>'width:100%')); ?>
			<?php echo $form->error($model,'pages_content'); ?>
		</div>
	</section>
	<section id="content2">
		<div class="row">
			<?php echo $form->labelEx($model,'pages_title_cn'); ?>
			<?php echo $form->textField($model,'pages_title_cn',array('size'=>60,'maxlength'=>300)); ?>
			<?php echo $form->error($model,'pages_title_cn'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'pages_content_cn'); ?>
			<?php echo $form->textArea($model,'pages_content_cn',array('rows'=>30, 'cols'=>50,'style'=>'width:100%')); ?>
			<?php echo $form->error($model,'pages_content_cn'); ?>
		</div>

	</section>
	<section id="content3">
		<div class="row">
			<?php echo $form->labelEx($model,'pages_title_bm'); ?>
			<?php echo $form->textField($model,'pages_title_bm',array('size'=>60,'maxlength'=>300)); ?>
			<?php echo $form->error($model,'pages_title_bm'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'pages_content_bm'); ?>
			<?php echo $form->textArea($model,'pages_content_bm',array('rows'=>30, 'cols'=>50,'style'=>'width:100%')); ?>
			<?php echo $form->error($model,'pages_content_bm'); ?>
		</div>

	</section>
	

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->