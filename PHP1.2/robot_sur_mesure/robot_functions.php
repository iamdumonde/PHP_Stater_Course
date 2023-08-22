<?php
declare(strict_types=1);

function generateRandomRobotname()
{
    $letters = range("A", "Z");
    $randomLetters = $letters[array_rand($letters)]
        . $letters[array_rand($letters)];

    $randomNumbers = rand(1000, 9999);
    return $randomLetters . "-" . $randomNumbers;
}

function reverseName(string $name)
{
    $reverseNameBot = strrev($name);
    return "Mon nom à l'envers s'écrit $reverseNameBot. Ah. Ah. Ah.";
}

?>