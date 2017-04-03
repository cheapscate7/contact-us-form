<?php
	# Include the Autoloader (see "Libraries" for install instructions)
	require 'vendor/autoload.php';
	use Mailgun\Mailgun;

	# Instantiate the client.
	$mgClient = new Mailgun('key-3e69efbdcffb1fac4d61cedf8d47d9d4');
	$domain = "sandboxa72b1fdb29a8459eb86d5526d3efedd2.mailgun.org";

	# Make the call to the client.
	$result = $mgClient->sendMessage($domain, array(
	    'from'    => sanitiseEmail($_POST['email']),
	    'to'      => 'matthewlisterb@gmail.com',
	    'subject' => ' New Message from: '.sanitiseSubject($_POST['name']),
	    'text'    => $_POST['content']
		
	));
	if($result){
			echo 'successful';
		} else{echo 'nope';}

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