<?php 
session_start();



print_r($_SESSION);

?>
<!DOCTYPE html>
<html lang="fr">
<head>

    <?php include_once '/views/includes/head.php'?>

    <title><?= ucfirst($page) ?></title>
</head>

<body>

    <?php include_once '/views/includes/header.php'?>

    <form action="admin_view.php" methode="post" class="row">
        <label for="login">Login:</label>
        <input type="text" name="login" id="login">
        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
        <input type="submit" value="Me Connecter">
    </form>



    <?php include_once '/views/includes/footer.php'?>

</body>
</html>