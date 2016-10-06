<?php require "setts.php"; ?>
<script type="text/javascript">
$(document).ready(function(){
    $(this).attr("title", "<?php echo $data["%TITLE%"];?>");
    $("meta[name='description']").attr("content", "<?php echo $data["%DESCRIPTION%"];?>");
});  
</script>
<div class="row pageContentInner">
		<section class="twelve columns">
			<h1 class="mainHeader"><?php echo strtoupper(clean("", 0));?> Life and Health Insurance</h1>
		</section>
		<section class="eight columns">
			<?php clean("
			<p>%COMPANY% specializes in providing Group life and health care benefit plans that are customized to meet the requirements of your workforce or group members. For either small businesses or larger companies, our packages are tailored to offer you the most affordable and practical employee coverage available.<p>
			");?>
		</section>
		<section class="four columns pagequote">
           		<a href="#!request-insurance-quote"><img src="images/request-quote.png"/></a>
		</section>
		<section class="twelve columns">
			<?php clean("
			<h2>Practical employee benefit packages tailored to your company</p>
			
			<p>If you need a reasonable and realistic solution that still provides essential employee coverage, %COMPANY% has innovative and practical solutions for your employee benefit package that will maintain your financial objectives while simultaneously fulfilling your obligation to group plan members.</p>
			
			<p>Specializing in offering a wide range of group life insurance options and health care plans tailored to the requirements of %WORKCITY% companies, our representatives are waiting to assist you in choosing the optimal coverage mix for your business.</p>
			
			<h2>Trusted advisors - prompt service</h2>
			
			<p>%COMPANY% employee benefit packages are customized to contain core and optional features. Choosing the best alternatives within your budgetary limits is made easy with a simple application process and helpful and knowledgeable advisors that can set up plans for your members promptly.</p>
			
			<h2>Primary life and group health insurance options include:</h2>
			
			<ul>
				<li>Group life (many options)</li> 
				<li>Term life</li>
				<li>Accidental death or disfigurement</li>
				<li>Prescription drug coverage</li>
				<li>Vision care</li>
				<li>Optional supplementary health care and spending accounts</li>
				<li>Travel insurance</li>
				<li>Critical illness</li>
				<li>Long or short term disability</li>
				<li>Survivor benefits</li>
				<li>Other specialized health care and life insurance options</li> 
			</ul>
			
			<p>%COMPANY% understands that you have worked hard to build your business. Our practical employee benefits plans are meant to enhance your success and promote the growth of any organization. Contact us for more information today.</p>

			");?>
		</section>
</div>