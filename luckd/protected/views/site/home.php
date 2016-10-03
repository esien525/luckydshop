<script>

	function show_latestmodel(){
		$('#active_latest_model').show();
		$('#hidden_latest_model').hide();
		
		$('#active_top_new').hide();
		$('#hidden_top_new').show();
		
		$('#active_top_used').hide();
		$('#hidden_top_used').show();
		
		$('#active_workshop').hide();
		$('#hidden_workshop').show();
		
		$('#latest_model').show();
		$('#top_new').hide();
		$('#top_used').hide();
		$('#workshop').hide();
	}
	
	function show_topnew(){
		$('#active_latest_model').hide();
		$('#hidden_latest_model').show();
		
		$('#active_top_new').show();
		$('#hidden_top_new').hide();
		
		$('#active_top_used').hide();
		$('#hidden_top_used').show();
		
		$('#active_workshop').hide();
		$('#hidden_workshop').show();
		
		$('#latest_model').hide();
		$('#top_new').show();
		$('#top_used').hide();
		$('#workshop').hide();
	}
	
	function show_topused(){
		$('#active_latest_model').hide();
		$('#hidden_latest_model').show();
		
		$('#active_top_new').hide();
		$('#hidden_top_new').show();
		
		$('#active_top_used').show();
		$('#hidden_top_used').hide();
		
		$('#active_workshop').hide();
		$('#hidden_workshop').show();
		
		$('#latest_model').hide();
		$('#top_new').hide();
		$('#top_used').show();
		$('#workshop').hide();
	}
	
	function show_workshop(){
		$('#active_latest_model').hide();
		$('#hidden_latest_model').show();
		
		$('#active_top_new').hide();
		$('#hidden_top_new').show();
		
		$('#active_top_used').hide();
		$('#hidden_top_used').show();
		
		$('#active_workshop').show();
		$('#hidden_workshop').hide();
		
		$('#latest_model').hide();
		$('#top_new').hide();
		$('#top_used').hide();
		$('#workshop').show();
	}
</script>
<?php
$baseurl=Yii::app()->request->baseUrl;
$server=$_SERVER['SERVER_NAME'];
?>

 <?php
	include("js/databaseconnection.php");
	
	
	$queryCar="Select * FROM car";
	$resultCar=mysql_query($queryCar);
	$num_rows_car = mysql_num_rows($resultCar);
