<?php

#Fonction qui démarre une section côté serveur
//session_start(); permet d'initialiser une session PHP, et il faut le mettre avant tout texte;
session_save_path("C:/laragon/tmp");

/**
 * session_start() ne crée pas forcément une nouvelle session
 * elle peut en créer quand on en a pas 
 * ou récupérer l'ancienne session
 */
session_start();
// if(empty($_SESSION['nom'])){
//     $_SESSION['nom'] = "John Doe";
// }

// echo "<p>Hello {$_SESSION['nom']}</p>";

// echo "<br>";

// print_r($_SESSION);


/**Fonction permettant de créer un cookie */
// setcookie(); prend "la clé", "la valeur", "la date d'expiration"
// setcookie("school", "HighFive", time() + 60 * 60);


//$_COOKIE est la superglobale permettant d'accéder au cookie côté client
/**
 * Une superglobale est une variable pré-définie qui stocke des informations 
 * et des données importantes accessibles depuis n'importe où dans 
 * le script PHP sans avoir besoin de la déclarer explicitement comme variable classique:
 * Exemple: $_COOKIE; $_POST; $_GET; $_SESSION; $_FILES
 */

/**fonction qui nous dit où sont stockés les sections côté serveur */
echo "<br>";
echo "Session Path = " . session_save_path();

echo "<br>";
echo "session ID = " . session_id();

echo "<br>";
print_r($_COOKIE);

echo "<br>";
$_SESSION["firstname"] = "John";

echo "<br>";
$_SESSION["lastname"] = "Doe";

echo "<br>";
$_SESSION["age"] = 24;

echo "<pre>";
print_r($_SESSION);
echo "</pre>";

$serializedData = 'firstname|s:4:"John";lastname|s:3:"Doe";age|i:24';
//données réelles (nom sérialisées)
$data = unserialize($serializedData);
echo '<pre>';
print_r($data);
echo '</pre>';

?>