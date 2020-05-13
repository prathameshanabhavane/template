<?php
if(isset($_POST['email'])){
	$name = $_POST['name'];
	$clientEmail = $_POST['email'];
	$contact = $_POST['contact'];

// 	//Message
	$message ="<html></body><table border='1' style='border-collapse: collapse;'>";
 	$message .= "<tr><th style='padding:10px; text-align: left;'>Name</th><td style='padding:10px;'> ".$name."</td><tr>";
 	$message .= "<tr><th style='padding:10px; text-align: left;'>Email</th><td style='padding:10px;'> ".$clientEmail."</td></tr>";
 	$message .= "<tr><th style='padding:10px; text-align: left;'>Contact Number</th><td style='padding:10px;'>".$contact."</td></tr>";
 	$message .= '</table></body></html>';

	require 'class.phpmailer.php';

	$mail = new PHPMailer;
	$mail->IsSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com';                 // Specify main and backup server
	$mail->Port = 587;                                    // Set the SMTP port
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'prathamesh@achieveee.com';                // SMTP username
	$mail->Password = '******';                  // SMTP password
	$mail->SMTPSecure = 'tls';  
	$mail->From = 'prathamesh@achieveee.com';
	$mail->FromName = 'Register Student Data';
	$mail->AddAddress('prathamesh@achieveee.com');
	$mail->Subject = 'Register Student Form Submission';
	$mail->IsHTML(true);
	// $mail->SMTPDebug = 2;
	//Read an HTML message body from an external file, convert referenced images to embedded, convert HTML into a basic plain-text alternative body
	$mail->MsgHTML($message);
	//Replace the plain text body with one created manually
	$mail->AltBody = 'This is a plain-text message body';
	if(!$mail->Send())
	{
	echo "Error sending: " . $mail->ErrorInfo;
	}
	else
	{
	echo "E-mail sent";
	}

}
	
?>
