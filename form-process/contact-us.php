<?php 
	require "../setts.php";
	$messageBuffer = "<html><head>
	<style>
	body {
		font-family: sans-serif;
	}
	</style>
	</head>
	<body> 
	";
	foreach($_POST as $field => $value){
		$messageBuffer .= "<b>" . str_replace("contact", "", $field) . ": </b> ".strip_tags($value). "<br>";
	}  
	$messageBuffer = str_replace("Message:", "Message:<br>", $messageBuffer);
	$messageBuffer .= "</body>
	</html>";
	// To send HTML mail, the Content-type header must be set
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

	// Additional headers
	$headers .= "From: " . strip_tags(htmlspecialchars_decode($_POST["contactName"])) . " <" . strip_tags($_POST["contactEmail"]) . ">\r\n";
	mail( $data["%EMAIL%"], "Contact Request From " . strip_tags(htmlspecialchars_decode($data["%COMPANY%"])) . " Website", $messageBuffer, $headers);
	
	// To send HTML mail, the Content-type header must be set
	$headers2  = 'MIME-Version: 1.0' . "\r\n";
	$headers2 .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	
	// Additional headers
	$headers2 .= 'From: '. $data["%EMAIL%"] ."\r\n";
	mail($data["%WEBMASTER%"], getDomain(), $messageBuffer, $headers2);
?>
