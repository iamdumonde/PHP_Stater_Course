<?php
declare(strict_types=1);

//Définition du fuseau horaire
date_default_timezone_set("Africa/Porto-Novo");

class Robot
{
    //property
    private $robotName;

    //methods
    public function __construct()
    {
    }

    /** Get & Set  methods */

    public function getRobotName()
    {
        return $this->robotName;
    }

    public function setRobotName($robotName): self
    {
        $this->robotName = $robotName;
        return $this;
    }


    /**
     * Générer un nom aléatoir pour le robot
     * Summary of generateRandomRobotname
     * @return string
     */
    public function generateRandomRobotname()
    {
        if ($_POST['botName']) {
            return $this->robotName = $_POST['botName'];
        } else {
            $letters = range("A", "Z");
            $randomLetters = $letters[array_rand($letters)]
                . $letters[array_rand($letters)];

            $randomNumbers = rand(1000, 9999);
            return $this->robotName = $randomLetters . "-" . $randomNumbers;
        }
    }

    public function greet()
    {
        return "Salut humain !. Je suis ";
    }

    public function chooseRandomNumberAndParity()
    {
        $numberChoosed = rand(1, 10);
        return ($numberChoosed % 2 === 0) ? "J'ai choisi le nombre $numberChoosed. C'est un nombre pair."
            : "J'ai choisi le nombre $numberChoosed. C'est un nombre impair.";
    }

  

    public function reverseName()
    {
        $reverseNameBot = strrev($this->robotName);
        return "Mon nom à l'envers s'écrit $reverseNameBot. Ah. Ah. Ah.";
    }

 


}

$bot = new Robot();

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
            Welcome
            <?php
            echo $_POST["botName"] . "" . '!';
            
            echo "<br>";
            if (!isset($_POST['botName'])) {
                echo $_POST['botName'];
            }

            ?>



        </p>

        <p>
            <?= $bot->greet() . "" . $bot->generateRandomRobotname() ?> !
        </p>
        <p>
            <?= $bot->checkEventOld() ?>.
        </p>
        <p>
            <?= $bot->chooseRandomNumberAndParity() ?>
        </p>
        <p>
            <?= $bot->reverseName() ?>
        </p>
        <p>
            <?= $bot->RobotBehavior() ?>
        </p>
    </div>

</body>

</html>