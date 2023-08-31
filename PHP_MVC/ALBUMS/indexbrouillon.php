<?php

try {
    $dsn = "mysql:host=localhost;dbname=album_app_mvc;charset=utf8mb4";
    $db_username = "root";
    $db_password = "";
    $option = [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];

    $pdo = new \PDO($dsn, $db_username, $db_password, $option);
    echo "You are connected !";

    //NOus informer quand il y a une erreur
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Nous renvoyer toutes les données sous forme de tableau associatif
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    //requête à envoyer sans paramètres
    $sql = "SELECT * FROM `users`;";
    

    //Lancer la requête //query lance directement une requête dans la bdd
    $result = $pdo->query($sql);
    echo '<pre>';
    print_r($result);
    echo '</pre>';

    /**
     * PDO::FETCH_*
     * PDO::FETCH_OBJ : il a pour habitude de renvoyer un objet
     * 
     * PDO::FETCH_ASSOC : renvoi les résulats de recherche sous forme de tableau
     * associatif avec les noms de colonnes(champ) comme clé
     */
    foreach($pdo->query($sql, PDO::FETCH_OBJ) as $user){
        echo '<pre>';
        print_r($user);
        echo '</pre>';
        echo $user->id . " " . $user->usersname ." ". $user->users_password;
    }

    $uname = "Momo";
    $upassword = "1232";

    //marqueurs de substitution
    //marqueurs nommés

    //requête à envoyer avec paramètres
    $sql1 = "INSERT INTO `users`(`usersname`, `users_password`) VALUES (?,?);";

    //prepare la requête pour assurer la sécurité
    $stmt = $pdo->prepare($sql1);

    //Envoi du donnée dans la base de donnée
    /**
     * execute renvoi Vrai ou Faux 
     * s'il arrive à ajouter ou non
     */
    $userAdded = $stmt->execute([$uname, $upassword]);

    if($userAdded){
        echo "User added successfully !";
    } else {
        echo "Add failed !";
    }


} catch (PDOException $e) {
    //$e = $error il s'occupe de l'erreur subvenue
    // echo '<pre>';
    // print_r($e);
    // echo '</pre>';
    exit("Erreur de connexion !" . $e->getMessage() . " à la ligne " . $e->getLine());
}
?>