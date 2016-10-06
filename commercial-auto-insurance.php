<?php require "setts.php"; ?>
<script type="text/javascript">
$(document).ready(function(){
    $(this).attr("title", "<?php echo $data["%TITLE%"];?>");
    $("meta[name='description']").attr("content", "<?php echo $data["%DESCRIPTION%"];?>");
});  
</script>
<div class="row pageContentInner">
		<section class="twelve columns">
			<h1 class="mainHeader"><?php echo strtoupper(clean("", 0));?> Commercial Auto Insurance</h1>
		</section>
		<section class="eight columns">
			<?php clean("
			<p>With thousands of accidents happening on highways every year, Commercial Auto Insurance provided by %COMPANY% is always a sensible option for your company and your fleet. When you are on the road, servicing your clients, you need to know that you are covered by the right insurance. </p>
			");?>
		</section>
		<section class="four columns pagequote">
           		<a href="#!request-insurance-quote"><img src="images/request-quote.png"/></a>
		</section>
		<section class="twelve columns">
			<?php clean("
			<p>You want to keep your business moving forward and you want to provide your clients with a reliable service that is worthy of your company. We have been providing clients with a peace of mind that only comes from a top quality, comprehensive insurance service. No matter how large or small your fleet is - whether you are just using your own car or many trucks, we have a wide array of suitable plans that can be tailored to you and your company's needs.</p>
			
			<p>From theft, to bodily harm, to auto damage, there are a whole series of unforeseen events that can happen to your fleet. This is why we offer versatile plans that are designed to not only let you rest easy, but save you money. Some of the most popular policies we offer include:</p>
			<ul>
				<li>Bodily Injury Coverage</li>
				<li>Property Damage Liability</li>
				<li>Collision Coverage</li>
				<li>Comprehensive Coverage</li>
				<li>Uninsured/Underinsured Motorist Coverage</li>
				<li>Deductable consultation</li>
			</ul>	
			<p>The fact of the matter is there is no 'cookie cutter' plan available, instead we encourage %WORKCITY%'s fleet owners to get in touch with us for consultation where we can work with you on crafting a plan that will suit your specific needs. More often than not, people buy insurance without knowing how much they require; many businesses are only covered for relatively minor fender benders, which is not enough for most accidents. Others have a tendency to go to the other extreme and over insure themselves, which can actually cause a slow bleed that eats into their bottom line. We at %COMPANY% offer balanced solutions that both protect your fleet and save you money.</p>

			");?>
		</section>
</div>