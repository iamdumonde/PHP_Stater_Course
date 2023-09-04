<?php

// include "./User.php";
include "./generic_function.php";
//Le concept d'auto-loading : Donner la capacité à une classe de se charger elle-même
/**
 * Cette fonction permet de charger automatiquement les classes
 */
spl_autoload_register(function ($class_name) {
    echo "A1 <br>";
    $file = $class_name . ".php";
    if(file_exists($file)){
        include $file;
    }
});
spl_autoload_register(function ($class_name) {
    echo "A2 <br>";
    $file = "app/controllers" . $class_name . ".php";
    if(file_exists($file)){
        include $file;
    }
});
spl_autoload_register(function ($class_name) {
    echo "A3 <br>";
    $file = "app/models/" . $class_name . ".php";
    if(file_exists($file)){
        include $file;
    }
});

spl_autoload_register(function ($class_name) {
    $file = $class_name . ".php";
    if (file_exists($file)) {
        require $file;
    }
});

spl_autoload_register(function ($cl) {
    echo "appel autoloading 2 pour la classe $cl<br>";
    require "app/models/" . $cl . ".php";
});

$u1 = new User;
dd($u1);

$x = "User";
$u1 = new $x();

//opérateur des objets (->)
echo $u1->name; //John
echo "<br>";

echo $u1->lastname; //Doe
echo "<br>";

echo $u1->age; //24

//
echo "<br>";
$u1->present();


?>