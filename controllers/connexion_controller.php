<?php
// formulaire de connexion 

global $db;

if(isset($_GET['type']) AND $_GET['type'] == 'membre') {
   
   if(isset($_GET['confirme']) AND !empty($_GET['confirme'])) {
      $confirme = (int) $_GET['confirme'];
      $req = $db->prepare('UPDATE membres SET confirme = 1 WHERE id = ?');
      $req->execute(array($confirme));
   }
   if(isset($_GET['supprime']) AND !empty($_GET['supprime'])) {
      $supprime = (int) $_GET['supprime'];
      $req = $db->prepare('DELETE FROM membres WHERE id = ?');
      $req->execute(array($supprime));
   }
} elseif(isset($_GET['type']) AND $_GET['type'] == 'commentaire') {
   if(isset($_GET['approuve']) AND !empty($_GET['approuve'])) {
      $approuve = (int) $_GET['approuve'];
      $req = $db->prepare('UPDATE commentaires SET approuve = 1 WHERE id = ?');
      $req->execute(array($approuve));
   }
   if(isset($_GET['supprime']) AND !empty($_GET['supprime'])) {
      $supprime = (int) $_GET['supprime'];
      $req = $db->prepare('DELETE FROM commentaires WHERE id = ?');
      $req->execute(array($supprime));
   }
}
$membres = $db->query('SELECT * FROM `admins` ORDER BY `id` DESC LIMIT 0,5');
// $commentaires = $db->query('SELECT * FROM commentaires ORDER BY id DESC LIMIT 0,5');
