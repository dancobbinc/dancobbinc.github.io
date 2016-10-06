<?php require "setts.php"; ?>
<script type="text/javascript">
$(document).ready(function(){
    $(this).attr("title", "<?php echo $data["%TITLE%"];?>");
    $("meta[name='description']").attr("content", "<?php echo $data["%DESCRIPTION%"];?>");
});  
</script>
<div class="row pageContentInner">
		<section class="twelve columns">
			<h1 class="mainHeader"><?php echo strtoupper(clean("", 0));?> Commercial Property Insurance</h1>
		</section>
		<section class="eight columns">
			<?php clean("
			<p>Commercial Property Insurance provided by %COMPANY% is a necessary safeguard for your buildings, contents and other equipment used by your company. If you want to cover most, if not all of your financial losses in the event of a setback, commercial property insurance is always a smart choice.</p>
			");?>
		</section>
		<section class="four columns pagequote">
           		<a href="#!request-insurance-quote"><img src="images/request-quote.png"/></a>
		</section>
		<section class="twelve columns">
			<?php clean("
			<p>Like all forms of insurance, there is no standardized solution that will fit all the needs of %WORKCITY%'s diverse commercial community. A business establishment is very similar to a domestic property. It is susceptible to many of the same threats and dangers that can happen to your home; theft, fire, water damage and so on. Though unlike your home, there are many other challenges that present themselves when it comes to your business: equipment breakdown, employee dealings and lost time (and profits) resulting from interruptions throughout the claiming process.</p>
			
			<p>Good coverage comes from asking the right questions and matching you and your business with a plan that is right for you. Throughout our many years in the insurance business, we have always put customer service at the heart of our business. 
			If you are looking to get started, get in touch with %COMPANY% and find out what your most optimal plan can be. We understand that you have a business to run and that you do not have the time to go over all your options. Luckily, our consultants have all the information at hand; we can do all the research and find the best quotes that will match your needs and budget.</p>

			");?>
		</section>
</div>