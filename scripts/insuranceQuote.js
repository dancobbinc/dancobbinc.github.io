$(function(){
	$("#quote_insurance_type").empty().append( '<option value="">Select One</option>' );
	$(".request-insurance-quote input, .request-insurance-quote select").on("change", function(){
		$(this).removeClass("error");
	});
	$(".button.success").on("click", function(event){
	var hasInvalid = false;
		//VAlIDATE FIRST NAME
		var nameValidation = /^[a-zA-Z\ \']+$/;
		if($("#quote_first_name").val() == "" || !nameValidation.test($("#quote_first_name").val())){
			$("#quote_first_name").addClass("error");
			hasInvalid = true;
		}
		//VAlIDATE LAST NAME
		var nameValidation = /^[a-zA-Z\ \']+$/;
		if($("#quote_last_name").val() == "" || !nameValidation.test($("#quote_last_name").val())){
			$("#quote_last_name").addClass("error");
			hasInvalid = true;
		}
		//VALIDATE PHONE NUMBER
		var phoneValidation = /^[01]?[- .]?(\([2-9]\d{2}\)|[2-9]\d{2})[- .]?\d{3}[- .]?\d{4}$/;
		if($("#quote_phone_number").val() == "" || !phoneValidation.test($("#quote_phone_number").val())){
			$("#quote_phone_number").addClass("error");
			hasInvalid = true;
		}
		//VALIDATE EMAIL ADDRESS
		var emailValidation = /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i;
		if($("#quote_email_address").val() == "" || !emailValidation.test($("#quote_email_address").val())){
			$("#quote_email_address").addClass("error");
			hasInvalid = true;
		}
		if(!hasInvalid){
			var request = $.ajax({
				type: "POST",
				data: $("#request-insurance-quote").serialize(), 
				url : "form-process/quote-request.php"
			})
			.done(function(data){
				$("#responseDivDone").slideDown(400).delay(2000).slideUp(400);
				document.getElementById("request-insurance-quote").reset();
			})
			.fail(function(msg){
				$("#responseDivFailed").slideDown(400).delay(2000).slideUp(400);
			});
		}
	});
	$("#quote_insurance_for").append(
		'<option value="">Select One</option>'+
		'<option value="Insurance For Business">Business</option>'+
		'<option value="Insurance For Employees">Employees</option>'+
		'<option value="Insurance For Individuals">Individuals</option>'
	).on("change", function(){
		if($(this).val() == "Insurance For Business"){
			$("#quote_insurance_type").empty().append(
				'<option value="">Select One</option>'+
				'<option value="Disabilty">Disabilty</option>'+
				'<option value="Life">Life</option>'+
				'<option value="Long Term Care">Long Term Care</option>'
			);
		}
		else if($(this).val() == "Insurance For Employees"){
			$("#quote_insurance_type").empty().append(
				'<option value="">Select One</option>'+
				'<option value="Disabilty">Disabilty</option>'+
				'<option value="Life">Life</option>'+
				'<option value="Long Term Care">Long Term Care</option>'
			);
		}
		else if($(this).val() == "Insurance For Individuals"){
			$("#quote_insurance_type").empty().append(
				'<option value="">Select One</option>'+
				'<option value="Disabilty">Disabilty</option>'+
				'<option value="Life">Life</option>'+
				'<option value="Long Term Care">Long Term Care</option>'
			);
		}
		else {
			$("#quote_insurance_type").empty().append( 
				'<option value="">Select One</option>' 
			);
		}
	});
});