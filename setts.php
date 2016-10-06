<?php session_start();
/*Return proper dialerID*/
	$dialerIDDefault = 92660145;
	$googletracker 	= "";
	$bingtracker	= "";
	$dialerID = ((isset($_GET["id"]))?$_GET["id"]:$dialerIDDefault);
/*====================FUNCTIONS========================*/
if(!function_exists("connect")){
	include_once 'includes/functions.php';
}
//Connect and query database
//connect($globalDBHostname, $globalDBName, $globalDBUsername, $globalDBPassword) or die("Cannot Connect");
//$queryresult = mysql_query("SELECT * FROM $globalTableName WHERE Contact0_DialerID = '".$dialerID."'") or die("Error");
//if(mysql_num_rows($queryresult) == 0){
//	$queryresult = mysql_query("SELECT * FROM $globalTableName WHERE Contact0_DialerID = '".$dialerIDDefault."'") or die("Error");
//	print_r($queryresult);
//}
$random = 0;
$queryresult = array();
/*Returns workcity if set or city if no workcity - Expects array*/
if(!function_exists("getWorkcity")){
	function getWorkcity($tempInfoArray){
	$workcity = 0;
	$random = 0;
		//Check marketcity1
		if(!is_null($tempInfoArray["%MARKETCITY1%"])){
			$workcity++;
		}
		//Check marketcity2
		if(!is_null($tempInfoArray["%MARKETCITY2%"])){
			$workcity++;
		}
		//Check marketcity3
		if(!is_null($tempInfoArray["%MARKETCITY3%"])){
			$workcity++;
		}
		//If we have at least 1 workcity
		if($workcity > 0){
			$random = rand(1, $workcity);
			return $tempInfoArray["%MARKETCITY".$random."%"];
		}
		//If no workcities, return city
		else{
			return $tempInfoArray["%CITY%"];
		}
	}
}
/*Returns townorder if no towns, returns city - Expects array*/
if(!function_exists("getTownOrder")){
	function getTownOrder($tempInfoArray){
	$workcities = array();
	$random = 0;
		//Check marketcity1
		if(!is_null($tempInfoArray["%MARKETCITY1%"])){
			array_push($workcities, $tempInfoArray["%MARKETCITY1%"]);
		}
		//Check marketcity2
		if(!is_null($tempInfoArray["%MARKETCITY2%"])){
			array_push($workcities, $tempInfoArray["%MARKETCITY2%"]);
		}
		//Check marketcity3
		if(!is_null($tempInfoArray["%MARKETCITY3%"])){
			array_push($workcities, $tempInfoArray["%MARKETCITY3%"]);
		}
		//If we have 1 workcity
		if(count($workcities) == 1){
			return $workcities[0];
		}
		//If we have 2 workcity
		if(count($workcities) == 2){
			return $workcities[0] . ' and ' . $workcities[1];
		}
		//If we have 3 workcity
		if(count($workcities) == 3){
			return $workcities[0] . ', '. $workcities[1] . ' and ' . $workcities[2];
		}
		//If no workcities, return city
		else{
			return $tempInfoArray["%CITY%"];
		}
	}
}
/*Returns list of services - Expects array*/
if(!function_exists("getServices")){
	function getServices($tempInfoArray){
	$serviceOrder = "";
		//Check first market city
		if(!is_null($tempInfoArray["%MARKETINGSPECIALTY1%"])){
			//Add first market city
			$serviceOrder .= $tempInfoArray["%MARKETINGSPECIALTY1%"];
		}
		//Check second market city
		if(!is_null($tempInfoArray["%MARKETINGSPECIALTY2%"])){
			//Check third market city and enter , to continue array
			if(!is_null($tempInfoArray["%MARKETINGSPECIALTY3%"])){
				$serviceOrder .= ", ";
			}
			//Check third market city and enter and to finish array
			else{
				$serviceOrder .= " and ";
			}
			//Add second Market city
			$serviceOrder .= $tempInfoArray["%MARKETINGSPECIALTY2%"];
		}	
		//Check third market city
		if(!is_null($tempInfoArray["%MARKETINGSPECIALTY3%"])){
			//Add third market city
			$serviceOrder .= " and " . $tempInfoArray["%MARKETINGSPECIALTY3%"];
		}
		//Return list of cities
		if(strlen($serviceOrder) == 0){
			//Default services in case of no services
			return "business insurance, employee benefits and personalized insurance";
		}
		return $serviceOrder; 	
	}
}
/*Returns the page name*/
if(!function_exists("getPage")){
    function getPage(){
        if(isset($_GET["_escaped_fragment_"])){
        return $_GET["_escaped_fragment_"];
        }
        else{
            $address = explode("/",str_replace( ".php", "", $_SERVER["PHP_SELF"])); 
        return (strlen($address[count($address)-1]) == 0) ? "home" : $address[count($address)-1];
        }
    }
}
/*Clean text information from website*/
if(!function_exists("clean")){
	function clean($text = null, $echo = true){
		global $data;
		
		if($echo == true){
			echo @str_replace(array_keys($data), $data, $text); 
		}
		else{
			return @str_replace(array_keys($data), $data, $text); 
		}
	}
}
/*Get domain name formatted*/
if(!function_exists("getDomain")){
	function getDomain(){
		return "http://".$_SERVER['HTTP_HOST'];
	}
}
/*===============END FUNCTIONS==============*/
//Add NON-Database values
$data = array(
	"%SHOWPAYMENT%" 	=> true,
	
	"%VISA%" 			=> array(false, "Visa", "visa.png"),
	"%MASTERCARD%" 		=> array(false, "Mastercard", "mastercard.png"),
	"%AMEX%"			=> array(false, "American Express", "amex.png"),
	"%DISCOVER%"		=> array(false, "Discover", "discover.png"),
	"%PAYPAL%"			=> array(false, "Paypal", "paypal.png"),
	"%CASH%"			=> array(false, "Cash", "cash.png"),
	"%DEBIT%"			=> array(false, "Debit", "debit.png"),
	"%CHECK%"			=> array(false, "Check", "check.png"),
	
	"%TWITTER%"			=> null,
	"%FACEBOOK%"		=> null,
	"%YELP%"			=> null,
	"%GOOGLEPLUS%"		=> "https://plus.google.com/u/0/117169194415275649869/about",
	"%YOUTUBE%"			=> null,
	
	"%WEEKHOURS%" 		=> "9:00AM - 5:00PM",
	"%WEEKENDHOURS%"	=> "Closed", 
	
	"%PURCHASEDVIDEO%" 	=> false,
	
	"%TITLE%" 			=> "&nbsp;",
	"%DESCRIPTION%" 	=> "&nbsp;",
	"%CITY%" => "Bellevue",
	"%CITY2%" => "Albuquerque",
	"%COMPANY%" => "Dan Cobb & Associates",
	"%DESCRIPTION%" => "DESCRIPTION",
	"%EMAIL%" => "dan@dancobbinc.com",
	"%FAX1%" => "425-284-5032",
	"%FAX2%" => "505-294-1222",
	"%LINKNOWMEDIA%" => null,
	"%MARKETCITY".$random."%" => "MARKETCITY",
	"%MARKETCITY1%" => "MARKETCITY1",
	"%MARKETCITY2%" => "MARKETCITY2",
	"%MARKETCITY3%" => "MARKETCITY3",
	"%MARKETINGSPECIALTY1%" => "MARKETINGSPECIALTY1",
	"%MARKETINGSPECIALTY2%" => "MARKETINGSPECIALTY2",
	"%MARKETINGSPECIALTY3%" => "MARKETINGSPECIALTY3",
	"%PHONE1%" => "425-284-2999",
	"%PHONE2%" => "888-452-6647",
	"%PHONE3%" => "425-503-0645",
	"%PHONE4%" => "505-294-5700",
	"%PHONE5%" => "800-880-4404",
	"%PHONE6%" => "505-262-6130",
	"%POSTALCODE%" => "98004",
	"%POSTALCODE2%" => "87125-7087",
	"%SERVICEORDER%" => "SERVICEORDER",
	"%STATE%" => "WA",
	"%STATE2%" => "NM",
	"%TOWNORDER%" => "TOWNORDER",
	"%WEBMASTER%" => "vseavello@gmail.com",
	"%WORKCITY%" => "WORKCITY",
	"%STREETADDRESS1%" => "11000 NE 33rd Place, Suite 301",
	"%STREETADDRESS2%" => null,
	"%STREETADDRESS3%" => "Post Office Box 27087",
	"%STREETADDRESS4%" => null
);
//Add Database Values
/*
foreach($results = mysql_fetch_assoc($queryresult) as $columnName => $columnValue){
	//Clean values for phone and fax numbers
	if($columnName == "Contact0Phone1" || $columnName == "Contact0Phone2" || $columnName == "Contact0Phone3" || $columnName == "Contact0Fax1"){
		$columnValue = (strlen($columnValue) > 0) ? substr($columnValue, 0, 3) . "." . substr($columnValue, 3, 3) . "." . substr($columnValue, 6) : null;
	}
	//Enter values into arrays
	$data["%".strtoupper(str_replace("Contact0", "", str_replace("_", "", $columnName)))."%"] = ((strlen($columnValue) == 0)? null : html_entity_decode($columnValue, ENT_QUOTES, 'UTF-8'));
}
*/
//Capitalize State
$data["%STATE%"] = strtoupper($data["%STATE%"]);
//Add Database Depending NON-Database values
	$data["%WORKCITY%"] = getWorkcity($data);
	$data["%TOWNORDER%"] = getTownOrder($data);
	$data["%SERVICEORDER%"] = getServices($data);
