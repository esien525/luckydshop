<?php
include("js/databaseconnection.php");
$datetoday=date("Y-m-d");
$daily=date("Y-m-d",strtotime('-1 day', strtotime("$datetoday")));
$datetomorrow=date("Y-m-d",strtotime('+1 day', strtotime("$datetoday")));

$monthly_start=date('Y-m-d',strtotime('first day of last month'));
$monthly_end=date('Y-m-d',strtotime('last day of last month'));
$weekly_start=date("Y-m-d",strtotime('-7 day', strtotime("$datetoday")));
$weekly_end=date("Y-m-d");

$queryFeedbackToday="Select * FROM app_feedback WHERE feedback_submission_datetime between '$weekly_start 00:00:00' AND '$weekly_end 00:00:00' and feedback_status='open'";
$resultFeedbackToday=mysql_query($queryFeedbackToday);
$num_rows_FeedbackToday = mysql_num_rows($resultFeedbackToday);
if($num_rows_FeedbackToday!=0){
	$fid=array();
	while ($row = mysql_fetch_row($resultFeedbackToday)){
		$fid[]=$row[0];
	}
	echo var_dump($fid);
	$rand = array_rand($fid);
	echo $thisid=$fid[$rand];
	mysql_query("INSERT INTO `app_luckydraw` (`luckydraw_feedback_id`, `luckydraw_type`, `luckydraw_datetime`, `luckydraw_status`) VALUES ('$thisid', 'Weekly', NOW(), 'open');");
	mysql_query("UPDATE app_feedback SET feedback_status='weekly win' WHERE feedback_id='$thisid'");
}
?>