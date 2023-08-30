<?php
require "../app/Views/AuthView.php";
require "../app/Models/AuthModels.php";
require "../app/Controllers/AuthControllers.php";

/**
 * Le point d'entrée (également appelé front controller)
 * est un fichier PHP unique qui agit comme le point 
 * de départ de app web. Il reçoit les requêtes HTTP 
 * entrantes et le fluw de contrôle vers les composants
 * appropriés(contrôleurs, vues, modèles) en fonction
 * de l'URL ou d'autres paramètres
 */

//Les Instanciations
$view = new AuthView();
$model = new AuthModels();
$controller = new AuthControllers($model);

if ($_GET["action"]) {
    //L'utilisateur veut s'inscrire
    if ($_GET["action"] === "signup") {
        //Appeler le Contrôleur approprié
        $controller->signupAction($_POST['username'], $_POST['password']);
        echo '<pre>';
        print_r($model->users);
        echo '</pre>';

    }

    //L'utilisateur veut se connecter
    if ($_GET["action"] === "login") {
        //Appeler le Contrôleur approprié
        $controller->loginAction($_POST['username']);

    }

} else {
    $view->showLoginForm();
    $view->showSignupForm();
}
?>