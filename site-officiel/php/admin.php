<?php

	/* Début de : Connexion adminitrateur ouvert dans <pasdécidé.html> */

	include("fonctions.inc.php");
	
	if (isset($_POST["identifiant"])) {

		$cnxPDO = cnxBase();

		if (is_string($cnxPDO)) {
			// On arrête le script et on affiche l'erreur
			bddErreur(BDD_ERREUR_CNX, $cnxPDO);
		}
		
		$id=$_POST['identifiant'];
		$mdp=$_POST['mdp'];

		
		// Préparation de la requète
		$requete = "SELECT * FROM login
					where nom_login='".$id."'
					and mdp_login='".$mdp."'";

					
		// Exécution de la requète
		$result = $cnxPDO->query($requete);

		
		if($result->fetchColumn() ==0) {
		
			include ('../html/form_admin.html');
			echo "Votre mot de passe ou identifiant est incorrect.";
		
		} else {
		
			header('Refresh:0;URL=frmNewArticle.php');
		}
	} else {
		include("../html/form_admin.html");
	
	}
	/* Fin de : connexion administrateur ouvert dans <pasdécidé.html> */
	
?>