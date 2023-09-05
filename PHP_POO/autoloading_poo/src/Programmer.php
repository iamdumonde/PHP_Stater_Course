<?php

namespace App;

class Programmer extends User
{
    // public array $languages;
    public function __construct(
        //La promotion du constructor
        string $n,
        string $p,
        int $a,
        public array $languages
    )
    {
        echo "constructeur programmerur";
        //appel du constructeur parent
        parent::__construct($n, $p, $a);

        echo "Fin constructeur programmeur";
    }

}
// class Programmer  extends User {
//     public array $languages;
//     public function __construct(string $n, string $p, int $a, array $languages){
//         echo "constructeur programmerur";
//         //appel du constructeur parent
//         parent::__construct($n, $p, $a);
//         //Initialisze la propriété languages
//         $this->languages = $languages;

//         echo "Fin constructeur programmeur";
//     }

// }