// Get LinkNow Media Info
//$getLNM =  mysql_query("SELECT * FROM $globalTableName WHERE Contact0_DialerID = '24228299'");
//$LNMINFO = mysql_fetch_array($getLNM);
$LNMINFO = array("Contact0Company" => "Contact0Company");
$data["%LINKNOWMEDIA%"] = $LNMINFO["Contact0Company"];
if(getPage() == "home" || getPage() == ""){
	$data["%TITLE%"] = clean("%WORKCITY% Insurance Broker in %TOWNORDER%", false);
	$data["%DESCRIPTION%"] = clean("Call %COMPANY% at %PHONE1%. %WORKCITY% Insurance Broker", false);
}
else if(getPage() == "about-us"){
    $data["%TITLE%"] = clean("About %COMPANY%: %TOWNORDER% Insurance Broker", false);
    $data["%DESCRIPTION%"] = clean("Call %COMPANY% at %PHONE1%. %WORKCITY% Insurance", false);
}
else if(getPage() == "testimonials"){
    $data["%TITLE%"] = clean("%COMPANY% Testimonials", false);
    $data["%DESCRIPTION%"] = clean("Call %COMPANY% at %PHONE1%. %WORKCITY% Insurance", false);
}
else if(getPage() == "request-insurance-quote"){
    $data["%TITLE%"] = clean("%COMPANY%: %TOWNORDER% Insurance Quote", false);
    $data["%DESCRIPTION%"] = clean("Call %COMPANY% at %PHONE1%. %WORKCITY% Insurance", false);
}
else if(getPage() == "business-owner-policy"){
    $data["%TITLE%"] = clean("%COMPANY%: %TOWNORDER% Business Owner Policy", false);
    $data["%DESCRIPTION%"] = clean("Call %COMPANY% at %PHONE1%. %WORKCITY% Business Owner Policy", false);
}
else if(getPage() == "commercial-auto-insurance"){
    $data["%TITLE%"] = clean("%COMPANY%: %TOWNORDER% Commercial Auto Insurance", false);
    $data["%DESCRIPTION%"] = clean("Call %COMPANY% at %PHONE1%. %WORKCITY% Commercial Auto Insurance", false);
}
else if(getPage() == "commercial-property-insurance"){
    $data["%TITLE%"] = clean("%COMPANY%: %TOWNORDER% Commercial Property Insurance", false);
    $data["%DESCRIPTION%"] = clean("Call %COMPANY% at %PHONE1%. %WORKCITY% Commercial Property Insurance", false);
}
else if(getPage() == "commercial-umbrella-insurance"){
    $data["%TITLE%"] = clean("%COMPANY%: %TOWNORDER% Commercial Umbrella Insurance", false);
    $data["%DESCRIPTION%"] = clean("Call %COMPANY% at %PHONE1%. %WORKCITY% Commercial Umbrella Insurance", false);
}
else if(getPage() == "general-liability-insurance"){
    $data["%TITLE%"] = clean("%COMPANY%: %TOWNORDER% General Liability Insurance", false);
    $data["%DESCRIPTION%"] = clean("Call %COMPANY% at %PHONE1%. %WORKCITY% General Liability Insurance", false);
}
else if(getPage() == "professional-liability-insurance"){
    $data["%TITLE%"] = clean("%COMPANY%: %TOWNORDER% Professional Liability Insurance", false);
    $data["%DESCRIPTION%"] = clean("Call %COMPANY% at %PHONE1%. %WORKCITY% Professional Liability Insurance", false);
}
else if(getPage() == "workers-compensation"){
    $data["%TITLE%"] = clean("%COMPANY%: %TOWNORDER% Workers Compensation", false);
    $data["%DESCRIPTION%"] = clean("Call %COMPANY% at %PHONE1%. %WORKCITY% Workers Compensation", false);
}
else if(getPage() == "group-health-insurance"){
    $data["%TITLE%"] = clean("%COMPANY%: %TOWNORDER% Group Health Insurance", false);
    $data["%DESCRIPTION%"] = clean("Call %COMPANY% at %PHONE1%. %WORKCITY% Group Health Insurance", false);
}
else if(getPage() == "dental-vision-insurance"){
    $data["%TITLE%"] = clean("%COMPANY%: %TOWNORDER% Dental and Vision Insurance", false);
    $data["%DESCRIPTION%"] = clean("Call %COMPANY% at %PHONE1%. %WORKCITY% Dental and Vision Insurance", false);
}
else if(getPage() == "life-add-insurance"){
    $data["%TITLE%"] = clean("%COMPANY%: %TOWNORDER% Life and Ad&D Insurance", false);
    $data["%DESCRIPTION%"] = clean("Call %COMPANY% at %PHONE1%. %WORKCITY% Life and Ad&D Insurance", false);
}
else if(getPage() == "disability-insurance"){
    $data["%TITLE%"] = clean("%COMPANY%: %TOWNORDER% Disability Insurance", false);
    $data["%DESCRIPTION%"] = clean("Call %COMPANY% at %PHONE1%. %WORKCITY% Disability Insurance", false);
}
else if(getPage() == "long-term-care"){
    $data["%TITLE%"] = clean("%COMPANY%: %TOWNORDER% Long Term Care Insurance", false);
    $data["%DESCRIPTION%"] = clean("Call %COMPANY% at %PHONE1%. %WORKCITY% Long Term Care Insurance", false);
}
else if(getPage() == "retirement-plans-insurance"){
    $data["%TITLE%"] = clean("%COMPANY%: %TOWNORDER% Retirement Plans Insurance", false);
    $data["%DESCRIPTION%"] = clean("Call %COMPANY% at %PHONE1%. %WORKCITY% Retirement Plans Insurance", false);
}
else if(getPage() == "life-health-insurance"){
    $data["%TITLE%"] = clean("%COMPANY%: %TOWNORDER% Life and Health Insurance", false);
    $data["%DESCRIPTION%"] = clean("Call %COMPANY% at %PHONE1%. %WORKCITY% Life and Health Insurance", false);
}
else if(getPage() == "car-insurance"){
    $data["%TITLE%"] = clean("%COMPANY%: %TOWNORDER% Car Insurance", false);
    $data["%DESCRIPTION%"] = clean("Call %COMPANY% at %PHONE1%. %WORKCITY% Car Insurance", false);
}
else if(getPage() == "mobile-home-insurance"){
    $data["%TITLE%"] = clean("%COMPANY%: %TOWNORDER% Mobile Home Insurance", false);
    $data["%DESCRIPTION%"] = clean("Call %COMPANY% at %PHONE1%. %WORKCITY% Mobile Home Insurance", false);
}
else if(getPage() == "homeowners-insurance"){
    $data["%TITLE%"] = clean("%COMPANY%: %TOWNORDER% Homeowners Insurance", false);
    $data["%DESCRIPTION%"] = clean("Call %COMPANY% at %PHONE1%. %WORKCITY% Homeowners Insurance", false);
}
else if(getPage() == "life-insurance"){
    $data["%TITLE%"] = clean("%COMPANY%: %TOWNORDER% Life Insurance", false);
    $data["%DESCRIPTION%"] = clean("Call %COMPANY% at %PHONE1%. %WORKCITY% Life Insurance", false);
}
else if(getPage() == "individual-health-insurance"){
    $data["%TITLE%"] = clean("%COMPANY%: %TOWNORDER% Individual Health Insurance", false);
    $data["%DESCRIPTION%"] = clean("Call %COMPANY% at %PHONE1%. %WORKCITY% Individual Health Insurance", false);
}
else if(getPage() == "renter-condo-insurance"){
    $data["%TITLE%"] = clean("%COMPANY%: %TOWNORDER% Renter / Condo Insurance", false);
    $data["%DESCRIPTION%"] = clean("Call %COMPANY% at %PHONE1%. %WORKCITY% Renter and Condo Insurance", false);
}
else if(getPage() == "boat-motorcycle-insurance"){
    $data["%TITLE%"] = clean("%COMPANY%: %TOWNORDER% Boat / Motorcycle Insurance", false);
    $data["%DESCRIPTION%"] = clean("Call %COMPANY% at %PHONE1%. %WORKCITY% Boat / Motorcycle Insurance", false);
}
else if(getPage() == "umbrella-insurance"){
    $data["%TITLE%"] = clean("%COMPANY%: %TOWNORDER% Umbrella Insurance", false);
    $data["%DESCRIPTION%"] = clean("Call %COMPANY% at %PHONE1%. %WORKCITY% Umbrella Insurance", false);
}
else if(getPage() == "contact-us"){
    $data["%TITLE%"] = clean("Contact %COMPANY%: %TOWNORDER% %SERVICEORDER%", false);
    $data["%DESCRIPTION%"] = clean("Call %COMPANY% at %PHONE1%. %WORKCITY% %SERVICEORDER%", false);
}
else if(getPage() == "disability-insurance"){
    $data["%TITLE%"] = clean("%COMPANY% Disability Insurance", false);
    $data["%DESCRIPTION%"] = clean("Call %COMPANY% at %PHONE1%. %WORKCITY% Disability Insurance", false);
}
else if(getPage() == "disability-insurance-business"){
    $data["%TITLE%"] = clean("%COMPANY% Disability Insurance", false);
    $data["%DESCRIPTION%"] = clean("Call %COMPANY% at %PHONE1%. %WORKCITY% Disability Insurance", false);
}
else if(getPage() == "life-insurance"){
    $data["%TITLE%"] = clean("%COMPANY% Life Insurance", false);
    $data["%DESCRIPTION%"] = clean("Call %COMPANY% at %PHONE1%. %WORKCITY% Life Insurance", false);
}
else if(getPage() == "life-insurance-business"){
    $data["%TITLE%"] = clean("%COMPANY% Life Insurance", false);
    $data["%DESCRIPTION%"] = clean("Call %COMPANY% at %PHONE1%. %WORKCITY% Life Insurance", false);
}
else if(getPage() == "long-term-care"){
    $data["%TITLE%"] = clean("%COMPANY% Testimonials", false);
    $data["%DESCRIPTION%"] = clean("Call %COMPANY% at %PHONE1%. %WORKCITY% Long Term Care", false);
}
else if(getPage() == "long-term-care-business"){
    $data["%TITLE%"] = clean("%COMPANY% Long Term Care", false);
    $data["%DESCRIPTION%"] = clean("Call %COMPANY% at %PHONE1%. %WORKCITY% Long Term Care", false);
}
?>
