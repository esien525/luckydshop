<!-- Breadcrumb section -->
    
<section class="breadcrumbs  hidden-xs">
  <div class="container">
	<ol class="breadcrumb breadcrumb--wd pull-left">
	  <li><?php echo CHtml::link("Home",  array('site/index')); ?></li>
	  <li class="active">Contact Us</li>
	</ol>
  </div>
</section>
			<?php
				include("js/databaseconnection.php");
				
				$queryInfo="Select * FROM  contactus WHERE contact_id=1";
				$resultInfo=mysql_query($queryInfo);
				
				while($rowInfo=mysql_fetch_array($resultInfo)){
					$contact_id=$rowInfo['contact_id'];
					$contact_title=$rowInfo['contact_title'];
					$contact_description=$rowInfo['contact_description'];
					$contact_address=$rowInfo['contact_address'];
					$contact_map=$rowInfo['contact_map'];
					$contact_phone=$rowInfo['contact_phone'];
					$contact_email=$rowInfo['contact_email'];
					$contact_facebook=$rowInfo['contact_facebook'];
					$contact_tweeter=$rowInfo['contact_tweeter'];
					$contact_google=$rowInfo['contact_google'];
					$contact_skype=$rowInfo['contact_skype'];
					$contact_address=$rowInfo['contact_address'];
					
				}
				?>
<!-- Content section -->
   <br/><br/>
    <section class="content top-null">
      <div class="container">
		<form id="contactform" class="contact-form" name="contactform" method="post" novalidate>
          <div class="row">
			<div class="col-sm-7">
              
              <h2 class="text-uppercase"><?php echo $contact_title;?></h2>
              <p><?php echo $contact_description;?></p>
			   
              <p>Main Office: <?php echo $contact_address;?><br/>
                Phone: <?php echo $contact_phone;?><br/>
                Email: <a href="<?php echo $contact_email;?>"><?php echo $contact_email;?></a></p>
			  
			  <?php echo $contact_map;?>
            </div>
			
            <div class="col-sm-5">
              <h2 class="text-uppercase">LEAVE A COMMENT</h2>
			 <div id="success">
				<p>Your message was sent successfully!</p>
			 </div>
			 <div id="error">
				<p>Something went wrong, try refreshing and submitting the form again.</p>
			 </div>
             <div class="input-group input-group--wd">
                <input type="text" class="input--full" name="name">
                <span class="input-group__bar"></span>
                <label>Your Name (required)</label>
              </div>
              <div class="input-group input-group--wd">
                <input type="text" class="input--full" name="email">
                <span class="input-group__bar"></span>
                <label>Your Email (required)</label>
              </div>
              <div class="input-group input-group--wd">
                <input type="text" class="input--full" name="subject">
                <span class="input-group__bar"></span>
                <label>Subject</label>
              </div>
              <div class="input-group input-group--wd">
                <textarea class="textarea--full" name="message"></textarea>
                <span class="input-group__bar"></span>
                <label>Your Message</label>
              </div>
              <button type="submit" id="submit" class="btn btn--wd text-uppercase wave">Send Message</button>
            </div>
            
            
          </div>
        </form>
      </div>
    </section>
    
    <!-- End Content section --> 