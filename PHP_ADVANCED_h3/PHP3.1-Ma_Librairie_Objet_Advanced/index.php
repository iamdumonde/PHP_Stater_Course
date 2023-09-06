<?php
session_start();
require "view/form.php";
$form = new Formulaire("Formulaire d'authentification","Identifiez vous","Login ","Mot de passe :","controler/traitement.php");
if ((isset($_SESSION['login'])) && ($_SESSION['login'] == "echec")) {
	$form->setMsg("Veuillez renseigner les 2 champs");
} else {
	$form->setMsg("");
}
if (isset($_SESSION['message'])) {
	$form->setMsg($_SESSION['message']);
}
$result = $form->init("view/index.tpl");
$form->affiche($result);
?>
