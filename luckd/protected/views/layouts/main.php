<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<link rel="shortcut icon" href="favicon1.ico">
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Web Fonts  -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">
	<!-- Icon Fonts  -->
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/font/style.css">
	<!-- Vendor CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/vendor/waves/waves.css">
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/vendor/slick/slick.css">
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/vendor/slick/slick-theme.css">
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/vendor/bootstrap-select/bootstrap-select.css">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css">
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style-colors.css">
	<!-- Custom Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
	
	<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/vendor/rs-plugin/css/settings.css" media="screen" />
	<!-- Head Libs -->
	
	<!--[if IE]>
			<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css">
			<![endif]-->
	<!--[if lte IE 8]>
			<script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>
			<script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
			<![endif]-->
	
	<!-- Modernizr -->
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/modernizr/modernizr.js"></script>
	
	
	
	
	
	
	

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
<?php
	
	$curlink=$_SERVER['REQUEST_URI'];
	$thisbaseurl=Yii::app()->request->baseUrl;
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
<body>
<div id="loader-wrapper" class="loader-off">
	<div id="loader"></div>
</div>
<!-- Modal Search -->
<div class="overlay overlay-scale">
  <button type="button" class="overlay-close"> ✕ </button>
  <div class="overlay__content">
    <form id="search-form" class="search-form outer" action="#" method="post">
      <div class="input-group input-group--wd">
        <input type="text" class=" input--full" placeholder="search text here ...">
        <span class="input-group__bar"></span> </div>
      <button class="btn btn--wd text-uppercase wave waves-effect">Search</button>
    </form>
  </div>
</div>
<!-- / end Modal Search -->

<div class="wrapper"> 
  <!-- Header section -->
  <header class="header header--sticky">
    <div class="header-line hidden-xs">
      <div class="container">
        <div class="pull-left">
          <div class="social-links social-links--colorize">
            <ul>
            <?php if($contact_facebook!=""){?><li class="social-links__item"><a class="icon icon-facebook" href="<?php echo $contact_facebook;?>"></a></li><?php }?>
            <?php if($contact_tweeter!=""){?><li class="social-links__item"><a class="icon icon-twitter" href="<?php echo $contact_tweeter;?>"></a></li><?php }?>
            <?php if($contact_google!=""){?><li class="social-links__item"><a class="icon icon-google" href="<?php echo $contact_google;?>"></a></li><?php }?>
            <li class="social-links__item"><a class="icon icon-mail" href="mailto:<?php echo $contact_email;?>"></a></li>
            </ul>
          </div>
        </div>
        <div class="pull-right">
          <div class="user-links">
            <ul>
				<?php if(Yii::app()->user->isGuest){?>
					<li class="user-links__item"><?php echo CHtml::link("Sign In",  array('site/login'));?></li>
					<li class="user-links__item"><?php echo CHtml::link("Register",  array('user/register'));?></a></li>
				<?php } else{?>
					<?php $myuserlevel=Yii::app()->user->usertype;?>
					<?php if($myuserlevel=="Administrator"){?>
					<li class="user-links__item"><?php echo CHtml::link("Control Panel",  array('user/cpanel'));?></li>
					<li class="user-links__item"><?php echo CHtml::link("(Logout)",  array('site/logout'));?></li>
					<?php } else{ ?>
					<li class="user-links__item"><?php echo CHtml::link("My Account",  array('user/cpanel'));?></li>
					<li class="user-links__item"><?php echo CHtml::link("(Logout)",  array('site/logout'));?></li>
					<?php }?>
				<?php }?>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="header__dropdowns-container">
      <div class="header__dropdowns">
        <div class="header__search pull-left"> <a href="#" class="btn dropdown-toggle btn--links--dropdown header__dropdowns__button search-open"
