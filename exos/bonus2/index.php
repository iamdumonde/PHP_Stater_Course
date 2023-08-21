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
$date = date("d/m/Y");
$heure = date("H:i:s");

//Choix aléatoire compris entre 1 et 10
$numberChoice = rand(1, 10);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Robot-Factory - Bonus 2</title>
</head>

<body>

    <h1>Robot-Factory - Bonus 2</h1>
    <p>
        <strong>Salut Humain ! Je suis </strong> <?= $robotName; ?> !.
        <!-- ?= est un racourci de ?php echo -->
    </p>

    <p>
        <!-- Affichage de la date et l'heure -->
        Nous sommes le <?= $date; ?>, et il est <?= $heure;?>.
    </p>

    <p>
        J'ai choisi le nombre <strong><?= $numberChoice?></strong>. C'est un nombre <strong>
            <?php
            switch ($numberChoice) {
                case $numberChoice % 2 === 0:
                    # code...
                    echo "pair";
                    break;
            
                default:
                    # code...
                    echo "impair";
                    break;
            } ?>.
        </strong>
    </p>


</body>

</html>