<!DOCTYPE html>

<html>

	<head>
	
		<meta charset="utf-8" />
		<title>Contact</title>
			<!--IMPORTANT : ces link sont temporaire pour la mise en forme de la page contact et du footer, il sont à supprimer une fois que Valérian les aura fusionné dans ces fichiers-->
		<link rel="stylesheet" type="text/css" href="../css/miseenforme.css" />
		<link rel="stylesheet" type="text/css" href="../css/footer.css" />
		
	</head>
	
	<body>
		
		<!-- Intégration du bandeau des réseaux sociaux -->
		<?php
		//	include ("../html/reseauxSociaux.html")
		?>

		<!-- Intégration du bandeau -->
		<?php
			include ("../html/bandeau.html");
		?>
		
		<!-- Informations de contact -->
		<div class="alignement" id="">
		
		Leonnie<br />
		<br />
		Céline Ronsin<br />
		06 75 35 07 53<br />
		</div>
		
		<!-- Formulaire de contact -->
		<div class="" id="">
		
		<!-- Ici sera inclu le formulaire de contact de Lionel -->
		<?php
			include ("../html/form.html");
		?>
		</div>
		
		<!-- Intégration du footer le footer n'intègre pas les fermetures body et html-->
		<?php
			include ("../html/footer.html");
		?>
	</body>

</html>
