 <?php
 require_once("phpmailer/class.phpmailer.php");
    $mail = new PHPMailer();
    $mail -> IsSMTP();
    $mail -> SMTPDebug = 2;
    $mail -> SMTPAuth = 'true';
    $mail -> SMTPSecure = 'tls';
    $mail -> SMTPKeepAlive = true;
    $mail -> Host = 'smtp.gmail.com';
    $mail -> Port = 587;
    $mail -> IsHTML(true); 

    $mail -> Username = "testphpmailler@gmail.com";
    $mail -> Password = "itStart2013";
    $mail -> SingleTo = true; 

    $to = "projet.leonnie@gmail.com";                           
    $from = "testphpmailler@gmail.com";
    $fromname = "Nenel";
    $subject = "Test";
    $message = "This is a test";
    $headers = "From: $from\n";
    $headers .= "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\n";

    $mail -> From = $from;
    $mail -> FromName = $fromname;
    $mail -> AddAddress($to);
    $mail -> Subject = $subject;
    $mail -> Body    = $message;

    if(!$mail -> Send()){
        echo "Message could not be sent. <p>";
        echo "Mailer Error: " . $mail-> ErrorInfo;
        exit;
    }
	?>