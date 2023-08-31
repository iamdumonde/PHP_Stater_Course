<?php

//Testons l'envoi du formulaire
if(!empty($_POST)) {
    //Les identifiants sont transmis
    if(!empty($_POST["name"]) && !empty($_POST["pwd"])){
        //récupère les données entrées par les utilisateurs
        $username = $_POST['name'];
        $user_pwd = $_POST['pwd'];
        $user_pwd = password_hash($_POST['pwd'], PASSWORD_DEFAULT);
        // echo "Username :" ."". $username ."". "user_pwd :" ."". $user_pwd;

        try {
            $dsn = "mysql:host=localhost; dbname=album_app_mvc;charset=utf8mb4";
            $db_username = "root";
            $db_password = "";

            //INstanciation de la classe PDO
            $pdo = new \PDO($dsn, $db_username, $db_password);
            echo "You are connected";

            //Send a request with parameters
            $sql = "INSERT INTO `users`(`usersname`, `users_password`) VALUES (?,?);";

            //Prepare my request to assure the security of my database
            $stmt = $pdo->prepare($sql);

            //Send a data to into a database
            $userAdded = $stmt->execute([$username, $user_pwd]);

            if($userAdded){
                echo "User added successfully";
            } else {
                echo "Add failed !";
            }

        } catch (PDOException $e){
            exit("Erreur de connexion !" . $e->getMessage() . "à la ligne " . $e->getLine());
        }
    } else {
        echo "Wow";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
<div class="container">
        <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
            <fieldset>
                <legend>Inscrivez-vous!</legend>
                <?php if(!empty($errorMessage))?>
                <p><?= $errorMessage?></p>

                <p>
                    <label for="name">Name :</label>
                    <input type="text" name="name" id="name">
                </p>

                <p>
                    <label for="pwd">Mot de Passe :</label>
                    <input type="text" name="pwd" id="pwd">
                </p>

                <p>
                    <button type="submit">S'inscrire</button>
                </p>
            </fieldset>
        </form>
    </div>
</body>
</html>