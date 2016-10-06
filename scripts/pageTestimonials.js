$(document).ready(function(){
$(document).append("<img width='0' src='images/starSelected.png'>");

var currentClick = 0;
	//Mouse over stars changes the star color
	$(".star").hover(function(){
		$(".star").removeClass("selected");
		var id = $(this).attr("id").replace("star", "");
		while(id >= 0){
			$("#star"+id).addClass("selected");
		id--;
		}
	});
	//Click star, save rating
	$(".star").click(function(){
	if(currentClick !== $(this).attr("id").replace("star", "")){
		currentClick = $(this).attr("id").replace("star", "");
	}
	else{
		$(".star").removeClass("selected");
		currentClick = 0;
	}
	$("#testimonialRating").val(currentClick);
	});
	
	//When mouse leaves the div with the stars, recalculate stars 
	$(".stars").mouseleave(function(){
	var rateCount = currentClick;
		$(".star").removeClass("selected");
		while(rateCount >= 0){
			$("#star"+rateCount).addClass("selected");
		rateCount--;
		}
	});
	
	$(".submitTestimonial").click(function(){
		
		var hasInvalid = false;
		
		var testimonialName = $("#testimonialName").val();
		var testimonialRating = $("#testimonialRating").val();
		var testimonialComment = $("#testimonialComment").val();
	
	
		//Letters and spaces validation
		var nameValidation = /^[a-zA-Z\ \']+$/;
		if((!nameValidation.test(testimonialName))){
			$("#testimonialName").addClass("invalid");
			hasInvalid = true;
		}
		
		//Comment validation
		var testimonialValidation = /\S/;
		if(!testimonialValidation.test(testimonialComment)){
			$("#testimonialComment").addClass("invalid");
			hasInvalid = true;
		}
		
		//Rating validation
		if(testimonialRating == 0){
			if(!confirm("Are you sure you want to rate our services zero?")){
				hasInvalid = true;
			}
		}
		
		if(!hasInvalid){
			//If all validation goes through, submit form and reset values
				
				var formSubmit = $.post("insert.php", $("#testimonialForm").serialize());
				formSubmit.done(function(data){
					$(".testimonialAccepted").slideDown(400).delay(3000).slideUp(400);
				
					$("#testimonialName").val("");
					$("#testimonialRating").val(0);
					$("#testimonialComment").val("");
					$(".star").removeClass("selected");

				});				
		}else{
			$(".testimonialError").slideDown(400).delay(3000).slideUp(400);
		}
		return false;
	
		
	});
	//Return class to default class on focus
		$("#testimonialForm :input").focus(function(){
			$(this).removeClass("invalid");
		});
});