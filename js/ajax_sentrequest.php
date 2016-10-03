<?php
	$fuser_id=$_GET['fuser_id'];
	$user_id=$_GET['user_id'];
	include("databaseconnection1.php");
	mysql_query("INSERT INTO friend (friend_from_id,friend_to_id,friend_datetime,friend_status) VALUES ('$user_id','$fuser_id',NOW(),'Request Sent');");
?>
