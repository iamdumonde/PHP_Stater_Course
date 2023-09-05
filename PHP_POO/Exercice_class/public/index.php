<?php
declare(strict_types=1);
use App\Programmer;

require __DIR__ . "/../vendor/autoload.php";

$prog = new Programmer();
$prog->code();

echo '<br>';
$prog->work();

echo '<br>';
$prog->present();
