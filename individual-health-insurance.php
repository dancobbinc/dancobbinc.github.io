<?php require "setts.php"; ?>
<script type="text/javascript">
$(document).ready(function(){
    $(this).attr("title", "<?php echo $data["%TITLE%"];?>");
    $("meta[name='description']").attr("content", "<?php echo $data["%DESCRIPTION%"];?>");
});  
</script>
<div class="row pageContentInner">
		<section class="twelve columns">
			<h1 class="mainHeader"><?php echo strtoupper(clean("%WORKCITY%", 0));?> Individual Health Insurance</h1>
		</section>
		<section class="eight columns">
			<?php clean("
			<p>Whether you are unemployed, self-employed, a part-time worker, or simply looking for better health insurance, everyone deserves a health care plan that addresses their needs. Here at %COMPANY%, we are dedicated to working with each one of our %WORKCITY% clients to find a plan that gives them the coverage they need at a cost they can afford.</p>
			");?>
		</section>
		<section class="four columns pagequote">
           		<a href="#!request-insurance-quote"><img src="images/request-quote.png"/></a>
		</section>
		<section class="twelve columns">
			<?php clean("
			<h2>Why do I need health insurance?</h2>
			
			<p>Health care costs have risen significantly over the last several years. Most Americans would be financially devastated by any serious injury or illness. In exchange for a relatively tiny monthly premium, an insurance company guarantees that you will have the money to pay for the health care that you need without worrying about bankruptcy or financially ruining your loved ones.</p>
			
			<h2>What should I consider when choosing a health plan?</h2>
			
			<p>Finding a health insurance plan that strikes the right balance between your needs and your ability to pay can be difficult. Here at %COMPANY%, we will help guide you to find the best coverage for your situation, but there are several things to consider that will help you to understand what kind of health insurance you need. The first thing to consider is how often you anticipate using health care services – it obviously makes a big difference whether you have a condition that means you often see doctors or you just plan to use health care services in the event of an emergency. Almost as important is the amount of money in your budget you can afford to spend on healthcare. In some cases, it might make sense to have a higher deductible and lower your monthly payments. Finally, you should consider whether you are eligible for any federal tax credits or cost-sharing reductions to help pay for your costs, as these may be able to significantly improve your individual health insurance plan. We understand how complex this is, so that is why we recommend any %WORKCITY% residents looking for individual health insurance give us a call so we can help determine the best plan for you.</p>

			");?>
		</section>
</div>