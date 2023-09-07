<?php
// function add(int $x, int $y): int{
//   echo $x + $y;
// }

// echo add(15, 15);

// function getLetters(): string {
//    return 
//   [
//     'A', 'B', 'C', 'D', 'E', 'F', 'G,' 'H', 'I', 'J', 'K', 'L', 'M',

//     'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'
//    ];
//   }
//   echo getLetters();

// if (true === true && 0 === 0) {
//    header("Location: index.php");
//    die;
//   }

// 16. Comment qualifier "eat" dans le code suivant ?

// class User {
// public function eat(): void {
//     echo 'salut';
// }
// }

// 3. Qu'affiche ce code ?
// echo getLetters();

// function sayHello(): void
// {
//   echo ("Salut");
// }

// function sayGoodBye(): void
// {
//   echo ("au re");
// }

// $func = "sayHello";
// $func();


declare(strict_types = 1);

// function square(int $x) : int {
//   return $x ** 2;
// }
// $result = square(1.62);
// echo $result;

interface WellMannered {
  public function sayHello(): string;
  }
  
  abstract class Model implements WellMannered {
    protected ?string $uuid = null;
  
  public function setUuid(?string $uuid): void {
     $this->uuid = $uuid;
   }
   public function getUuid(): ?string {
    return $this->uuid;
   }
  }
  
  final class User extends Model {
   private ?string $name = null;
  
   public function setName(?string $name): void {
    $this->name = $name;
   }
   public function getName(): ?string {
    return $this->name;
   }
  }