<?php require "setts.php";?>
<script type="text/javascript">
$(document).ready(function(){
    $(this).attr("title", "<?php echo $data["%TITLE%"];?>");
    $("meta[name='description']").attr("content", "<?php echo $data["%DESCRIPTION%"];?>");
});  
</script>
<script src="scripts/pageTestimonials.js" type="text/javascript"></script>
<div class="row pageContentInner">
		<section class="twelve columns">
			<h1 class="mainHeader">Client Testimonials</h1>
		</section>
		<div class="twelve columns testimonialsForm">
			<div class="twelve columns">
				<div class="testimonialError">
					<p>Please verify all fields and try again.</p>
				</div>
				<div class="testimonialAccepted">
					<p>Your testimonial has been sent for moderation.<br>Once accepted it will appear on the website.</p>
				</div>
			</div>
			<form method="post" id="testimonialForm" onSubmit="return false;">
				<div class="row">
					<div class="two columns">
						<label for="testimonialName">Nickname: </label>
					</div>
					<div class="five columns">
						<input type="text" name="testimonialName" id="testimonialName">
					</div>
					<div class="five columns">
					</div>
				</div>
				<div class="row">
					<div class="two columns"><label>Rating:</label></div>
						<div class="five columns stars">
						<input type="text" value="0" name="testimonialRating" class="testimonialRating" id="testimonialRating">
							<div class="star" id="star1"></div>
							<div class="star" id="star2"></div>
							<div class="star" id="star3"></div>
							<div class="star" id="star4"></div>
							<div class="star" id="star5"></div>
						</div>
						<div class="five columns stars">
						</div>
				</div>
				<div class="row">
					<div class="two columns">
						<label for="testimonialComment">Comment: </label>
					</div>
					<div class="five columns">
						<textarea cols="50" rows="5" name="testimonialComment" id="testimonialComment"></textarea>
					</div>
					<div class="five columns">
					</div>
				</div>
			</form>
			<div class="row">
				<div class="two columns">
				</div>
				<div class="ten columns">
					<p class="submitTestimonial">Submit</p>
				</div>
			</div>
		</div>
		<div class="twelve columns" itemscope itemtype="http://schema.org/Review">
			<?php require("scripts/filterTestimonials.php"); ?>
		</div>
</div>