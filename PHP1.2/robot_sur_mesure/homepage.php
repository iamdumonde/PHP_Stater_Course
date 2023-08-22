<?php
require('./generic_functions.php');
require('./robot_functions.php');
$bname = generateRandomRobotname();


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Robot-Factory - Bonus 5</title>
    <style>
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        body .container {
            line-height: 1.5;
            text-align: center;
            background-color: #21B66F;
            padding: 1.2em;
            border-radius: 10px;
            box-shadow: 10px 10px lightblue;
        }

        p {
            color: white;
            font-size: 1.2rem;
        }
    </style>
</head>

<body>
    <div class="container">
        <p>
            <?= greet($bname) . "" .generateRandomRobotname() ?> 
        </p>
        <p>
            <?= checkEventOld() ?>.
        </p>
        <p>
            <?= chooseRandomNumberAndParity() ?>
        </p>
        <p>
            <?= reverseName($bname) ?>
        </p>
        <p>
            <?= RobotBehavior() ?>
        </p>
    </div>

</body>

</html>