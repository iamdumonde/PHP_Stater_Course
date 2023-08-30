<?php
//Définir une constante
define("LOGIN", "toto");
define("PASSWORD", "emilos");

//Variable qui stocke les erreurs
$errorMessage = "";

//Testons l'envoi du formulaire
if (!empty($_POST)) {
    //Les identifiants sont transmis
    if (!empty($_POST["login"]) && !empty($_POST["pwd"])) {
        //Sont-ils les mêmes que ceux enregistrées dans la BDD
        if ($_POST["login"] !== LOGIN) {
            $errorMessage = "Mauvais login !";
        } else if ($_POST["pwd"] !== PASSWORD) {
            $errorMessage = "Mauvais mot de passe !";
        } else {
            //On enregistre de session
            session_start();
            //
            $_SESSION["login"] = LOGIN;
            //On redirige vers le fichier admin.php
            Header("HTTP/1.1 302 Found");
            Header("Location: /admin.php");
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

    <title>Formulaire d'Authentification</title>
</head>

<body>
    <div class="container">
        <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
            <fieldset>
                <legend>Identifiez-vous!</legend>
                <?php if(!empty($errorMessage))?>
                <p><?= $errorMessage?></p>

                <p>
                    <label for="login">Login :</label>
                    <input type="text" name="login" id="login">
                </p>

                <p>
                    <label for="pwd">Mot de Passe :</label>
                    <input type="text" name="pwd" id="pwd">
                </p>

                <p>
                    <button type="submit">S'authentifier</button>
                </p>
            </fieldset>
        </form>
    </div>
</body>

</html>