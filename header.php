<?php require "setts.php";?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<meta name="description" content="<?php clean("%DESCRIPTION%"); ?>" />
	<?php if($googletracker){ ?>
	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', '<?php echo $googletracker;?>']);
		_gaq.push(['_trackPageview']);
		$(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0];
			s.parentNode.insertBefore(ga, s);
		});
	</script>
	<?php } if($bingtracker){ ?>
	<meta name="msvalidate.01" content="<?php echo $bingtracker;?>"/>
	<?php } ?>
	<title><?php clean("%TITLE%"); ?></title>
    <meta name="viewport" id="view" content="width=device-width minimum-scale=1, maximum-scale=1" />
		<?php if(strlen(strstr(getDomain(), "linknow")) > 0){ 
			echo '<meta name="robots" content="NOINDEX,NOFOLLOW">';
		} ?>
	<link rel="stylesheet" href="stylesheets/reset.css">
	<link rel="stylesheet" href="style.css">
	<script type="text/javascript" src="scripts/jquery.js"></script>
	<script type="text/javascript" src="scripts/pageSlider.js"></script>
	<script type="text/javascript" src="scripts/modernizr.foundation.js"></script>
	<script type="text/javascript" src="scripts/jquery.foundation.reveal.js"></script>
    <script type="text/javascript" src="jackbox/js/jackbox-packed.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&"></script>
	<script>
		  var geocoder;
		  var map;
		
		  function codeAddress() {
			var address = "<?php clean('%STREETADDRESS1% %CITY% %STATE% %POSTALCODE%');?>";
			geocoder.geocode( { 'address': address}, function(results, status) {
			  if (status == google.maps.GeocoderStatus.OK) {
				map.setCenter(results[0].geometry.location);
				var marker = new google.maps.Marker({
					map: map,
					position: results[0].geometry.location
				});
			  } else {
				alert('Geocode was not successful for the following reason: ' + status);
			  }
			});
		  }
		//Add dialerID to all <a> tags
		$(document).ready(function(){
			$("a").attr("dialerID", "<?php echo $dialerID;?>");
		});
	</script>
	<script src="scripts/pageOptions.js"></script>
	<?php if(!isset($_GET["_escaped_fragment_"])){ ?>
		<script src="scripts/pageSelector.js"></script>
	<?php } ?>
</head>
<body itemscope itemtype="http://schema.org/LocalBusiness">
<div class="navigationWrapper"></div>
<div class="slider">
	<img src="images/background/newbg01.jpg" alt="<?php clean("%WORKCITY%");?> Group Insurance" />
	<img src="images/background/newbg02.jpg" alt="<?php clean("%WORKCITY%");?> Personalized Insurance" />
	<img src="images/background/newbg03.jpg" alt="<?php clean("%WORKCITY%");?> Home Insurance" />
    <img src="images/background/newbg04.jpg" alt="<?php clean("%WORKCITY%");?> Auto Insurance" />
</div>
	<div class="navigation">
		<div class="row">
		
			<section class="three columns logo">
			<div class="motto"><p>SERVICE IS OUR #1 PRIORITY!</p></div>
				<!--<meta itemprop="name" content="<?php clean("%COMPANY%");?>">
				<meta itemprop="url" content="<?php echo getDomain();?>">
				<meta itemprop="description" content="<?php clean("%DESCRIPTION%");?>">
				<img src="images/logo.png" itemprop="image" alt="<?php clean("%COMPANY%");?>, <?php clean("%SERVICEORDER%");?>" />
				<a href="#" onclick="void(0);" style="float: right;"></a>-->
			</section>
            <nav class="nine columns">
			
				<ul class="nav-bar" itemscope itemtype="http://schema.org/SiteNavigationElement">
					<li><a href="#!home">HOME</a></li>
					<li class="has-flyout"><a href="#">COMPANY</a>
						<ul class="flyout"> 
							<li><a href="#!about-us">About us</a></li>
                            <li><a href="#!request-insurance-quote">Request a Quote</a></li>
							<!--<li><a href="#!testimonials">Testimonials</a></li>-->
						</ul>
					</li>
					<li class="has-flyout"><a href="#">FOR BUSINESS</a>
						<ul class="flyout"> 
						<li><a href="#!disability-insurance-business">Disability Insurance</a></li>
						<li><a href="#!life-insurance-business">Life Insurance</a></li>
						<li><a href="#!long-term-care-business">Long Term Care</a></li>
							<!--<li><a href="#!business-owner-policy">Business Owner Policy</a></li>
							<li><a href="#!commercial-auto-insurance">Commercial auto</a></li>
							<li><a href="#!commercial-property-insurance">Commercial property</a></li>
							<li><a href="#!commercial-umbrella-insurance">Commercial umbrella</a></li>
							<li><a href="#!general-liability-insurance">General liability</a></li>
							<li><a href="#!professional-liability-insurance">Professional liability</a></li>
							<li><a href="#!workers-compensation">Workers Compensation</a></li>-->
						</ul>
					</li>
					<li class="has-flyout"><a href="#">FOR INDIVIDUALS</a>
						<ul class="flyout">
						<li><a href="#!disability-insurance">Disability Insurance</a></li>
						<li><a href="#!life-insurance">Life Insurance</a></li>
						<li><a href="#!long-term-care">Long Term Care</a></li>
							<!--<li><a href="#!group-health-insurance">Group Health</a></li>
							<li><a href="#!dental-vision-insurance">Dental and Vision</a></li>
							<li><a href="#!life-add-insurance">Life and Ad&D</a></li>
							<li><a href="#!disability-insurance">Disability</a></li>
							<li><a href="#!retirement-plans-insurance">Retirement Plans</a></li>
							<li><a href="#!life-health-insurance">Life and Health</a></li>-->
						</ul>
					</li>
					
					<li><a href="#!contact-us">CONTACT</a></li>
				</ul>
			</nav> 
		</div>
	</div>	
