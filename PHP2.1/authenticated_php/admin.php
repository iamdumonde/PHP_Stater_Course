<?php
//Récupérer la session
session_start();

//On teste si la variable de session login existe et contient une valeur
if(empty($_SESSION["login"])){
    //Si la variable est inexistante ou nulle on redirige vers le formulaire de login
    Header("Location: /admin.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="logout.php">Se déconnecter</a>
    <h1>Bienvenu <?= $_SESSION["login"] ?? "...." ?></h1>
</body>
</html>