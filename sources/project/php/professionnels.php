<!DOCTYPE html>

<html>
	<head>
	
		<meta charset="utf-8" />
		
		<link href="../css/diaporama_professionnels.css" rel="stylesheet" media="all" type="text/css">
		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script src="../js/jquery.slides-professionnels.js"></script>

		<script>
			$(function(){
				$("#slides").slidesjs({
				width: 620,
				height: 420
				});
			});
		</script>
		
	</head>
	
	<header>
		<!-- Intégration du bandeau -->
		<?php
			include ("../html/bandeau.html");
		?>
	</header>
	
	<body>
	
		<!-- Intégration du bandeau de central où défile les images
		<div id="diapo">
		
			<p> "diaporama du déroulement d'un brief client</br>
			1.piece avant (ancien meuble)</br>
			2.esquisse d'un décorateur</br>
			3.tissus et papier peint choisi</br>
			4.propositions d'une patine</br>
			5.choix</br>
			6.meuble fini en situation"</p>
			
		</div> -->
		
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
		<ul id=categories>
			<li>
				<a href="../php/particuliers.php">Particuliers</a>
			</li>
			<li>
				<a href="../php/professionnels.php">Professionnels</a>
			</li>
			<li>
				<a href="../php/cours.php">Cours</a>
			</li>
		</ul>
		
		
		<!-- Intégration du texte central -->
		<div id=text>
			<p> Vos clients vous confient des projets de décoration dans lesquels :</br>
			</br>
			>  vous souhaitez intégrer des meubles anciens en leur donnant une nouvelle couleur, un nouvel aspect afin qu’ils s’intègrent harmonieusement au nouveau décor ?</br>
			>  vous êtes amené à proposer de meubles vintage que vous souhaitez relooker ?</br>
			</br>
			</br>
			La patine est LA solution !</br>
			</br>
			Léonnie, </br>
			</br>
			>  écoute votre demande, vous conseille et vous propose une solution adaptée à votre projet :</br>
			o expertise technique du meuble (essence du bois, décapage, restauration à prévoir…)</br>
			o diagnostic couleur à partir d’échantillons peints à la main</br>
			</br>
			>   réalise vos projets sur devis :</br>
			o créations sur-mesure, modèles uniques</br>
			o utilisation de peintures 100% naturelles fabriquées à l’atelier</br>
			o délais et engagements respectés</br>
			</br>
			> travaille en collaboration avec :</br>
			o des brocanteurs pour dénicher le meuble que vous rechercher</br>
			</br>
			</br>
			Pour plus d'informations : <a href="contact.php">Contact</a></p>	
		</div>
		
			<!-- Intégration du footer le footer n'intègre pas les fermetures body et html-->
		<?php
			include ("../html/footer.html");
		?>
			
	</body>
</html>