?>
<table class="table_nomargin">
	<tr>
		<td class="td_nopadding_main" style="width:240px">
			<?php include("js/auto_leftsidebar.php");?>
			
			
		</td>
		<td class="td_nopadding_main">
			<div style="height:35px;text-align:right">
				<?php if(!Yii::app()->user->isGuest){
					if(Yii::app()->user->usertype=="dealer" ){?>
					<span class="title_red"><img src="<?php echo $burl;?>/images/add.png" height="16px"/><a class="red_link"   href="index.php?r=car/myshop_car"> Add New Car</a></span>
					<span class="title_red">|</span>
				<?php }  else if(Yii::app()->user->usertype=="normal user"){?>
					<span class="title_red"><img src="<?php echo $burl;?>/images/add.png" height="16px"/><a class="red_link"  href="index.php?r=car/mycar"> Add New Car</a></span>
					<span class="title_red">|</span>
				<?php }}?>
				
				<span class="title_red"><img src="<?php echo $burl;?>/images/chart.png" height="20px"/> New & Used Car Online : </span>
				<span class="title_number">&nbsp;<?php echo number_format($num_rows_car);?></span>
				
			</div>
			<div id="banner">
				<div class="bg">
					<div class="bg2">
						<div class="wrapper">
							<div id="slides">
								<div class="slides_container">
									<div class="slide">
										<a href="#"><img src="<?php echo $burl;?>/js/timthumb.php?src=http://<?php echo $server.$baseurl;?>/images/banner/example_banner3.png&h=285&w=745&zc=1&q=100;" alt=""/></a>
										
									</div>
									
									<div class="slide">
										<a href="#"><img src="<?php echo $burl;?>/js/timthumb.php?src=http://<?php echo $server.$baseurl;?>/images/banner/example_banner2.png&h=285&w=745&zc=1&q=100;" alt=""/></a>
										
										
									</div>
									<div class="slide">
										<a href="#"><img src="<?php echo $burl;?>/js/timthumb.php?src=http://<?php echo $server.$baseurl;?>/images/banner/example_banner1.png&h=285&w=745&zc=1&q=100;" alt=""/></a>
										
									</div>
									<div class="slide">
										<a href="#"><img src="<?php echo $burl;?>/js/timthumb.php?src=http://<?php echo $server.$baseurl;?>/images/banner/example_banner4.png&h=285&w=745&zc=1&q=100;" alt=""/></a>
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>
<!--Tab Partiton-->
			<div class="maincontent_maindiv">
				<div class="maincontent_title_red" id="active_latest_model" onclick="show_latestmodel()">Latest Model</div>
				<div class="maincontent_title_gray" id="hidden_latest_model"  onclick="show_latestmodel()" style="display:none">Latest Model</div>
				
				<div class="maincontent_title_red" id="active_top_new" style="display:none" onclick="show_topnew()">Top New Car</div>
				<div class="maincontent_title_gray" id="hidden_top_new" onclick="show_topnew()">Top New Car</div>
				
				<div class="maincontent_title_red" id="active_top_used" style="display:none" onclick="show_topused()">Top Used Car</div>
				<div class="maincontent_title_gray" id="hidden_top_used" onclick="show_topused()">Top Used Car</div>
				
				<div class="maincontent_title_red" id="active_workshop" style="display:none" onclick="show_workshop()">Workshop Directory</div>
				<div class="maincontent_title_gray" id="hidden_workshop" onclick="show_workshop()">Workshop Directory</div>	
			</div>
			<div class="maincontent_contentdiv" id="latest_model">
				<table class="table_nomargin">
					<tr>
						<td width="25%" style="padding:0px"></td>
						<td width="25%" style="padding:0px"></td>
						<td width="25%" style="padding:0px"></td>
						<td width="25%" style="padding:0px"></td>
					</tr>
					<tr>
						<?php
                                
                                $queryLatest="Select * FROM car_latest_model order by car_latest_id DESC LIMIT 4";
                                $resultLatest=mysql_query($queryLatest);
                                $num_rows_Latest = mysql_num_rows($resultLatest);
                                if($num_rows_Latest==0){echo "<tr><td colspan='2'>No added latest model</td></tr>";}
								
                                while($rowLatest=mysql_fetch_array($resultLatest))
                                {
                                        $car_id=$rowLatest['car_id'];
                                        $car_latest_datetime=$rowLatest['car_latest_datetime'];
                                    
                                        $queryCar_LM="Select * FROM car WHERE car_id=$car_id";
                                        $resultCar_LM=mysql_query($queryCar_LM);
                                        while($rowCar_LM=mysql_fetch_array($resultCar_LM))
                                        {
                                                $car_id_LM=$rowCar_LM['car_id'];
                                                $car_make_LM=$model->getmake_name($rowCar_LM['car_make']);
                                                $car_model_LM=$model->getmodel_name($rowCar_LM['car_model']);
                                                $car_title_LM=$rowCar_LM['car_title'];
                                                $car_description_LM=$rowCar_LM['car_description'];
                                                $car_main_photo_LM=$rowCar_LM['car_main_photo'];
                                                if($car_main_photo_LM==""){$car_main_photo_LM="images/nophoto.jpg";}
                                                
                                               echo "<td class='verticalalign_top'>";
													echo CHtml::link("<div class='maincontent_contentdiv_photo'><img src='$burl/js/timthumb.php?src=http://$server.$baseurl/$car_main_photo_LM&h=100&w=156&zc=1&q=100;'/></div>",  array('Car/details','id'=>$car_id_LM), array('class'=>'red_link'));
													echo CHtml::link("<div class='maincontent_contentdiv_title'>$car_title_LM</div>",  array('Car/details','id'=>$car_id_LM), array('class'=>'red_link'));
													echo "<div class='maincontent_contentdiv_desc'><div style='height:78px;overflow:hidden'>$car_description_LM</div></div>";
													echo "<div class='maincontent_contentdiv_link'>";
													echo CHtml::link("Read More >",  array('Car/details','id'=>$car_id_LM), array('class'=>'red_link'));
													echo "</div>";
												echo "</td>";
                                            
                                        }
                                }
                        ?>
						
					</tr>
				</table>
			</div>
			
			<div class="maincontent_contentdiv" id="top_new" style="display:none">
				<table class="table_nomargin">
					<tr>
						<td width="25%" style="padding:0px"></td>
						<td width="25%" style="padding:0px"></td>
						<td width="25%" style="padding:0px"></td>
						<td width="25%" style="padding:0px"></td>
					</tr>
					<tr>
						<?php
                                
                                $queryTopNew="Select * FROM car_top_model WHERE car_top_type='New' order by car_top_id DESC LIMIT 4";
                                $resultTopNew=mysql_query($queryTopNew);
                                $num_rows_TopNew = mysql_num_rows($resultTopNew);
                                if($num_rows_TopNew==0){echo "<tr><td colspan='2'>No added new top model</td></tr>";}
								
                                while($rowTopNew=mysql_fetch_array($resultTopNew))
                                {
                                        $car_id=$rowTopNew['car_id'];
                                        $car_top_datetime=$rowTopNew['car_top_datetime'];
                                    
                                        $queryCar_TN="Select * FROM car WHERE car_id=$car_id";
                                        $resultCar_TN=mysql_query($queryCar_TN);
                                        while($rowCar_TN=mysql_fetch_array($resultCar_TN))
                                        {
                                                $car_id_TN=$rowCar_TN['car_id'];
                                                $car_make_TN=$model->getmake_name($rowCar_TN['car_make']);
                                                $car_model_TN=$model->getmodel_name($rowCar_TN['car_model']);
                                                $car_title_TN=$rowCar_TN['car_title'];
                                                $car_description_TN=$rowCar_TN['car_description'];
                                                $car_main_photo_TN=$rowCar_TN['car_main_photo'];
                                                if($car_main_photo_TN==""){$car_main_photo_TN="images/nophoto.jpg";}
                                                
                                               echo "<td class='verticalalign_top'>";
													echo CHtml::link("<div class='maincontent_contentdiv_photo'><img src='$burl/js/timthumb.php?src=http://$server.$baseurl/$car_main_photo_TN&h=100&w=156&zc=1&q=100;'/></div>",  array('Car/details','id'=>$car_id_TN), array('class'=>'red_link'));
													echo CHtml::link("<div class='maincontent_contentdiv_title'>$car_title_TN</div>",  array('Car/details','id'=>$car_id_TN), array('class'=>'red_link'));
													echo "<div class='maincontent_contentdiv_desc'><div style='height:78px;overflow:hidden'>$car_description_TN</div></div>";
													echo "<div class='maincontent_contentdiv_link'>";
													echo CHtml::link("Read More >",  array('Car/details','id'=>$car_id_TN), array('class'=>'red_link'));
													echo "</div>";
												echo "</td>";
                                            
                                        }
                                }
                        ?>
						
					</tr>
				</table>
			</div>
			
			<div class="maincontent_contentdiv" id="top_used" style="display:none">
				<table class="table_nomargin">
					<tr>
						<td width="25%" style="padding:0px"></td>
						<td width="25%" style="padding:0px"></td>
						<td width="25%" style="padding:0px"></td>
						<td width="25%" style="padding:0px"></td>
					</tr>
					<tr>
						<?php
                                
                                $queryTopUsed="Select * FROM car_top_model WHERE car_top_type='Used' order by car_top_id DESC LIMIT 4";
                                $resultTopUsed=mysql_query($queryTopUsed);
                                $num_rows_TopUsed = mysql_num_rows($resultTopUsed);
                                if($num_rows_TopUsed==0){echo "<tr><td colspan='2'>No added used top model</td></tr>";}
								
                                while($rowTopUsed=mysql_fetch_array($resultTopUsed))
                                {
                                        $car_id_TU=$rowTopUsed['car_id'];
                                        $car_top_datetime=$rowTopUsed['car_top_datetime'];
                                    
                                        $queryCar_TU="Select * FROM car WHERE car_id=$car_id_TU";
                                        $resultCar_TU=mysql_query($queryCar_TU);
                                        while($rowCar_TU=mysql_fetch_array($resultCar_TU))
                                        {
                                                $car_id_TU=$rowCar_TU['car_id'];
                                                $car_make_TU=$model->getmake_name($rowCar_TU['car_make']);
                                                $car_model_TU=$model->getmodel_name($rowCar_TU['car_model']);
                                                $car_title_TU=$rowCar_TU['car_title'];
                                                $car_description_TU=$rowCar_TU['car_description'];
                                                $car_main_photo_TU=$rowCar_TU['car_main_photo'];
                                                if($car_main_photo_TU==""){$car_main_photo_TU="images/nophoto.jpg";}
                                                
                                               echo "<td class='verticalalign_top'>";
													echo CHtml::link("<div class='maincontent_contentdiv_photo'><img src='$burl/js/timthumb.php?src=http://$server.$baseurl/$car_main_photo_TU&h=100&w=156&zc=1&q=100;'/></div>",  array('Car/details','id'=>$car_id_TU), array('class'=>'red_link'));
													echo CHtml::link("<div class='maincontent_contentdiv_title'>$car_title_TU</div>",  array('Car/details','id'=>$car_id_TU), array('class'=>'red_link'));
													echo "<div class='maincontent_contentdiv_desc'><div style='height:78px;overflow:hidden'>$car_description_TU</div></div>";
													echo "<div class='maincontent_contentdiv_link'>";
													echo CHtml::link("Read More >",  array('Car/details','id'=>$car_id_TU), array('class'=>'red_link'));
													echo "</div>";
												echo "</td>";
                                            
                                        }
                                }
                        ?>
						
					</tr>
				</table>
			</div>
			
			<div class="maincontent_contentdiv" id="workshop" style="display:none">
				<table class="table_nomargin">
					<tr>
						<td width="25%" style="padding:0px"></td>
						<td width="25%" style="padding:0px"></td>
						<td width="25%" style="padding:0px"></td>
						<td width="25%" style="padding:0px"></td>
					</tr>
					<tr>
						<?php
							$queryWorkshop="Select * FROM car_workshop WHERE workshop_status='Active'";
							$resultWorkshop=mysql_query($queryWorkshop);
							 $num_rows_Workshop = mysql_num_rows($resultWorkshop);
                            if($num_rows_Workshop==0){echo "<tr><td colspan='2'>No added workshop</td></tr>";}
								
							while($rowWorkshop=mysql_fetch_array($resultWorkshop))
							{
									$workshop_id=$rowWorkshop['workshop_id'];
									$workshop_name=$rowWorkshop['workshop_name'];
									$workshop_description=$rowWorkshop['workshop_description'];
									
									$workshop_logo=$rowWorkshop['workshop_logo'];
									if($workshop_logo==""){$workshop_logo="images/nophoto.jpg";}
									
								   echo "<td class='verticalalign_top'>";
										echo "<div class='maincontent_contentdiv_photo'><img src='$burl/js/timthumb.php?src=http://$server.$baseurl/$workshop_logo&h=100&w=156&zc=1&q=100;'/></div>";
										echo "<div class='maincontent_contentdiv_title'>$workshop_name</div>";
										echo "<div class='maincontent_contentdiv_desc'><div style='height:78px;overflow:hidden'>$workshop_description</div></div>";
										echo "<div class='maincontent_contentdiv_link'>";
													echo CHtml::link("Read More >", "#", array('class'=>'red_link'));
													echo "</div>";
									echo "</td>";
								
							}
						?>
						
					</tr>
				</table>
			</div>
