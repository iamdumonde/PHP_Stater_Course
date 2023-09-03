<?php
//Une constante qui sauvegarde le chemin de base de l'application
//dirname renvoie le parent du dossier que renvoie dir
define("APP_ROOT", dirname(__DIR__));
// echo APP_ROOT;

/**REQUIRE */
require "../config/config.php";
require "../app/controllers/AlbumController.php";

//Instanciation de la class AlbumController de AlbumController.php
$controller = new AlbumController();
// $controller->home();

//Permet de récupérer la page requêtée ou l'action depuis l'URL
$request = $_SERVER['REQUEST_URI'];
//On vérifie s'il y'a une chaîne de requête
$queryString = strpos($request, "?");//string position /rechercher l'index d'un caractère donné

if($queryString){
    $request = substr($request, 0, $queryString); //Trouver la première accurence de action
}
// echo $queryString;
// exit;

//Définition des routes et attribution des controlleurs appropriés
if($request === "/home" || $request === "/"){
    $controller->home();
} 
elseif ($request === "/add") {
    # code...
    echo "adding";
    $controller->addAlbum($_POST["title"], $_POST["artiste"]);
    header('Location : /home'); //Redirection après l'ajout
} 
elseif ($request === "/edit") {
    # code...
} 
elseif ($request === "/update") {
    # code...
} 
elseif ($request === "/destroy") {
    # code...
} 
else {
    // require APP_ROOT . "/app/views._404.phtml";
}


//Une constante prédéfinie ayant une signification particulière 
/**
 * Elle est utilisée pour fournir des infos de contexte
 * Par convention toutes les constantes magiques commencent par deux tirets de 8
 * (__)
 * Il existe également des méthodes magiques comme __construct 
 * quand décide de créer une classe
 */
// echo __DIR__ . "<br>";
// echo __FILE__ . "<br>";
// echo __LINE__ . "<br>";

?>