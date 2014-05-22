<?php

	/* D�but de : page listant toutes les fonctions du site (� part ce qui concerne le form_contact.php */

	/* Inclusion des variables de configuration */
	include("../config/config.inc.php");
	
	/* Inclusion de la d�finition des constantes */
	include("constantes.inc.php");
	
	/**
	 * Connexion � la base de donn�es avec le module PDO
	 * @return mixed Objet PDO ou Cha�ne de caract�res d�crivant l'erreur
	 */
	function cnxBase() {
		// Rendre visible dans la fonction les variables "globales" du script
		global $hote, $port, $utilisateur, $motdepasse, $nomBase;
		
		// Connexion � la base de donn�es
		// D�finition du DSN : Data Source Name
		$dsn = "mysql:host=$hote;port=$port;dbname=$nomBase";
		// Tentative de connexion � la base en instanciant une classe PDO
		try {
			// Cr�ation de l'instance de la classe PDO avec les param�tres de cnx
			$dataBase = new PDO($dsn, $utilisateur, $motdepasse);
		} catch(PDOException $exception) {
			/* En cas d'erreur, le constructeur de la classe PDO l�ve une exception
			   de type PDOException que l'on capture et qui est plac�e dans
			   la variable $exception */
			// Renvoie le message d�crivant l'erreur
			return $exception->getMessage();
		}
		// Renvoie l'objet cr��
		return $dataBase;
	}
	

function GetAllArticles()
{   
    global $dataBase;
    
    if(isset($dataBase))

    {
        $requete = "SELECT * FROM article ";

        $req = $dataBase->prepare($requete);
        $req->execute();

        $tableauArticles = $req->fetchAll();
        return $tableauArticles;
    }
}

function GetAllMedias()
{   
    global $dataBase;
    
    if(isset($dataBase))

    {
        $requete = "SELECT * FROM media ";

        $req = $dataBase->prepare($requete);
        $req->execute();
     
        return  $req->fetchAll();
       
    }
}

function GetAllProduits()
{   
    global $dataBase;
    
    if(isset($dataBase))

    {
        $requete = "SELECT * FROM produit ";

        $req = $dataBase->prepare($requete);
        $req->execute();
     
        return  $req->fetchAll();
        
    }
}

function GetAllTypeProduits()
{   
    global $dataBase;
    
    if(isset($dataBase))

    {
        $requete = "SELECT * FROM type_produit ";

        $req = $dataBase->prepare($requete);
        $req->execute();
        /*
        $req->bindParam(':log', $login,PDO::PARAM_STR);
        $req->bindParam(':pass', $pass, PDO::PARAM_STR);
        $req->execute(); */
        return  $req->fetchAll();
        
    }
}

function GetAllRubriques()
{   
    global $dataBase;
    
    if(isset($dataBase))

    {
        $requete = "SELECT * FROM rubrique ";

        $req = $dataBase->prepare($requete);
        $req->execute();
        /*
        $req->bindParam(':log', $login,PDO::PARAM_STR);
        $req->bindParam(':pass', $pass, PDO::PARAM_STR);
        $req->execute(); */
        return  $req->fetchAll();
        
    }
}

function GetAllCouleurs()
{   
    global $dataBase;
    
    if(isset($dataBase))

    {
        $requete = "SELECT * FROM couleur ";

        $req = $dataBase->prepare($requete);
        $req->execute();
        /*
        $req->bindParam(':log', $login,PDO::PARAM_STR);
        $req->bindParam(':pass', $pass, PDO::PARAM_STR);
        $req->execute(); */
        return  $req->fetchAll();
        
    }
}

function GetAllLangues()
{   
    global $dataBase;
    
    if(isset($dataBase))

    {
        $requete = "SELECT * FROM langue ";

        $req = $dataBase->prepare($requete);
        $req->execute();
       
        return  $req->fetchAll();
        
    }
}
function GetDataWithParams($requete, $arrayParameters)
{
    
    if(isset($dataBase))

    {       
        $req = $dataBase->prepare($requete);
        $req->execute($arrayParameters);
        /*
        $req->bindParam(':log', $login,PDO::PARAM_STR);
        $req->bindParam(':pass', $pass, PDO::PARAM_STR);
        $req->execute(); */
        return  $req->fetchAll();
        
    }
}
function GetData($requete)
{
    
    if(isset($dataBase))

    {       
        $req = $dataBase->prepare($requete);
        $req->execute($arrayParameters);
        
        return  $req->fetchAll();
        
    }
}


/**
 * Summary of OptionList
 * @param mixed $tableau 
 * @param mixed $idDisplay position de la colonne a afficher pour le texte
 * @param mixed $idSelected id selectionn� du tableau $tableau[0]
 */
function OptionList($tableau,$idDisplay, $idSelected)
{   
    global $dataBase;
    
   
   foreach($tableau as $item)
   {
        //$item[0] est toujours l id
       if($item[0] == $idSelected)
       {
           echo "<option value='".$item[0]."' selected>".$item[$idDisplay]."</option>";
       }
       else
       {
           echo "<option value='".$item[0]."'>".$item[$idDisplay]."</option>";
       }
         
   }
}
?>