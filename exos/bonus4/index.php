<?php
declare(strict_types=1);

function getRobotWicked()
{
    $letCalculate = rand(1, 3) / 3;
    return ($letCalculate === 1 / 3) ? '<< Extermination ! Extermination ! >>' :
        '<< Vous voulez un café ? >>';
}

$wickedBot = getRobotWicked();

//
function getRobotBehavior(){
    $random = rand(1, 3); //générer un nombre aléatoire entre 1 et 3

    //Deux fois sur trois, le robot offre un café
    if($random <= 2) {
        return "Vous voulez un café ?";
    } else {
        return "Extermination ! Extermination !";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Robot-Factory - Bonus 4</title>
</head>

<body>

    <h1>Robot-Factory - Bonus 4</h1>
    <p>
        <strong>
            <?= $wickedBot; ?>
        </strong>
    </p>

    <p>
        <strong>
            <?= getRobotBehavior() ?>
        </strong>
    </p>

</body>

</html>