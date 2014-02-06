<!DOCTYPE html>

<html>
	<head>
	
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="../css/particuliers.css" media="all">
		<link href="../css/diaporama_particuliers.css" rel="stylesheet" media="all" type="text/css">
		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script src="../js/jquery.slides-particuliers.js"></script>
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
		<div id="categorie">
			<a href="../php/particuliers.php">Particuliers</a></br>
			<a href="../php/professionnels.php">Professionnels</a></br>
			<a href="../php/cours.php">Cours</a></br>
		</div>
		
		<!-- Intégration du texte central -->
		<div class="paragraphe">
			<p> > Vous avez changé de décoration, vos anciens meubles vous plaisent et vous souhaitez les intégrer dans votre nouvel intérieur ?</br>
			> Votre intérieur vous plait, vous souhaitez donner une deuxième vie à vos meubles en leur apportant une autre couleur, un autre aspect ?</br>
			> Vous souhaitez acquérir un meuble de brocante et le relooker ?</br>
			> Vous aimez les meubles personnalisés et uniques ?</br>
			</br>
			La patine est LA solution !</br>
			</br>
			<div class="leo">Léonnie, </br></div>
			</br>
			> écoute vos envies, vous conseille et vous propose une solution adaptée à votre projet :</br>
			o expertise technique du meuble (essence du bois, décapage, restauration à prévoir…)</br>
			o diagnostic couleur à partir d’échantillons peints à la main</br>
			</br>
			>  réalise vos projets sur devis :</br>
			o créations sur-mesure, modèles uniques</br>
			o utilisation de peintures 100% naturelles fabriquées à l’atelier</br>
			o délais et engagements respectés</br>
			</br>
			> travaille en collaboration avec :</br>
			o des brocanteurs pour dénicher le meuble dont vous rêvez</br>
			o des décorateurs pour intégrer un meuble patiné dans votre décoration intérieure</br>
			</br>
			</br>
			Pour plus d'informations : <a href="../php/contact.php">Contact</a></p>
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