<p class="note">Fields with <span class="required">*</span> are required.</p>
<table class="padding-table">
	<tr>
		<td>
			<div class="form">
			
			<?php $form=$this->beginWidget('CActiveForm', array(
				'id'=>'product-form',
				'enableAjaxValidation'=>false,
				'htmlOptions' => array(
			        'enctype' => 'multipart/form-data',
			    ),
			)); ?>		
				
			
				<?php echo $form->errorSummary($model); ?>
			
				<div class="row">
					<?php echo $form->labelEx($model,'product_title'); ?>
					<?php echo $form->textField($model,'product_title',array('size'=>60,'maxlength'=>500,'style'=>'width:100%')); ?>
					<?php echo $form->hiddenField($model,'product_photo',array('size'=>60,'maxlength'=>500,'style'=>'width:100%')); ?>
				</div>
			
				<div class="row">
					<?php echo $form->labelEx($model,'product_description'); ?>
					<?php echo $form->textArea($model,'product_description',array('rows'=>15, 'cols'=>50,'style'=>'width:100%')); ?>
					
				</div>
			
				<div class="row">
					<?php echo $form->labelEx($model,'product_importantinfo'); ?>
					<?php echo $form->textArea($model,'product_importantinfo',array('rows'=>6, 'cols'=>50,'style'=>'width:100%')); ?>
					
				</div>
			
				<table>
					<tr>
						<td width="150px"><?php echo $form->labelEx($model,'product_price'); ?></td>
						<td><?php echo $form->textField($model,'product_price'); ?></td>
					</tr>
					<tr>
						<td><?php echo $form->labelEx($model,'product_promotion_price'); ?></td>
						<td><?php echo $form->textField($model,'product_promotion_price'); ?></td>
					</tr>
					<tr>
						<td><?php echo $form->labelEx($model,'product_coin'); ?></td>
						<td><?php echo $form->textField($model,'product_coin'); ?> coin(s)</td>
					</tr>
					
					<tr>
						<td><?php echo $form->labelEx($model,'product_start_date'); ?></td>
						<td>
							<?php $this->widget('ext.EJuiDateTimePicker.EJuiDateTimePicker', array(
							'model'=>$model,
							'attribute'=>'product_start_date',
							'options'=>array(
								'changeMonth' => true,
								'changeYear' => true,
								'showButtonPanel' => false,
								'dateFormat'=>'yy-mm-dd',
								'minDate'=>+1,
							),
								'language'=>'en',
							'htmlOptions'=>array(
								'class'=>'shadowdatepicker',
								'readOnly'=>true,
								'placeholder'=>"Select",
							),
							));?>
						
					
						</td>
					</tr>
					<tr>
						<td><?php echo $form->labelEx($model,'product_end_date'); ?></td>
						<td>
							<?php $this->widget('ext.EJuiDateTimePicker.EJuiDateTimePicker', array(
							'model'=>$model,
							'attribute'=>'product_end_date',
							'options'=>array(
								'changeMonth' => true,
								'changeYear' => true,
								'showButtonPanel' => false,
								'dateFormat'=>'yy-mm-dd',
								'minDate'=>+1,
							),
								'language'=>'en',
							'htmlOptions'=>array(
								'class'=>'shadowdatepicker',
								'readOnly'=>true,
								'placeholder'=>"Select",
							),
							));?>
						</td>
					</tr>
					
					<tr>
						<td><?php echo $form->labelEx($model,'product_allow_groupbuy'); ?></td>
						<td><?php echo $form->dropdownlist($model,'product_allow_groupbuy',array('Yes'=>'Yes','No'=>'No')); ?></td>
					</tr>
					<tr>
						<td><?php echo $form->labelEx($model,'product_featured'); ?></td>
						<td><?php echo $form->dropdownlist($model,'product_featured',array('Yes'=>'Yes','No'=>'No')); ?></td>
					</tr>
					<tr>
						<td><?php echo $form->labelEx($model,'product_status'); ?></td>
						<td><?php echo $form->dropdownlist($model,'product_status',array('Active'=>'Active','Hidden'=>'Hidden')); ?></td>
					</tr>
				</table>
				<?php echo $form->hiddenField($model,'product_luckydraw_status',array('size'=>60,'maxlength'=>100,'value'=>'Active')); ?>
				<?php echo $form->hiddenField($model,'product_posted_date',array('size'=>60,'maxlength'=>100,'value'=>date("Y-m-d H:i:s"))); ?>
				<?php echo $form->hiddenField($model,'product_posted_by',array('size'=>60,'maxlength'=>100,'value'=>Yii::app()->user->id)); ?>
			
				<div class="row">
					<?php echo $form->labelEx($model,'product_photo',array('style'=>'font-weight:bold')); ?><br/>
					<?php echo $form->hiddenField($model,'product_photo',array('value'=>$model->product_photo));?>
					<?php echo CHtml::activeFileField($model,'image',array('class'=>'user_photo','onmouseover'=>"$('#photobtn1').css('background', '#ff0002')", 'onmouseout'=>"$('#photobtn1').css('background', '#46504F')",'onchange'=>'luckydshop.user.uploadPreview1(this,"'.$model->product_photo.'")')); ?>
					<div class="userImgPrevCon">
						<img id="userImgPrev1" class="userImgPrev"  <?php echo ($model->product_photo!='') ? 'src="'.HTTP_SERVER.HTTP_ROOT.'/'.$model->product_photo.'"' : 'src="'.HTTP_SERVER.HTTP_ROOT.'/images/nophoto.jpg"' ?>/>
						<div class="photobtn" id="photobtn1">Browse</div>
					</div>
					<?php echo $form->error($model,'product_photo'); ?>
				</div>

				<div class="row">
					<table>
						<tr>							
							<td style='padding:5px'>
								<div class="row">
									<?php echo $form->labelEx($model,'product_photo2',array('style'=>'font-weight:bold')); ?><br/>
									<?php echo $form->hiddenField($model,'product_photo2',array('value'=>$model->product_photo2));?>
									<?php echo CHtml::activeFileField($model,'image2',array('class'=>'user_photo','onmouseover'=>"$('#photobtn2').css('background', '#ff0002')", 'onmouseout'=>"$('#photobtn2').css('background', '#46504F')",'onchange'=>'luckydshop.user.uploadPreview2(this,"'.$model->product_photo2.'")')); ?>
									<div class="userImgPrevCon">
										<img id="userImgPrev2" class="userImgPrev"  <?php echo ($model->product_photo2!='') ? 'src="'.(HTTP_SERVER.HTTP_ROOT.'/'.$model->product_photo2).'"' : 'src="'.HTTP_SERVER.HTTP_ROOT.'/images/nophoto.jpg"' ?>/>
										<div class="photobtn" id="photobtn2">Browse</div>
									</div>
									<a class='btn-default btn-del' onclick='clear_photo2()'>Delete Photo 2</a><br/>
									<?php echo $form->error($model,'product_photo2'); ?>
								</div>
							</td>
							<td style='padding:5px'>
								<div class="row">
									<?php echo $form->labelEx($model,'product_photo3',array('style'=>'font-weight:bold')); ?><br/>
									<?php echo $form->hiddenField($model,'product_photo3',array('value'=>$model->product_photo3));?>
									<?php echo CHtml::activeFileField($model,'image3',array('class'=>'user_photo','onmouseover'=>"$('#photobtn3').css('background', '#ff0002')", 'onmouseout'=>"$('#photobtn3').css('background', '#46504F')",'onchange'=>'luckydshop.user.uploadPreview3(this,"'.$model->product_photo3.'")')); ?>
									<div class="userImgPrevCon">
										<img id="userImgPrev3" class="userImgPrev"  <?php echo ($model->product_photo3!='') ? 'src="'.(HTTP_SERVER.HTTP_ROOT.'/'.$model->product_photo3).'"' : 'src="'.HTTP_SERVER.HTTP_ROOT.'/images/nophoto.jpg"' ?>/>
										<div class="photobtn" id="photobtn3">Browse</div>
									</div>
									<a class='btn-default btn-del' onclick='clear_photo3()'>Delete Photo 3</a><br/>
									<?php echo $form->error($model,'product_photo3'); ?>
								</div>
							</td>
							<td style='padding:5px'>
								<div class="row">
									<?php echo $form->labelEx($model,'product_photo4',array('style'=>'font-weight:bold')); ?><br/>
									<?php echo $form->hiddenField($model,'product_photo4',array('value'=>$model->product_photo4));?>
									<?php echo CHtml::activeFileField($model,'image4',array('class'=>'user_photo','onmouseover'=>"$('#photobtn4').css('background', '#ff0002')", 'onmouseout'=>"$('#photobtn4').css('background', '#46504F')",'onchange'=>'luckydshop.user.uploadPreview4(this,"'.$model->product_photo4.'")')); ?>
									<div class="userImgPrevCon">
										<img id="userImgPrev4" class="userImgPrev"  <?php echo ($model->product_photo4!='') ? 'src="'.(HTTP_SERVER.HTTP_ROOT.'/'.$model->product_photo4).'"' : 'src="'.HTTP_SERVER.HTTP_ROOT.'/images/nophoto.jpg"' ?>/>
										<div class="photobtn" id="photobtn4">Browse</div>
									</div>
									<a class='btn-default btn-del' onclick='clear_photo4()'>Delete Photo 4</a><br/>
									<?php echo $form->error($model,'product_photo4'); ?>
								</div>
							</td>
						</tr>
						<tr>
							<td style='padding:5px'>
								<div class="row">
									<?php echo $form->labelEx($model,'product_photo5',array('style'=>'font-weight:bold')); ?><br/>
									<?php echo $form->hiddenField($model,'product_photo5',array('value'=>$model->product_photo5));?>
									<?php echo CHtml::activeFileField($model,'image5',array('class'=>'user_photo','onmouseover'=>"$('#photobtn5').css('background', '#ff0002')", 'onmouseout'=>"$('#photobtn5').css('background', '#46504F')",'onchange'=>'luckydshop.user.uploadPreview5(this,"'.$model->product_photo5.'")')); ?>
									<div class="userImgPrevCon">
										<img id="userImgPrev5" class="userImgPrev"  <?php echo ($model->product_photo5!='') ? 'src="'.(HTTP_SERVER.HTTP_ROOT.'/'.$model->product_photo5).'"' : 'src="'.HTTP_SERVER.HTTP_ROOT.'/images/nophoto.jpg"' ?>/>
										<div class="photobtn" id="photobtn5">Browse</div>
									</div>
									<a class='btn-default btn-del' onclick='clear_photo5()'>Delete Photo 5</a><br/>
									<?php echo $form->error($model,'product_photo5'); ?>
								</div>
							</td>
							<td style='padding:5px'>
								<div class="row">
									<?php echo $form->labelEx($model,'product_photo6',array('style'=>'font-weight:bold')); ?><br/>
									<?php echo $form->hiddenField($model,'product_photo6',array('value'=>$model->product_photo6));?>
									<?php echo CHtml::activeFileField($model,'image6',array('class'=>'user_photo','onmouseover'=>"$('#photobtn6').css('background', '#ff0002')", 'onmouseout'=>"$('#photobtn6').css('background', '#46504F')",'onchange'=>'luckydshop.user.uploadPreview6(this,"'.$model->product_photo6.'")')); ?>
									<div class="userImgPrevCon">
										<img id="userImgPrev6" class="userImgPrev"  <?php echo ($model->product_photo6!='') ? 'src="'.(HTTP_SERVER.HTTP_ROOT.'/'.$model->product_photo6).'"' : 'src="'.HTTP_SERVER.HTTP_ROOT.'/images/nophoto.jpg"' ?>/>
										<div class="photobtn" id="photobtn6">Browse</div>
									</div>
									<a class='btn-default btn-del' onclick='clear_photo6()'>Delete Photo 6</a><br/>
									<?php echo $form->error($model,'product_photo6'); ?>
								</div>
							</td>
							<td style='padding:5px'>
								<div class="row">
									<?php echo $form->labelEx($model,'product_photo7',array('style'=>'font-weight:bold')); ?><br/>
									<?php echo $form->hiddenField($model,'product_photo7',array('value'=>$model->product_photo7));?>
									<?php echo CHtml::activeFileField($model,'image7',array('class'=>'user_photo','onmouseover'=>"$('#photobtn7').css('background', '#ff0002')", 'onmouseout'=>"$('#photobtn7').css('background', '#46504F')",'onchange'=>'luckydshop.user.uploadPreview7(this,"'.$model->product_photo7.'")')); ?>
									<div class="userImgPrevCon">
										<img id="userImgPrev7" class="userImgPrev"  <?php echo ($model->product_photo7!='') ? 'src="'.(HTTP_SERVER.HTTP_ROOT.'/'.$model->product_photo7).'"' : 'src="'.HTTP_SERVER.HTTP_ROOT.'/images/nophoto.jpg"' ?>/>
										<div class="photobtn" id="photobtn7">Browse</div>
									</div>
									<a class='btn-default btn-del' onclick='clear_photo7()'>Delete Photo 7</a><br/>
									<?php echo $form->error($model,'product_photo7'); ?>
								</div>
							</td>
						</tr>
						<tr>
							<td style='padding:5px'>
								<div class="row">
									<?php echo $form->labelEx($model,'product_photo8',array('style'=>'font-weight:bold')); ?><br/>
									<?php echo $form->hiddenField($model,'product_photo8',array('value'=>$model->product_photo8));?>
									<?php echo CHtml::activeFileField($model,'image8',array('class'=>'user_photo','onmouseover'=>"$('#photobtn8').css('background', '#ff0002')", 'onmouseout'=>"$('#photobtn8').css('background', '#46504F')",'onchange'=>'luckydshop.user.uploadPreview8(this,"'.$model->product_photo8.'")')); ?>
									<div class="userImgPrevCon">
										<img id="userImgPrev8" class="userImgPrev"  <?php echo ($model->product_photo8!='') ? 'src="'.(HTTP_SERVER.HTTP_ROOT.'/'.$model->product_photo8).'"' : 'src="'.HTTP_SERVER.HTTP_ROOT.'/images/nophoto.jpg"' ?>/>
										<div class="photobtn" id="photobtn8">Browse</div>
									</div>
									<a class='btn-default btn-del' onclick='clear_photo8()'>Delete Photo 8</a><br/>
									<?php echo $form->error($model,'product_photo8'); ?>
								</div>
							</td>
							<td style='padding:5px'>
								<div class="row">
									<?php echo $form->labelEx($model,'product_photo9',array('style'=>'font-weight:bold')); ?><br/>
									<?php echo $form->hiddenField($model,'product_photo9',array('value'=>$model->product_photo9));?>
									<?php echo CHtml::activeFileField($model,'image9',array('class'=>'user_photo','onmouseover'=>"$('#photobtn9').css('background', '#ff0002')", 'onmouseout'=>"$('#photobtn9').css('background', '#46504F')",'onchange'=>'luckydshop.user.uploadPreview9(this,"'.$model->product_photo9.'")')); ?>
									<div class="userImgPrevCon">
										<img id="userImgPrev9" class="userImgPrev"  <?php echo ($model->product_photo9!='') ? 'src="'.(HTTP_SERVER.HTTP_ROOT.'/'.$model->product_photo9).'"' : 'src="'.HTTP_SERVER.HTTP_ROOT.'/images/nophoto.jpg"' ?>/>
										<div class="photobtn" id="photobtn9">Browse</div>
									</div>
									<a class='btn-default btn-del' onclick='clear_photo9()'>Delete Photo 9</a><br/>
									<?php echo $form->error($model,'product_photo9'); ?>
								</div>
							</td>
							<td style='padding:5px'>
								<div class="row">
									<?php echo $form->labelEx($model,'product_photo10',array('style'=>'font-weight:bold')); ?><br/>
									<?php echo $form->hiddenField($model,'product_photo10',array('value'=>$model->product_photo10));?>
									<?php echo CHtml::activeFileField($model,'image10',array('class'=>'user_photo','onmouseover'=>"$('#photobtn10').css('background', '#ff0002')", 'onmouseout'=>"$('#photobtn10').css('background', '#46504F')",'onchange'=>'luckydshop.user.uploadPreview10(this,"'.$model->product_photo10.'")')); ?>
									<div class="userImgPrevCon">
										<img id="userImgPrev10" class="userImgPrev"  <?php echo ($model->product_photo10!='') ? 'src="'.(HTTP_SERVER.HTTP_ROOT.'/'.$model->product_photo10).'"' : 'src="'.HTTP_SERVER.HTTP_ROOT.'/images/nophoto.jpg"' ?>/>
										<div class="photobtn" id="photobtn10">Browse</div>
									</div>
									<a class='btn-default btn-del' onclick='clear_photo10()'>Delete Photo 10</a><br/>
									<?php echo $form->error($model,'product_photo10'); ?>
								</div>
							</td>
						</tr>
					</table>
				</div>

			
			
			
				<div class="row buttons">
					<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
				</div>
			
			<?php $this->endWidget(); ?>
			
			</div><!-- form -->
		</td>
	</tr>
