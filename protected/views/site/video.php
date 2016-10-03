<table class="table_nomargin">
	<tr>
		<td class="td_nopadding_main" style="width:240px">
			<?php include("js/auto_leftsidebar.php");?>
			
			
		</td>
		<td class="td_10padding_main">
			<div class="bb">
				<?php echo CHtml::link('Home', array('site/index')); ?>
				<small> > </small>
				Video Gallery
			</div>
			
			<h26>Video Gallery </h26><br/>
			<table>
			<?php
					include("js/databaseconnection.php");
					$queryVideo="Select * FROM car_video";
					$resultVideo=mysql_query($queryVideo);
					$num_rows_Video = mysql_num_rows($resultVideo);
					if($num_rows_Video==0){echo "<tr><td colspan='4'>No video embeded</td></tr>";}
					$countp=0;
					echo "<tr><td width='50%'></td><td width='50%'></td></tr>";
					echo "<tr>";
					while($rowVideo=mysql_fetch_array($resultVideo))
					{
						$video_id=$rowVideo['video_id'];
						$video_name=$rowVideo['video_name'];
						$video_link=$rowVideo['video_link'];
						echo "<td>";
						//echo "<a rel='example_group' href='js/timthumb.php?src=http://$server.$baseurl/$gallery_photo&h=400&w=650&zc=1&q=100;' title='$gallery_name'>";
						echo $video_link;
						//echo "</a><br/>";
						echo "<br/>";
						echo "<b>$video_name</b>";
						
						echo "</td>";
						$countp++;
						if($countp%2==0){echo "</tr><tr>";}
					}
			?>
			</table>
		</td>
	</tr>
</table>
