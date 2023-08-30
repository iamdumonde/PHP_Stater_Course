<?php
//Définition des constantes pour le formulaire
define("NAME", "world");
define("PASSWORD", "azerty");

//ma variable pour les msg d'erreur
$errorMsg = "";

//Test du formulaire
if (!empty($_POST)) {
    //Les identifiants sont transmis
    if (!empty($_POST["name"]) && !empty($_POST["pwd"])) {
        //Faire une vérification des données avec ceux du BDD
        if ($_POST["name"] !== NAME) {
            $errorMsg = "Sorry you must check the name";
        } elseif ($_POST["pwd"] !== PASSWORD) {
            # code...
            $errorMsg = "Sorry you must check the password";
        } else {
            //J'enregistre une session
            session_start();
            //Je récupère le NAME dans session
            $_SESSION["name"] = NAME;
            //Redirection vers la page d'accueil
            Header("HTTP/1.1 302 Found");
            Header("Location: /index.php");
            exit();
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire</title>
</head>

<body>
    <div class="container">
        <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
            <fieldset>
                <legend>Enter your information</legend>
                <p>
                    <label for="name">Name :</label>
                    <input type="text" name="name" id="name">
                </p>

                <p>
                    <label for="pwd">Password :</label>
                    <input type="text" name="pwd" id="pwd">
                </p>

                <p>
                    <button type="submit">submit</button>
                </p>
            </fieldset>
        </form>
    </div>
</body>

</html>