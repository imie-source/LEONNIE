<?php

	/* Inclusion des variables de configuration */
	include("../config/config.inc.php");
	
	/* Inclusion de la d�finition des constantes */
	include("constantes.inc.php");
	
	/**
	 * Connexion � la base de donn�es avec le module PDO
	 * @return mixed Objet PDO ou Cha�ne de caract�res d�crivant l'erreur
	 */
	function cnxBase() {
		/* Rendre visible dans la fonction les variables "globales" du script */
		global $hote, $port, $utilisateur, $motdepasse, $nomBase;
		
		/* Connexion � la base de donn�es */
		// D�finition du DSN : Data Source Name
		$dsn = "mysql:host=$hote;port=$port;dbname=$nomBase";
		// Tentative de connexion � la base en instanciant une classe PDO
		try {
			// Cr�ation de l'instance de la classe PDO avec les param�tres de cnx
			$cnxPDO = new PDO($dsn, $utilisateur, $motdepasse);
		} catch(PDOException $exception) {
			/* En cas d'erreur, le constructeur de la classe PDO l�ve une exception
			   de type PDOException que l'on capture et qui est plac�e dans
			   la variable $exception */
			// Renvoie le message d�crivant l'erreur
			return $exception->getMessage();
		}
		// Renvoie l'objet cr��
		return $cnxPDO;
	}
	
	/**
	 * Gestion des erreurs de BDD avec affichage d'une page HTML d'erreur personnalis�e
	 * @param int $codeErreur Code erreur BDD
	 * @param mixed $info Cha�ne de caract�res ou tableau d�crivant les erreurs
	 * @param string $requete Requ�te ayant g�n�r� l'erreur
	 */
	function bddErreur($codeErreur, $info, $requete = "") {
		switch($codeErreur) {
			case BDD_ERREUR_CNX: 
				$msg = "Impossible de se connecter &agrave; la base de donn&eacute;es : ";
				break;
			case BDD_ERREUR_INSERT:
				$msg = "Erreur au moment de l'insertion : ";
				break;
			case BDD_ERREUR_DELETE:
				$msg = "Erreur au moment de la suppression : ";
				break;
			case BDD_ERREUR_UPDATE:
				$msg = "Erreur au moment de la modification : ";
				break;
		}
		// Si $info est un tableau,
		if (is_array($info)) {
			// on le transforme en une cha�ne "continue" de caract�res,
			// chaque �l�ment �tant s�par� par un saut de ligne HTML
			$info = implode("<br />", $info);
		}
		// Inclusion du "mod�le" HTML 
		include("../html/bdderreur.html");
		die();
	}
	
	/*
		Fonction qui renvoie un tableau contenant les donn�es d'une table
		@param string $nomTable Nom de la table
		@return Array Tableau contenant les enregistrements de la table
	*/
	function getDonnees($nomTable, $champs = "*") {
		
		$cnxPDO = cnxBase();
		// Soit $cnxPDO contient une cha�ne de caract�res (l'erreur)
		// Soit $cnxPDO contient un objet de classe PDO
		
		// S'il y a un probl�me de connexion on renvoie l'erreur
		if (is_string($cnxPDO)) {
			return $cnxPDO;
		}
		
		// Dans le cas o� $champs contient un tableau
		if (is_array($champs)) {
			// on transforme le tableau de champs en une cha�ne de caract�res
			// pour l'inclure dans la requ�te SQL
			$champs = implode(",", $champs);
		}
		
		/* Pr�paration de la requ�te */
		$requete = "SELECT " . $champs . " FROM " . $nomTable . ";";

		/* Ex�cution de la requ�te */
		$result = $cnxPDO->query($requete);
		
		// Initialisation de la variable "resultat" 
		$tabRes = $result->fetchAll(PDO::FETCH_ASSOC);
		
		return $tabRes;
	} /* Fin de la fonction getDonnees */
	
	/**
	 * Fonction renvoyant le code HTML sous forme d'options des 
	 * enregistrements contenu dans une table
	 * @param string $tableName Nom de la table
	 * @param string $primaryKey Nom du champ "cl� primaire"
	 * @param string $label Libell� de l'information
	 * @return string Code HTML des options
	 */
	function createOptionsFromTable($tableName, $primaryKey, $label, $idSelected = false) {
		$tab = getDonnees($tableName);
		if (!is_array($tab)) {
			$res = "<option value=\"\">BD not connected : " . utf8_encode($tab) . "</option>";
		} else {
			$res = "";
			$nbElements = count($tab); // GreenIT ;-)
			for($i = 0; $i < $nbElements; $i++) {
				if (is_array($idSelected)) {
					$res .= "<option value=\"" . 
						    $tab[$i][$primaryKey] . "\"" . 
							(in_array($tab[$i][$primaryKey], $idSelected) ? " selected " : "") .
							">" . utf8_encode($tab[$i][$label]) . "</option>\n";
				} else {
					$res .= "<option value=\"" . 
						$tab[$i][$primaryKey] . "\"" . 
						($tab[$i][$primaryKey] == $idSelected ? " selected " : "") .
						">" . utf8_encode($tab[$i][$label]) . "</option>\n";
				}	
			}
		}
		return $res;
	}
?>