<?php
function gnRandomRobot()
{
    $letters = range("A", "Z"); //A...Z
    $randomLetters = $letters[array_rand($letters)]
        . $letters[array_rand($letters)];

    $randomNumbers = rand(1000, 9999);
    return $randomLetters . "-" . $randomNumbers;
}
//génération d'un nom de robot aléatoire
$robotName = gnRandomRobot();

//La date et l'heure actuelles
date_default_timezone_set('Africa/Porto-Novo');
$date = date("d/m/Y");
$heure = date("H:i:s");


//Le point d'interrogation devant "int" ici signifie juste "que la variable 
//peut être null
function add(int $a, int $b, ?int $c) {
    echo "a =$a , b = $b et c = $c";
}
add(4, 6, null);


//Version corrigée
//Définition du fuseau horaire
date_default_timezone_set('Africa/Porto-Novo');
$currentDate = date("d-m-Y"); //21-8-2023
$currentTime = date("H:i:s"); //1

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Robot-Factory - Bonus 1</title>
</head>

<body>

    <h1>Robot-Factory - Bonus 1</h1>
    <p>
        <strong>Salut Humain ! Je suis </strong> <?= $robotName; ?> !.
        <!-- ?= est un racourci de ?php echo -->
    </p>

    <p>
        <!-- Affichage de la date et l'heure -->
        Nous sommes le <?= $date; ?>, et il est <?= $heure;?>.
    </p>

    <p>
        <!-- Affichage de la date et l'heure -->
        Nous sommes le <?= $currentDate; ?>, et il est <?= $currentTime;?>.
    </p>

  



</body>
</html>