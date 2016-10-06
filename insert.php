<?php
include "setts.php";
// Checks if the user wants to view the form or add a entry
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
$addtotop = "1"; // This determines the order to display it. Leave for newest comments on top or change to 0 for oldest to newest.

$validChar = "0123456789ABCDEFGHIJKLMNOPQRSTUVXWYXabcdefghijklmnopqrstuvxwyx";
$randomCode = "";

for($i = 1; $i <= 20; $i++){
	$randomCode .= $validChar[rand(0, strlen($validChar)-1)];
}

	// Make sure the script works if register_globals is off
	$testimonialName = $_POST['testimonialName'];
	$testimonialRating = $_POST['testimonialRating'];
	$testimonialComment = strip_tags($_POST['testimonialComment']);

	$timeStamp = date("F jS Y");
	$metaTimeStamp = date("Y-m-d");
	$postContent = '
				<?php 
				$websiteReview["'.$randomCode.'"][0] = false; 
				$websiteReview["'.$randomCode.'"][1] = '."\"
				<section class='clientTestimonial'>
					<div class='row clientInfo'>
						<div class='twelve columns'>
							<span class='clientTitle'>Posted By: </span>
							<span itemprop='author'>$testimonialName</span> - 
							<span class='reviewStars'>
								<img src='images/".$testimonialRating."Stars.png'>
							</span>
						</div>
					</div>
					<div class='row'>
						<div class='twelve columns'><span class='dateTitle'>Date: </span><span itemprop='datePublished'>$timeStamp</span>
						<meta itemprop='datePublished' content='$metaTimeStamp'>
						</div>
					</div>
					<div itemprop='reviewRating' itemscope itemtype='http://schema.org/Rating'>
						<meta itemprop='worstRating' content='0'>
						<meta itemprop='ratingValue' content='$testimonialRating'>
						<meta itemprop='bestRating' content='5'>
					</div>
					<div class='row'>
						<div class='twelve columns clientComment' itemprop='description'>".nl2br($testimonialComment)."</div>
					</div>
				</section>\";
				?>";

	if ($addtotop == "0" ) {
	
		// Writes the user's entry to a file
		$fp = fopen("savedTestimonials.php", "a");
		fputs($fp, $postContent);
		fclose($fp);
		
	}

	if ($addtotop == "1" ) {

		// Get all the current entries and put it in a string
		$att1 = "savedTestimonials.php";
		$att2 = fopen ($att1, "rb");
		$currententries = fread ($att2, filesize ($att1));
		fclose ($att2);

		// Writes the user's post to a file
		$fp = fopen("savedTestimonials.php", "w+");
		fputs($fp, $postContent . $currententries);
		fclose($fp);
	
	}
	$currentMessage = "A new testimonial has been added. Below is the information entered by your client:<br /><br />";
	$currentMessage .= "Client Name: $testimonialName<br />";
	$currentMessage .= "Client IP: ".$_SERVER["REMOTE_ADDR"]."<br /><br />";
	$currentMessage .= "Rating $testimonialRating of 5<br /><br />";
	$currentMessage .= "Comment: <br />$testimonialComment<br /><br />";
	$currentMessage .= "To accept this review and add to your website, please click on the link below:<br />";
	$currentMessage .= "<a href=\"http://".$_SERVER['HTTP_HOST'].str_replace("insert.php", "validateTestimonial.php", $_SERVER["REQUEST_URI"])."?reviewID=$randomCode\">Activate Testimonial</a>";
	
	// To send HTML mail, the Content-type header must be set
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
		// Additional headers
		$headers .= 'From: '. $data["%EMAIL%"] ."\r\n";
		
	mail($data["%EMAIL%"], $data["%COMPANY%"]. " client review", $currentMessage, $headers);
}
?>
