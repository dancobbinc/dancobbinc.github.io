<?php require "setts.php"; ?>
<script type="text/javascript">
$(document).ready(function(){
    $(this).attr("title", "<?php echo $data["%TITLE%"];?>");
    $("meta[name='description']").attr("content", "<?php echo $data["%DESCRIPTION%"];?>");
});  
</script>
<div class="row pageContentInner">
		<section class="twelve columns">
			<h1 class="mainHeader"><?php echo strtoupper(clean("", 0));?> Commercial Umbrella Insurance</h1>
		</section>
		<section class="eight columns">
			<?php clean("
			<p>In an era where lawsuits can be in the millions of dollars, an umbrella policy, with its added protection and security just makes good business sense. If you want to make sure that your firm can absorb such costly expenses, then an umbrella liability policy provided by %COMPANY%  will give you peace of mind at an affordable price.</p>
			");?>
		</section>
		<section class="four columns pagequote">
           		<a href="#!request-insurance-quote"><img src="images/request-quote.png"/></a>
		</section>
		<section class="twelve columns">
			<?php clean("
			<p>When %WORKCITY%'s businesses use us for their umbrella liability policies, they gain from a wide array of benefits. As implied by the name, an umbrella policy is a supplemental plan that covers or 'drapes' pre-existing policies. On top of that, it generally isn't limited by geography. In other words you can take your policy with you and rest assured with our worldwide coverage that is effective beyond %WORKCITY%'s borders. Some of the other benefits include but are not limited to:</p>
			
			<ul>
				<li>Broader definitions of bodily injury, personal injury and other types of injuries</li>
				<li>Further limits against worst case scenarios</li>
				<li>Covers a wide range of liability insurance</li>
				<li>Provides additional coverage for claims that may be excluded by other policies</li>
			</ul>
			
			<p>One of the more attractive aspects of an umbrella policy is something called the 'drop down effect'. This effect occurs when one of your already existing coverage plans either falls short to cover the claim at hand or expires altogether. Should any of these events take place, the umbrella policy can fill in the gaps or 'drop down' and act as a substitute policy and thus give %WORKCITY%'s business owners coverage without them having to renew their pre-existing plans.</p>
			
			<p>With an increasingly litigious society that can inflict serious fiscal damages on your business, you need a policy that has you covered in the worst of times. By working with multiple plans, an umbrella policy will compliment you and your business. Get in touch with us at %COMPANY% and find out what we have to offer you.</p>

			");?>
		</section>
</div>