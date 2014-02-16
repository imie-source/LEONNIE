<?php
include_once 'config.inc.php';
include_once 'bdd.inc.php';

//$glob_dbh = dbconnect($hote, $port, $utilisateur, $motdepasse, $nomBase);

?>

<!DOCTYPE html>

<html>

    <head>
        <title>Léonnie</title>

        <link href="../css/bandeau.css" rel="stylesheet" media="all" type="text/css">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

        <script src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script src="../js/jquery.slides-accueil.js"></script>
<!-- TODO: ajouter tous les CSS -->
        <link href="../css/diaporama_accueil.css" rel="stylesheet" media="all" type="text/css" />

    </head>
    <body>
        <div id="page">
            <header>

                <div id="icones">
                    <a href="facebook.com"><img src="../medias/icones/facebook.png" alt="Facebook"/></a>
                    <a href="pinterest.com"><img src="../medias/icones/pinterest.png" alt="Pinterest"/></a>
                    <a href="rss.com"><img src="../medias/icones/rss.png" alt="RSS"/></a>
                    <a href="leonnie.com"><img src="../medias/icones/fren.png" alt="FrEn"/></a>
                </div>

                <div id="trait1"></div>
                <ul id="menu">
                    <li>
                        <a href="../php/accueil.php">ACCUEIL</a>
                    </li>

                    <li>
                        <a>BOUTIQUE</a>
                        <ul>
                            <li>
                                <a href="../php/mobilier.php">MOBILIER</a>
                            </li>

                            <li>
                                <a href="../php/decorations.php">DECORATIONS</a>
                            </li>
                        </ul>
                    </li>

                    <li id="creations">
                        <a>CREATIONS SUR-MESURE</a>
                        <ul>
                            <li>
                                <a href="../php/particuliers.php">PARTICULIERS</a>
                            </li>

                            <li>
                                <a href="../php/professionnels.php">PROFESSIONNELS</a>
                            </li>
                        </ul>
                    </li>

                    <li id="cours">
                        <a href="../php/cours.php">COURS DE PATINE</a>
                    </li>

                    <li>
                        <a href="../php/galerie.php">GALERIE</a>
                    </li>

                    <li>
                        <a href="../php/blog.php">BLOG</a>
                    </li>

                </ul>
                <div id="trait2"></div>

            </header>

