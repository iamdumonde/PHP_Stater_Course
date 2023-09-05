<?php
require "./app/User/User.php";
require "./app/Admin/User.php";

//Namespace | Espace de nom

//Permet d'éviter de réperter le namespace
use app\controller\User;
$client1 = new User;


//
use app\admin\User as Admin;
$admin1 = new Admin();
$admin2 = new Admin();
$admin3 = new Admin();


