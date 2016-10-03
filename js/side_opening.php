<!-- Content section -->
<?php
$myuserlevel=Yii::app()->user->usertype;
$myfirstname=Yii::app()->user->userfirstname;
$mylastname=Yii::app()->user->userlastname;
$myid=Yii::app()->user->id;
include("js/databaseconnection.php");
?>
<section class="content top-null">
      <div class="container">
        <div class="row">
		  <div class="col-md-3">
            
            <div class="divider divider--md"></div>
			
			<?php if($myuserlevel=="Administrator"){?>
            <h4 class="text-uppercase"><b>Control Panel</b></h4>
            <ul class="category-list">
				  <li><?php echo CHtml::link("Product Management",  array('product/admin'));?></li>
				  <li><?php echo CHtml::link("User Management",  array('user/admin'));?></li>
				  <li><?php echo CHtml::link("Package Management",  array('package/admin'));?></li>
				  <li><?php echo CHtml::link("Banner Management",  array('banner/admin'));?></li>
				  <li><?php echo CHtml::link("Contact Us Info Management",  array('contactus/view'));?></li>
				  <li>Pages Management</li>
				  <?php
						$queryInfo="Select * FROM pages";
						$resultInfo=mysql_query($queryInfo);
						
						while($rowInfo=mysql_fetch_array($resultInfo)){
							  $pages_id=$rowInfo['pages_id'];
							$pages_title=$rowInfo['pages_title'];
				  ?>
				  <li style="margin-left:25px"><?php echo CHtml::link("$pages_title",  array('pages/view','id'=>$pages_id));?></li>
				  <?php
						}
				  ?>
				  
              
             
            </ul>
			<br/>
			
			<?php }?>
			
			<h4 class="text-uppercase"><b>My Account</b></h4>
            <ul class="category-list">
				  <?php
				  $queryFriend="Select * FROM friend WHERE (friend_from_id='$myid' or friend_to_id='$myid') and friend_status='Friend'";		
				  $resultFriend=mysql_query($queryFriend);
				  $num_rowsFriend = mysql_num_rows($resultFriend);
				  
				   $queryFriendR="Select * FROM friend WHERE (friend_from_id='$myid' or friend_to_id='$myid') and friend_status='Request Sent'";		
				  $resultFriendR=mysql_query($queryFriendR);
				  $num_rowsFriendR = mysql_num_rows($resultFriendR);
				  ?>
				   <li><?php echo CHtml::link("My Profile",  array('user/cpanel')); ?></li>
				  <li><?php echo CHtml::link("My D-Coin",  array('user/dcoin'));?></li>
				  <li><?php echo CHtml::link("My Friend ($num_rowsFriend)",  array('user/friend'));?></li>
				  <?php if($num_rowsFriendR>0){?>
						<li style="margin-left:25px"><?php echo CHtml::link("Friend Request (<font style='color:#ff0022'>$num_rowsFriendR</font>)",  array('user/friendrequest'));?></li>
				  <?php }?>
				   <li><?php echo CHtml::link("My Lucky Draw",  array('user/myluckydraw'));?></li>
             
            </ul>
            
          </div>
          <div class="col-md-9 aside-column">
				
				<section class="content" >