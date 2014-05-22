<?php
require_once('DataFunctions.php');


$tableauArticles = GetAllArticles();
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
    <nav>
        <ul class="nav nav-pills">
            <li class="active"><a href="#">Edition Article</a></li>
            <li><a href="frmNewArticle.php">Nouvel Article</a></li>  
            <li><a href="frmEditProduit">Edition Produit</a></li>
            <li><a href="frmNewProduit.php">Nouveau Produit</a></li> 
        </ul>
    </nav>
    <section class="formulaire">
        

        <?php
            foreach($tableauArticles as $article)
            { ?>
            <div class="panel-group accordion" id="accordionArticles">
  <div class="accordion-group panel panel-default">
    <div class="accordion-heading panel-heading">
        <span class="glyphicon glyphicon-expand"></span>
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionArticles" href="#<?php echo $article["id_article"] ;?>">
        <?php echo $article["titre_article"] ;?>
      </a>
    </div>
    <div id="<?php echo $article["id_article"] ;?>" class="panel-body collapse panel-collapse">
      <div class="accordion-inner">

             <!-- formulaire d un article !-->
          <form action="ArticleValidate.php" method="post">
              <div class="control-group error">
                <input type="hidden" name="id_article" value="<?php echo $article["id_article"] ;?>"/>
                 
                   <div class="input-group input-group-sm">
                      <span class="input-group-addon">Titre</span>
                    <input type="text" class="form-control"  name="titre_article" required maxlength="50" value="<?php echo $article["titre_article"] ;?>">
                  </div>
                  
                  <div class="input-group input-group-sm">
                      <span class="input-group-addon">Date</span>
                    <input type="date" class="form-control"  name="date_article" required value="<?php echo $article["date_article"] ;?>">
                  </div>

                 

                  <div class="input-group input-group-sm">
                      <span class="input-group-addon">Texte</span>
                    <textarea class="form-control" rows="3" name="txt_article" > <?php echo $article["txt_article"] ;?></textarea>
                  </div>


                  
                  <div class="input-group input-group-sm">
                      <span class="input-group-addon">Rubrique</span>

                      <select class="form-control" name="id_rubrique">
                      <?php
                         OptionList(GetAllRubriques(),1,$article["id_rubrique"]);
                      ?> 
                     </select>
                  </div>


                  
                  <div class="input-group input-group-sm">
                      <span class="input-group-addon">Media</span>
                   
                      <select class="form-control" name="id_media">
                      <?php
                         OptionList(GetAllMedias(),1,$article["id_media"]);
                      ?> 
                     </select>
                      <a class="btn btn-default btn-sm" href="ImportMedia.php"> Importer un media</a>
                  </div>

                  <div class="input-group input-group-sm">
                      <span class="input-group-addon">Langue</span>
                   
                      <select class="form-control" name="id_langue">
                      <?php
                         OptionList(GetAllLangues(),1,$article["id_langue"]);
                      ?> 
                     </select>
                  </div>

                  <div class="input-group input-group-sm">
                      <span class="input-group-addon">Produits</span>
                   
                      <select class="form-control" name="id_produit">
                      <?php
                         //OptionList(GetDataWithParams("SELECT * from produits WHERE id_type = :idType", array(":idType" => $article["id_type"])),1,$article["id_media"]);
                         OptionList(GetAllProduits(),1,$article["id_produit"]);                         
                      ?>                          
                     </select>
                       <a class="btn btn-default btn-sm" href="frmNewProduit" target="_blank"> Nouveau Produit</a>
                  </div>

              </div>

              <input type="submit" class="btn btn-default" name="modifier" value="modifier" />
              <input type="submit" class="btn btn-default" name="delete" value="supprimer" />
          </form>


      
      </div>
    </div>
  </div>
 
            </div>
         <?php   } ?>
          

     
       </section>



</body>
</html>
