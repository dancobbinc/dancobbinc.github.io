<?php require "setts.php"; ?>
<script type="text/javascript">$(document).ready(function(){    $(this).attr("title", "<?php echo $data["%TITLE%"];?>");    $("meta[name='description']").attr("content", "<?php echo $data["%DESCRIPTION%"];?>");});  </script>
	<script src="scripts/pageContact.js" type="text/javascript"></script>
	<div class="row pageContentInner contactPage">
		<section class="twelve columns">
			<h1 class="mainHeader"><?php echo strtoupper(clean("%COMPANY%", 0));?></h1><br />
		</section>
		<section class="four columns contactInformation"><br />
		<p><b><u>Northwest Region </u></b><br></p>
			<p id="contactMapAddress" itemscope itemtype="http://schema.org/PostalAddress"> 
			<?php 
				if(!is_null($data["%STREETADDRESS1%"]))
					clean("<span itemprop='streetAddress'>%STREETADDRESS1%<br></span>");
				if(!is_null($data["%STREETADDRESS2%"]))
					clean("<span itemprop='streetAddress'>%STREETADDRESS2%<br></span>");
				if(!is_null($data["%CITY%"]))
					clean("<span itemprop='addressLocality'>%CITY%</span>, ");
				if(!is_null($data["%STATE%"]))
					clean("<span itemprop='addressRegion'>%STATE%</span> ");
				if(!is_null($data["%POSTALCODE%"]))
					clean("<span itemprop='postalCode'>%POSTALCODE%</span><br>");

				if(!is_null($data["%PHONE1%"]))
					clean("<span itemprop='telephone'><B>Phone:</B> %PHONE1%</span><br>");
				if(!is_null($data["%PHONE2%"])) 
					clean("<span itemprop='telephone'><B>Toll Free:</B> %PHONE2%</span><br>");
				if(!is_null($data["%PHONE3%"]))
					clean("<span itemprop='telephone'><B>Mobile:</B> %PHONE3%</span><br>");
				if(!is_null($data["%FAX1%"]))
					clean("<span itemprop='faxNumber'><B>Fax:</B> %FAX1%</span>");
			?>
			</p>
			<p>
				<?php
					if(!is_null($data["%EMAIL%"]))
						clean("<span itemprop='email'><B>Email:</B> %EMAIL%</span><br>");
					if(!is_null($data["%WEEKHOURS%"]))
						clean("<span itemprop='openingHours'><B>Hours of Operation:</B> %WEEKHOURS%</span>");
				?>
			</p>
			<p class="creditCards">
				<?php 
					if("%SHOWPAYMENT%"){
					$paymentCount = 8;
					$trueCount = 0;
					$titles = array_keys($data);
						for($i = 1; $i <= $paymentCount; $i++){
							if($data[$titles[$i]][0]){
								echo "<meta itemprop='paymentAccepted' content='".$data[$titles[$i]][1]."'><img alt='".$data[$titles[$i]][1]."' title='".$data[$titles[$i]][1]."' src='images/".$data[$titles[$i]][2]."'>
"; 
							}
						$trueCount++;
						}
					}
				?>
			</p>
		</section>
		<section class="four columns"><br />
		<p><b><u>Southwest Region </u></b><br></p>
			<p>
			<?php 
				if(!is_null($data["%STREETADDRESS3%"]))
					clean("<span itemprop='streetAddress'>%STREETADDRESS3%<br></span>");
				if(!is_null($data["%STREETADDRESS4%"]))
					clean("<span itemprop='streetAddress'>%STREETADDRESS4%<br></span>");
				if(!is_null($data["%CITY2%"]))
					clean("<span itemprop='addressLocality'>%CITY2%</span>, ");
				if(!is_null($data["%STATE2%"]))
					clean("<span itemprop='addressRegion'>%STATE2%</span> ");
				if(!is_null($data["%POSTALCODE2%"]))
					clean("<span itemprop='postalCode'>%POSTALCODE2%</span><br>");

				if(!is_null($data["%PHONE4%"]))
					clean("<span itemprop='telephone'><B>Phone:</B> %PHONE4%</span><br>");
				if(!is_null($data["%PHONE5%"]))
					clean("<span itemprop='telephone'><B>Toll Free:</B> %PHONE5%</span><br>");
				if(!is_null($data["%PHONE6%"]))
					clean("<span itemprop='telephone'><B>Mobile:</B> %PHONE6%</span><br>");
				if(!is_null($data["%FAX2%"]))
					clean("<span itemprop='faxNumber'><B>Fax:</B> %FAX2%</span>");
			?>
			</p>
			<p>
					</section>
		<section class="four columns"><br />
		<form id="contactForm" onSubmit="return false;">
 <div id="responseDivDone">Your message has been sent!</div>
 <div id="responseDivFailed">Your message could not be sent!</div>
 <input type="text" value="Name" id="contactName" name="contactName" onfocus="if(this.value==this.defaultValue)this.value=''" onblur="if(this.value=='')this.value=this.defaultValue">
<input type="tel" value="Phone" id="contactPhone" name="contactPhone" onfocus="if(this.value==this.defaultValue)this.value=''" onblur="if(this.value=='')this.value=this.defaultValue"> <input type="text" value="Best Time To Call" id="contactTime" name="contactTime" onfocus="if(this.value==this.defaultValue)this.value=''" onblur="if(this.value=='')this.value=this.defaultValue">
 <input type="email" value="Email" id="contactEmail" name="contactEmail" onfocus="if(this.value==this.defaultValue)this.value=''" onblur="if(this.value=='')this.value=this.defaultValue">
 <textarea id="contactMessage" name="contactMessage" onfocus="if(this.value==this.defaultValue)this.value=''" onblur="if(this.value=='')this.value=this.defaultValue">Message</textarea>
 <p id="contactFormSubmit">Submit Form</p>
</form>

		</section>
		
</div>
