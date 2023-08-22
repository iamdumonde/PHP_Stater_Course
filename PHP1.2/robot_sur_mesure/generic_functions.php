<?php

//Définition du fuseau horaire
date_default_timezone_set("Africa/Porto-Novo");

function checkEventOld()
{
    $date = date("d/m/Y");
    $heure = date("H:i:s");
    return "Nous sommes le $date, il est est $heure";
}

function RobotBehavior()
{
    $randNumb = rand(1, 3);
    return ($randNumb <= 2) ? 'Voulez-vous un café ?' : 'Extermination ! Exterminatin !';
}

function chooseRandomNumberAndParity()
{
    $numberChoosed = rand(1, 10);
    return ($numberChoosed % 2 === 0) ? "J'ai choisi le nombre $numberChoosed. C'est un nombre pair."
        : "J'ai choisi le nombre $numberChoosed. C'est un nombre impair.";
}

function greet($lname)
{
    return "Salut humain !. Je suis " . $lname;
}



?>