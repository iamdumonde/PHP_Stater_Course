<?php

require __DIR__ . "/../vendor/autoload.php";
// require "./math_operation.php";
// require "./string_operation.php";
//Librairie Ramsey
// require __DIR__ . "/vendor/autoload.php";

$x = 12;
$y = 65;

$s1 = "pair";
$s2 = "paires";

use app\Math\Calculator as MathCalculator;
use app\String\Calculator as StringCalculator;
use app\Controllers\UserControllers;

$mathOperation = new MathCalculator();
echo $mathOperation->add($x, $y);

$stringOperation = new StringCalculator();
echo $stringOperation->concatenate($s1, $s2);

$userControllers = new UserControllers(); 
//Librairie de Ramsey
// use Ramsey\Uuid\Uuid;

// $uuid = Uuid::uuid4();
// print_r("UUID: %s", $uuid->toString());