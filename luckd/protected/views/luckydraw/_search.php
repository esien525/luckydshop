<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'luckydraw_id'); ?>
		<?php echo $form->textField($model,'luckydraw_id',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'luckydraw_refno1'); ?>
		<?php echo $form->textField($model,'luckydraw_refno1',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'luckydraw_refno2'); ?>
		<?php echo $form->textField($model,'luckydraw_refno2',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'luckydraw_userid'); ?>
		<?php echo $form->textField($model,'luckydraw_userid',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'luckydraw_amount'); ?>
		<?php echo $form->textField($model,'luckydraw_amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'luckydraw_datetime'); ?>
		<?php echo $form->textField($model,'luckydraw_datetime'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'luckydraw_status'); ?>
		<?php echo $form->textField($model,'luckydraw_status',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->