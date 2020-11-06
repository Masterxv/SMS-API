<?php

require_once 'vendor/autoload.php';
use Twilio\Rest\Client;


if(isset($_POST['mobile']) && isset($_POST['msg'])) {

	$sid    = "";
	$token  = "";
	$twilio = new Client($sid, $token);

	$mobilenum = $_POST['mobile'];
	$msg = $_POST['msg'];

	$message = $twilio->messages->create($mobilenum, ["body" => $msg, "from" => "+18594659815"]);

	if($message->sid){
		echo "Message Sent";
	}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twilio Messaging</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css" integrity="sha512-EZLkOqwILORob+p0BXZc+Vm3RgJBOe1Iq/0fiI7r/wJgzOFZMlsqTa29UEl6v6U6gsV4uIpsNZoV32YZqrCRCQ==" crossorigin="anonymous" />
    <style>
    	.container {
    		width: 100%;
    		margin: 40px auto;
    		color: darkblue;
    	}
    	form, h2 {
    		width: 50%;
    		padding: 20px;
    		margin: 0 auto;
    	}
    	input, textarea {
    		width: 80%;
    	}
    </style>
</head>

<body>
	<div class="container">
		<h2>SMS with Twilio API</h2>

		<form action="" method="post">
			<b>Enter Mobile:<br>
			<input type="text" placeholder="Enter mobile number" name="mobile"><br>
			<b>Enter Message:<br>
			<textarea type="text" placeholder="Type your message" name="msg"></textarea><br>
			<input type="submit" value="send">
		</form>
	</div>
</body>
</html>