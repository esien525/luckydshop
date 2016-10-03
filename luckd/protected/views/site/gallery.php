<table class="table_nomargin">
	<tr>
		<td class="td_nopadding_main" style="width:240px">
			<?php include("js/auto_leftsidebar.php");?>
			
			
		</td>
		<td class="td_10padding_main">
			<div class="bb">
				<?php echo CHtml::link('Home', array('site/index')); ?>
				<small> > </small>
				Gallery
			</div>
			
			<h26>Gallery </h26><br/>
			<table>
			<?php
					include("js/databaseconnection.php");
					
					$queryAlbum="Select * FROM car_gallery_album order by album_name";
					$resultAlbum=mysql_query($queryAlbum);
					$num_rows_Album = mysql_num_rows($resultAlbum);
					
					while($rowAlbum=mysql_fetch_array($resultAlbum))
					{
							$album_id=$rowAlbum['album_id'];
							$album_name=$rowAlbum['album_name'];
							echo "<tr><td style='height:10px;'></td></tr>";
							echo "<tr><td colspan='4' id='albumname_td'>$album_name</td></tr>";
							$queryPhoto="Select * FROM car_gallery WHERE album_id='$album_id'";
							$resultPhoto=mysql_query($queryPhoto);
							$num_rows_Photo = mysql_num_rows($resultPhoto);
							if($num_rows_Photo==0){echo "<tr><td colspan='4'>No photo for this album</td></tr>";}
							$countp=0;
							echo "<tr><td width='25%'></td><td width='25%'></td><td width='25%'></td><td width='25%'></td></tr>";
							echo "<tr>";
							while($rowPhoto=mysql_fetch_array($resultPhoto))
							{
								$gallery_id=$rowPhoto['gallery_id'];
								$gallery_name=$rowPhoto['gallery_name'];
								$gallery_photo=$rowPhoto['gallery_photo'];
								echo "<td>";
								echo "<a rel='example_group' href='$burl/js/timthumb.php?src=http://$server.$baseurl/$gallery_photo&h=400&w=650&zc=1&q=100;' title='$gallery_name'>";
								echo $image = "<div class='pholder'><img style='border:1px solid #f5f6f7' src='$burl/js/timthumb.php?src=http://$server.$baseurl/$gallery_photo&h=100&w=152&zc=1&q=100;'/></div>";
								echo "</a>";
								
								echo "<small><b>$gallery_name</b></small>";
								
								echo "</td>";
								$countp++;
								if($countp%4==0){echo "</tr><tr>";}
							}
							echo "</tr>";
					}
				?>
			</table>
		</td>
	</tr>
</table>
