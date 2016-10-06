<?php require "setts.php"; ?>
<script type="text/javascript">
$(document).ready(function(){
    $(this).attr("title", "<?php echo $data["%TITLE%"];?>");
    $("meta[name='description']").attr("content", "<?php echo $data["%DESCRIPTION%"];?>");
});  
</script>
<div class="row pageContentInner">
		<section class="twelve columns">
			<h1 class="mainHeader"><?php echo strtoupper(clean("", 0));?> Retirement Plans</h1>
		</section>
		<section class="eight columns">
			<?php clean("
			<p>%COMPANY% provides a wide range of products and services to meet your financial objectives during retirement. Financial investment portfolios specifically designed for income security and protection at retirement can be customized to suit you requirements. Nest egg savings plans, Setting aside funds for education, Business investing or even financially planning for a once in a lifetime vacation during later years.</p>
			");?>
		</section>
		<section class="four columns pagequote">
           		<a href="#!request-insurance-quote"><img src="images/request-quote.png"/></a>
		</section>
		<section class="twelve columns">
			<?php clean("
			<h2>Retirement protection </h2>
			
			<p>If you are planning for retirement or already retired, %COMPANY%'s financial advisors can assist you in making the best investments to safeguard your financial security. The most appropriate combination of investments can be customized with a variety of options that include:</p>
			
			<ul>
				<li>Mutual Funds
				<li>Registered retirement savings plans</li> 
				<li>Registered education savings plans</li> 
				<li>Registered retirement income funds</li>
				<li>Tax free savings accounts</li>
				<li>Guaranteed interest option and payout annuities</li> 
				<li>Specialized retirement planning solutions</li> 
			</ul>
			
			<h2>Trusted financial advisors</h2>
			
			<p>%COMPANY%'s advisors provide comprehensive assistance on the various pension plans and ways to minimize taxes. Practical solutions are tailored to complement your particular goals and maximize existing assets. Our financial consultants can provide innovative solutions that are flexible, and will ensure a solid income stream, as well as offering options for surviving spouses and additional investment opportunities and financial benefits.</p>
			
			<p>Regardless of your particular financial profile, %COMPANY% is dedicated to helping individuals achieve financial security for their retirement planning.</p>
			
			<h2>Easy access helpful information</h2>
			
			<p>Please email us with any questions you may have. A trusted advisor will contact you shortly to answer any questions and help determine the retirement strategy most suitable for you. Or call a %COMPANY% specialist directly at %PHONE1%.</p>

			");?>
		</section>
</div>