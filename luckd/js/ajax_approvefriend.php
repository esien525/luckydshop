<?php
	$friend_id=$_GET['friendid'];
	include("databaseconnection1.php");
	mysql_query("UPDATE friend SET friend_status='Friend' WHERE friend_id='$friend_id'");
?>
