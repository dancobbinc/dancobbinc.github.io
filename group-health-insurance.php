<?php require "setts.php"; ?>
<script type="text/javascript">
$(document).ready(function(){
    $(this).attr("title", "<?php echo $data["%TITLE%"];?>");
    $("meta[name='description']").attr("content", "<?php echo $data["%DESCRIPTION%"];?>");
});  
</script>
<div class="row pageContentInner">
		<section class="twelve columns">
			<h1 class="mainHeader"><?php echo strtoupper(clean("", 0));?> Group Health Insurance</h1>
		</section>
		<section class="eight columns">
			<?php clean("
			<h2>Experienced and committed group health insurers</h2>
			<p>%COMPANY% has extensive experience offering affordable group health insurance packages to any sized business in the %WORKCITY% region. Ask about our cost effective employee health benefits, secure in the knowledge that our commitment for providing value and service is based on fulfilling the needs of employers and offering practical coverage solutions in conjunction with advanced insurance products.</p>
			");?>
		</section>
		<section class="four columns pagequote">
           		<a href="#!request-insurance-quote"><img src="images/request-quote.png"/></a>
		</section>
		<section class="twelve columns">
			<?php clean("
			<h2>A variety of customized health benefit options</h2>
			<p>Group insurance alternatives include: </p>
			<ul>
				<li>Life and accident benefits</li>
				<li>Dental Care and Medical coverage</li>
				<li>Prescription Drug coverage</li>
				<li>Emergency Travel Health insurance</li>
				<li>Extended and critical Illness benefits</li>
				<li>Medical reimbursement plans</li>
				<li>Retirement health insurance plans</li>
				<li>Specialty and Customized plans according to requirement</li> 
			</ul>
			
			<h2>Practical health coverage solutions - superior, cost efficient group benefit products</h2>

			<p>%COMPANY% can provide customized group health insurance to any organization. Experts in finding the particular coverage most suitable for business owners and employers, our representatives provide assistance in the selection of health benefit packages for either small or larger groups.   Group health insurance provides financial protection for employees and also allows employers to attract and retain competent staff that helps to maintain steady work productivity and avoid high turnover rates.</p>
			
			<h2>Informed insurance experts provide immediate assistance to employers</h2>
			
			<p>Health Insurance plans are offered at competitive rates by knowledgeable representatives available to address concerns, provide solutions and customize the most appropriate insurance packages for your business.</p>
			
			<p>For more information on the benefits of group health insurance from %COMPANY% contact your local representative in the %WORKCITY% area by calling %PHONE1%.</p>

			");?>
		</section>
</div>