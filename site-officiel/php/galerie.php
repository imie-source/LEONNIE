<?php
	/* Début de : page galerie */

	
	// Intégration du bandeau
	
	include ("bandeau.php");

	
	// Intégration des fonctions
	include("fonctions.inc.php");
	
	/*$cnxPDO = cnxBase();
	$result = $cnxPDO->query("SELECT id_media FROM media WHERE type_media = 'image'");
	$tab= $result->fetchAll(PDO::FETCH_ASSOC);
	$count = count($tab);
	// On affiche les images qui sont dans le dossier images_galerie en fonction des id qui sont dans le tableau, comme ça même si une image est supprimée dans la BDD,il n'y aura pas de problème d'affichage
	$listeImages= "";
	for($i = 0; $i < $count ; $i++){
		$listeImages .= "<a href='../medias/images_galerie/0".$tab[$i]["id_media"].".jpg'". " data-lightbox='roadtrip'><img src='../medias/images_galerie/0".$tab[$i]["id_media"].".jpg'</a>";
	}
	*/	
	// Intégration du contenu de la page
	
	include ("../html/galerie.html");
	
	
	// Intégration du footer
	
	include ("../html/footer.html");
	
	
	/* Fin de : page galerie */	
?>