<?php
global $db; 
if(isset($_GET['id']) AND !empty($_GET['id'])) {
   $suppr_id = htmlspecialchars($_GET['id']);
   $suppr = $db->prepare('DELETE FROM articles WHERE id = ?');
   $suppr->execute(array($suppr_id));

//    header('Location: http://127.0.0.1/mvc/admin/');
echo 'Votre article a bien ete supprimer';

}else{
    die('Une erreure s\'est produite');
}
?>