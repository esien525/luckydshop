<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
)); ?>

	
	<?php echo $form->errorSummary($model); ?>

	<table>
	<tr>
		<td colspan="2">
			<?php
			$logocc=$model->company_logo;
			$burl=Yii::app()->request->baseUrl;
			if($logocc==""){ }
			else{
				echo "<img src='$burl/$logocc' height='80px'/>";
			}
			?>
		</td>
	</tr>
	<tr>
		<td width="140px"><?php echo $form->labelEx($model,'company_name'); ?></td>
		<td><?php echo $model->company_name; ?></td>
	</tr>
	
	<tr>
		<td><?php echo $form->labelEx($model,'company_tel1'); ?></td>
		<td><?php echo $model->company_tel1; ?></td>
	</tr>
	<tr>
		<td><?php echo $form->labelEx($model,'company_tel2'); ?></td>
		<td><?php echo $model->company_tel2; ?></td>
	</tr>
	<tr>
		<td><?php echo $form->labelEx($model,'company_fax'); ?></td>
		<td><?php echo $model->company_fax; ?></td>
	</tr>
	<tr>
		<td><?php echo $form->labelEx($model,'company_email'); ?></td>
		<td><?php echo $model->company_email; ?></td>
	</tr>
	
	<tr>
		<td><?php echo $form->labelEx($model,'company_website'); ?></td>
		<td><?php echo $model->company_website; ?></td>
	</tr>
	<tr>
		<td><?php echo $form->labelEx($model,'company_address'); ?></td>
		<td><?php echo $model->company_address; ?></td>
	</tr>
	<tr>
		<td><?php echo $form->labelEx($model,'company_postcode'); ?></td>
		<td><?php echo $model->company_postcode; ?></td>
			
	</tr>
	<tr>
		<td><?php echo $form->labelEx($model,'company_state'); ?></td>
		<td><?php echo $model->company_state; ?></td>
			
	</tr>
	
	
	</table>
	
	

<?php $this->endWidget(); ?>

</div><!-- form -->