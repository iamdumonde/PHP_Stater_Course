<?php

namespace App;

abstract class Shape implements ShapeInterface
{
    //Force les sous-classes à définir la méthode area()
    public function area(){
        echo "longueur * largeur";
    }
    public function present()
    {
        echo "Je suis une forme";
    }
}