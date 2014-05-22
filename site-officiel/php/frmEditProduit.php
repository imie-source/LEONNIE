 <?php
require_once('DataFunctions.php');


$tableauProduits = GetAllProduits();
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
  
</head>
<body>
    <nav>
        <ul class="nav nav-pills">
            <li ><a href="frmEditArticle.php">Edition Article</a></li>
            <li><a href="frmNewArticle.php">Nouvel Article</a></li>  
            <li class="active"><a href="frmEditProduit.php">Edition Produit</a></li>
            <li><a href="frmNewProduit.php">Nouveau Produit</a></li> 
        </ul>
    </nav>
 <?php
echo "Formulaire d edition  produit"
?>

</body>
</html>
