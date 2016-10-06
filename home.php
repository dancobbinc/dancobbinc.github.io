<?php require "setts.php"; ?>
<script type="text/javascript">
$(document).ready(function(){
    $(this).attr("title", "<?php echo $data["%TITLE%"];?>");
    $("meta[name='description']").attr("content", "<?php echo $data["%DESCRIPTION%"];?>");
});  
</script>
<div class="homepageWrapper" itemscope itemtype="http://schema.org/LocalBusiness">
	<div class="row">
			<section class="eight columns">
				<h1 class="mainHeader" itemprop="name"><?php echo strtoupper(clean("%COMPANY%", 0));?></h1><br />
				<h2>Insuring Your Future with Protection Designed Especially For You</h2><br />
				<h2>Disability Insurance, Life Insurance, & Long Term Care</h2><br />
			</section>
            <section class="four columns quote">
           		<a href="#!request-insurance-quote"><img src="images/request-quote.png"/></a>
            </section>
            <section class="eight columns homePhone">
				<?php 
						if(!is_null($data["%PHONE1%"])){ 
							//clean("<div>Phone:	<span itemprop='telephone'>425-284-2999</span></div>");
							clean("<div>Phone:	<span itemprop='telephone'>%PHONE1%</span></div>");
						}
						if(!is_null($data["%PHONE2%"])){ 
							//clean("<div class='alternatePhone'><span class='phoneBreaker'> | Toll Free: </span><span itemprop='telephone'>888-452-6647</span></div>");
							clean("<div class='alternatePhone'><span class='phoneBreaker'> | Toll Free: </span><span itemprop='telephone'>%PHONE2%</span></div>");
						}
						if(!is_null($data["%PHONE3%"])){ 
							//clean("<div class='alternatePhone'><span class='phoneBreaker'> | Mobile: </span><span itemprop='telephone'>425-503-0645</span></div>");
							clean("<div class='alternatePhone'><span class='phoneBreaker'> | Mobile: </span><span itemprop='telephone'>%PHONE3%</span></div>");
						}
						if(!is_null($data["%FAX1%"])){ 	
							//clean("<div class='faxBreaker'>| FAX: <span itemprop='faxNumber'>425-284-5032</span></div>");
							clean("<div class='faxBreaker'>| FAX: <span itemprop='faxNumber'>%FAX1%</span></div>");
						}
				?>
			</section>
			<section class="twelve columns homeSocialMedia">
				<?php 
					if(!is_null($data["%TWITTER%"])){ 
						clean("<a href='%TWITTER%' title='Twitter'><img src='images/twitter.jpg' alt='%COMPANY% Twitter' /></a>");
					}
					if(!is_null($data["%FACEBOOK%"])){
						clean("<a href='%FACEBOOK%' title='Facebook'><img src='images/facebook.jpg' alt='%COMPANY% Facebook' /></a>");
					}
					if(!is_null($data["%YELP%"])){ 
						clean("<a href='%YELP%' title='Yelp'><img src='images/yelp.jpg' alt='%COMPANY% Yelp!' /></a>");
					}
					if(!is_null($data["%GOOGLEPLUS%"])){ 
						clean("<a href='%GOOGLEPLUS%' title='Google Plus'><img src='images/googleplus.jpg' alt='%COMPANY% Google Plus' /></a>");
					}
					if(!is_null($data["%YOUTUBE%"])){ 
						clean("<a href='%YOUTUBE%' title='Youtube'><img src='images/youtube.jpg' alt='%COMPANY% Youtube' /></a>");
					}
				?>
			</section>
	</div>
</div>
