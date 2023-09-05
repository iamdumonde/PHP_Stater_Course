<?php
namespace App;
use App\Traits\EmployeeTrait;
use App\Traits\PersonneTrait;

class Programmer{
    use EmployeeTrait;
    use PersonneTrait;

    // use EmployeeTrait, PersonneTrait;

    public function code(){
        echo "Je suis un programmeur !";
    }
 
}