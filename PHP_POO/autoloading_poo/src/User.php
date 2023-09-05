<?php

namespace App;

// class User
// {
//     public string $nom;
//     public string $prenom;
//     public int $age;

//     public function __construct(string $nom, string $prenom, int $age)
//     {
//         echo "constructeur User";

//         $this->nom = $nom;
//         $this->prenom = $prenom;
//         $this->age = $age;
        
//         echo " Fin constructeur User";

//     }

// }
class User
{
  public const PIEDS = 2;

    public function __construct(
        //La promotion du constructor
        public string $nom,
        public string $prenom,
        public int $age
    )
    {
        echo "constructeur User";
        echo " Fin constructeur User";
    }

}