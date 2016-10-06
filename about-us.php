<?php require "setts.php"; ?>
<script type="text/javascript">
$(document).ready(function(){
    $(this).attr("title", "<?php echo $data["%TITLE%"];?>");
    $("meta[name='description']").attr("content", "<?php echo $data["%DESCRIPTION%"];?>");
});  
</script>
<div class="row pageContentInner">
		<section class="twelve columns">
			<h1 class="mainHeader"><?php echo strtoupper(clean("%COMPANY%", 0));?></h1>
		</section>
		<section class="eight columns">
			<?php clean("
			<p>Dan Cobb & Associates is owned and operated by Dan Cobb. With  over 30 years of experience as an independent insurance agent, Dan is not obligated to any specific insurance company.</p>
			
			<p>Dan works with you and your financial advisors to help you make an informed decision regarding the insurance company and coverage best suited for your individual and/or business needs.</p>
			
			<p>As an independent agency with numerous resources, Dan Cobb & Associates can offer a broad range of <b>Disability, Life,</b> and <b>Long Term Care</b> insurance plans. Many of these insurance plans are available on an employer paid or employee paid payroll deduction basis.</p>
			
			<p>Dan Cobb & Associates represents only financially sound companies. The insurance plans and services that Dan offers are designed to provide exceptional value and protection for individuals, professional practices, and businesses. You will find that Dan is very aggressive in helping clients with <b>serious health conditions, special needs or circumstances, dangerous avocations, older ages, or high net worth</b> find suitable insurance protection.</p>
			
			<p>Dan Cobb & Associates adheres to the highest standards of business ethics and personal integrity with a strong emphasis on meeting your ongoing service requirements. Dan Cobb has a relaxed needs-based approach to doing business, offering a pleasant change from the high pressure sales tactics that are often used in marketing insurance protection. </p>

			");?>
		</section>
		<section class="four columns">
		<h7>Services Available<br>Free of Charge</h7>
		<ul>
		<li>Insurance Needs Analysis</li>
		<li>Insurance Plan Benefit Comparisons</li>
		<li>Competitive Price Shopping</li>
		<li>Technical Information -<br>
		Printouts on the topic of your choice</li>
		</ul>
		</section>
</div>