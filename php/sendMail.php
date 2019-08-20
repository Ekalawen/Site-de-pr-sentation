<?php
	if(!isset($_POST['submit']))
	{
		//This page should not be accessed directly. Need to submit the form.
		echo "Error. You need to submit the form !<br>";
	}

	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$message = $_POST['message'];

	if(empty($name)||empty($visitor_email)||empty($message)) {
	    //echo "All fields are mandatory ! :)";
		header('Location: ../error.php?error=All fields are mandatory ! :)');
	    exit;
	}

	if(IsInjected($name)) {
	    //echo "Bad name value !"	;
		header('Location: ../error.php?error=Bad name value !');
	    exit;
	}
	if(IsInjected($visitor_email)) {
	    //echo "Bad email value !";
		header('Location: ../error.php?error=Bad email value !');
	    exit;
	}
	if(IsInjected($message, true)) {
	    //echo "Bad message value !";
		header('Location: ../error.php?error=Bad message value !');
	    exit;
	}

	$email_from = 'ekalawenSender@gmail.com';
	$email_subject = "Message depuis mon site web ! <3";
	$email_body = "J'ai reçu un nouveau meassage de la part de $name.\n" . "Voici le message :\n\n$message";

	$to = "alexys.dussier@gmail.com";
	$headers = "From: $email_from \r\n";
	$headers .= "Reply-To: $visitor_email \r\n";

	if(mail($to, $email_subject, $email_body, $headers)) {
		header('Location: ../thank-you.php');
	} else {
		header('Location: ../error.php?error=Error while sending the mail ...');
	}

	function IsInjected($str, $acceptEnter = false) {
		if(!$acceptEnter)
		    $injections = array('(\n+)', '(\r+)', '(\t+)', '(%0A+)', '(%0D+)', '(%08+)', '(%09+)');
		else
		    $injections = array('(%0A+)', '(%0D+)', '(%08+)', '(%09+)');
	                
	    $inject = join('|', $injections);
	    $inject = "/$inject/i";
	     
	    if(preg_match($inject,$str)) {
	      return true;
	    } else {
	      return false;
	    }
	}
?>