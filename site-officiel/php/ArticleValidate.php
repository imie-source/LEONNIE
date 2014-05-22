<?php        
require_once('DataFunctions.php');
if(isset($_POST["delete"]))
{
    $valide = true;
    if($valide)
    {
        $id = (isset($_POST['id_article']) ? $_POST['id_article'] : $valide = false);
        
        $requete = "DELETE  FROM Article WHERE `article`.`id_article` = :id_article;";
        $rq = $dataBase->prepare($requete);
        $arrayParameters = array(':id_article' => $id );
        
        $rq->execute($arrayParameters);
    }
  
}

if(isset($_POST["modifier"]))
{
    $valide = true;

    $id = (isset($_POST['id_article']) ? $_POST['id_article'] : $valide = false);
    $titre = (isset($_POST["titre_article"]) ?$_POST["titre_article"]: $valide = false);
    $date = (isset($_POST["date_article"]) ? $_POST["date_article"]  : date());
    $txt = (isset($_POST["txt_article"]) ? $_POST["txt_article"]  : "ND");
    $id_rubrique = (isset($_POST["id_rubrique"]) ? $_POST["id_rubrique"]  : "ND");
    $id_media = (isset($_POST["id_media"]) ? $_POST["id_media"] : null);
    $id_produit = (isset($_POST["id_produit"]) ?   $_POST["id_produit"] : null);
    $id_langue = (isset($_POST["id_langue"]) ?  $_POST["id_langue"] : 1);
   
    
    
    if($valide)
    {
        $requete = "UPDATE `leonnie`.`article` SET".
        "`date_article` = :date, `titre_article` = :titre, `txt_article` = :txt, `id_rubrique` = :id_rubrique, `id_media` = :id_media, `id_produit` = :id_produit, `id_langue` = :id_langue ".
        "WHERE `article`.`id_article` = :id_article;";
        $rq = $dataBase->prepare($requete);
        $arrayParameters = array(':date' => $date, ':titre' => $titre, ':txt' => $txt, ':id_rubrique' => $id_rubrique, ':id_media' =>  $id_media, ':id_produit' => $id_produit, ':id_langue' => $id_langue, ':id_article' => $id );
        
        $rq->execute($arrayParameters);
        
        $_SESSION["message"] = "upadte effectuée";
        header('Location: frmEditArticle.php');      
        exit();      
        
    }
    else{
        $_SESSION["message"] = "Un Probleme est surevnu";
        header('Location: frmEditArticle.php');      
        exit();      
    }
}

if(isset($_POST["new"]))
{
    $valide = true;

    //$id = (isset($_POST['id_article']) ? $_POST['id_article'] : $valide = false);
    $titre = (isset($_POST["titre_article"]) ?$_POST["titre_article"]: $valide = false);
    $date = (isset($_POST["date_article"]) ? $_POST["date_article"]  : date());
    $txt = (isset($_POST["txt_article"]) ? $_POST["txt_article"]  : "ND");
    $id_rubrique = (isset($_POST["id_rubrique"]) ? $_POST["id_rubrique"]  : "ND");
    $id_media = (isset($_POST["id_media"]) ? $_POST["id_media"] : null);
    $id_produit = (isset($_POST["id_produit"]) ?   $_POST["id_produit"] : null);
    $id_langue = (isset($_POST["id_langue"]) ?  $_POST["id_langue"] : 1);
    
    
    
    if($valide)
    {
        $requete = "INSERT INTO `leonnie`.`article`(`date_article`, `titre_article`,`txt_article`, `id_rubrique`, `id_media`,`id_produit`,`id_langue`) VALUES ".
        " (:date,:titre,  :txt, :id_rubrique,  :id_media,  :id_produit, :id_langue )";
        
        $rq = $dataBase->prepare($requete);
        $arrayParameters = array(':date' => $date, ':titre' => $titre, ':txt' => $txt, ':id_rubrique' => $id_rubrique, ':id_media' =>  $id_media, ':id_produit' => $id_produit, ':id_langue' => $id_langue );
        
        $rq->execute($arrayParameters);
        
        $_SESSION["message"] = "upadte effectuée";
        header('Location: frmEditArticle.php');      
        exit();      
        
    }
    else{
        $_SESSION["message"] = "Un Probleme est surevnu";
        header('Location: frmEditArticle.php');      
        exit();      
    }
}
?>