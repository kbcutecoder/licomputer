<?php

	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	$email_from = "rhondamckim@icloud.com";
	$email_subject = $subject;
	$email_body = "From: $name.\n"."Email: $email.\n"."Message: $message.\n";

	$to = "pankajcomputers@icloud.com"; //please update this email id with your email id.
	$headers = "From: $email \r\n";
	$headers .= "Reply-To: $email \r\n";


	mail($to,$email_subject,$email_body,$headers);

    echo "Thanks for writing Us, We will contact you soon !!!"
	// header("Location: thankyou.html");

?>
