<!DOCTYPE html>

<html>
	<head>
	
		<meta charset="utf-8" />
		<title>Cour de patine</title>
		<link href="../css/diaporama_cours.css" rel="stylesheet" media="all" type="text/css">
		<link href="../css/cours.css" rel="stylesheet" media="all" type="text/css">
		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script src="../js/jquery.slides-cours.js"></script>

		<script>
			$(function(){
				$("#slides").slidesjs({
				width: 620,
				height: 420
				});
			});
		</script>
		
	</head>
	
	<body>
		
		<!-- Intégration du bandeau -->
		<?php
			include ("../html/bandeau.html");
		?>
	
		<div id="positionslide">
		<div id="slides"  style="width: 620px; height: 410px;">
			<img src = "../medias/images/01.jpg"/>
			<img src = "../medias/images/02.jpg" />
			<img src = "../medias/images/03.jpg" />
			<img src = "../medias/images/04.jpg" />
			<input type = "image" src = "../medias/images/previous.png" id = "PreviousButton" class = "slidesjs-previous slidesjs-navigation"></input>
			<input type = "image" src = "../medias/images/next.png" id = "NextButton" class = "slidesjs-next slidesjs-navigation"></input>
		</div>
		</div>
			
		<!-- Intégration du bandeau de gauche -->
		<ul id="categories">
			<li>
				<a href="stages.php">Stages</a>
			</li>
			<li>
				<a href="lieux.php">Lieux</a>
			</li>
			<li>
				<a href="dates.php">Dates</a>
			</li>
		</ul>
		
		<!-- Intégration du texte central -->
			<div id="text">
			
				<p> Patiner un meuble, ça n’est pas que l’application d’une simple peinture !</br>
				</br>
				Une patine, c’est  l’effet du temps qui passe, elle donne une âme, une profondeur, une émotion.</br>
				Si vous souhaitez découvrir ses secrets d’atelier, venez suivre un cours de patine et partagez un moment convivial.</br>
				</br>
				 Le stage se déroule sur 2 jours :</br>
				- venez avec un meuble décapé et des photos de votre intérieur,</br>
				- après un diagnostic de votre meuble et de votre intérieur, un choix de patines vous sera proposé,</br>
				- à partir d’une gamme de peinture 100% naturelle, vous apprendrez les secrets d’une patine réussie, et réalisez vous-même votre projet</br>
				- vous repartirez avec un meuble entièrement relooké près à redynamiser votre intérieur !</br>
				 </br>
				> Coût : 240 €/2jours matériel compris (Horaires : 9h-12h / 13h30-16h30)</br>
				</br>
				> Matériel :</br>
				- Votre meuble doit être de petite taille pour qu’il puisse être achevé en 2 jours (chevet, chaise, table basse, portes de buffet…)</br>
				-  Les peintures et accessoires sont inclues dans la prestation.</br>
				</br>
				> Nombre de personne : 5 max.</br>
				</br>
				> Dates :</br>

				> Lieux : prévoir des liens vers les lieux pour que les clients puissent visualiser l'endroit.</br>
				</br>
				</br>
				> Pour s'inscrire : Contact (redirection vers contact)</br>
				</br>
				</br>
				A l’occasion de :</br>
				- Idée cadeau (enterrement de vie de jeune fille)</br>
				- Activité de découverte entre amis</br>
				- Stage de perfectionnement</br>
				- Activités associatives</br>
				- Comité d’entreprise (développement de la créativité et cohésion d’équipe)</br>
				</br>
				 </br>
				Témoignages : <a href=""></a></p> <!--intégrer une redirection vers FB -->
			
			</div>
			
			<!-- Intégration des icones Facebook, Pinterest, etc... -->
			
			<div>
			
			</div>
			
			<div>
			
			</div>
			
			<div>
			
			</div>
			
				<!-- Intégration du footer le footer n'intègre pas les fermetures body et html-->
		<?php
			include ("../html/footer.html");
		?>
			
	</body>
</html>