<!--End Tab Partition-->

<!-- Brand Offered-->
			<div class="maincontent_contentdiv_header">
				Brand We offer &nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php?r=site/brand" style="color:#ffffff;font-size:11px;font-weight:normal;">(view all brand)</a>
			</div>
			<div class="maincontent_contentdiv_content" style="overflow:hidden;width:720px">
				<marquee behavior="alternate" direction="left"  scrollamount="5">
				<table class="table_nomargin">
					<tr>
						<?php
							$queryBrand="Select * FROM car_make WHERE make_status='Active'";
							$resultBrand=mysql_query($queryBrand);
							 $num_rows_Brand = mysql_num_rows($resultBrand);
							if($num_rows_Brand==0){echo "<tr><td colspan='2'>No added brand</td></tr>";}
								
							while($rowBrand=mysql_fetch_array($resultBrand))
							{
									$make_id=$rowBrand['make_id'];
									$make_name=$rowBrand['make_name'];
									$make_logo=$rowBrand['make_logo'];
									
									if($make_logo!=""){
									
										echo "<td>";
										echo CHtml::link("<img src='$burl/$make_logo' height='90px'/>",  array('site/brand_car','id'=>$make_id));
										echo "</td>";
									}
							}
						?>
						
					</tr>
					
				</table>
				</marquee>
			</div>

