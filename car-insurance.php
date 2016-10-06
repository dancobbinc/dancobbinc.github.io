<?php require "setts.php"; ?>
<script type="text/javascript">
$(document).ready(function(){
    $(this).attr("title", "<?php echo $data["%TITLE%"];?>");
    $("meta[name='description']").attr("content", "<?php echo $data["%DESCRIPTION%"];?>");
});  
</script>
<div class="row pageContentInner">
		<section class="twelve columns">
			<h1 class="mainHeader"><?php echo strtoupper(clean("%WORKCITY%", 0));?> Car Insurance</h1>
		</section>
		<section class="eight columns">
			<?php clean("
			<p>Car or auto insurance is essential for any vehicle on the road. You never know when an accident will happen but having the right car insurance will ease your worries when you get behind the wheel. %COMPANY% has been helping the car, truck, van and SUV owners of %WORKCITY% choose the right coverage for their need for many years.</p>
			");?>
		</section>	
		<section class="four columns pagequote">
           		<a href="#!request-insurance-quote"><img src="images/request-quote.png"/></a>
		</section>
		<section class="twelve columns">
			<?php clean("
			<h2>Car insurance for your needs</h2>
			
			<p>%COMPANY% offers a number of different types of insurance for your vehicle. There are comprehensive packages which can be tailored to your specific situation depending on the level of coverage you desire.</p>
			
			<p>Here is a brief overview of some of the coverage options %COMPANY% provides the motorists of %WORKCITY%.</p>
			
			<p><strong>Liability Insurance:</strong> If you get into an accident with another insured car as a result of your actions then this is the insurance you need.  The insurance covers the cost you would pay for property damage and medical expenses if you injure the other party.</p>
			
			<p><strong>Collision coverage:</strong> Where liability insurance covers payments to the other party, collision coverage is for your vehicle. In the event the collision has rendered your car damaged beyond repair then the coverage reimburses the value of your vehicle.</p>
			
			<p><strong>Comprehensive coverage:</strong> This is for when your car is damaged outside of a collision. Theft, weather damage, fire – acts of God or acts of vandalism this is the insurance that covers it.</p>
            
			<p><strong>Personal Injury Protection:</strong> If you or a passenger are injured in an accident this will cover your medical expenses.</p>
			
			<p><strong>Uninsured/ Underinsured Motorist Protection:</strong>  Though all motorists are legally obligated to insure their vehicles not every vehicle on the road is insured. If you get into an accident with an uninsured car or a car that is not insured enough to cover the accident then this protection makes sure that you are financially secure.</p>
			
			<p>If you have any questions about our coverage then please feel free to contact us at %PHONE1%</p>
			");?>
		</section>
</div>