<?php
require_once('phpmailer/class.phpmailer.php');
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded
 
$mail = new PHPMailer();
 
$body = file_get_contents('form2.html');
 
$mail->IsSMTP(); // telling the class to use SMTP
$mail->Host = "smtp.gmail.com"; // SMTP server
$mail->SMTPDebug = 2; // enables SMTP debug information (for testing)
// 1 = errors and messages
// 2 = messages only
$mail->SMTPAuth = true; // enable SMTP authentication
$mail->SMTPSecure = "tls"; // sets the prefix to the servier
$mail->Host = "smtp.gmail.com"; // sets GMAIL as the SMTP server
$mail->Port = 587; // set the SMTP port for the GMAIL server
$mail->Username = "testphpmailler@gmail.com"; // GMAIL username
$mail->Password = "itStart2013"; // GMAIL password

$mail->Subject = "PHPMailer Test Subject via smtp (Gmail),
basic";
 
$mail->AltBody = "To view the message, please use an HTML
compatible email viewer!"; // optional, comment out and test
 
$mail->MsgHTML($body);
 
$address = "projet.leonnie@gmail.com";
$mail->AddAddress($address, "John Doe");
 
if(!$mail->Send()) {
echo "Mailer Error: " . $mail->ErrorInfo;
} else {
echo "Message sent!";
}
?>