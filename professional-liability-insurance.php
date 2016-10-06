<?php require "setts.php"; ?>
<script type="text/javascript">
$(document).ready(function(){
    $(this).attr("title", "<?php echo $data["%TITLE%"];?>");
    $("meta[name='description']").attr("content", "<?php echo $data["%DESCRIPTION%"];?>");
});  
</script>
<div class="row pageContentInner">
		<section class="twelve columns">
			<h1 class="mainHeader"><?php echo strtoupper(clean("", 0));?> Professional Liability Insurance</h1>
		</section>
		<section class="eight columns">
			<?php clean("
			<p>For those who need protection and coverage regarding claims made against them from third party losses, %COMPANY%'s professional liability solutions offer a simple and effective way to mitigate and reduce potential losses. Our dedicated and knowledgeable staff can take all the mystery out of the whole process and put you on the right track towards security and comfort. We promise to match our coverage with your standards.</p>
			");?>
		</section>
		<section class="four columns pagequote">
           		<a href="#!request-insurance-quote"><img src="images/request-quote.png"/></a>
		</section>
		<section class="twelve columns">
			<?php clean("
			<p>Not everyone is a lawyer and no one has the time to figure out all the legal complexities that can result in a lawsuit. Furthermore, as anyone in %WORKCITY% knows, legal costs can pile up and get very expensive. This is exactly why professional liability is so important; %WORKCITY%'s business owners might be held accountable for damages they may not have even known existed. For instance, did you know that you may find yourself liable for an outsourced product? You can even be liable in even more remote ways, like online commerce and intellectual property issues. This is why we at %COMPANY% want to encourage everyone in %WORKCITY% to get in touch with us.</p> 
			
			<p>Remember, all it takes is one substantial lawsuit to not only cause irreparable damage to your company, but also to your reputation which can have long term consequences if left unchecked. You need a company like %COMPANY% in your corner that seeks out your businesses' characteristics and needs. Once known, we can provide a coverage plan that is designed to suit you and your budget, allowing you to rest easy and focus on what you do best with a clear mind.</p>
			
			<p>Understanding all these issues can be  daunting if not completely overwhelming for those who are not familiar with them; this type of liability usually requires high levels of analysis from attorneys, actuaries and economists in order to tailor a plan that is right for you and your company. Luckily, we have been in the insurance business for many years and through our networks of dedicated and committed professionals we have been delivering exactly what our clients need.</p>

			");?>
		</section>
</div>