<?php
$letters = [
    "A",
    "B",
    "C",
    "D",
    "E",
    "F",
    "G",
    "H",
    "I",
    "J",
    "K",
    "L",
    "M",
    "N",
    "O",
    "P",
    "Q",
    "R",
    "S",
    "T",
    "U",
    "V",
    "W",
    "X",
    "Y",
    "Z"
];


$letter1 = $letters[rand(0, count($letters) - 1)];
$letter2 = $letters[rand(0, count($letters) - 1)];
$numBer = rand(1000, 5000);


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
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Robot-Factory</title>
</head>

<body>

    <h1>Robot-Factory</h1>

    <p>
        <?php echo 'Salut Humain ! Je suis' . " " . $letter1 . "" . $letter2 . " - " . $numBer; ?>
    </p>

    <p>
        <strong>Salut Humain ! Je suis </strong> <?php echo $robotName; ?> !.
    </p>
    
    <p>
        <strong>Salut Humain ! Je suis </strong> <?= $robotName; ?> !.
        <!-- ?= est un racourci de ?php echo -->
    </p>


</body>

</html>