><span class="icon icon-search"></span></a> </div>
        <?php if(!Yii::app()->user->isGuest){?>
		<div class="header__cart pull-left">
          <div class="dropdown pull-right"><a href="#" class="btn dropdown-toggle btn--links--dropdown header__cart__button header__dropdowns__button" data-toggle="dropdown"><span class="icon icon-bag-alt"></span><span class="badge badge--menu">0</span></a>
            
          </div>
        </div>
        <div class="dropdown pull-right"> <a href="#" class="btn dropdown-toggle btn--links--dropdown header__dropdowns__button" data-toggle="dropdown"><span class="icon icon-dots"></span></a>
          <ul class="dropdown-menu ul-row animated fadeIn" role="menu">
           <?php
		   $mycoin=Yii::app()->user->usercoin;
		   ?>
            <li class='li-col list-user-menu'>
			  <h4>My Account</h4>
              <ul>
				<li><?php echo CHtml::link("My Profile",  array('user/cpanel')); ?></li>
				<li><?php echo CHtml::link("D-Coins : $mycoin",  array('user/dcoin')); ?></li>
				<li><?php echo CHtml::link("My Friends",  array('user/friend')); ?></li>
				<li><?php echo CHtml::link("My Lucky Draw",  array('user/myluckydraw')); ?></li>
              </ul>
            </li>
          </ul>
        </div>
		<?php }?>
      </div>
    </div>
	<?php $burl=Yii::app()->request->baseUrl;?>
    <nav class="navbar navbar-wd" id="navbar">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" id="slide-nav"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <!--  Logo  -->
		  <?php echo CHtml::link("<img class='logo-default' src='$burl/images/logo.png' alt=''/> <img class='logo-mobile' src='$burl/images/logo-mobile.png' alt=''/> <img class='logo-transparent' src='$burl/images/logo-transparent.png' alt=''/>",  array('site/index'),array('class'=>'logo'));?>
         
          <!-- End Logo --> 
        </div>
        <div class="pull-left search-focus-fade" id="slidemenu">
          <div class="slidemenu-close visible-xs">✕</div>
          <ul class="nav navbar-nav">     
            <li><?php echo CHtml::link('<span class="link-name">Home</span><span class="caret caret--dots"></span>',  array('site/index')); ?></li>
			<li><?php echo CHtml::link('<span class="link-name">Featured Product</span><span class="caret caret--dots"></span>',  array('product/featured')); ?></li>
			
			<li><?php echo CHtml::link('<span class="link-name">Product List</span><span class="caret caret--dots"></span>',  array('product/list')); ?></li>
			<li><?php echo CHtml::link('<span class="link-name">Draw Result</span><span class="caret caret--dots"></span>',  array('site/drawresult')); ?></li>
			<li><?php echo CHtml::link('<span class="link-name">In Touch</span><span class="caret caret--dots"></span>',  array('site/contact')); ?></li>
			
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!-- End Header section -->
  <div id="pageContent" class="page-content">
    
      
      
    
	<?php echo $content; ?>
	
	
	
  </div>
  <footer class="footer">
    <div class="footer__links hidden-xs">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <div class="h-links-list">
              <ul>
                <li><?php echo CHtml::link('Conditions of Use',  array('site/conditionofuse')); ?></li>
				<li><?php echo CHtml::link('Privacy Notice',  array('site/privacynotice')); ?></li>
                <li><?php echo CHtml::link('Orders and Returns',  array('site/orderandreturns')); ?></li>
                
              </ul>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="h-links-list text-right">
              <ul>
                <li><?php echo CHtml::link('About Us',  array('site/aboutus')); ?></li>
                <li><?php echo CHtml::link('Contact Us',  array('site/contact')); ?></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer__column-links">
      <div class="back-to-top"> <a href="#top" class="btn btn--round btn--round--lg"><span class="icon-arrow-up"></span></a></div>
      <div class="container">
        <div class="row">
          <div class="col-md-5 hidden-xs hidden-sm"> 
            <!--  Logo  --> 
            <a class="logo logo--footer" href="index.html"> <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo-transparent.png" alt=""/> </a> 
            <!-- End Logo --> 
			<p>
			<?php
			$queryInfo="Select * FROM pages WHERE pages_id=1";
			$resultInfo=mysql_query($queryInfo);
			
			while($rowInfo=mysql_fetch_array($resultInfo)){
				$pages_title=$rowInfo['pages_title'];
				$pages_content=$rowInfo['pages_content'];  $pages_content= str_replace("\n", "<br />",$pages_content);
			}
			echo substr($pages_content, 0, 200); if(strlen($pages_content)>200) { echo "..."; }
			echo CHtml::link('more',  array('site/aboutus'));
			?></p>
          </div>
          <div class="col-sm-3 col-md-2 mobile-collapse">
            <h5 class="title text-uppercase mobile-collapse__title">Information </h5>
            <div class="v-links-list mobile-collapse__content">
              <ul>
                <li><?php echo CHtml::link('About Us',  array('site/aboutus')); ?></li>
                <li><?php echo CHtml::link('Orders and Returns',  array('site/orderandreturns')); ?></li>
                <li><?php echo CHtml::link('Privacy Notice',  array('site/privacynotice')); ?></li>
                <li><?php echo CHtml::link('Conditions of Use',  array('site/conditionofuse')); ?></li>
              </ul>
            </div>
          </div>
          
          <div class="col-sm-3 col-md-2 mobile-collapse">
            <h5 class="title text-uppercase mobile-collapse__title">My account</h5>
            <div class="v-links-list mobile-collapse__content">
              <ul>
                <li><?php echo CHtml::link('My Account',  array('user/cpanel')); ?></li>
				<li><?php echo CHtml::link('My Friends',  array('user/friend')); ?></li>
                <li><?php echo CHtml::link('Invite Friends',  array('user/invite')); ?></li>
				<li><?php echo CHtml::link('Buy D-Coins',  array('site/package')); ?></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-3 col-md-3 mobile-collapse mobile-collapse--last">
            <h5 class="title text-uppercase mobile-collapse__title">Company Info</h5>
            <div class="v-links-list mobile-collapse__content">
              <ul>
                <li class="icon icon-home"><?php echo $contact_address;?></li>
                <li class="icon icon-telephone"><?php echo $contact_phone;?></li>
                <li class="icon icon-mail"><a href="mailto:<?php echo $contact_email;?>"><?php echo $contact_email;?></a></li>
                <li class="icon icon-skype"><a href="#"><?php echo $contact_skype;?></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer__subscribe">
      <div class="container">
        <div class="row">
          <div class="col-sm-7 col-md-6">
		  	  <div id="subscribeSuccess">
				<p>Your email was added successfully!</p>
			  </div>
			  <div id="subscribeError">
				<p>Something went wrong, try refreshing and submitting the form again.</p>
			  </div>                
            <form id="subscribe-form" class="subscribe-form" method="post" novalidate>
              <label class="subscribe-form__label text-uppercase pull-left">Subscribe</label>
              <input type="text" class="subscribe-form__input input--wd" placeholder="Your e-mail address" name="subscribemail">
              <button type="submit" class="btn btn--wd text-uppercase wave"><span class="hidden-xs">Subscribe</span><span class="icon icon-mail-fill visible-xs"></span></button>
            </form>
          </div>
          <div class="col-sm-5 col-md-6">
            <div class="social-links social-links--colorize social-links--large">
              <ul>
                <?php if($contact_facebook!=""){?><li class="social-links__item"><a class="icon icon-facebook" href="<?php echo $contact_facebook;?>"></a></li><?php }?>
                <?php if($contact_tweeter!=""){?><li class="social-links__item"><a class="icon icon-twitter" href="<?php echo $contact_tweeter;?>"></a></li><?php }?>
                <?php if($contact_google!=""){?><li class="social-links__item"><a class="icon icon-google" href="<?php echo $contact_google;?>"></a></li><?php }?>
                <li class="social-links__item"><a class="icon icon-mail" href="mailto:<?php echo $contact_email;?>"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer__settings visible-xs">
      <div class="container text-center">
        <div class="dropdown pull-left"> <a href="#" class="btn dropdown-toggle btn--links--dropdown header__dropdowns__button" data-toggle="dropdown" aria-expanded="false"><span class="header__dropdowns__button__symbol">$</span></a>
          <ul class="dropdown-menu animated fadeIn" role="menu">
            <li class="currency__item currency__item--active"><a href="#">$ USA Dollar</a></li>
            <li class="currency__item"><a href="#">€ Euro</a></li>
            <li class="currency__item"><a href="#">£ British Pound</a></li>
          </ul>
        </div>
        <div class="dropdown pull-left"> <a href="#" class="btn dropdown-toggle btn--links--dropdown header__dropdowns__button" data-toggle="dropdown" aria-expanded="false"><span class="flag"><img src="images/flags/gb.png" alt=""></span></a>
          <ul class="dropdown-menu animated fadeIn languages languages--flag" role="menu">
            <li class="languages__item languages__item--active"><a href="#"><span class="languages__item__flag flag"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/flags/gb.png" alt=""></span><span class="languages__item__label">En</span></a></li>
            <li class="languages__item"><a href="#"><span class="languages__item__flag flag"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/flags/de.png" alt=""></span><span class="languages__item__label">De</span></a></li>
            <li class="languages__item"><a href="#"><span class="languages__item__flag flag"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/flags/fr.png" alt=""></span><span class="languages__item__label">Fr</span></a></li>
          </ul>
        </div>
        <div class="dropdown pull-left"> <a href="#" class="btn dropdown-toggle btn--links--dropdown header__dropdowns__button" data-toggle="dropdown" aria-expanded="false">Account</a>
          <ul class="dropdown-menu animated fadeIn" role="menu">
            <li><a href="#">Account</a></li>
            <li><a href="#">Wishlist</a></li>
            <li><a href="#">Compare</a></li>
            <li><a href="#">Checkout</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer__bottom">      
      <div class="container">
        <div class="pull-left text-uppercase">© 2016 <a href="#">TEKPRO</a>. All Rights Reserved. </div>
        
      </div>
