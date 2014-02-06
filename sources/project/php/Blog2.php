<!DOCTYPE html>

<html>

<head>
	<title>Blog</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
	<link href="clement.css" rel="stylesheet" media="all" type="text/css">  
</head>

<body>

<!-- Inclusion du Bandeau et de la nav !-->
<?php

 include "../html/bandeau.html";
?>

	<div>
		<p> TITRE </p>
	
	</div>

	<div class="articleblog">

		<!-- cette div correspond au cadre principal situé a gauche de la page, un peu de lorem ipsum pour que ça restez visible sur la page !-->
		
		<p>
		On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, 
		et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 
		'Du texte. Du texte. Du texte.' est qu'il possède une distribution de lettres plus ou moins normale, et en tout
		cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web
		ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour 'Lorem Ipsum' vous conduira vers de nombreux sites 
		qui n'en sont encore qu'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident,
		souvent intentionnellement (histoire d'y rajouter de petits clins d'oeil, voire des phrases embarassantes).
		</p>

	</div>


	<div id="menublog">

	
	<div id="getintouch">
		<p>Get-in-touch</p><br/>
		
		<a href="">Facebook	</a>-<a href="">Pinterest</a>-<a href="">Twitter	</a>
	</div>
	
	<div id="articlesrecents">
		<p>Articles r&eacute;cents</p><br/>
		<!-- apparemment...il faudrait UN MINI DIAPO! !-->
		
	</div>

	<div id="rubriquesblog">
		<p>Rubriques Blog</p><br/>
	
		<a href="">Echapp&aecute;es	</a>
		<a href="">Envie de	</a>
		<a href="">DIY	</a>
		<a href="">Blogroll	</a>
		
	</div>
	
	<div id="archives">
		<p>Archives</p><br/>
		
	
	</div>


	<!-- Inclusion du footer !-->
	<?php

	include "../html/footer.html"

	 ?>


</body>

</html>
