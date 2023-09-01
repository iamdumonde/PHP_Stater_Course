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

$request = $_SERVER['REQUEST_URI'];
//On vérifie s'il y'a une chaîne de requête
$queryString = strpos($request, "?");//string position /rechercher l'index d'un caractère donné

if($request){
    echo ($request = strstr($request, "action=")); //Trouver la première accurence de action
}
echo $queryString;
exit;

if($request === "/"){
    $controller->home();
} 
elseif ($request === '/edit') {
    # code...
} 
elseif ($request === '/update') {
    # code...
} 
elseif ($request === '/destroy') {
    # code...
} 
elseif ($request === '/add') {
    # code...
} 
else {
    require APP_ROOT . "/app/views._404.phtml";
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