</div>
  </footer>
</div>
<div class="compare-box" id="compareBox">
  <div class="container">
    <div class="compare-box__header">
      <h3 class="compare-box__header__title">Compare</h3>
      <div class="compare-box__header__toggle"><span class="compare-box__header__toggle__hide hide-compare">Hide<span class="icon icon-arrow-down"></span></span><span class="compare-box__header__toggle__show show-compare">Show<span class="icon icon-arrow-up"></span></span><span class="compare-box__header__toggle__close close-compare"><span class="icon icon-clear"></span></span></div>
    </div>
    <div class="compare-box__items">
      <ul class="compare-box__items__list compare-carousel nav-top">
        <li class="compare-box__items__list__item">
          <div class="compare-box__items__list__item__delete"><a href="#" class="icon icon-clear"></a></div>
          <a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/products/product-2.jpg" alt=""></a></li>
        <li class="compare-box__items__list__item empty">
          <div class="compare-box__items__list__item__num">1</div>
          <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/products/product-empty.png" alt=""/></li>
        <li class="compare-box__items__list__item empty">
          <div class="compare-box__items__list__item__num">2</div>
          <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/products/product-empty.png" alt=""/></li>
        <li class="compare-box__items__list__item empty">
          <div class="compare-box__items__list__item__num">3</div>
          <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/products/product-empty.png" alt=""/></li>
        <li class="compare-box__items__list__item empty">
          <div class="compare-box__items__list__item__num">4</div>
          <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/products/product-empty.png" alt=""/></li>
        <li class="compare-box__items__list__item empty">
          <div class="compare-box__items__list__item__num">5</div>
          <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/products/product-empty.png" alt=""/></li>
        <li class="compare-box__items__list__item empty">
          <div class="compare-box__items__list__item__num">6</div>
          <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/products/product-empty.png" alt=""/></li>
      </ul>
      <div class="compare-box__actions">
        <div class="compare-box__actions__btns"> <a href="#" class="btn btn--wd btn--lg text-uppercase">Compare</a> <a href="#" class="btn btn--wd btn--lg btn--light text-uppercase" id="removeAllCompare">Clear All</a> </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade bs-example-modal-sm" role="dialog" id="modalAddToCart">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <button type="button" class="close icon-clear" data-dismiss="modal"></button>
      <div class="text-center">
        <div class="divider divider--xs"></div>
        <p>Product added to cart successfully! </p>
        <div class="divider divider--xs"></div>
        <a href="#" class="btn btn--wd">Go to Cart</a>
        <div class="divider divider--xs"></div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade bs-example-modal-sm" role="dialog" id="modalAddToWishlist">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <button type="button" class="close icon-clear" data-dismiss="modal"></button>
      <div class="text-center">
        <div class="divider divider--xs"></div>
        <div class="loading">
          <div class="divider divider--sm"></div>
          <div class="loader">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
          </div>
        </div>
        <p class="success">Product added to wishlist successfully! </p>
        <div class="divider divider--xs"> </div>
      </div>
    </div>
  </div>
