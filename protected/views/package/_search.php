<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'package_id'); ?>
		<?php echo $form->textField($model,'package_id',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'package_name'); ?>
		<?php echo $form->textField($model,'package_name',array('size'=>60,'maxlength'=>300)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'package_price_normal'); ?>
		<?php echo $form->textField($model,'package_price_normal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'package_price_promotion'); ?>
		<?php echo $form->textField($model,'package_price_promotion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'package_coin_amount'); ?>
		<?php echo $form->textField($model,'package_coin_amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'package_status'); ?>
		<?php echo $form->textField($model,'package_status',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->