<?php require "setts.php"; ?>
<script type="text/javascript">
$(document).ready(function(){
    $(this).attr("title", "<?php echo $data["%TITLE%"];?>");
    $("meta[name='description']").attr("content", "<?php echo $data["%DESCRIPTION%"];?>");
});  
</script>
<div class="row pageContentInner">
		<section class="twelve columns">
			<h1 class="mainHeader"><?php echo strtoupper(clean("", 0));?> General Liability Insurance</h1>
		</section>
		<section class="eight columns">
			<?php clean("
			<p>Easy, affordable and flexible, general liability insurance provided by %COMPANY% is a solid, comprehensive solution for your workplace should you and your firm be faced with either bodily injuries or damages caused by your employees both in and outside the premises of your business. We offer a wide variety of coverage plans for any type of business.</p>
			");?>
		</section>
		<section class="four columns pagequote">
           		<a href="#!request-insurance-quote"><img src="images/request-quote.png"/></a>
		</section>
		<section class="twelve columns">
			<?php clean("
			<p>General liability insurance offers flexible solutions that can be tailored and customized to your business. We at %COMPANY% want to take this opportunity to remind those interested in this type of coverage to consult with us in order to find the plan that is right for them; like other types of insurance, people have a tendency to either over or under insure when they attempt to get coverage by themselves.</p>
			
			<p>Even if you are self-employed and run a home based operation you still need coverage found in a general liability insurance plan; remember, most home insurance policies do not cover your home business. Sadly, many small business owners operating from home have found this out the hard way. We want to know that no matter what your business is or where it is located you definitely need to get covered. Here are some of the more popular coverage options:</p>
			
			<ul>
				<li>Injuries to customers, employees, vendors and visitors that occur on your premises</li>
				<li>Injuries that occur outside your business premises that are caused by an employee</li>
				<li>Third party property damage caused by an employee</li>
			</ul>
			
			<p>General liability insurance is also highly flexible as it can be combined with other insurance policies. We are here to help the people to figure out what are the most cost effective bundles that are best for them and their business.</p>

			");?>
		</section>
</div>