</table>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.7.1.min.js"></script>
<script type='text/javascript'>
function clear_photo2()
{
	$('#userImgPrev2').attr('src', '<?php echo HTTP_SERVER.HTTP_ROOT."/images/nophoto.jpg";?>');
	$('#userImgPrev2').attr('alt', '<?php echo HTTP_SERVER.HTTP_ROOT."/images/nophoto.jpg";?>');
	$('#Product_product_photo2').val("");
	$('#Product_image2').val("");
}
function clear_photo3()
{
	$('#userImgPrev3').attr('src', '<?php echo HTTP_SERVER.HTTP_ROOT."/images/nophoto.jpg";?>');
	$('#userImgPrev3').attr('alt', '<?php echo HTTP_SERVER.HTTP_ROOT."/images/nophoto.jpg";?>');
	$('#Product_product_photo3').val("");
	$('#Product_image3').val("");
}
function clear_photo4()
{
	$('#userImgPrev4').attr('src', '<?php echo HTTP_SERVER.HTTP_ROOT."/images/nophoto.jpg";?>');
	$('#userImgPrev4').attr('alt', '<?php echo HTTP_SERVER.HTTP_ROOT."/images/nophoto.jpg";?>');
	$('#Product_product_photo4').val("");
	$('#Product_image4').val("");
}
function clear_photo5()
{
	$('#userImgPrev5').attr('src', '<?php echo HTTP_SERVER.HTTP_ROOT."/images/nophoto.jpg";?>');
	$('#userImgPrev5').attr('alt', '<?php echo HTTP_SERVER.HTTP_ROOT."/images/nophoto.jpg";?>');
	$('#Product_product_photo5').val("");
	$('#Product_image5').val("");
}
function clear_photo6()
{
	$('#userImgPrev6').attr('src', '<?php echo HTTP_SERVER.HTTP_ROOT."/images/nophoto.jpg";?>');
	$('#userImgPrev6').attr('alt', '<?php echo HTTP_SERVER.HTTP_ROOT."/images/nophoto.jpg";?>');
	$('#Product_product_photo6').val("");
	$('#Product_image6').val("");
}
function clear_photo7()
{
	$('#userImgPrev7').attr('src', '<?php echo HTTP_SERVER.HTTP_ROOT."/images/nophoto.jpg";?>');
	$('#userImgPrev7').attr('alt', '<?php echo HTTP_SERVER.HTTP_ROOT."/images/nophoto.jpg";?>');
	$('#Product_product_photo7').val("");
	$('#Product_image7').val("");
}
function clear_photo8()
{
	$('#userImgPrev8').attr('src', '<?php echo HTTP_SERVER.HTTP_ROOT."/images/nophoto.jpg";?>');
	$('#userImgPrev8').attr('alt', '<?php echo HTTP_SERVER.HTTP_ROOT."/images/nophoto.jpg";?>');
	$('#Product_product_photo8').val("");
	$('#Product_image8').val("");
}
function clear_photo9()
{
	$('#userImgPrev9').attr('src', '<?php echo HTTP_SERVER.HTTP_ROOT."/images/nophoto.jpg";?>');
	$('#userImgPrev9').attr('alt', '<?php echo HTTP_SERVER.HTTP_ROOT."/images/nophoto.jpg";?>');
	$('#Product_product_photo9').val("");
	$('#Product_image9').val("");
}
function clear_photo10()
{
	$('#userImgPrev10').attr('src', '<?php echo HTTP_SERVER.HTTP_ROOT."/images/nophoto.jpg";?>');
	$('#userImgPrev10').attr('alt', '<?php echo HTTP_SERVER.HTTP_ROOT."/images/nophoto.jpg";?>');
	$('#Product_product_photo10').val("");
	$('#Product_image10').val("");
}
</script>