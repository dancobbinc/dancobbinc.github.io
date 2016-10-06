<?php require "setts.php"; ?>
<script type="text/javascript">
$(document).ready(function(){
    $(this).attr("title", "<?php echo $data["%TITLE%"];?>");
    $("meta[name='description']").attr("content", "<?php echo $data["%DESCRIPTION%"];?>");
});  
</script>
<div class="row pageContentInner">
		<section class="twelve columns">
			<h1 class="mainHeader"><?php echo strtoupper(clean("%WORKCITY%", 0));?> Homeowners Insurance</h1>
		</section>
		<section class="eight columns">
			<?php clean("
			<p>To protect your future you need to protect your present.  Homeowner’s insurance is there to make sure that your home is covered in cases of theft, fire, storms and vandalism because when the unexpected happens you don’t want to be left holding the bill.</p>
			");?>
		</section>
		<section class="four columns pagequote">
           		<a href="#!request-insurance-quote"><img src="images/request-quote.png"/></a>
		</section>
		<section class="twelve columns">
			<?php clean("
			
			<p>Whether you live in %WORKCITY% or anywhere across this great country it is always good to have a safety net. Your home protects you from the elements, keeps your family warm and is the place where many of your most cherished memories are made. %COMPANY% is here to help the homeowners and home buyers of %WORKCITY% find the coverage that works with their budget and lifestyle.</p>
			
			<h2>Homeowner’s insurance: what you need to know</h2>
			
			<p>There are a number of factors that insurance providers consider when prescribing an insurance package.</p>
			
			<p>First there is the age of your home. Depending on how old the components of your home are your insurance rate will be higher or lower. This is because old equipment has more potential to be hazardous. For instance, old pipes are more likely to crack and older electrical systems have a higher chance to malfunction.</p>
			
			<p>Another factor is the heating system you use. Forced air furnaces or electric heat pose less of a risk than oil heating but the age and condition of your tank is also important to make an assessment. Wood stoves offer many benefits to a home but also bring in potential danger such as fires and carbon monoxide poisoning so wood stoves increase coverage costs.</p>
			
			<p>Of course, certain areas are safer than others so where you live is also a determining factor.  Insurers keep track of policies by area and if you live in an area where there are frequent claims made then your insurance will need to reflect that.</p>
			
			<h2>%COMPANY%: your homeowner’s insurance specialist in %WORKCITY%</h2>
			
			<p>Though insurance companies have to consider many factors when insuring a home, %COMPANY% knows the right questions to ask to streamline the process. If you have any questions about homeowner’s insurance or the services we provide then contact us at %PHONE1%.</p>

			");?>
		</section>
</div>