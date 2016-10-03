<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'luckydraw-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php
		$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < 6; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		$myid=Yii::app()->user->id;
		$productid=$_GET['id'];
		$datenow=date("Y-m-d H:i:s");
		$myusercoin=Yii::app()->user->usercoin;
	?>
	<?php echo $form->hiddenField($model,'luckydraw_refno1',array('size'=>60,'maxlength'=>100,'value'=>"$randomString")); ?>
		<?php echo $form->hiddenField($model,'luckydraw_refno2',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->hiddenField($model,'luckydraw_userid',array('size'=>20,'maxlength'=>20,'value'=>$myid)); ?>
		<?php echo $form->hiddenField($model,'luckydraw_productid',array('size'=>20,'maxlength'=>20,'value'=>$productid)); ?>
		
		<?php echo $form->hiddenField($model,'luckydraw_datetime',array('value'=>$datenow)); ?>
		<?php echo $form->hiddenField($model,'luckydraw_status',array('size'=>60,'maxlength'=>100,'value'=>'Active')); ?>

	<div class="input-group-qty pull-left"> <span class="pull-left"> </span>
		<input type="text" id="Luckydraw_luckydraw_amount" name="Luckydraw[luckydraw_amount]" class="input-number input--wd input-qty pull-left" value="1" min="1" max="<?php echo $myusercoin;?>">
		<span class="pull-left btn-number-container">
		<button type="button" class="btn btn-number btn-number--plus" data-type="plus" data-field="Luckydraw[luckydraw_amount]"> + </button>
		<button type="button" class="btn btn-number btn-number--minus" disabled="disabled" data-type="minus" data-field="Luckydraw[luckydraw_amount]"> &#8211; </button>
		</span> </div>
	  <div class="pull-left">
		<button class="btn btn--wd text-uppercase">Participate</button>
		<!--<button class="btn btn--wd text-uppercase">Invite Friend</button>-->
	  </div>



<?php $this->endWidget(); ?>