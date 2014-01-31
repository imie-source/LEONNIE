<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
<head>
<title>Contactez Nous</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel='stylesheet'href='style.css' />
<script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
<script type='text/javascript' src='js/form_c.js'></script>
</head>
<body>
<div id='formulaire'>
  <form action='send.php' method='post' id='contact_form'>
    <h2><img id='contact_logo' src='images/mail.png' /> Formulaire de contact</h2>
    <p> Votre nom :
    <div id='name_error' class='error'><img src='images/error.png'> veuillez entrer votre nom !!</div>
    <div>
      <input type='text' name='name' id='name'>
    </div>
    </p>
    <p> Votre Email :
    <div id='email_error' class='error'><img src='images/error.png'> veuillez entrer votre e-mail !!</div>
    <div>
    <input type='text' name='email' id='email'>
    <div>
    </p>
    <p> Votre sujet :
    <div id='subject_error' class='error'><img src='images/error.png'> veuillez préciser votre sujet !!</div>
    <div>
      <input type='text' name='subject' id='subject'>
    </div>
    </p>
    <p> Votre message :
    <div id='message_error' class='error'><img src='images/error.png'> Champs message est requis !!</div>
    <div>
      <textarea name='message' id='message'></textarea>
    </div>
    </p>
    <div id='mail_success' class='success'><img src='images/success.png'> Merci ! Votre message a bien été envoyé !!</div>
    <div id='mail_fail' class='error'><img src='images/error.png'> votre message n'a pas été envoyé, réessayer plus tard !!</div>
    <p id='cf_submit_p'>
      <input type='submit' id='send_message' value='Envoyer votre message'>
    </p>
  </form>
</div>
</body>
</html>
