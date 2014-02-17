<?php
include_once 'config.inc.php';
include_once 'bdd.inc.php';

//$glob_dbh = dbconnect($hote, $port, $utilisateur, $motdepasse, $nomBase);

?>

<!DOCTYPE html>

<html xmlns:fb="http://ogp.me/ns/fb#">

    <head>
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Léonnie</title>
        
        <link href="../css/bandeau.css" rel="stylesheet" media="all" type="text/css">
        <link href="../css/diaporama_accueil.css" rel="stylesheet" media="all" type="text/css" />
        <link href="../css/cours.css" rel="stylesheet" media="all" type="text/css" />
        <link href="../css/diaporama_cours.css" rel="stylesheet" media="all" type="text/css" />
        <link href="../css/diaporama_particuliers.css" rel="stylesheet" media="all" type="text/css" />
        <link href="../css/diaporama_professionnels.css" rel="stylesheet" media="all" type="text/css" />
        <link href="../css/footer.css" rel="stylesheet" media="all" type="text/css" />
        <link href="../css/miseenforme.css" rel="stylesheet" media="all" type="text/css" />
        <link href="../css/particuliers.css" rel="stylesheet" media="all" type="text/css" />
        <link href="../css/professionnels.css" rel="stylesheet" media="all" type="text/css" />  
  
		<script>
			$(function() {
				$("#slides").slidesjs({
					width: 620,
					height: 420
				});
			});
		</script>
  
    </head>
    
    <body>
        
        <div id="bandeau">
            
		<!-- Début de : bandeau -->
			
			<header>

                <div id="icones">
                    <a href="facebook.com"><img src="../medias/bandeau/facebook.png" alt="Facebook"/></a>
                    <a href="pinterest.com"><img src="../medias/bandeau/pinterest.png" alt="Pinterest"/></a>
                    <a href="rss.com"><img src="../medias/bandeau/rss.png" alt="RSS"/></a>
                    <a href="leonnie.com"><img src="../medias/bandeau/fren.png" alt="FrEn"/></a>
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
                                <a href="../php/mobilier.php">Mobilier</a>
                            </li>

                            <li>
                                <a href="../php/decorations.php">Décoration</a>
                            </li>
                        </ul>
                    </li>

                    <li id="creations">
                        <a>CREATIONS SUR-MESURE</a>
                        <ul>
                            <li>
                                <a href="../php/particuliers.php">Particuliers</a>
                            </li>

                            <li>
                                <a href="../php/professionnels.php">Professionnels</a>
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
			
	<!-- Fin de : bandeau -->
