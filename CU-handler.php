<?
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	
	$email_from = 'telanganacsiwebmessages@gmail.com';
	$email_to = 'telanganacsi@gmail.com';
	
	$email_subject = "CU Form Filled";
	$email_body = "CU Name: $name.\n".
					"CU email: $email.\n".
					"CU Message: $message.\n";
	$headers = "From: $email_from \r\n";
	$headers .= "Reply-To: $visitor_email \r\n";
	
	mail($email_to, $email_subject, $email_body, $headers);
	
	header("Location: index.html");
?>