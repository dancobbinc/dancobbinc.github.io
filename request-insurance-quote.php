<?php require "setts.php"; ?>
<script type="text/javascript">
	$(function(){
		$(this).attr("title", "<?php echo $data["%TITLE%"];?>");
		$("meta[name='description']").attr("content", "<?php echo $data["%DESCRIPTION%"];?>");	
	});
</script>
<script type="text/javascript" src="scripts/insuranceQuote.js"></script>

<div class="row pageContentInner">
		<section class="twelve columns">
			<h1 class="mainHeader">Request a Quote</h1>
			<div id="responseDivFailed">
				<span>Submission Failed: Please contact us by phone at <?php clean($data["%PHONE1%"]);?></span>
			</div> 
			<div id="responseDivDone">
				<span>We have received your information and will be in touch shortly. Thank you for your request!</span>
			</div> 
		</section>
		<form id="request-insurance-quote" class="request-insurance-quote">
			<div class="twelve columns request-separator">
				<span>Personal Information</span>
			</div> 
			<div class="six columns">
				<label for="quote_first_name">First Name <small>Required</small></label>
				<input name="quote_first_name" id="quote_first_name" type="text" placeholder="First Name">
			</div>
			<div class="six columns">
				<label for="quote_last_name">Last Name <small>Required</small></label>
				<input name="quote_last_name" id="quote_last_name" type="text" placeholder="Last Name">
			</div>
			<div class="six columns">
				<label for="quote_phone_number">Phone Number <small>Required</small></label>
				<input name="quote_phone_number" id="quote_phone_number" type="text" placeholder="Phone Number">
			</div>
			<div class="six columns">
				<label for="quote_email_address">Email Address <small>Required</small></label>
				<input name="quote_email_address" id="quote_email_address" type="text" placeholder="Email Address">
			</div>
			<div class="six columns">
				<label for="quote_street_address">Address</label>
				<input name="quote_street_address" id="quote_street_address" type="text" placeholder="Address">
			</div>
			<div class="six columns">
				<label for="quote_city">City/Town</label>
				<input name="quote_city" id="quote_city" type="text" placeholder="City/Town">
			</div>
			<div class="six columns">
				<label for="quote_state">State/Province</label>
				<select name="quote_state" id="quote_state">
					<option value="">State/Province</option>
					<option disabled> - United States - </option>
					<option value="AL">Alabama</option>
					<option value="AK">Alaska</option>
					<option value="AZ">Arizona</option>
					<option value="AR">Arkansas</option>
					<option value="CA">California</option>
					<option value="CO">Colorado</option>
					<option value="CT">Connecticut</option>
					<option value="DE">Delaware</option>
					<option value="DC">District Of Columbia</option>
					<option value="FL">Florida</option>
					<option value="GA">Georgia</option>
					<option value="HI">Hawaii</option>
					<option value="ID">Idaho</option>
					<option value="IL">Illinois</option>
					<option value="IN">Indiana</option>
					<option value="IA">Iowa</option>
					<option value="KS">Kansas</option>
					<option value="KY">Kentucky</option>
					<option value="LA">Louisiana</option>
					<option value="ME">Maine</option>
					<option value="MD">Maryland</option>
					<option value="MA">Massachusetts</option>
					<option value="MI">Michigan</option>
					<option value="MN">Minnesota</option>
					<option value="MS">Mississippi</option>
					<option value="MO">Missouri</option>
					<option value="MT">Montana</option>
					<option value="NE">Nebraska</option>
					<option value="NV">Nevada</option>
					<option value="NH">New Hampshire</option>
					<option value="NJ">New Jersey</option>
					<option value="NM">New Mexico</option>
					<option value="NY">New York</option>
					<option value="NC">North Carolina</option>
					<option value="ND">North Dakota</option>
					<option value="OH">Ohio</option>
					<option value="OK">Oklahoma</option>
					<option value="OR">Oregon</option>
					<option value="PA">Pennsylvania</option>
					<option value="RI">Rhode Island</option>
					<option value="SC">South Carolina</option>
					<option value="SD">South Dakota</option>
					<option value="TN">Tennessee</option>
					<option value="TX">Texas</option>
					<option value="UT">Utah</option>
					<option value="VT">Vermont</option>
					<option value="VA">Virginia</option>
					<option value="WA">Washington</option>
					<option value="WV">West Virginia</option>
					<option value="WI">Wisconsin</option>
					<option value="WY">Wyoming</option>
					<option disabled> - Canada - </option>
					<option value="AB">Alberta</option>
					<option value="BC">British Columbia</option>
					<option value="MB">Manitoba</option>
					<option value="NB">New Brunswick</option>
					<option value="NL">Newfoundland and Labrador</option>
					<option value="NS">Nova Scotia</option>
					<option value="NT">Northwest Territories</option>
					<option value="NU">Nunavut</option>
					<option value="ON">Ontario</option>
					<option value="PE">Prince Edward Island</option>
					<option value="QC">Quebec</option>
					<option value="SK">Saskatchewan</option>
					<option value="YT">Yukon</option>
				</select>
			</div>
			<div class="six columns">
				<label for="quote_postal_code">ZIP/Postal Code</label>
				<input name="quote_postal_code" id="quote_postal_code" type="text" placeholder="ZIP/Postal Code">
			</div>
			<div class="twelve columns request-separator">
				<span>Insurance Information</span>
			</div> 
			<div class="six columns">
				<label for="insurance_type">Insurance For</label>
				<select name="quote_insurance_for" id="quote_insurance_for"></select>
			</div>
			<div class="six columns">
				<label for="insurance_type">Insurance Type</label>
				<select name="quote_insurance_type" id="quote_insurance_type"></select>
			</div>
			<div class="twelve columns">
				<label for="quote_additional_information">Additional Information</label>
				<textarea name="quote_additional_information" id="quote_additional_information" placeholder="Additional Information"></textarea>
			</div>
			<div class="twelve columns">
				<span class="button success">Request Quote</span>
			</div>
		</form>
</div>