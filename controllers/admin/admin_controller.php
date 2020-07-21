<?php


//  if (!isset($_SESSION['id']) OR $_SESSION['id'] != 1){
//      exit();
//  }

/**
 * script pour pouvoir confirmer ou supprimer les autre administrateur
 */
// var_dump($_GET);
// die();


     if(isset($_GET['confirmer']) AND !empty($_GET['confirmer'])){
         //on conveti en int pour etre sur que s'est un nombre entier
         $confirme = (int)$_GET['confirmer'];

         global $db;
         $reqAdmin = $db->prepare('UPDATE admins SET confirmer = 1 WHERE id = ?');
         $reqAdmin->execute([$confirme]);
     }

     if(isset($_GET['supprimer']) AND !empty($_GET['supprimer'])){
         //on conveti en int pour etre sur que s'est un nombre entier
         $supprimer = (int) $_GET['supprimer'];
         global $db;
         $reqAdmin = $db->prepare('DELETE FROM admins WHERE id = ?');
         $reqAdmin->execute(array($supprimer));
    }




	$allAdmins = Admins::getAllAdmin();
$allCategories = Categories::getAllCategories();
$allShop = Magasins::getAllShop();
$allImages = Images::getAllImages();  

	if(!empty($_FILES))
	{
		$img = $_FILES['avatar'];
		$image_name = $img['image'];
		//permet de recupere l'extension du fichier
		$ext = strtolower(substr(strrchr($image_name,'.'),1));
		//tableau d'extension de fichier autoriser
		$ext_aut = array('jpg','jpeg','png','gif');
			
		/**
		 * check_extension
		 * verifie les extension autorisé
		 * @param  mixed $ext
		 * @param  mixed $ext_aut
		 * @return void
		 */
		function check_extension($ext,$ext_aut)
		{
			if(in_array($ext,$ext_aut))
			{
				return true;
			}
		}
		
		$valid = (!check_extension($ext,$ext_aut)) ? false : true;
		$erreur = (!check_extension($ext,$ext_aut)) ? 'Veuillez charger une image' : '';
		
		if($valid)
		{
			//taille max de l'image
			$max_size = 2000000;
			//si l'image est plus grand que la taille max
			if($img['size']>$max_size)
			{
				$valid = false;
				$erreur = 'la Taille maximal autoriser est de 2mo';
			}
		}
		
		if($valid)
		{
			if($img['error']>0)
			{
				$valid = false;
				$erreur = 'Erreur lors du transfert';
			}
		}
		
		if($valid)
		{
			//chemin des dossiers
			$path_to_image = 'assets/images/fullsize/';
			$path_to_min = 'assets/images/min/';
			
			//hash le nom de la photo
			$filename = sha1(uniqid($image_name));
			debug($filename);
			$source = $img['tmp_name'];
			$target = $path_to_image . $filename. '.'. $ext;
			
			move_uploaded_file($source,$target);
			
			if($ext == 'jpg' || $ext == 'jpeg') {$im = imagecreatefromjpeg($path_to_image.$filename.'.'.$ext);}
			if($ext == 'png') {$im = imagecreatefrompng($path_to_image.$filename.'.'.$ext);}
			if($ext == 'gif') { $im = imagecreatefromgif($path_to_image.$filename.'.'.$ext);}
			
			//definition  largeur(x) de l'image
			$imgx = imagesx($im);
			// definition  hauteur(x) de l'image
			$imgy = imagesy($im);
			
			//nouvelle largeur de l'image
			$nx = 150;
			//nouvelle hauteur de l'image
			$ny = floor($imgy *($nx/$imgx));
			
			$nm = imagecreatetruecolor($nx,$ny);
			
			imagecopyresized($nm, $im, 0,0,0,0, $nx,$ny,$imgx,$imgy);
			
			imagejpeg($nm, $path_to_min.$filename.'.'.$ext);
			
			$nom_image = $filename.'.'.$ext;
			global $db;
			$req = $db->prepare('INSERT INTO images(image) VALUES(:image)');
			$req->execute(array('image'=>$nom_image));
			$req->closeCursor();
			
			$success = 'Upload ok';
		}
	}