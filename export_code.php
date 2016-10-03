<?php

$date=date('Y-m-d');
$con = mysql_connect("localhost","iiddcomm_admin","abcd@1234");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_query( "SET CHARACTER SET utf8", $con); 
mysql_select_db("iiddcomm_baagus", $con);



header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment;Filename=Code_$date.xls");
echo "<table>";
echo "<tr>";
echo "<td colspan='3'><b>Accessories</b></td>";
echo "</tr>";
$query9="Select * FROM `setting_accessories_category`";
$result9=mysql_query($query9);
while($row9=mysql_fetch_array($result9))
{
	$category_id=$row9['category_id'];
	$category_name=$row9['category_name'];
	echo "<tr>";
	echo "<td colspan='3'><b>$category_name</b></td>";
	echo "</tr>";
	$query10="Select * FROM `setting_accessories` WHERE accessories_category_id='$category_id' ORDER BY accessories_title ASC";
	$result10=mysql_query($query10);
	while($row10=mysql_fetch_array($result10))
	{
		$accessories_title=$row10['accessories_title'];
		$accessories_price=$row10['accessories_price'];
		$accessories_price_per=$row10['accessories_price_per'];
		
		echo "<tr>";
		echo "<td>$accessories_title</td>";
		echo "<td>RM $accessories_price</td>";
		echo "<td>/ $accessories_price_per</td>";
		echo "</tr>";
		
	}
	echo "<td colspan='3'></td>";
}

echo "<tr>";
echo "<td colspan='3'><b>Blinds</b></td>";
echo "</tr>";
$query6="Select * FROM `setting_blind` order by blind_name ASC";
$result6=mysql_query($query6);
while($row6=mysql_fetch_array($result6))
{
	$blind_id=$row6['blind_id'];
	$blind_name=$row6['blind_name'];
	$blind_min_sqft=$row6['blind_min_sqft'];
	echo "<tr>";
	echo "<td colspan='3'><b>$blind_name (Min $blind_min_sqft sqft.)</b></td>";
	echo "</tr>";
	
	$query7="Select * FROM `setting_blind_price` LEFT JOIN setting_blind_defaultprice ON setting_blind_price.blindprice_price_per_sqft=setting_blind_defaultprice.blind_defaultprice_id WHERE blind_id=$blind_id order by setting_blind_defaultprice.blind_defaultprice ASC, blindprice_code ASC";
	$result7=mysql_query($query7);
	while($row7=mysql_fetch_array($result7))
	{
		$blindprice_code=$row7['blindprice_code'];
		$blindprice_roll_width=$row7['blindprice_roll_width'];
		$blindprice_price_per_sqft=$row7['blindprice_price_per_sqft'];
			$query8="Select * FROM `setting_blind_defaultprice` WHERE blind_defaultprice_id=$blindprice_price_per_sqft";
			$result8=mysql_query($query8);
			while($row8=mysql_fetch_array($result8))
			{
				$blind_defaultprice=$row8['blind_defaultprice'];
			}
		
		
		
		
		echo "<tr>";
		echo "<td>$blindprice_code</td>";
		echo "<td>$blindprice_roll_width m</td>";
		echo "<td>RM $blind_defaultprice / sqft</td>";
		echo "</tr>";
	}
	
	echo "<td colspan='3'></td>";
}
	
echo "<tr>";
	echo "<td colspan='3'><b>Fabric Code (Curtain/ Blackout/ Sheer & Fringes)</b></td>";
	echo "</tr>";
$query1="Select * FROM `setting_fabric_price` order by fabric_price ASC";
$result1=mysql_query($query1);
while($row1=mysql_fetch_array($result1))
{
	$fabric_price_id=$row1['fabric_price_id'];
	$fabric_price=$row1['fabric_price'];
	echo "<tr>";
	echo "<td colspan='3'><b>RM $fabric_price</b></td>";
	echo "</tr>";
	
		$query2="Select * FROM `setting_fabric_code` WHERE fabric_price_id=$fabric_price_id order by code_type ASC,code_name ASC";
		$result2=mysql_query($query2);
		while($row2=mysql_fetch_array($result2))
		{
			$code_name=$row2['code_name'];
			$code_cutting=$row2['code_cutting']; if($code_cutting=="1"){$code_cutting="Straight";} else if($code_cutting=="2"){$code_cutting="Horizontal";}  else if($code_cutting=="1,2"){$code_cutting="Straight,Horizontal";}
			$code_type=$row2['code_type'];
			echo "<tr>";
			echo "<td>$code_name</td>";
			echo "<td>$code_cutting</td>";
			echo "<td>$code_type</td>";
			echo "</tr>";
		}
	echo "<td colspan='3'></td>";
}





	echo "<td colspan='3'></td>";
	echo "<tr>";
	echo "<td colspan='3'><b>Wallpaper</b></td>";
	echo "</tr>";
	
	echo "<tr>";
	echo "<td><b>Wallpaper Code</b></td>";
	echo "<td><b>Price (per roll)</b></td>";
	echo "<td><b>Roll width (m)</b></td>";
	echo "<td><b>Matching Wastage (m)</b></td>";
	echo "<td><b>Roll Height (m)</b></td>";
	echo "</tr>";
	$query3="Select * FROM setting_wallpaper LEFT JOIN setting_wallpaper_price ON setting_wallpaper.wallpaper_price_per_roll=setting_wallpaper_price.wallpaper_price_id order by setting_wallpaper_price.wallpaper_price ASC,wallpaper_code ASC";
	$result3=mysql_query($query3);
	while($row3=mysql_fetch_array($result3))
	{
		$wallpaper_code=$row3['wallpaper_code'];
		$wallpaper_price_per_roll=$row3['wallpaper_price_per_roll'];
			$query4="Select * FROM `setting_wallpaper_price` WHERE wallpaper_price_id=$wallpaper_price_per_roll";
			$result4=mysql_query($query4);
			while($row4=mysql_fetch_array($result4))
			{
				$wallpaper_price=$row4['wallpaper_price'];
			}
		
		$wallpaper_roll_width=$row3['wallpaper_roll_width'];
			$query5="Select * FROM `setting_wallpaper_rollwidth` WHERE wallpaper_rollwidth_id=$wallpaper_roll_width";
			$result5=mysql_query($query5);
			while($row5=mysql_fetch_array($result5))
			{
				$wallpaper_rollwidth=$row4['wallpaper_rollwidth'];
			}
		$wallpaper_matching_wastage=$row3['wallpaper_matching_wastage'];
		$wallpaper_roll_height=$row3['wallpaper_roll_height'];
		echo "<tr>";
		echo "<td>$wallpaper_code</td>";
		echo "<td>RM $wallpaper_price</td>";
		echo "<td>$wallpaper_rollwidth</td>";
		echo "<td>$wallpaper_matching_wastage</td>";
		echo "<td>$wallpaper_roll_height</td>";
		echo "</tr>";
	}
echo "</table>";
?>