<?php require "setts.php"; ?>
<script type="text/javascript">
$(document).ready(function(){
    $(this).attr("title", "<?php echo $data["%TITLE%"];?>");
    $("meta[name='description']").attr("content", "<?php echo $data["%DESCRIPTION%"];?>");
});  
</script>
<div class="row pageContentInner">
		<section class="twelve columns">
			<h1 class="mainHeader"><?php echo strtoupper(clean("%WORKCITY%", 0));?> RV, Boat / Motorcycle Insurance</h1>
		</section>
		<section class="eight columns">
			<?php clean("
			<p>The insurance specialists at %COMPANY% have been providing boat, RV, and motorcycle owners in the %WORKCITY% area with comprehensive and affordable insurance for years. As many of our satisfied customers can already attest to, %COMPANY% is 100% committed to getting you the best insurance plan for your specific needs. We take the time to learn about both you and your vehicle and are consistently refining our insurance policies to find you the lowest insurance premium.</p>
			");?>
		</section>
		<section class="four columns pagequote">
           		<a href="#!request-insurance-quote"><img src="images/request-quote.png"/></a>
		</section>
		<section class="twelve columns">
			<?php clean("
			<h2>Protect your boat with %COMPANY%</h2>
			
			<p>While there are no federal or state laws that require your boat be insured, most marinas in the %WORKCITY% area will require proof of insurance to moor your boat.</p>
			
			<p>Even if you have a private dock and years of experience on the high seas, it is always best to err on the side of caution. Don’t wait for an accident to make you realize how important it is to have your boat insured. Remember, you can’t put a price on peace of mind.</p>
			
			<h2>How much does boat insurance cost?</h2>
			
			<p>Insurance costs depend on a number of different factors, such as the value of your boat, the type and length of your boat, and your loss and claims history. After your boat and driving history is fully assessed by one of our boat insurance specialists, we will be able to tell you which policy is best suited for you.</p>
			
			<h2>Protect your RV with %COMPANY%</h2>
			
			<p>No two RV insurance policies are the same. There are many different RV insurance packages to choose from. Before purchasing an RV insurance policy, we at %COMPANY% want to make sure you are making the right decision regarding your coverage plan. The best option for you depends on a number of different factors, such as the make, model, and condition of your RV. In order to provide you with the best coverage option for your specific needs our team uses the following checklist:</p>
			
			<ul>
				<li>Will the RV owner want coverage for the items in their RV as well?
				<li>Does the RV owner live in their RV or is it used strictly for vacation?</li>
				<li>What is the market value of their RV?</li>
				<li>Will the RV be driven across state borders?</li>
				<li>What is the age and driving history of the RV owner?</li>
				<li>Is the RV only used seasonally?</li>
			</ul>
			
			<p>Once one of our RV insurance specialists receives all the necessary information they need, they will be able to provide you the highest quality, comprehensive policy tailored specifically to fit your needs. Trust that our years of experience and our expansive knowledge regarding the many different RV insurance packages will guide you to the solution.</p>
			
			<h2>Protect your motorcycle with %COMPANY%</h2>
			
			<p>If you are an avid rider, you know the thrill and the sense of adventure that comes with riding a motorcycle. There is nothing like being out on the open road with the wind blowing through your hair. But, as you probably also know, riding a motorcycle comes with risks.</p>
			
			<p>We at %COMPANY% realize that there is no way to predict when an accident will occur, but in the unfortunate event an accident does happen, we want to make sure we have you fully covered.</p>
			
			<p>As is the case with any type of insurance you buy, it is always best to meet with an insurance specialist to discuss which insurance plan is best for you. For example, if you only ride your motorcycle a few times a year you will be advised to purchase a different policy than someone who rides year-round. Likewise, living in a high-crime area will affect which insurance policy you purchase, as the risk of vandalism and theft are increased. Once one of our motorcycle insurance specialists receives all the necessary information they need, they will be able to provide you the highest quality, comprehensive policy tailored specifically to fit your needs.</p>

			");?>
		</section>
</div>