<?php
	/* Début de : page d'accueil */

	
	// Intégration du bandeau
	
	include ("bandeau.php");

	// Récupération de l'ensemble des images pour le slide
	$lesImagesDuSlide = "";
	$repImagesAccueil = "../medias/images_diaporama_accueil";
	$dRep = opendir($repImagesAccueil);
	$tabUrls = array();
	while($entree = @readdir($dRep)) {
	  $url = $repImagesAccueil . "/" . $entree;
	  $lcEntree = strtolower($entree);
	  if(is_file($url) && preg_match('/^[0-9]{2}.jpg$/', $lcEntree)) {
	    $tabUrls[] = $url;
	  }
	}
	closedir($dRep);
	// On trie par ordre croissant de nom de fichier
	sort($tabUrls);
	foreach($tabUrls as $url) {
	    $lesImagesDuSlide .= '<img src="' . $url . '" />' . "\n";
	}
	
	// Intégration du contenu de la page
	
	include ("../html/accueil.html");
	
	
	// Intégration du footer
	
	include ("../html/footer.html");
	
	
	/* Fin de : page d'accueil */
?>