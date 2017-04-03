<?php
	//buld email
	$to      = 'matthewlisterb@gmail.com';
	$subject = sanitiseSubject('New message from : ' . $_POST['name']);
	$message = $_POST['content'];
	$headers = 'From: '. sanitiseEmail($_POST['email']) . "\r\n" .
		'Reply-To: ' . sanitiseEmail(($_POST['email']);

	$success = mail($to, $subject, $message, $headers);
	//redirect to the correct page depending on whether the email was sent
	if($success){
		echo "Message sent";
	}
	else{
		echo "problem sending message";
	}
	
	
	/*
	remove any newlines from the Subject of the email
	*/
	function sanitiseSubject($message){
		$message = str_replace(array("\r","\n"),array(" "," "),$message);
		return $message;
	}
	
	/*
	make sure the email address field has valid email syntax
	*/
	function sanitiseEmail($message){
		$message = filter_var($message, FILTER_SANITIZE_EMAIL);
		return $message;
	}
?>