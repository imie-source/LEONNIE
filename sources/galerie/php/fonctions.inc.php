<?php
	
	include("config.inc.php");

	function cnxBase() {
			/* Rendre visible dans la fonction les variables "globales" du script */
			global $hote, $port, $utilisateur, $motdepasse, $nomBase;
			
			/* Connexion à la base de données */
			// Définition du DSN : Data Source Name
			$dsn = "mysql:host=$hote;port=$port;dbname=$nomBase";
			// Tentative de connexion à la base en instanciant une classe PDO
			try {
				// Création de l'instance de la classe PDO avec les paramètres de cnx
				$cnxPDO = new PDO($dsn, $utilisateur, $motdepasse);
			} catch(PDOException $exception) {
				/* En cas d'erreur, le constructeur de la classe PDO lève une exception
				   de type PDOException que l'on capture et qui est placée dans
				   la variable $exception */
				// Renvoie le message décrivant l'erreur
				return $exception->getMessage();
			}
			// Renvoie l'objet créé
			return $cnxPDO;
		}

	function SupprimerImage($idImage){
		// Connexion à la base de données
		$cnxPDO = cnxBase();
		
		//Préparation de la requête
		$requete = "DELETE FROM images WHERE idImage = ".$idImage.";";
		
		//Execution de la requêtem
		$resultat = $cnxPDO->exec($requete);
	}//Fin de la fonction
?>