</div>

<!-- Vendor --> 
<!-- jQuery 1.10.1-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
<?php
$curpage = Yii::app()->getController()->getAction()->controller->id.'/'.Yii::app()->getController()->getAction()->controller->action->id;
if ($curpage!="product/create"){
?>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/jquery/jquery.js"></script>
<?php }?>
<!-- Bootstrap 3--> 
<script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/bootstrap/bootstrap.min.js"></script> 
<!-- Specific Page Vendor --> 
<script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/waves/waves.min.js"></script> 
<script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/slick/slick.min.js"></script> 
<script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/bootstrap-select/bootstrap-select.min.js"></script> 
<script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/parallax/jquery.parallax-1.1.3.js"></script> 
<script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/waypoints/jquery.waypoints.min.js"></script> 
<script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/waypoints/sticky.min.js"></script> 
<script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/doubletaptogo/doubletaptogo.js"></script> 
<script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script> 
<script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/countdown/jquery.plugin.min.js"></script> 
<script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/countdown/jquery.countdown.min.js"></script>

<!-- Specific Page Vendor --> 
		
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/elevatezoom/jquery.elevatezoom.js"></script> 
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/isotope/isotope.pkgd.min.js"></script> 
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script> 
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/nouislider/nouislider.min.js"></script> 
		
		
<!-- jQuery form validation --> 
<script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/form/jquery.form.js"></script> 
<script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/form/jquery.validate.min.js"></script> 
<!-- Custom --> 
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/custom.js"></script> 
<!-- SLIDER REVOLUTION 4.x SCRIPTS  --> 
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script> 
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script> 
<script type="text/javascript">

				jQuery(document).ready(function() {
				
					var windowW = window.innerWidth || $j(window).width();
					var fullwidth;
					var fullscreen;

					if (windowW > 767) {
						fullwidth = "off";
						fullscreen = "on";	
					} else {
						fullwidth = "on";
						fullscreen = "off";	
					}				 
					
								
					jQuery('.tp-banner').show().revolution(
					{
						dottedOverlay:"none",
						delay:16000,
						startwidth:1170,
						startheight:700,
						hideThumbs:200,
						hideTimerBar:"on",
						
						thumbWidth:100,
						thumbHeight:50,
						thumbAmount:5,
						
						navigationType:"none",
						navigationArrows:"",
						navigationStyle:"",
						
						touchenabled:"on",
						onHoverStop:"on",
						
						swipe_velocity: 0.7,
						swipe_min_touches: 1,
						swipe_max_touches: 1,
						drag_block_vertical: false,
												
						parallax:"mouse",
						parallaxBgFreeze:"on",
						parallaxLevels:[7,4,3,2,5,4,3,2,1,0],
												
						keyboardNavigation:"off",
						
						navigationHAlign:"center",
						navigationVAlign:"bottom",
						navigationHOffset:0,
						navigationVOffset:20,

						soloArrowLeftHalign:"left",
						soloArrowLeftValign:"center",
						soloArrowLeftHOffset:20,
						soloArrowLeftVOffset:0,

						soloArrowRightHalign:"right",
						soloArrowRightValign:"center",
						soloArrowRightHOffset:20,
						soloArrowRightVOffset:0,
								
						shadow:0,
						fullWidth: fullwidth,
						fullScreen: fullscreen,

						spinner:"",
						
						stopLoop:"off",
						stopAfterLoops:-1,
						stopAtSlide:-1,

						shuffle:"off",
						
						autoHeight:"off",						
						forceFullWidth:"off",														
																								
						hideThumbsOnMobile:"off",
						hideNavDelayOnMobile:1500,						
						hideBulletsOnMobile:"off",
						hideArrowsOnMobile:"off",
						hideThumbsUnderResolution:0,
						
						hideSliderAtLimit:0,
						hideCaptionAtLimit:0,
						hideAllCaptionAtLilmit:0,
						startWithSlide:0,
						fullScreenOffsetContainer: ".header"	
					});
					
					
					
									
				});	//ready
				
			</script>
</body>
</html>

