<?php require "setts.php"; ?>
<script type="text/javascript">
$(document).ready(function(){
    $(this).attr("title", "<?php echo $data["%TITLE%"];?>");
    $("meta[name='description']").attr("content", "<?php echo $data["%DESCRIPTION%"];?>");
});  
</script>
<div class="row pageContentInner">
		<section class="twelve columns">
			<h1 class="mainHeader"><?php echo strtoupper(clean("", 0));?> Workers Compensation</h1>
		</section>
		<section class="eight columns">
			<?php clean("
			<p>Whether you have one or one thousand employees, you need to have the right plan in place to control the costs of potential worker's compensation claims. We at %COMPANY%, with our many years of experience in the field, have been helping some of the most diverse companies find the optimal and least costly solutions for their workers compensation issues.</p>
			");?>
		</section>
		<section class="four columns pagequote">
           		<a href="#!request-insurance-quote"><img src="images/request-quote.png"/></a>
		</section>
		<section class="twelve columns">
			<?php clean("
			<p>Worker's compensation insurance can actually be one of the largest expenses a company has to deal with. This is why we offer some of the most competitive pricing. Due to our many years dealing with worker's compensation, we have developed all the necessary networks that yield the best rates available. Our premium options are flexible and include some of the following:</p>
			
			<ul>
				<li>Guaranteed cost, by which a premium is paid and fixed according to a policy period based on payroll and employee classification</li>
				<li>Loss Sensitive premiums are 'fluid' in the sense that they are adjusted based on previous claims experience</li>
				<li>Employer claims based on costs incurred</li>
			</ul>
			
			<p>Our approach is based on not only solving problems but preventing them before they start. We offer comprehensive solutions that will not only save you money but also reduce the probability of workers compensations claims happening in the first place; some of these measures include periodic reviews of risk and safety, thorough investigations if instances of fraud are suspected, open claims and experience calculations and return to work programs.</p>
			
			<p>So if you want to simultaneously identify your best coverage options, reduce risk, minimize costs and ensure that you and your company will be secure then you should get in touch with %WORKCITY%'s premier insurance providers. Our consultants are no more than a click or call away, waiting to help you rest easy. So why not give us a call?</p>

			");?>
		</section>
</div>