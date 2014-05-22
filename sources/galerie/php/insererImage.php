<?php

	include("fonctions.inc.php");

	// Enregistrement des donn�es dans la base de donn�es
	// Connexion � la base de donn�es
	$cnxPDO = cnxBase();
	if (!empty($_POST['InsererNews']))
	{		$cnxPDO;
			//On cr�e un tableau pour lister les extensions potentielles que l'on pourrait avoir dans les images et on fait la m�me chose pour la compatibilit� IE
			$ListeExtension = array('jpg' => 'image/jpeg', 'jpeg'=>'image/jpeg');
			$ListeExtensionIE = array('jpg' => 'image/pjpeg', 'jpeg'=>'image/pjpeg');
			
			// On v�rifie que les deux champs sont compl�t�s pour pouvoir faire les op�rations sur l'image
			if (!empty($_POST['TitreNews']) && (!empty($_FILES['ImageNews'])) && (!empty($_POST['ContenuNews'])))
			{
					//On r�cup�re les donn�es mises dans les champs TitreNews et ContenuNews et on stocke �a dans deux variables
					$TitreNews = $_POST['TitreNews'];
					$ContenuNews = $_POST['ContenuNews'];
					
					if ($_FILES['ImageNews']['error'] <= 0)
					{
							// On v�rifie si la taille de l'image est inf�rieure ou �gale � 2Mo car les fonction de redimenssionnement d'images ne peuvant pas d�passer 2Mo
							if ($_FILES['ImageNews']['size'] <= 2097152)
							{									
								$ImageNews = $_FILES['ImageNews']['name'];
								
								//Gr�ce � l'explode, on cr�e un tableau o� le dernier �l�ment du tableau est l'extension de l'image
								$ExtensionPresumee = explode('.', $ImageNews);
								$ExtensionPresumee = strtolower($ExtensionPresumee[count($ExtensionPresumee)-1]);
								//On compare l'extension � celles que l'on a mis au d�but
								if ($ExtensionPresumee == 'jpg' || $ExtensionPresumee == 'jpeg')
								{
								  $tabImageNews = getimagesize($_FILES['ImageNews']['tmp_name']);
								  if($tabImageNews['mime'] == $ListeExtension[$ExtensionPresumee]  || $ImageNews['mime'] == $ListeExtensionIE[$ExtensionPresumee])
	{											  // On cr�e la nouvelle image avec les dimensions que l'on veut affecter � notre nouvelle image
												  $ImageChoisie = imagecreatefromjpeg($_FILES['ImageNews']['tmp_name']);
												  $TailleImageChoisie = getimagesize($_FILES['ImageNews']['tmp_name']);
												  $NouvelleLargeur = 500; //Largeur choisie � 500 px mais modifiable
												  // La hauteur se d�finit automatiquement pour ne pas avoir d'effet d'�crasement et pour respecter l'�chelle de l'image de base
												  $NouvelleHauteur = ( ($TailleImageChoisie[1] * (($NouvelleLargeur)/$TailleImageChoisie[0])) );
												  // On remplit l'image avec des couleurs pour �viter les pertes de couleurs avec une trop bonne qualit� d'image
												  $NouvelleImage = imagecreatetruecolor($NouvelleLargeur , $NouvelleHauteur) or die ("Erreur");
												  // Ex�cution de la requ�te o� on s�lectionne le dernier ID ajout� dans la table images
												  $result = $cnxPDO->query("SELECT MAX(idImage) as lid FROM images");
												  // Stockage du r�sultat dans un tableau
												  $tab= $result->fetch(PDO::FETCH_ASSOC);
												  $lid = $tab["lid"];
												  $lid = $lid + 1;
												  // Remplissage de la nouvelle image avec le contenu de l'image choisie
												  imagecopyresampled($NouvelleImage , $ImageChoisie  , 0,0, 0,0, $NouvelleLargeur, $NouvelleHauteur, $TailleImageChoisie[0],$TailleImageChoisie[1]);
												  $NomImageChoisie = explode('.', $ImageNews);
												  $NomImageExploitable = time();
												  // Enregistrement de cette nouvelle image dans le dossier images_galerie et on lui donne le nom 0 plus le dernier ID plus 1 (stock� dans la variable $lid)
												  imagejpeg($NouvelleImage , '../medias/images_galerie/'.'0'.$lid.'.'.$ExtensionPresumee, 100);
												  $LienImageNews = 'images'.$NomImageExploitable.'.'.$ExtensionPresumee;
												  // On cr�e la requ�te d'insertion des champs du formulaire dans la table images
												  $sql= 'INSERT INTO images VALUES ("", "'.$TitreNews.'", "'.$ContenuNews.'", "'.$LienImageNews.'", "'.time().'")';
												  //Ex�ction de la requ�te
												  $res = $cnxPDO->exec($sql) or die("�a ne marche pas");
												  
												  if ($res)
												  {
														  echo 'La photo a bien �t� ins�r�e';
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