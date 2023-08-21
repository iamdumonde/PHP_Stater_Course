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
                case '1':
                    # code...
                    echo "impair";
                    break;
                case '2':
                    # code...
                    echo "pair";
                    break;
                case '3':
                    # code...
                    echo "impair";
                    break;
                case '4':
                    # code...
                    echo "pair";
                    break;
                case '5':
                    # code...
                    echo "impair";
                    break;
                case '6':
                    # code...
                    echo "pair";
                    break;
                case '7':
                    # code...
                    echo "impair";
                    break;
                case '8':
                    # code...
                    echo "pair";
                    break;
                case '9':
                    # code...
                    echo "impair";
                    break;
                case '10':
                    # code...
                    echo "pair";
                    break;
            
                default:
                    # code...
                    echo "On y retrouve rien";
                    break;
            } ?>.
        </strong>
    </p>

    <p>
        << Mon nom à l'envers <?= strrev($robotName) ?> !.
        Ah. Ah. Ah. >>
        <!-- ?= est un racourci de ?php echo -->
    </p>


</body>

</html>