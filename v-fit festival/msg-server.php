<?php
	if (isset($_POST["send-msg"])) {
		$name = $_POST['name1'];
		$email = $_POST['email1'];
		$message = $_POST['message1'];
		$from = 'email1'; 
		$to = 'almosally.mhd@gmail.com'; 
		$subject = 'Message from email1 ';
		
		$body ="From: $name\n E-Mail: $email\n Message:\n $message";

		// Check if name has been entered
		if (!$_POST['name1']) {
			$errName = 'Please enter your name';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email1'] || !filter_var($_POST['email1'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
		
		//Check if message has been entered
		if (!$_POST['message1']) {
			$errMessage = 'Please enter your message';
		}
		//Check if simple anti-bot test is correct
	
		

// If there are no errors, send the email

	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
	}
}
    