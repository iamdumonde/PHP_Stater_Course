<?php

// Ne plus afficher d'erreurs
// le 0 à l'intérieur de la parenthèse signifie ne plus afficher d'erreurs
// error_reporting(0);

//Affiche toutes sortes d'erreurs
// Le -1 signifie affiche les erreurs, il est l'équivalent de E_ALL
// error_reporting(-1);

//Afficher toutes les avertissements
// error_reporting(E_WARNING);

/**
 * E_ERROR: Les erreurs sont affichées par défaut
 * E_WARNING : Les avertissements sont affichés par défaut
 * E_ALL : toutes les erreurs et alertes sont affichées
 */

// require __DIR__ . "/../vendor/autoload.php";

function add($num1, $num2){
    return (string) $num1 + (string) $num2;
}

echo add(50, 23);
echo add('abc', 'udef');