<!-- End Brand Offered-->

<!-- Latest News-->
		<table class="table_nomargin">
			<tr>
				<td class="td_nopadding_main">
					<div class="maincontent_contentdiv_header">Latest News</div>
					<div class="maincontent_contentdiv_content">
						<table class="table_nomargin">
							<?php
								$queryNews="Select * FROM news WHERE news_status='Active'";
								$resultNews=mysql_query($queryNews);
								 $num_rows_News = mysql_num_rows($resultNews);
								if($num_rows_News==0){echo "<tr><td colspan='2'>No latest news</td></tr>";}
									
								while($rowNews=mysql_fetch_array($resultNews))
								{
										$news_id=$rowNews['news_id'];
										$news_title=$rowNews['news_title'];
										$news_content=$rowNews['news_content'];
										$news_datetime=$rowNews['news_datetime'];
										$news_photo=$rowNews['news_photo'];
										if($news_photo==""){$news_photo="images/nophoto.jpg";}
										
										echo "<tr>";
											echo "<td class='verticalalign_top'><div class='maincontent_contentdiv_newsphoto'><img src='$burl/js/timthumb.php?src=http://$server.$baseurl/$news_photo&h=90&w=150&zc=1&q=100;'/></div></td>";
											echo "<td class='verticalalign_top'>";
												echo "<div class='maincontent_contentdiv_newstitle'>";
												echo CHtml::link("$news_title", array('News/details','id'=>$news_id), array('class'=>'red_link'));
												echo "</div>";
												echo "<div class='maincontent_contentdiv_newsdate'>posted on $news_datetime</div>";
												echo "<div class='maincontent_contentdiv_newsdesc'>";
												echo substr($news_content, 0, 150); if(strlen($news_content)>150) { echo "..."; }
												echo "</div>";
											echo "</td>";
										echo "</tr>";
										echo "<tr><td colspan='2'><div class='side_bar_content1_partition'></div></td></tr>";
								}
							?>
							
							
						</table>
					</div>
					
					<div class="maincontent_contentdiv_header">
						<table class="table_nomargin">
							<tr>
								<td>
									Latest Car Requests
								</td>
								<td style="text-align:right;font-size:11px">
									<?php echo CHtml::link("+ Post Car Request",  array('Request/create'), array('style'=>'color:#ffffff'));?>
								</td>
							</tr>
						</table>
					</div>
					
					<div class="request_div">
						<table>
							<?php $this->widget('zii.widgets.CListView', array(
								'dataProvider'=>$dataProvider,
								'itemView'=>'/request/_viewtable',
							)); ?>
							
						</table>
						<?php
						$queryR="Select * FROM car_request";
						$resultR=mysql_query($queryR);
						$num_rows_R = mysql_num_rows($resultR);
								 
						echo CHtml::link("See all request ($num_rows_R)",  array('Request/index'), array('class'=>'white_link'));
						?>
					</div>
						
					
				</td>
				<td class="td_nopadding_main" width="240px" style="text-align:right">
					
					<div class="maincontent_contentdiv_header1">Autocari E-Book</div>
					<img src="<?php echo $burl;?>/images/ebook.jpg" width="227px" style="margin-left:13px;"/>
					
					<br/><br/>
					<iframe width="227" src="http://www.youtube.com/embed/bVqjx34RQpM" frameborder="0" allowfullscreen></iframe>
				</td>
			</tr>
		</table>
			

<!-- End Latest News-->
		</td>
	</tr>
</table>

<script>
	function show_usedcar(){
		$('#usedcar_content').show();
		$('#newcar_content').hide();
		$('#usedcar_searchnav').show();
		$('#usedcar_searchnav1').hide();
		$('#newcar_searchnav').hide();
		$('#newcar_searchnav1').show();
	}
	function show_newcar(){
		$('#usedcar_content').hide();
		$('#newcar_content').show();
		$('#usedcar_searchnav').hide();
		$('#usedcar_searchnav1').show();
		$('#newcar_searchnav').show();
		$('#newcar_searchnav1').hide();
	}
</script>
