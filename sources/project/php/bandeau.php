<?php

	include ('../html/bandeau.html');


	// Fonction qui choisi la bonne config du diaporama selon le nom de la page
	function choixDiapo($taille, $largeur, $hauteur) {
		$js = '<script src="../js/jquery.slides-' . $taille . '.js"></script>
			
							<script>
								$(function(){
									$("#slides").slidesjs({
									width: ' . $largeur . ',
									height: ' . $hauteur . '
									});
								});
							</script>';
		return $js;
	}	

	// On récupère la fin de l'url de la page sur laquelle on est. Exemple : accueil.php
	$fichier = array_pop(explode("/", $_SERVER['PHP_SELF']));
	
	// Selon la page sur laquelle on est, on modifie les variables de choixDiapo pour modifier sa taille automatiquement
	switch($fichier) {
		case 'accueil.php':
			// alors choisile BIG diapo ;
			echo choixDiapo("big", 940, 528);
			break;
		case 'cours.php': 	// l'url de la page est cours.html
		case 'particuliers.php': 	// l'url de la page est particuliers.html
		case 'professionnels.php': 	// l'url de la page est professionnels.html
			// alors choisile SMALL diapo ;
			echo choixDiapo("small", 620, 420);
			break;
	}		
	
	
?>