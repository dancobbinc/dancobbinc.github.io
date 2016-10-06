<?php require "setts.php"; ?>
<script type="text/javascript">
$(document).ready(function(){
    $(this).attr("title", "<?php echo $data["%TITLE%"];?>");
    $("meta[name='description']").attr("content", "<?php echo $data["%DESCRIPTION%"];?>");
});  
</script>
<div class="row pageContentInner">
		<section class="twelve columns">
			<h1 class="mainHeader"><?php echo strtoupper(clean("", 0));?> Dental and Vision Insurance</h1>
		</section>
		<section class="eight columns">
			<?php clean("
			<p>%COMPANY% offers affordable group supplementary health care plans that ensure the overall health of your employees and promote the stability of your business.  Standard vision benefit plans offer basic or specialized prescription eye care products and medical procedures. Dental coverage group benefits include preventative plans and/or coverage for restorative and orthodontic work.</p>
			");?>
		</section>
		<section class="four columns pagequote">
           		<a href="#!request-insurance-quote"><img src="images/request-quote.png"/></a>
		</section>
		<section class="twelve columns">
			<?php clean("
			<h2>Basic maintenance to major restorative – benefit plans that suit your business!</h2>
			
			<p>Whether you require routine care or major procedures for your employees, %COMPANY% dental benefit plans help cover the cost of dental and vision care provided by licensed practitioners and trained medical personnel. Claims are sent and processed directly from the dentist’s office eliminating extra paperwork for your administrators so you can take care of business while we manage your benefits.</p>
			
			<h2>Eye care protection for your employees</h2>
			
			<p>Employee vision coverage offers a variety of flexible plans as part of your overall healthcare benefit package and include:</p>

			<ul>
				<li>Prescription eyeglasses</li>
				<li>Contact lenses</li>
				<li>Lenses</li>
				<li>Frames</li>
				<li>Prescription sunglasses</li>
				<li>Laser eye surgery</li>
				<li>Regular eye exam</li>
			</ul>
			
			<h2>Customized group dental insurance coverage</h2>
			
			<p>Dental health care coverage can be provided to your employees with basic or specialized features that may include any of the following:</p>
			
			<ul>
				<li>Preventative</li> 
				<li>Routine examinations</li>
				<li>Major restorative</li>
				<li>Orthodontic care</li>
			</ul>
			
			<p>Premiums and benefit percentages can vary according to the financial objectives of your company and the requirements of group members. Practical and affordable, %COMPANY% group dental and vision care insurance helps to protect the health of your employees and ultimately promotes the well-being of your entire business. Contact a %WORKCITY% representative for more information and to tailor the most cost efficient plan for your %WORKCITY% company.</p>

			");?>
		</section>
</div>