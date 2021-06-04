<?php

// if the url field is empty
if(isset($_POST['url']) && $_POST['url'] == ''){

	// put your email address here
	$youremail = 'gus@kainos.cc';  

	// prepare message 
	$body = "You have got a new message from the contact form on your website - Kainos.cc :
	
	Name:  $_POST[name]
	Email:  $_POST[email]
	Phone:  $_POST[phone]
	Company:  $_POST[company]";

	if( $_POST['email'] && !preg_match( "/[\r\n]/", $_POST['email']) ) {
	  $headers = "From: $_POST[email]";
	} else {
	  $headers = "From: $youremail";
	}

	mail($youremail, 'Message from Waybinar', $body, $headers );

} ?>

<!DOCTYPE HTML>
<html>
<head>
<title>Thanks!</title>
</head>
<body>
<p> Thank you! We will get back to you soon.</p>
</body>
</html>