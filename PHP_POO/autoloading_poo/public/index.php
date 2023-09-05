<?php
declare(strict_types=1);

use App\Programmer;
use App\User;
use App\Rectangle;
use App\Shape;

require __DIR__ . "/../vendor/autoload.php";

$rect1 = new Rectangle();
$rect1->present();


// $u1 = new User("John", "Doe", 23);
// $prog = new Programmer("John", "Doe", 24, ["HTML", "CSS", "JS"]);

// echo "<pre>";
// var_dump($prog);
// echo "<pre>";
// var_dump($u1);
// // var_dump($u1->age);

// //
// echo User::PIEDS;

// class ConnexionDB {
//     private static $instance = null;

//     private $pdo;

//     private static $id;

//     private function __construct(){
//         echo "constructeur";
//         $this->id = rand(1000, 9999);
//         //INitialisation de la connexion
//         $this->pdo = new PDO("mysql:host=localhost;dbname=album_app_mvc2;", "root", "");
//     }

//     public static function getInstance(){
//         if(self::$instance === null){
//             self::$instance = new self();
//         }
//         echo "connexion id = " . self::$id;
//         return self::$instance;
//     }
// }

// $db = ConnexionDB::getInstance();
// $db2 = connexionDB::getInstance();
// class DB {

//     private $pdo;

//     private $id;

//     public function __construct(){
//         $this->id = rand(1000, 9999);
//         //INitialisation de la connexion
//         $this->pdo = new PDO("mysql:host=localhost;dbname=album_app_mvc2;", "root", "");
//         echo "connexion id =" .$this->id . "<br>";
//     }

// }

// $dbase1 = new DB();
// $dbase2 = new DB();
// $dbase3 = new DB();
// $dbase4 = new DB();

