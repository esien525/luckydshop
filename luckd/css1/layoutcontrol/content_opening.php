<table>
<tr>
<?php if(Yii::app()->user->isGuest){?>
	<td style="vertical-align:top">
<?php } else{?>
<td style="vertical-align:top" width="150px">
	
	<div id="rightcontent">
		<?php echo CHtml::link('<div id="rightcontent_sub"><img width="100px" src="images/main_content/my_profile.png"/></div>MY ACCOUNT', array('user/update'), array('style'=>'cursor:pointer;'));?>
	</div><br/>
	<div id="rightcontent">
	<?php echo CHtml::link('<div id="rightcontent_sub"><img width="100px" src="images/main_content/my_project.png"/></div>MY PROPERTIES', array('property/index'), array('style'=>'cursor:pointer;'));?>
	</div><br/>
	<div id="rightcontent">
	<?php echo CHtml::link('<div id="rightcontent_sub"><img width="100px" src="images/main_content/notification.png"/></div>NOTIFICATION', array('site/notification'), array('style'=>'cursor:pointer;'));?>
	</div><br/>
</td>
<td style="vertical-align:top">
<?php }?>
