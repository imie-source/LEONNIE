<?php

	include("fonctions.inc.php");

	// Enregistrement des données dans la base de données
	// Connexion à la base de données
	$cnxPDO = cnxBase();
	if (!empty($_POST['InsererNews']))
	{		$cnxPDO;
			//On crée un tableau pour lister les extensions potentielles que l'on pourrait avoir dans les images et on fait la même chose pour la compatibilité IE
			$ListeExtension = array('jpg' => 'image/jpeg', 'jpeg'=>'image/jpeg');
			$ListeExtensionIE = array('jpg' => 'image/pjpeg', 'jpeg'=>'image/pjpeg');
			
			// On vérifie que les deux champs sont complétés pour pouvoir faire les opérations sur l'image
			if (!empty($_POST['TitreNews']) && (!empty($_FILES['ImageNews'])) && (!empty($_POST['ContenuNews'])))
			{
					//On récupère les données mises dans les champs TitreNews et ContenuNews et on stocke ça dans deux variables
					$TitreNews = $_POST['TitreNews'];
					$ContenuNews = $_POST['ContenuNews'];
					
					if ($_FILES['ImageNews']['error'] <= 0)
					{
							// On vérifie si la taille de l'image est inférieure ou égale à 2Mo car les fonction de redimenssionnement d'images ne peuvant pas dépasser 2Mo
							if ($_FILES['ImageNews']['size'] <= 2097152)
							{									
								$ImageNews = $_FILES['ImageNews']['name'];
								
								//Grâce à l'explode, on crée un tableau où le dernier élément du tableau est l'extension de l'image
								$ExtensionPresumee = explode('.', $ImageNews);
								$ExtensionPresumee = strtolower($ExtensionPresumee[count($ExtensionPresumee)-1]);
								//On compare l'extension à celles que l'on a mis au début
								if ($ExtensionPresumee == 'jpg' || $ExtensionPresumee == 'jpeg')
								{
								  $tabImageNews = getimagesize($_FILES['ImageNews']['tmp_name']);
								  if($tabImageNews['mime'] == $ListeExtension[$ExtensionPresumee]  || $ImageNews['mime'] == $ListeExtensionIE[$ExtensionPresumee])
	{											  // On crée la nouvelle image avec les dimensions que l'on veut affecter à notre nouvelle image
												  $ImageChoisie = imagecreatefromjpeg($_FILES['ImageNews']['tmp_name']);
												  $TailleImageChoisie = getimagesize($_FILES['ImageNews']['tmp_name']);
												  $NouvelleLargeur = 500; //Largeur choisie à 500 px mais modifiable
												  // La hauteur se définit automatiquement pour ne pas avoir d'effet d'écrasement et pour respecter l'échelle de l'image de base
												  $NouvelleHauteur = ( ($TailleImageChoisie[1] * (($NouvelleLargeur)/$TailleImageChoisie[0])) );
												  // On remplit l'image avec des couleurs pour éviter les pertes de couleurs avec une trop bonne qualité d'image
												  $NouvelleImage = imagecreatetruecolor($NouvelleLargeur , $NouvelleHauteur) or die ("Erreur");
												  // Exécution de la requête où on sélectionne le dernier ID ajouté dans la table images
												  $result = $cnxPDO->query("SELECT MAX(idImage) as lid FROM images");
												  // Stockage du résultat dans un tableau
												  $tab= $result->fetch(PDO::FETCH_ASSOC);
												  $lid = $tab["lid"];
												  $lid = $lid + 1;
												  // Remplissage de la nouvelle image avec le contenu de l'image choisie
												  imagecopyresampled($NouvelleImage , $ImageChoisie  , 0,0, 0,0, $NouvelleLargeur, $NouvelleHauteur, $TailleImageChoisie[0],$TailleImageChoisie[1]);
												  $NomImageChoisie = explode('.', $ImageNews);
												  $NomImageExploitable = time();
												  // Enregistrement de cette nouvelle image dans le dossier images_galerie et on lui donne le nom 0 plus le dernier ID plus 1 (stocké dans la variable $lid)
												  imagejpeg($NouvelleImage , '../medias/images_galerie/'.'0'.$lid.'.'.$ExtensionPresumee, 100);
												  $LienImageNews = 'images'.$NomImageExploitable.'.'.$ExtensionPresumee;
												  // On crée la requête d'insertion des champs du formulaire dans la table images
												  $sql= 'INSERT INTO images VALUES ("", "'.$TitreNews.'", "'.$ContenuNews.'", "'.$LienImageNews.'", "'.time().'")';
												  //Exéction de la requête
												  $res = $cnxPDO->exec($sql) or die("ça ne marche pas");
												  
												  if ($res)
												  {
														  echo 'La photo a bien été insérée';
												  }
											}
											else
											{
													echo 'Le type MIME de l\'image n\'est pas bon';
											}
									}
									else
									{
											echo 'L\'extension choisie pour l\'image est incorrecte';
									}
							}
							else
							{
									echo 'L\'image est trop lourde';
							}
					}
					else
					{
							echo 'Erreur lors de l\'upload image';
					}
			}
			else
			{
					echo 'Au moins un des champs est vide';
			}
	}
	echo '<html><head></head><body><br /><center>
		<a href="insererImage.html">Retour</a>
		<a href="galerie.php">Retour Galerie</a>
		</center>
		</body></html>';
	
?>