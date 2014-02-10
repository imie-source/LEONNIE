<!DOCTYPE html>

<html>
	<head>
	
		<link href="../css/diaporama_accueil.css" rel="stylesheet" media="all" type="text/css">
		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script src="../js/jquery.slides-accueil.js"></script>

		<script>
			$(function(){
				$("#slides").slidesjs({
				width: 940,
				height: 528
				});
			});
		</script>
		
	</head>

	<body>
	
		<header>
			<?php
			include("../html/bandeau.html");
			?>
		</header>
		
		<div id="slides"  style="width: 940px; height: 518px;">
			<img src = "../medias/images/01.jpg"/>
			<img src = "../medias/images/02.jpg" />
			<img src = "../medias/images/03.jpg" />
			<img src = "../medias/images/04.jpg" />
			<input type = "image" src = "../medias/images/previous.png" id = "PreviousButton" class = "slidesjs-previous slidesjs-navigation"></input>
			<input type = "image" src = "../medias/images/next.png" id = "NextButton" class = "slidesjs-next slidesjs-navigation"></input>
		</div>
	
		<div id = "sousdiapo" style="">
			Léonnie est passionnée, curieuse et audacieuse.
			Elle aime la nature, ses couleurs, ses textures, ses matières et s’en inspire librement. Elle est aussi citadine, elle aime glaner, récupérer, détourner les objets qui l’entourent en leur donnant un petit supplément d’âme, un certain je ne sais quoi …
			Ses créations originales, douces ou acidulées trouvent leur harmonie à travers le travail du bois et la fabrication de 100 % peintures naturelles. Ses patines inspirées du dehors sont profondes, subtiles, minérales. Elles surprendront vos sens et illumineront votre intérieur. 

			Venez découvrir son univers et entrez dans un quotidien naturel et coloré !
		
		</div>	

		<footer>
			<?php
			include("../html/footer.html");
			?>
		</footer>
		
	</body>
</html>