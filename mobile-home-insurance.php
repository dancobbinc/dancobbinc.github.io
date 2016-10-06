<?php require "setts.php"; ?>
<script type="text/javascript">
$(document).ready(function(){
    $(this).attr("title", "<?php echo $data["%TITLE%"];?>");
    $("meta[name='description']").attr("content", "<?php echo $data["%DESCRIPTION%"];?>");
});  
</script>
<div class="row pageContentInner">
		<section class="twelve columns">
			<h1 class="mainHeader"><?php echo strtoupper(clean("", 0));?> Mobile Home Insurance</h1>
		</section>
		<section class="eight columns">
			<?php clean("
			<p>A mobile or manufactured home is a home just like any other. It is a place to live and raise a family and just like any home you want to make sure that when unforeseen circumstances arise you and your family are protected.  %COMPANY% knows that we are not just insuring houses but homes and peoples futures. That is why we offer many different packages to find something that fits the needs and budget of our %WORKCITY% clients.</p>
			");?>
		</section>
		<section class="four columns pagequote">
           		<a href="#!request-insurance-quote"><img src="images/request-quote.png"/></a>
		</section>
		<section class="twelve columns">
			<?php clean("
			<h2>%COMPANY%: making sure your  %WORKCITY% mobile home stays protected</h2>
			
			<p>Like most insurance policies, there are different levels of protection when deciding on what insurance is best for you.  Here are the three main forms of coverage to consider when insuring your mobile home.</p>
			
			<h2>Mobile Home Insurance - The Structure</h2>
			
			<p>Fire, lightning, high winds, falling objects, explosions and more- there are many threats to your home and happiness.  The policy covers not only the mobile home but also detached structures on your property such as a shed or standalone garage.</p>
			
			<h2>Mobile Home Insurance - Personal Property</h2>
			
			<p>To make a home truly your own it needs to be marked by your personal stamp. Décor, furniture, clothing, entertainment systems, electronics, appliances- these are things you have which give the atmosphere that this home is <i>yours</i>. Unfortunately vandalism, theft, fire and the like can take these things away from you. When this happens you will be relieved to know that financial help is just a call away.</p>
			
			<h2>Mobile Home Insurance- Liability</h2>
			
			<p>Your property is your responsibility and that includes the people who visit it. If someone injures themselves on your property then they can claim you as being legally responsible for their injuries - leaving you with a hefty bill to pay.  Liability insurance is there to help you pay for these expenses so that you don’t have to pay out of pocket.  For a medical bill or a court case %COMPANY%’s mobile home liability insurance has you covered.</p>

			");?>
		</section>
</div>