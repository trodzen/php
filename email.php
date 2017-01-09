<?php
	$to      = 'todd@hestiacruises.com';
	$subject = 'http://todd.rodzen.com Contact Form';
	$message = $_POST['message'] . "\r\n" .
		'From Email: ' . $_POST['fromemail'] . "\r\n" .
		'From Name: ' . $_POST['fromname'];
	$headers = 'From: donotreply@todd.rodzen.com' . "\r\n" .
       'Reply-To: ' . $_POST['fromname'] . '<' . $_POST['fromemail'] . '>';

	mail($to, $subject, $message, $headers);

?>

<html>
<h1>Thank you for your interest.</h1>
<p>Your email has been sent. I will receive your inquiry immediately. Expect a reply within 24hrs.</p>
<p><a href="/index.html">return to portfolio</a></p>
</html>