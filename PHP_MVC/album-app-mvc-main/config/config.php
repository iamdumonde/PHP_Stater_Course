<?php

//Configuration des paramètres de connexion à la base de données
$dataBase = new PDO(
    'mysql:host=localhost;dbname=album_app_bdd',
    'root',
    ''
);
// class PDO {
//     private $path;
//     private $mySqlUser;

//     public function __construct(){}
// }
?>