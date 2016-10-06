<?php
	if(isset($_GET["reviewID"])){
		$defaultFile = "savedTestimonials.php";
		$content = file_get_contents($defaultFile);
		if(strstr($content, '$websiteReview["'.$_GET["reviewID"].'"][0] = false')){
			$content = str_replace('$websiteReview["'.$_GET["reviewID"].'"][0] = false', '$websiteReview["'.$_GET["reviewID"].'"][0] = true', $content);
				
				$openFile = fopen($defaultFile, 'w+');
				$writeToFile = fwrite($openFile, $content);
				
				fclose($openFile);
				
			echo "The testimonial is now active. Forwarding to testimonials page!";
			?>
				<script>
				setTimeout('window.location.href="index.php#!testimonials"', 5000) /* 5 seconds */
				</script>
			<?php
		}
		else{
			echo "Invalid Key! The key entered has either already been used or is invalid.<br>Forwading to testimonials page!";
			?>
				<script>
				setTimeout('window.location.href="index.php#!testimonials"', 5000) /* 5 seconds */
				</script>
			<?php
		}
	}
	else{
		header("Location: index.php#!home");
	}
?>