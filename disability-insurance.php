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
			<li>PERSONAL INCOME PROTECTION</li>
			<li>PERSONAL DEBT/MORTGAGE PROTECTION</li>
			<li>IMPAIRED RISK – MEDICAL ISSUES</li>
			<li>HIGH BENEFIT LIMIT</li>
			<li>RETIREMENT CONTRIBUTION REPLACEMENT</li>
			<li>GROUP DISABILITY INSURANCE SUPPLEMENTATION</li>
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