<?php

namespace App;
use App\Traits\EmployeeTrait;
use App\Traits\PersonneTrait;

class Programmer {

    use EmployeeTrait;
    use PersonneTrait;
    public function coding(){
        echo "Je suis un Etudiant Programmer a HIGHFIVE !";
    }
}