<?php
	require("savedTestimonials.php");

	$reviewCount = 0;
	if(isset($websiteReview)){
	foreach($websiteReview as $currentReview){
		if($currentReview[0]){
			echo $currentReview[1];
			$reviewCount++;
		}
	}
	}
?>