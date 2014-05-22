<?php

$_SERVER["admin"]= false;
$login =(isset($_POST['login']) ? $_POST['login'] : $valide = false );
 $pass =  (isset($_POST['pass']) ? $_POST['pass'] : $valide = false) ;
 if($login="leonnie"&&$pass="pass");
 {
     $_SESSION["admin"]= true;
   
 }
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title></title>
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JQuery -->
    <script src=" //code.jquery.com/jquery-1.10.2.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <style>
        .input-group {
            margin-top:5px;
            margin-bottom:5px;
        }
        .formulaire {
         max-width:650px;
         margin:auto;
        }
    </style>

  <script type="text/javascript">
      $(document).ready(function () {
          $("#accordionArticles").collapse();
      });
  </script>
</head>
<body>
    <form  method="post">
       <div class="input-group input-group-sm">
                      <span class="input-group-addon">Titre</span>
                    <input type="text" class="form-control"  name="login" required maxlength="50"/>
                  </div>
                  
                  <div class="input-group input-group-sm">
                      <span class="input-group-addon">Date</span>
                    <input type="password" class="form-control"  name="pass" required />
                  </div>
         <input type="submit" class="btn btn-default" name="log" value="login" />
        </div>
    </form>
  </body>
    </html>