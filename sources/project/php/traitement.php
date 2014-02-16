<?php

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


if ($sujet == "meuble") {

    $req = "INSERT INTO mobilier (titre_mobilier, prix_mobilier, materiau_mobilier, txt_mobilier, id_typem, id_couleur) " .
            "VALUES ('" . $titreMeuble . "', '" . $prixMeuble . "', '" . $materiauMeuble . "', '" . $texteMeuble . "', " . $typeMeuble . ", " . $couleurMeuble . ")";
}
else if ($sujet == "decoration") {

    $req = "INSERT INTO decoration (titre_decoration, prix_decoration, materiau_decoration, txt_decoration, id_typed, id_couleur) " .
            "VALUES ('" . $titreDecoration . "', '" . $prixDecoration . "', '" . $materiauDecoration . "', '" . $texteDecoration . "', " . $typeDecoration . ", " . $couleurDecoration . ")";
}

dbexec($glob_dbh, $req);