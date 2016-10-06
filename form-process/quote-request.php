<?php require_once("../setts.php");
$messageBuffer = "<html><head><style>body{font-family: sans-serif;}</style></head><body>";
foreach($_POST as $field => $value){
	$messageBuffer .= "<b>" . ucwords(str_replace("_", " ", str_replace("quote_", "", $field))) . ": </b> ".strip_tags($value). "<br>";
}  
$messageBuffer = str_replace("Additional Information:", "Additional Information:<br />", $messageBuffer);
$messageBuffer .= "</body></html>";
//if(!(new lnmsend($data["%EMAIL%"], $_POST["quote_first_name"]. " " . $_POST["quote_last_name"], $_POST["quote_email_address"], "Contact from ".$_SERVER["SERVER_NAME"], $messageBuffer, $_SERVER["SERVER_ADMIN"], $_SERVER["SERVER_NAME"], time()))){
	if (!isset($headers[0]))
		$headers = "";
	$headers .= "From: " . $_SERVER["SERVER_ADMIN"] . "\r\n";
	$headers .= "Reply-To: " . strip_tags(htmlspecialchars_decode($_POST["quote_first_name"]. " " . $_POST["quote_last_name"])) . " <" . strip_tags($_POST["quote_email_address"]) . ">\r\n";
	$headers .= 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	mail( $data["%EMAIL%"], "Quote Request From " . strip_tags(htmlspecialchars_decode($data["%COMPANY%"])) . " Website", $messageBuffer, $headers);
//}
?>
