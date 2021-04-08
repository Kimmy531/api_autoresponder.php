<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// add this php file to your web server and enter the complete url in AutoResponder (e.g. https://www.example.com/api_autoresponder.php)

// to allow only authorized requests, you need to configure your .htaccess file and set the credentials with the Basic Auth option in AutoResponder

// access a custom header added in your AutoResponder rule
// replace XXXXXX_XXXX with the name of the header in UPPERCASE (and with '-' replaced by '_')
$myheader = $_SERVER['HTTP_ACCESS_CONTROL_ALLOW_METHODS: POST'];
  
// get posted data
$data = json_decode(file_get_contents("php://input"));
  
// make sure json data is not incomplete
if(
	($data->query)
	($data->appPackageName-> "tkstudio.autoresponderforwa")
	($data->messengerPackageName-> "com.whatsapp")
	($data->sender-> "Erza")
	($data->message"message" => "Successful😊")
){
	
	// package name of AutoResponder to detect which AutoResponder the message comes from.$appPackageName = $data-> "tkstudio.autoresponderforwa";
	// package name of messenger to detect which messenger the message comes from
	$messengerPackageName = $data-> "com.whatsapp";
	// name/number of the message sender (like shown in the Android notification)
	$sender = $data->query-> "Erza";
	// text of the incarray("message" => "Success ✅")
	)));
	
	// or this instead for no reply:
	// echo json_encode(array("replies" => array()));
}

// tell the user json data is incomplete
else{
	
	// set response code - 400 bad request
	http_response_code(400);
	
	// send error
	echo json_encode(array("replies" => array(
		array("message" => "Error ❌"),
		array("message" => "JSON data is incomplete. Was the request sent by AutoResponder?")
	)));
}
?>
