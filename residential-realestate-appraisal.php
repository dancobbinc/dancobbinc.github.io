<?php require "setts.php"; ?>
<script type="text/javascript">
$(document).ready(function(){
    $(this).attr("title", "<?php echo $data["%TITLE%"];?>");
    $("meta[name='description']").attr("content", "<?php echo $data["%DESCRIPTION%"];?>");
});  
</script>
<div class="row pageContentInner">
		<section class="twelve columns">
			<h1 class="mainHeader"><?php echo strtoupper(clean("%WORKCITY%", 0));?> RESIDENTIAL APPRAISAL SERVICES</h1>
		</section>
		<section class="twelve columns">
				<?php clean("
					<p>You have found a dream home. The asking price is $350,000, which has already been approved by your lender. But is your home really worth the valuation? This is the question which is at the heart of home appraisal. The real value or worth of the property would determine how much your lender is willing to give you for buying that property.</p>

					<p>Here at %COMPANY%, we have extensive experience in appraising homes in %WORKCITY%. Home appraisal is the most important thing to be done before you get your financing. It’s the expert opinion of a licensed or certified professional who determines the value of the property. Simply put, does your home really cost $350,000 or is $275,000 a more realistic price? Besides, a home appraisal protects your lender from getting stuck with a property which is worth much less than they lent to the buyer. It protects you, the buyer, from paying more for a home simply because you loved it at first sight. A home appraisal takes the emotional experience of buying a house and reduces it to a no-nonsense evaluation of a property.</p>
					
					<h2>How It Works </h2>

					<p>There are two basic appraisal methods for residential properties: sales comparison approach and cost approach. In the former, the appraiser compares the property in question with a few other homes of similar specifications that were recently sold in the area. The analysis involves specific components like square feet, lot size, finished or unfinished space, age and style of the home as well as other features like fireplace and garage.</p>

					<p>The cost approach, on the other hand, is used more for determining the value of new property and based on reproduction costs. Here, the home appraisal company estimates the cost of replacing the structure if it were destroyed. The company then factors in the value of land and the depreciation for determining the real value of the property.</p>

					<h3>The Appraisal Report</h3>

					<p>The appraiser collects information to make the report from several sources. The process usually begins with a thorough physical inspection of a property. The appraiser would also look at the records with the local authorities and go through recent reports of estate listing services.</p>

					<p>The home appraisal report is likely to include the following:</p>
					
					<ul>
					  <li>Explanation of how the home appraisal company determined the real value of the property.</li>
					  <li>The condition and size of the house and its various other permanent fixtures as well as a description of the improvements that were made and the materials used for the purpose. </li>
					  <li>A statement of any serious structural problems like cracked foundations and wet basements. </li>
					  <li>Notes on the surrounding areas like whether it is an established neighborhood or a new development, rural acreage and similar issues.</li>
					  <li>Evaluation of the latest market trends in the area that is likely to affect property valuation.</li>
					  <li>Comparative market analyses that corroborates the appraisal.</li>
					  <li>Photographs, maps and sketches.</li>
					</ul>					
					
					<p>Home appraisal is not the same as home inspection. While buying or selling a home you can hire an experienced inspector for pointing out potential problems that may compound in future. Property appraisers, while noting the obvious issues, won’t check the chimney, the plumbing, or the air and heat.</p>

				");?>
		</section>
</div>