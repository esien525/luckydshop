<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cart-form',
	'enableAjaxValidation'=>false,
)); ?>
<div class="divider divider--xs"></div>
<div class="card card--collapse open">
	<h4 class="h-pad-sm card-title">SHIPPING ADDRESS</h4>
	<div class="card-content">
		<p>Please enter your shipping address.</p>
		<?php echo $form->textArea($model,'cart_deliver_address',array('style'=>'resize:none','class'=>'textarea--wd textarea--wd--full','required'=>'required')); ?>
		<div class="divider divider--xs"></div>
	</div>
</div>
<div class="divider divider--xs"></div>
<h4 class="h-pad-sm">CART TOTALS</h4>
<table class="table table-total">
	<tbody>
		<tr>
			<th class="text-left"> Subtotal </th>
			<th class="text-right" id="subtotal">RM <?php echo number_format(AddCart::getTotalAmount($model->cart_id),2,'.',',');?></th>
		</tr>
		<tr>
			<td class="text-left"><h2>Grand Total</h2></td>
			<td class="text-right"><h2 id="grand_total">RM <?php echo number_format(AddCart::getTotalAmount($model->cart_id),2,'.',',');?></h2></td>
		</tr>
	</tbody>
</table>
<div class="divider divider--xs"></div>
<div class="text-center"> 
	<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Proceed to checkout',array('class'=>'btn btn--wd btn--xl')); ?>
	<div class="divider divider--xxs"></div>
</div>

<?php $this->endWidget(); ?>
