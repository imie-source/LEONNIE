<?php
	include("fonctions.inc.php");
	echo '<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/galerie.css" />
		<script src="../js/lightbox/js/modernizr.custom.js"></script>
		<script src="../js/lightbox/js/jquery-1.10.2.min.js"></script>
		<script src="../js/lightbox/js/lightbox-2.6.min.js"></script>
		<link href="../js/lightbox/css/lightbox.css" rel="stylesheet" />
	</head>

	<body>
		<form method="POST" action="insererImage.php" enctype="multipart/form-data">
			<div id="galerie">
				<ul id="galerie_mini">';
  
					// On se connecte à la base de données et on va chercher dans la table images les id et on les met dans un tableau
					$cnxPDO = cnxBase();
					$result = $cnxPDO->query("SELECT idImage FROM images");
					$tab= $result->fetchAll(PDO::FETCH_ASSOC);
					$count = count($tab);
					// On affiche les images qui sont dans le dossier images_galerie en fonction des id qui sont dans le tableau, comme ça même si une image est supprimée dans la BDD,il n'y aura pas de problème d'affichage
					for($i = 0; $i < $count ; $i++){
						echo "<a href='../medias/images_galerie/0".$tab[$i]["idImage"].".jpg'". " data-lightbox='roadtrip'><img src='../medias/images_galerie/0".$tab[$i]["idImage"].".jpg'</a>";
					}
					
					echo '</ul>
  
			</div>
		</form>
	</body>
</html>';
?>