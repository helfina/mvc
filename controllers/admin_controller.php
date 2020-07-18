<?php
if(isset($_FILES['image']) AND !empty($_FILES['image']['name'])){
    global $db;
    $tailleMax = 2097152;
    $extensionValid = array('jpg', 'jpeg', 'png','gif');
    debug($extensionValid);
    exit;
    if($_FILES['image']['size'] <= $tailleMax){
        /**
         * @link https://php.net/manual/en/function.strchr.php
         * @link https://php.net/manual/en/function.substr.php
         * @link https://php.net/manual/en/function.strtolower.php
         */
        $extensionUpload = strtolower(substr(strchr($_FILES['image']['name'], '.'), 1));
            if(in_array($extensionUpload, $extensionValid)){
                //chemin ou sera upload notre images
                $chemin = '/assets/images/uploadImages/' .$_SESSION['id'].".".$extensionUpload;
                $result = move_uploaded_file($_FILES['image']['tmp_name'], $chemin);
                if($result){
                        $updateImage = $db->prepare("UPDATE `images` SET  `image`= : `image` WHERE `id` = :`id`") ;
                        $updateImage->execute(array(
                            'image' => $_SESSION['id']. "." .$extensionUpload,
                            `id` => $_SESSION['id']
                        )); 
                }else{
                    echo 'Erreur lors de l\'importation de l\'image';
                }
            }else{
                echo 'votre photo doit etre au format jpg, jpeg, png ou gif ';
            }
    }else{
        echo 'Votre photo ne doit pas dépasser 2Mo';
    }
}




$allAdmin = Admins::getAllAdmin();
$allshop = Magasins::getAllShop();
$allArticle = Articles::getAllArticles();
$allCategory = Categories::getAllCategories();
$allImage = Images::getAllImages();
$articles = Admins::orderDateArticle(); 

