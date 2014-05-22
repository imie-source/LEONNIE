<?php

	/* D�but de : page listant toutes les fonctions du site (� part ce qui concerne le form_contact.php */

	/* Inclusion des variables de configuration */
	include("../config/config.inc.php");
	
	/* Inclusion de la d�finition des constantes */
	include("constantes.inc.php");
	

	$cnxPDO = cnxBase();
		
		$type = setType1();
echo "ceci est mon".$type;
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
	
	function getCouleur () {
		$couleur = "select * from couleur";
		$res2 = $cnxPDO->query($couleur);
		$tabRes2 = $res2->fetchAll(PDO::FETCH_ASSOC);		
		return $tabRes2; //couleur
	}
	
	function getType1() {
		$cnxPDO = cnxBase();
		$requete8 ="select id_produit, type_produit from type_produit";
		$res3 = $cnxPDO->query($requete8);
		$tabRes3 = $res3->fetchAll(PDO::FETCH_ASSOC);		
		return $tabRes3; //type
	}
	
	function getMeubl() {
		$requete="select * from type_produit , produit where type_produit.id_type=produit.id_type and id_categorie=\"meubl\"";
		$result = $cnxPDO->query($requete);
		$tabRes = $result->fetchAll(PDO::FETCH_ASSOC);
		return $tabRes; //meubl
	}
	
	function getDeco() {
		$requete2="select * from type_produit , produit where type_produit.id_type=produit.id_type and id_categorie=\"deco\"";
		$result2 = $cnxPDO->query($requete2);
		$tabRes4 = $result2->fetchAll(PDO::FETCH_ASSOC);
		return $tabRes4; //deco
	}
	
	function setCouleur(){
		$tab = getCouleur();
		if (!is_array($tab)) {
					$couleur = "<option value=\"\">BD not connected : " . utf8_encode($tab) . "</option>";
		} else {
			$couleur = "";
			$nbElements = count($tab);
			for($i = 0; $i < $nbElements; $i++) {
				$couleur .= "<option value=\"" . 
				$tab[$i]['id_couleur'] . "\"
				>" . utf8_encode($tab[$i]['nom_couleur']) . "</option>\n";		
			}
		}
		return $couleur;
	}
	
	function setType1(){
		$tab = getType1();
		if (!is_array($tab)) {
					$type = "<option value=\"\">BD not connected : " . utf8_encode($tab) . "</option>";
		} else {
			$type = "";
			$nbElements = count($tab);
			for($i = 0; $i < $nbElements; $i++) {
				$type .= "<option value=\"" . 
				$tab[$i]['id_type'] . "\"
				>" . utf8_encode($tab[$i]['type_produit']) . "</option>\n";		
			}
		}
		return $type;
	}
	
	function setMeubl(){
		$tab = getMeubl();
		if (!is_array($tab)) {
					$meubl = "<option value=\"\">BD not connected : " . utf8_encode($tab) . "</option>";
		} else {
			$meubl = "";
			$nbElements = count($tab);
			for($i = 0; $i < $nbElements; $i++) {
				$meubl .= "<option value=\"" . 
				$tab[$i]['id_produit'] . "\"
				>" . utf8_encode($tab[$i][titre_produit]) . "</option>\n";		
			}
		}
		return $meubl;
	}
	
	function setDeco(){
		$tab = getDeco();
		if (!is_array($tab)) {
					$deco = "<option value=\"\">BD not connected : " . utf8_encode($tab) . "</option>";
		} else {
			$deco = "";
			$nbElements = count($tab);
			for($i = 0; $i < $nbElements; $i++) {
				$deco .= "<option value=\"" . 
				$tab[$i]['id_produit'] . "\"
				>" . utf8_encode($tab[$i]['titre_produit']) . "</option>\n";		
			}
		}
		return $deco;
	}
	
	
	
	
	/* Fin de : page listant toutes les fonctions du site (� part ce qui concerne le form_contact.php */	
	
?>