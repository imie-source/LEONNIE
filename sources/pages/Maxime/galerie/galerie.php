
'<html>
<head>
<?php include ("bandeau.html"); ?>
<link rel="stylesheet" type="text/css" href="galerie.css" />

<script type="text/javascript" src="galerie.js"></script>

<script src="lightbox/js/modernizr.custom.js"></script>
<script src="lightbox/js/jquery-1.10.2.min.js"></script>
<script src="lightbox/js/lightbox-2.6.min.js"></script>
<link href="lightbox/css/lightbox.css" rel="stylesheet" />
</head>

<body>
<form method="POST" action="test.php" enctype="multipart/form-data">
<div id="galerie">
  <ul id="galerie_mini">
    
    <a href="images/01.jpg"  name="image1" data-lightbox="roadtrip"><img src="images/01.jpg" /></a>    
    
    <a href="images/02.jpg"  name="image2" data-lightbox="roadtrip"><img src="images/02.jpg" /></a>    
    
    <a href="images/03.jpg"  name="image2" data-lightbox="roadtrip"><img src="images/03.jpg" /></a>    
	  
    <a href="images/04.jpg"  name="image2" data-lightbox="roadtrip"><img src="images/04.jpg" /></a>    
    
    <a href="images/05.jpg"  name="image2" data-lightbox="roadtrip"><img src="images/05.jpg" /></a>

	<a href="images/06.jpg"  name="image2" data-lightbox="roadtrip"><img src="images/06.jpg" /></a>	  </ul>
  
</div>
</form>
</body>
</html>'
