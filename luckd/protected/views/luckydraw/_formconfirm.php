<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'luckydraw-form',
	'enableAjaxValidation'=>false,
)); ?>


	<?php echo $form->hiddenField($model,'luckydraw_status',array('size'=>60,'maxlength'=>100,'value'=>'Confirmed')); ?>
	<button class="btn btn--wd text-uppercase">Confirm Now!</button>
	&nbsp;&nbsp;
	<?php echo CHtml::link("<div style='color:#536dfe;margin-top:8px'><u>Cancel</u></div>",  array('product/index','id'=>$model->luckydraw_productid));?>
		<!--<button class="btn btn--wd text-uppercase">Invite Friend</button>-->
	  



<?php $this->endWidget(); ?>