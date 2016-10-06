$("#contactForm").submit(function(){

		var hasInvalid = false;
		
		var name = $("#contactName").val();
		var phone = $("#contactPhone").val();
		var email = $("#contactEmail").val();
		var message = $("#contactMessage").val();
		
		//Letters and spaces validation
		var nameValidation = /^[a-zA-Z\ \']+$/;
		if(name == "Name" || !nameValidation.test(name)){
			$("#contactName").addClass("invalid");
			hasInvalid = true;
		}
		//Phone number validation
		var phoneValidation = /^[01]?[- .]?(\([2-9]\d{2}\)|[2-9]\d{2})[- .]?\d{3}[- .]?\d{4}$/;
		if(phone == "Phone" || !phoneValidation.test(phone)){
			$("#contactPhone").addClass("invalid");
			hasInvalid = true;
		}
		//Email address validation
		var emailValidation = /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i;
		if(email == "email" || !emailValidation.test(email)){
			$("#contactEmail").addClass("invalid");
			hasInvalid = true;
		}
		//Message validation
		var messageValidation = /\S/;
		if(message == "Message" || !messageValidation.test(message)){
			$("#contactMessage").addClass("invalid");
			hasInvalid = true;
		}
		if(!hasInvalid){
			$("#contactFormSubmit").empty();
			$("#contactFormSubmit").html("Please Wait");

			//If all validation goes through, submit form and reset values
				
				var request = $.ajax({
					type: "POST",
					data : $("#contactForm").serialize(),
					url: "classes/contact-usSubmit.php"
				});
				request.done(function(data){
					$("#contactFormSubmit").empty();
					$("#contactFormSubmit").html("Thank you for your submission").delay(5000).queue(function(){
						$("#contactFormSubmit").empty();
						$("#contactFormSubmit").html("Submit Form");
					});
					$("#responseDivDone").slideDown(400).delay(800).slideUp(400);
					$("#contactFormSubmit").slideUp(400).delay(800).slideDown(400);
					
						$("#contactName").val("name");
						$("#contactPhone").val("phone");
						$("#contactEmail").val("email");
						$("#contactMessage").val("");
						
				});
				request.fail(function(msg){
					$("#responseDivFailed").slideDown(400).delay(800).slideUp(400);
					$("#contactFormSubmit").slideUp(400).delay(800).slideDown(400);
					
						$("#contactName").val(name);
						$("#contactPhone").val(phone);
						$("#contactEmail").val(email); 
						$("#contactMessage").val(message);
				});
		}
		return false;
	});
	
	//Return class to default class on focus
		$("#contactForm :input").focus(function(){
			$("#"+$(this).attr("id")).removeClass("invalid");
		});
		
/*END CONTACT FORM VALIDATION*/
/*FORM SUBMIT HANDLER*/
$("#contactFormSubmit").click(function(){
	$("#contactForm").submit();
});	