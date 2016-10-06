<?php require "setts.php"; ?>
<script type="text/javascript">
$(document).ready(function(){
    $(this).attr("title", "<?php echo $data["%TITLE%"];?>");
    $("meta[name='description']").attr("content", "<?php echo $data["%DESCRIPTION%"];?>");
});  
</script>
<div class="row pageContentInner">
		<section class="twelve columns">
			<h1 class="mainHeader"><?php echo strtoupper(clean("%WORKCITY%", 0));?> Renter and Condo Insurance</h1>
		</section>
		<section class="eight columns">
			<?php clean("
			<p>Many people who live in an apartment or condo mistakenly believe that the building owners’ insurance will cover them in the case of an emergency, then only find out too late that the insurance just covers the building itself, not their possessions or liability. If you live in an apartment or condo in %WORKCITY%, you need to make sure that you have the coverage you need. That’s where %COMPANY% comes in.</p>
			");?>
		</section>
		<section class="four columns pagequote">
           		<a href="#!request-insurance-quote"><img src="images/request-quote.png"/></a>
		</section>
		<section class="twelve columns">
			<?php clean("
			<h2>What do renter insurance and condo insurance cover?</h2>
			
			<p>Both renter insurance and condo insurance are designed for people who live in shared buildings that contain other homes. Both policies cover the cost of replacing your personal property in the case of damage or theft. Both policies also offer liability insurance, which covers you in case you are held personally responsible for another person’s injuries or for damage to their property. Condo insurance provides one additional type of coverage, which is insurance coverage for parts of the condo building which are owned directly by you and not covered by the condo association’s property insurance.</p>
			
			<h2>Are my expensive items covered?</h2>
			
			<p>Nearly all of your property will be covered for replacement cost, after your deductible. However, certain very valuable items, such as jewelry, heirlooms, or expensive professional equipment may not be covered by your standard policy. If you own items with a very high replacement cost, let us know. It may be advisable to add a separate insurance rider to your policy that will provide you with coverage for those items.</p>
			
			<h2>Do I really need renter insurance or condo insurance?</h2>
			
			<p>Most people are surprised to learn the full replacement cost of all the property that they own. It may seem like you do not own very much, but when you think about replacing furniture, clothing, footwear, appliances, electronics, sporting equipment, musical instruments, and other common items, the cost rises very quickly. A few dollars per month spent on renter insurance or condo insurance can prevent a loss from becoming a financial disaster.</p>

			");?>
		</section>
</div>