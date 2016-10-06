<?php require_once("../setts.php");
$messageBuffer = "<html><head><style>body{font-family: sans-serif;}</style></head><body>";
foreach($_POST as $field => $value){
	$messageBuffer .= "<b>" . str_replace("contact", "", $field) . ": </b> ".strip_tags($value). "<br>";
}  
$messageBuffer = str_replace("Message:", "Message:<br>", $messageBuffer);
$messageBuffer .= "</body></html>";
//if(!(new lnmsend($data["%EMAIL%"], $_POST["contactName"], $_POST["contactEmail"], "Contact from ".$_SERVER["SERVER_NAME"], $messageBuffer, $_SERVER["SERVER_ADMIN"], $_SERVER["SERVER_NAME"], time()))){
	if (!isset($headers[0]))
		$headers = "";
	$headers .= "From: " . $_SERVER["SERVER_ADMIN"] . "\r\n";
	$headers .= "Reply-To: " . strip_tags(htmlspecialchars_decode($_POST["contactName"])) . " <" . strip_tags($_POST["contactEmail"]) . ">\r\n";
	$headers .= 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	mail( $data["%EMAIL%"], "Contact From " . strip_tags(htmlspecialchars_decode($data["%COMPANY%"])) . " Website", $messageBuffer, $headers);
//}
?>
