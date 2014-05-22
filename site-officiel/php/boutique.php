<?php
	/* Début de : page listant les meubles mis en vente */

	
	// Intégration du bandeau
	
	include ("bandeau.php");
	
	function analyseDescriptif($url) {
	  $ctn = file(__DIR__ . "/" . $url . "/" . "description.txt");
	  $tab = array();
	  for($i = 0; $i < count($ctn); $i++) {
	    $ligne = explode("=", trim($ctn[$i]));
	    $cle = strtolower(trim($ligne[0]));
	    $valeur = trim($ligne[1]);
	    switch($cle) {
	      case 'titre':
	      case 'prix':
	      case 'description':
	      case 'finition':
	      case 'dimension':
		$tab[$cle] = $valeur;
		break;
	      case 'coul-ext':
		$tab["coulext"] = $valeur;
		break;
	      case 'coul-int':
		$tab["coulint"] = $valeur;
		break;
	      case 'dimensionhplcm':
		$tDim = explode(",", $valeur);
		$tab["hauteur"] = $tDim[0];
		$tab["profondeur"] = $tDim[1];
		$tab["largeur"] = $tDim[2];
		break;
	      default:
		$tab["extra"][trim($ligne[0])] = $valeur;
		break;
	    }
	  }
	  return $tab;
	}
	
	$typeMD = isset($_GET["b"]) ? $_GET["b"] : "mobilier";
	$produit = isset($_GET["p"]) ? $_GET["p"] : false;
	
	if (false === $produit) {
	
	  // Récupération de l'ensemble des images
	  $repProduit = __DIR__ . "/../medias/boutique/" . $typeMD;
	  $urlProduit = "../medias/boutique/" . $typeMD;
	  $lesProduits = "";
	  $patternRep = '/^[0-9]{3}_/';
	  $dRep = opendir($repProduit);
	  $tabReps = array();
	  while($entree = @readdir($dRep)) {
	    $rep = $repProduit . "/" . $entree;
	    if(is_dir($rep) && preg_match($patternRep, $entree)) {
	      $tabReps[] = $urlProduit . "/" . $entree;
	    }
	  }
	  closedir($dRep);
	  if (count($tabReps) > 0) {
	    // On trie par ordre croissant de nom de fichier
	    sort($tabReps);
	    $cptImages = 1;
	    $nbImagesParLine = 3;
	    $premImage = "icone.JPG";
	    $lesProduits .= "<div>\n";
	    foreach($tabReps as $rep) {
		$url = $rep . "/" . $premImage;
		$lesProduits .= '<div><a href="?b=' . $typeMD . '&p=' . $rep . '"><img src="' . $url . '" /></a></div>' . "\n";
		if ($cptImages % $nbImagesParLine == 0) {
		  $lesProduits .= "</div>\n<div>";
		}
		$cptImages++;
	    }
	    $lesProduits .= "</div>\n";
	    // Intégration du contenu de la page
	    
	    include("../html/boutique.html");
	  } else {
	    include("../html/pasdeproduit.html");
	  }
	} else {
	  $desc = analyseDescriptif($produit);
	  $urlImgPrinc = "$produit/01.JPG";
	  if (isset($desc["dimension"])) {
	    $dimensions = $desc["dimension"];
	  } else if (isset($desc["hauteur"])) {
	    $dimensions = "H. " . $desc["hauteur"] . "cm x P. " . $desc["profondeur"] . "cm x L. " . $desc["largeur"] . "cm";
	  } else {
	    $dimensions = "";
	  }
	  if ("" == $desc["coulint"]) {
	    $desc["coulint"] = "n&eacute;ant";
	  }
	  $autresDetails = "";
	  foreach($desc["extra"] as $cle => $valeur) {
	    $autresDetails .= "<p  class=\"info\">$cle : $valeur</p>\n";
	  }  
	  
	  // Récupération de l'ensemble des images du produit
	  $repProduit = __DIR__ . "/" . $produit;
	  $patternImg = '/^[0-9]{2}\.JPG/';
	  $dRep = opendir($repProduit);
	  $tabImages = array();
	  while($entree = @readdir($dRep)) {
	    $img = $produit . "/" . $entree;
	    if(is_file($repProduit . "/" . $entree) && preg_match($patternImg, $entree)) {
	      $tabImages[] = $img;
	    }
	  }
	  closedir($dRep);
	  sort($tabImages);
	  $autresImages = "";
	  $cpt = 1;
	  array_shift($tabImages);
	  foreach($tabImages as $img) {
	    $autresImages .= '<a class="fancybox" rel="groupe" href="' . $img . '"><div class="vignette" style="background-image: url(\'' . $img . '\');"></div></a>';
	    if ($cpt % 3 == 0) {
	      $autresImages .= '<br />';
	    }
	    $cpt++;
	  }

	  // Intégration du contenu de la page
	  
	  include ("../html/boutique_desc.html");
	}
	
	// Intégration du footer
	
	include ("../html/footer.html");
	
	
	/* Fin de : page listant les meubles mis en vente */
?>