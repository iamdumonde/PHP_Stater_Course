<?php
//Math/Calculator.php => class Calculator{}
//src/Math_operation.php
namespace app\Math;

class Calculator {
    public function add(int | float $number1, int | float $number2){
        return $number1 + $number2;
    }
    
}