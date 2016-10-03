<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ac_id'); ?>
		<?php echo $form->textField($model,'ac_id',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ac_cart_id'); ?>
		<?php echo $form->textField($model,'ac_cart_id',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ac_product_id'); ?>
		<?php echo $form->textField($model,'ac_product_id',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ac_quantity'); ?>
		<?php echo $form->textField($model,'ac_quantity'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ac_amount'); ?>
		<?php echo $form->textField($model,'ac_amount'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->