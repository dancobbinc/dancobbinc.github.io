<?php require "setts.php"; ?>
<script type="text/javascript">
$(document).ready(function(){
    $(this).attr("title", "<?php echo $data["%TITLE%"];?>");
    $("meta[name='description']").attr("content", "<?php echo $data["%DESCRIPTION%"];?>");
});  
</script>
<div class="row pageContentInner">
		<section class="twelve columns">
			<h1 class="mainHeader"><?php echo strtoupper(clean("%WORKCITY%", 0));?> Umbrella Insurance</h1>
		</section>
		<section class="eight columns">
			<?php clean("
			<h2>What is umbrella insurance?</h2>
			
			<p>Simply put, umbrella insurance is extra protection on top of your auto insurance, homeowner’s, or other insurance policies. 
			You may be wondering why you need umbrella insurance. After all, you are already paying X amount of dollars for insurance plans and they seem adequate. We at %COMPANY% understand your confusion when it comes to umbrella insurance and are happy to clear things up for you.</p>
			");?>
		</section>
		<section class="four columns pagequote">
           		<a href="#!request-insurance-quote"><img src="images/request-quote.png"/></a>
		</section>
		<section class="twelve columns">
			<?php clean("
			<p>Your current insurance policy may only protect you for certain things at a certain level of liability. Umbrella insurance is designed to start where your other insurance policies stops. It can be a safety net against the following:</p>
			
			<ul>
				<li>Libel</li> 
				<li>Defamation of character</li>
				<li>Vandalism</li>
				<li>Invasion of privacy</li>
				<li>Injuries</li>
				<li>Property damage</li>
				<li>Certain lawsuits</li> 
				<li>False arrests</li> 
			</ul>
			
			<h2>Why should I get Umbrella Insurance?</h2>
			
			<p>If you are a commercial business owner in the %WORKCITY% area, it is extremely important that your business has an extra layer of protection. Unforeseen events, such as someone tripping and falling on your commercial property, can wind up costing you more money than it would have if you bought umbrella insurance. Not to mention the stress and aggravation that comes with having to find a reliable lawyer and attend court dates. Residential homeowners should consider purchasing an additional amount of liability coverage as well for similar reasons.</p>
			
			<h2>“Accidents happen”</h2>
			
			<p>Unfortunately, as you may already know, some accidents can be more costly than others, and in today’s economy, with damage claims on the rise, it is always best to err on the side of caution. When you choose to purchase umbrella insurance with %COMPANY% you are choosing to protect your future assets – your children’s university funds, your retirement savings, etc.</p>
			
			<h2>Contact %COMPANY% today and gain the peace of mind you deserve</h2>
			
			<p>If you are in the %WORKCITY% area and have questions about excess umbrella insurance or would like a competitive quote, please do not hesitate to contact us at %PHONE1%. We will be sure to let you know how we can set up an umbrella insurance policy that works in conjunction with your current insurance policy and specific needs.</p> 

			");?>
		</section>
</div>