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
		<h2>Life Insurance</h2>
			<?php clean("
			<p><ul>
	<li>LOW COST TERM INSURANCE</li>
	<li>COMPETITIVE PERMANENT CASH VALUE ACCUMULATION</li>
	<li>PERSONAL DEBT/MORTGAGE PROTECTION</li>
	<li>ESTATE PRESERVATION AND TAX PROTECTION</li>
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