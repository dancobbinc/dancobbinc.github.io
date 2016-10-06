<?php require "setts.php"; ?>
<script type="text/javascript">
$(document).ready(function(){
    $(this).attr("title", "<?php echo $data["%TITLE%"];?>");
    $("meta[name='description']").attr("content", "<?php echo $data["%DESCRIPTION%"];?>");
});  
</script>
<div class="row pageContentInner">
		<section class="twelve columns">
			<h1 class="mainHeader"><?php echo strtoupper(clean("%COMPANY%", 0));?></h1><br />
		</section>
		<section class="eight columns">
		<h2>Disability Insurance</h2>
			<?php clean("
			<p><ul>
	<li>INDIVIDUAL</li>
	<li>GROUP – SHORT & LONG TERM PROTECTION</li>
	<li>SALARY CONTINUATION/SICK PAY PLANS</li>
	<li>GROUP DISABILITY PLAN SUPPLEMENTATION</li>
	<li>BUSINESS OVERHEAD EXPENSE</li>
	<li>KEY PERSON</li>
	<li>DISABILITY BUY/SELL</li>
	<li>BUSINESS DEBT PROTECTION</li>
	<li>EMPLOYEE-PAID PAYROLL DEDUCTION PLANS</li>
	<li>SELF-EMPLOYED/HOME-BASED BUSINESSES</li>
</ul></p>
			");?>
		</section>
		<section class="four columns pagequote">
           		<a href="#!request-insurance-quote"><img src="images/request-quote.png"/></a>
		</section>
		<section class="twelve columns">
			<?php clean("
			
			");?>
		</section>
</div>