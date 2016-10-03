<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'friend_id'); ?>
		<?php echo $form->textField($model,'friend_id',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'friend_from_id'); ?>
		<?php echo $form->textField($model,'friend_from_id',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'friend_to_id'); ?>
		<?php echo $form->textField($model,'friend_to_id',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'friend_datetime'); ?>
		<?php echo $form->textField($model,'friend_datetime'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'friend_status'); ?>
		<?php echo $form->textField($model,'friend_status',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->