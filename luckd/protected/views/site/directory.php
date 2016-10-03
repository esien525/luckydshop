<script type="text/javascript">
function redirect(){
	var state=$("#location_filter").val();
	if(state=="all"){ window.location = "index.php?r=site/directory";}
    else{window.location = "index.php?r=site/directory&state="+state;}
}
</script>
<table class="table_nomargin">
	<tr>
		<td class="td_nopadding_main" style="width:240px">
			<?php include("js/auto_leftsidebar.php");?>
			
			
		</td>
		<td class="td_10padding_main">
			<?php if(isset($_GET['state'])){$state=$_GET['state'];} else{$state="All States";}?>
			<div class="bb">
				<?php echo CHtml::link('Home', array('site/index')); ?>
				<small> > </small>
				Directory
				<small> > </small>
				<?php echo $state;?>
			</div>
			
			<h26>DIRECTORY > <?php echo $state;?></h26>
			<br/><br/>
			<?php
				if(isset($_GET['state'])){
					$allstate_select="";
					$state_value=$_GET['state'];
					if($state_value=="Johor"){$johor_select="selected='selected'";} else{$johor_select="";}
					if($state_value=="Kedah"){$kedah_select="selected='selected'";} else{$kedah_select="";}
					if($state_value=="Kelantan"){$kelantan_select="selected='selected'";} else{$kelantan_select="";}
					if($state_value=="Kuala Lumpur"){$kl_select="selected='selected'";} else{$kl_select="";}
					if($state_value=="Melaka"){$melaka_select="selected='selected'";} else{$melaka_select="";}
					if($state_value=="Negeri Sembilan"){$ns_select="selected='selected'";} else{$ns_select="";}
					if($state_value=="Pahang"){$pahang_select="selected='selected'";} else{$pahang_select="";}
					if($state_value=="Perak"){$perak_select="selected='selected'";} else{$perak_select="";}
					if($state_value=="Pulau Pinang"){$pp_select="selected='selected'";} else{$pp_select="";}
					if($state_value=="Sabah"){$sabah_select="selected='selected'";} else{$sabah_select="";}
					if($state_value=="Sarawak"){$sarawak_select="selected='selected'";} else{$sarawak_select="";}
					if($state_value=="Selangor"){$selangor_select="selected='selected'";} else{$selangor_select="";}
					if($state_value=="Terengganu"){$terengganu_select="selected='selected'";} else{$terengganu_select="";}
				}
				else{
					$allstate_select="selected='selected'";
					$johor_select="";
					$kedah_select="";
					$kelantan_select="";
					$kl_select="";
					$melaka_select="";
					$ns_select="";
					$pahang_select="";
					$perak_select="";
					$pp_select="";
					$sabah_select="";
					$sarawak_select="";
					$selangor_select="";
					$terengganu_select="";
				}
			?>
			<select name="location_filter" id="location_filter" style="padding:1px;margin:0px;width:230px;margin-bottom:5px;" onchange="redirect()">
					<option <?php echo $allstate_select;?> value="all">All States</option>
					<option <?php echo $johor_select;?> value="Johor">Johor</option>
					<option <?php echo $kedah_select;?> value="Kedah">Kedah</option>
					<option <?php echo $kelantan_select;?> value="Kelantan">Kelantan</option>
					<option <?php echo $kl_select;?> value="Kuala Lumpur">Kuala Lumpur</option>
					<option <?php echo $melaka_select;?> value="Melaka">Melaka</option>
					<option <?php echo $ns_select;?> value="Negeri Sembilan">Negeri Sembilan</option>
					<option <?php echo $pahang_select;?> value="Pahang">Pahang</option>
					<option <?php echo $perak_select;?> value="Perak">Perak</option>
					<option <?php echo $pp_select;?> value="Pulau Pinang">Pulau Pinang</option>
					<option <?php echo $sabah_select;?> value="Sabah">Sabah</option>
					<option <?php echo $sarawak_select;?> value="Sarawak">Sarawak</option>
					<option <?php echo $selangor_select;?> value="Selangor">Selangor</option>
					<option <?php echo $terengganu_select;?> value="Terengganu">Terengganu</option>
			</select>
			<br/><br/>
			
			<?php
				include("js/databaseconnection.php");
				
				
				echo "<h26>Directory Listing</h26><br/><br/>";
				$queryWD="Select * FROM car_workshop_category WHERE category_status='Active'";
				$resultWD=mysql_query($queryWD);
				echo "<table>";
				echo "<tr>";
				$count_DC=0;
				while($rowWD=mysql_fetch_array($resultWD))
				{
					$C_id=$rowWD['category_id'];
					$C_name=$rowWD['category_name'];
					if(isset($_GET['state'])){
						$queryWD_EACH="Select * FROM car_workshop WHERE workshop_type='$C_name' and workshop_state='$state' and workshop_status='Active'";
					}
					else{
						$queryWD_EACH="Select * FROM car_workshop WHERE workshop_type='$C_name' and workshop_status='Active'";
					}
					$resultWD_EACH=mysql_query($queryWD_EACH);
					$num_rowsWD_EACH = mysql_num_rows($resultWD_EACH);
				
					echo "<td width='33.33%'><li>";
					echo CHtml::link("$C_name ($num_rowsWD_EACH)", array('workshop/index','type'=>"$C_name",'state'=>"$state"));
					echo "</li></td>";
					$count_DC++;
					if($count_DC%3==0){echo "</tr><tr>";}
				}
				echo "</tr>";
				echo "</table>";
			?>
		</td>
	</tr>
</table>