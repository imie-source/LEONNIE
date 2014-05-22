<?php

/* Début de : traitement du formulaire nouvel article inscrit dans form_article.html */

// On récupère les données passées en POST

$titre = isset($_POST['formTitreArticle']) ? $_POST['formTitreArticle'] : "ND";
$langue = isset($_POST["formLangueArticle"]) ? $_POST["formLangueArticle"] : "ND";
$sujet = (isset($_POST["formSujet"]) ? $_POST["formSujet"] : "ND");

$listeMeuble = (isset($_POST["formChoixMeuble"]) ? $_POST["formChoixMeuble"] : "ND");

$titreMeuble = isset($_POST["formTitreMeuble"]) ? $_POST["formTitreMeuble"] : "ND";
$prixMeuble = (isset($_POST["formPrixMeuble"]) ? $_POST["formPrixMeuble"] : "ND");
$materiauMeuble = (isset($_POST["formMateriauMeuble"]) ? $_POST["formMateriauMeuble"] : "ND");
$couleurMeuble = isset($_POST["formCouleurMeuble"]) ? $_POST["formCouleurMeuble"] : "ND";
$texteMeuble = (isset($_POST["texteArticleMeuble"]) ? $_POST["texteArticleMeuble"] : "ND");

$listeDeco = (isset($_POST["formChoixDeco"]) ? $_POST["formChoixDeco"] : "ND");

$titreDeco = isset($_POST["formTitreDeco"]) ? $_POST["formTitreDeco"] : "ND";
$prixDeco = (isset($_POST["formPrixDeco"]) ? $_POST["formPrixDeco"] : "ND");
$materiauDeco = (isset($_POST["formMateriauDeco"]) ? $_POST["formMateriauDeco"] : "ND");
$couleurDeco = isset($_POST["formCouleurDeco"]) ? $_POST["formCouleurDeco"] : "ND";
$texteDeco = (isset($_POST["texteArticleDeco"]) ? $_POST["texteArticleDeco"] : "ND");

// Si l'article concerne un meuble alors voici la requête sql à exécuter
if ($sujet == "meuble") {

    /*	$req = "INSERT INTO mobilier (titre_mobilier, prix_mobilier, materiau_mobilier, txt_mobilier, id_typem, id_couleur) " .
            "VALUES ('" . $titreMeuble . "', '" . $prixMeuble . "', '" . $materiauMeuble . "', '" . $texteMeuble . "', " . $typeMeuble . ", " . $couleurMeuble . ")";	*/
			
	$req = "INSERT INTO produit (titre_produit, prix_produit, materiau_produit, txt_produit, id_type, id_couleur) " .
			"VALUES ('" . $titreMeuble . "', '" . $prixMeuble . "', '" . $materiauMeuble . "', '" . $texteMeuble . "', " . $typeMeuble . ", " . $couleurMeuble . ")";
}
// Sinon, si l'article concerne un objet de décoration alors voici la requête sql à exécuter
else if ($sujet == "decoration") {

    /*	$req = "INSERT INTO decoration (titre_decoration, prix_decoration, materiau_decoration, txt_decoration, id_typed, id_couleur) " .
            "VALUES ('" . $titreDecoration . "', '" . $prixDecoration . "', '" . $materiauDecoration . "', '" . $texteDecoration . "', " . $typeDecoration . ", " . $couleurDecoration . ")";	*/
			
	$req = "INSERT INTO produit (titre_produit, prix_produit, materiau_produit, txt_produit, id_type, id_couleur) " .
			"VALUES ('" . $titreMeuble . "', '" . $prixMeuble . "', '" . $materiauMeuble . "', '" . $texteMeuble . "', " . $typeMeuble . ", " . $couleurMeuble . ")";		
}

// On exécute la requête
dbexec($glob_dbh, $req);

/* Fin de : traitement du formulaire nouvel article ouvert dans form_article.html */

?>

CREATE TABLE IF NOT EXISTS PRODUIT (
	id_produit INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
	titre_produit VARCHAR(255) NOT NULL,
	prix_produit FLOAT UNSIGNED NOT NULL,
	materiau_produit TEXT NOT NULL,
	txt_produit TEXT NOT NULL,
	id_type INTEGER UNSIGNED NOT NULL,
	id_couleur INTEGER UNSIGNED NOT NULL,
	PRIMARY KEY (id_produit),
	FOREIGN KEY (id_type) REFERENCES TYPE_PRODUIT (id_type),
	FOREIGN KEY (id_couleur) REFERENCES COULEUR (id_couleur)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
