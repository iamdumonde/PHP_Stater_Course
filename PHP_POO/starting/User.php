<?php

class User
{
    //On peut définir des constates dans une classe : variables accessibles à tous les méthodes d'une classe
    // le mot clé "self" représente la classe, dans ce cas self === User 
    //Par défaut une constante à une visibilité publique
    public const pieds = 2;


    //membres | propriétés | champs

    public $name = "John";
    public $lastname = "Doe";
    public $age = 24;

    //Définition des méthodes : fonction à l'intérieur d'une classe
    //Elles peuvent être public, privées, ou protected
    public function present()
    {
        echo "Je m'appelle $this->name $this->lastname." . "J'ai " . self::pieds . "pieds .";
    }


}


?>