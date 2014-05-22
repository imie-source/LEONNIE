<?php

	$choixLangue = "en";
	// Récupération de la page actuelle
	$page = explode("/", $_SERVER["PHP_SELF"]);
	$page = array_pop($page);
	$page = explode(".", $page);
	$page = array_shift($page);
	
	// Définition des variables utilisées dans bandeau.html
	$selectAccueil = "";
	$selectBoutique = "";
	$selectCreations = "";
	$selectCours = "";
	$selectGalerie = "";
	$selectBlog = "";
	
	define('CSS_CLASS_SELECTION', 'pageActuelle');
	
	// mettre en retrait le menu de la page actuelle
	switch($page) {
	  case 'accueil':
	    $selectAccueil = CSS_CLASS_SELECTION;
	    break;
	  case 'boutique':
	    $selectBoutique = CSS_CLASS_SELECTION;
	    break;
	  case 'particuliers':
	  case 'professionnels':
	    $selectCreations = CSS_CLASS_SELECTION;
	    break;
	  case 'cours':
	    $selectCours = CSS_CLASS_SELECTION;
	    break;
	  case 'galerie':
	    $selectGalerie = CSS_CLASS_SELECTION;
	    break;
	  case 'blog':
	    $selectBlog = CSS_CLASS_SELECTION;
	    break;
	}  

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

	// Selon la page sur laquelle on est, on modifie les variables de choixDiapo pour modifier sa taille automatiquement
	switch($page) {
	  case 'accueil':
	    // alors choisile BIG diapo ;
	    //echo choixDiapo("big", 940, 528);
	    echo choixDiapo("small", 620, 420);
	    break;
	  case 'cours':
	  case 'particuliers':
	  case 'professionnels':
	    // alors choisile SMALL diapo ;
	    echo choixDiapo("small", 620, 420);
	  break;
	}
	
	
?>