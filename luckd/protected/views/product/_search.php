<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'product_id'); ?>
		<?php echo $form->textField($model,'product_id',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'product_title'); ?>
		<?php echo $form->textField($model,'product_title',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'product_description'); ?>
		<?php echo $form->textArea($model,'product_description',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'product_importantinfo'); ?>
		<?php echo $form->textArea($model,'product_importantinfo',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'product_photo'); ?>
		<?php echo $form->textArea($model,'product_photo',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'product_price'); ?>
		<?php echo $form->textField($model,'product_price'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'product_promotion_price'); ?>
		<?php echo $form->textField($model,'product_promotion_price'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'product_coin'); ?>
		<?php echo $form->textField($model,'product_coin'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'product_allow_groupbuy'); ?>
		<?php echo $form->textField($model,'product_allow_groupbuy',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'product_start_date'); ?>
		<?php echo $form->textField($model,'product_start_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'product_end_date'); ?>
		<?php echo $form->textField($model,'product_end_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'product_status'); ?>
		<?php echo $form->textField($model,'product_status',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'product_luckydraw_status'); ?>
		<?php echo $form->textField($model,'product_luckydraw_status',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'product_featured'); ?>
		<?php echo $form->textField($model,'product_featured',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'product_posted_date'); ?>
		<?php echo $form->textField($model,'product_posted_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'product_posted_by'); ?>
		<?php echo $form->textField($model,'product_posted_by',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->