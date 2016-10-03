<?php

//Please change below line to match back mysql (host,username,password)
//$con = mysql_connect("localhost","trademysu_root","H8ikiEyK");
$con = mysql_connect("localhost","luckydsh_root","abc@123");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
//Please change below line to match back mysql databasename
mysql_set_charset('utf8', $con); 
mysql_select_db("luckydsh_data", $con);


$baseurl=Yii::app()->request->baseUrl;
$server=$_SERVER['SERVER_NAME'];

?>
