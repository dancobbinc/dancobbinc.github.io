<?php require "setts.php"; ?>
<script type="text/javascript">
$(document).ready(function(){
    $(this).attr("title", "<?php echo $data["%TITLE%"];?>");
    $("meta[name='description']").attr("content", "<?php echo $data["%DESCRIPTION%"];?>");
});  
</script>
<div class="row pageContentInner">
		<section class="twelve columns">
			<h1 class="mainHeader"><?php echo strtoupper(clean("", 0));?> Business Owner Policy</h1>
		</section>
		<section class="eight columns">
			<?php clean("
			<p>You work hard to secure you assets and you put in a lot of time and energy to grow your business. When it comes to safeguarding your prospects for your business you can rest easy knowing that %COMPANY% has got you and yours covered.</p>
			");?>
		</section>	
		<section class="four columns pagequote">
           		<a href="#!request-insurance-quote"><img src="images/request-quote.png"/></a>
		</section>
		<section class="twelve columns">	
			<?php clean("
			<p>%WORKCITY%'s business owners can own a variety of assets including: vehicles, offices and valuable inventory. Every dedicated professional knows and understands that a good business plan is based on maximizing your skills while evaluating your risks. If there is anything that we do better than anyone else, it's in understanding risk. Unforeseen events will happen, there is no preventing that, but there are ways to mitigate them while protecting your company's bottom line.
			Business insurance can be daunting to any business owner; will my business survive should some of my key employees becomes disabled? Do I have all my bases covered in the case of an emergency? Do I have enough to deal with a potential lawsuit? The fact of the matter is you need to know what your liabilities are when it comes to your %WORKCITY% business. </p>
			
			<p>Here are some of the more common business insurance policies that we at %COMPANY% deal in:</p>
			<ul>
				<li>General Liability Insurance</li>
				<li>Product Liability Insurance</li>
				<li>Employee Insurance</li>
				<li>Business Liability Insurance</li>
				<li>Various Other Options</li>
			</ul>
			
			<p>It's a competitive world out there, whether you have a small, medium or large enterprise, we at %COMPANY% will always be in your corner. So if you value peace of mind, then give us a call and have us put you and your company on the right track towards a prosperous and secure future.</p>

			");?>
		</section>
</div>