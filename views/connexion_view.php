<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8" />
   <title>Administration</title>
</head>
<body>
   <ul>
      <?php while($m = $membres->fetch()) { ?>
      <li><?= $m['id'] ?> : <?= $m['pseudo'] ?><?php if($m['confirme'] == 0) { ?> - <a href="index.php?type=membre&confirme=<?= $m['id'] ?>">Confirmer</a><?php } ?> - <a href="index.php?type=membre&supprime=<?= $m['id'] ?>">Supprimer</a></li>
      <?php } ?>
   </ul>
   <br /><br />
   <ul>
      <?php while($c = $commentaires->fetch()) { ?>
      <li><?= $c['id'] ?> : <?= $c['pseudo'] ?> : <?= $c['contenu'] ?><?php if($c['approuve'] == 0) { ?> - <a href="index.php?type=commentaire&approuve=<?= $c['id'] ?>">Approuver</a><?php } ?> - <a href="index.php?type=commentaire&supprime=<?= $c['id'] ?>">Supprimer</a></li>
      <?php } ?>
   </ul>
</body>
</html>