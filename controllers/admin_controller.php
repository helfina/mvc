<?php
// if (!isset($_SESSION['id']) OR $_SESSION['id'] != 1){
//     exit();
// }

/**
 * script pour pouvoir confirmer ou supprimer les autre administrateur
 */

if(isset($_GET['type']) AND $_GET['type'] == 'admin'){

    if(isset($_GET['confirmer']) AND !empty($_GET['confirmer'])){
        //on conveti en int pour etre sur que s'est un nombre entier
        $confirme = (int)$_GET['confirmer'];

        global $db;
        $reqAdmin = $db->prepare('UPDATE admins SET confirmer = 1 WHERE id = ?');
        $reqAdmin->execute(array($confirmer));
    }

    if(isset($_GET['supprimer']) AND !empty($_GET['supprimer'])){
        //on conveti en int pour etre sur que s'est un nombre entier
        $supprimer = (int) $_GET['supprimer'];
        global $db;
        $reqAdmin = $db->prepare('DELETE FROM admins WHERE id = ?');
        $reqAdmin->execute(array($supprimer));
   }

}
 
$allAdmins = Admins::getAllAdmin();
$allArticles = Articles::getAllArticles();
$allImages = Images::getAllImages();


//Upload d'image

if(!empty($_FILES))
{
	$image = $_FILES['avatar'];
	$image_name = $image['name'];
	$ext = strtolower(substr(strrchr($image_name,'.'),1));
	$ext_aut = array('jpg','jpeg','png','gif');
	
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
		$max_size = 2000000;
		if($image['size']>$max_size)
		{
			$valid = false;
			$erreur = 'Fichier trop gros';
		}
	}
	
	if($valid)
	{
		if($image['error']>0)
		{
			$valid = false;
			$erreur = 'Erreur lors du transfert';
		}
	}
	
	if($valid)
	{
		$path_to_image = 'images/fullsize/';
		$path_to_min = 'images/min/';
		
		$filename = sha1(uniqid($image_name));
		
		$source = $image['tmp_name'];
		$target = $path_to_image . $filename. '.'. $ext;
		
		move_uploaded_file($source,$target);
		
		if($ext == 'jpg' || $ext == 'jpeg') {$im = imagecreatefromjpeg($path_to_image.$filename.'.'.$ext);}
		if($ext == 'png') {$im = imagecreatefrompng($path_to_image.$filename.'.'.$ext);}
		if($ext == 'gif') { $im = imagecreatefromgif($path_to_image.$filename.'.'.$ext);}
		
		//definition  largeur(x) hauteur(y) de l'image
		$ox = imagesx($im);
		$oy = imagesy($im);
		//nx = new width ny = new height
		$nx = 150;
		$ny = floor($oy *($nx/$ox));
		
		$nm = imagecreatetruecolor($nx,$ny);
		
		imagecopyresized($nm, $im, 0,0,0,0, $nx,$ny,$ox,$oy);
		
		imagejpeg($nm, $path_to_min.$filename.'.'.$ext);
		
		$nom_image = $filename.'.'.$ext;
		
		$req = $bdd->prepare('INSERT INTO images(image) VALUES(:image)');
		$req->execute(array('image'=>$nom_image));
		$req->closeCursor();
		
		$success = 'Upload ok';
	}
}