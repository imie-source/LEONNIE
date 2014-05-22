

<?php
require_once('DataFunctions.php');
//require_once('fonctions.inc.php');

$_SESSION["admin"]= true;
if(!$_SESSION["admin"])
{
    header('\index.php');  
    
}
else{
    //$db = cnxBase();

    $tableauArticles = GetAllArticles();
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
        .formulaire {
         max-width:650px;
         margin:auto;
        }
    </style>
</head>
<body>
    <nav>
        <ul class="nav nav-pills">
            <li ><a href="frmEditArticle.php">Edition Article</a></li>
            <li  class="active" ><a href="frmNewArticle.php">Nouvel Article</a></li>  
            <li><a href="frmEditProduit.php">Edition Produit</a></li>
            <li><a href="frmNewProduit.php">Nouveau Produit</a></li> 
        </ul>
    </nav>
 <?php
 echo "Formulaire de nouveau produit";
?>

    <section class="formulaire">
              <form action="ArticleValidate.php" method="post">
              <div class="control-group error">
                <input type="hidden" name="id_article" />
                 
                   <div class="input-group input-group-sm">
                      <span class="input-group-addon">Titre</span>
                    <input type="text" class="form-control"  name="titre_article" required maxlength="50" >
                  </div>
                  
                  <div class="input-group input-group-sm">
                      <span class="input-group-addon">Date</span>
                    <input type="date" class="form-control"  name="date_article" required />
                  </div>

                 

                  <div class="input-group input-group-sm">
                      <span class="input-group-addon">Texte</span>
                    <textarea class="form-control" rows="3" name="txt_article" > </textarea>
                  </div>


                  
                  <div class="input-group input-group-sm">
                      <span class="input-group-addon">Rubrique</span>

                      <select class="form-control" name="id_rubrique">
                      <?php
                         OptionList(GetAllRubriques(),1-1);
                      ?> 
                     </select>
                  </div>


                  
                  <div class="input-group input-group-sm">
                      <span class="input-group-addon">Media</span>
                   
                      <select class="form-control" name="id_media">
                      <?php
                         OptionList(GetAllMedias(),1,-1);
                      ?> 
                     </select>
                      <a class="btn btn-default btn-sm" href="ImportMedia.php"> Importer un media</a>
                  </div>

                  <div class="input-group input-group-sm">
                      <span class="input-group-addon">Langue</span>
                   
                      <select class="form-control" name="id_langue">
                      <?php
                         OptionList(GetAllLangues(),1,-1);
                      ?> 
                     </select>
                  </div>

                  <div class="input-group input-group-sm">
                      <span class="input-group-addon">Produits</span>
                   
                      <select class="form-control" name="id_produit">
                      <?php
                         //OptionList(GetDataWithParams("SELECT * from produits WHERE id_type = :idType", array(":idType" => $article["id_type"])),1,$article["id_media"]);
                         OptionList(GetAllProduits(),1,-1);                         
                      ?>                          
                     </select>
                       <a class="btn btn-default btn-sm" href="frmNewProduit" target="_blank"> Nouveau Produit</a>
                  </div>

              </div>

              <input type="submit" class="btn btn-default" name="new" value="Enregistrer" />
          </form>
    </section>
</body>
</html>
