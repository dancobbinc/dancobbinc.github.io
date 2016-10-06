<?php require "setts.php"; ?>
<script type="text/javascript">
$(document).ready(function(){
    $(this).attr("title", "<?php echo $data["%TITLE%"];?>");
    $("meta[name='description']").attr("content", "<?php echo $data["%DESCRIPTION%"];?>");
});  
</script>
<div class="row pageContentInner">
		<section class="twelve columns">
			<h1 class="mainHeader"><?php echo strtoupper(clean("", 0));?> Life and AD&D Insurance</h1>
		</section>
		<section class="eight columns">
			<?php clean("
			<p>%COMPANY% protects your plan members by providing life insurance that protects their financial security in the event of a death, or that of a dependant. Accidental death coverage includes benefits with added financial protection for sudden and unexpected loss of life or disfigurement. Practical Group protection for your employees made affordable to your organization is available today. 
			");?>
		</section>
		<section class="four columns pagequote">
           		<a href="#!request-insurance-quote"><img src="images/request-quote.png"/></a>
		</section>
		<section class="twelve columns">
			<?php clean("
			<h2>Customized plans - automatic payroll deduction</h2>
			
			<p>Flexible and affordable, Group Life and Accidental Death & Dismemberment (AD&D) insurance from %COMPANY% can form the basis of a solid employee benefits package that provides varying allowance levels for employees and their dependents. Premiums are deducted directly from the payroll and additional coverage can be customized for members if required. Benefits can be based on standard amounts or calculated according to salary. Plans are customized for any sized business and number of employees.</p>
			
			<h2>The right coverage for your employees</h2>
			
			<p>Options include:</p>

			<ul>
				<li>Employee Term Life (with benefits up to $500,000 and $1,000,000 for accidental death)</li> 
				<li>Dependent Term Life</li>
				<li>Universal Term Life</li>
				<li>Optional Life</li>
				<li>Group Life Conversion</li>
				<li>Accidental Death and Disfigurement</li>
			</ul>
			
			<h2>Benefits in the event of accidental death</h2>
			
			<p>Accidental Death & Dismemberment Insurance can be added in conjunction with basic Group Life insurance. This coverage provides plan members with extra financial support in the event of sudden and accidental loss of hearing, speech, sight, paralysis or disfigurement or dismemberment.</p>
			
			%COMPANY% representatives can assist you in planning the most cost efficient benefit plans for your business or organization to ensure that your %WORKCITY% group members are properly protected.</p> 

			<p>Contact a representative for further information: %PHONE1%</p>

			");?>
		</section>
</div>