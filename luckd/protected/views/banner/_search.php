<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'banner_id'); ?>
		<?php echo $form->textField($model,'banner_id',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'banner_photo'); ?>
		<?php echo $form->textArea($model,'banner_photo',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'banner_title'); ?>
		<?php echo $form->textField($model,'banner_title',array('size'=>60,'maxlength'=>300)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'banner_description'); ?>
		<?php echo $form->textField($model,'banner_description',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'banner_link'); ?>
		<?php echo $form->textArea($model,'banner_link',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'banner_order'); ?>
		<?php echo $form->textField($model,'banner_order'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'banner_language'); ?>
		<?php echo $form->textField($model,'banner_language',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->