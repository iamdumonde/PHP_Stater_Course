<?php
define("MAX_SIZE", 3000000);
// L'utilisateur a soumis, ou a uploadé un fichier
if (isset($_POST['submit']) && isset($_FILES['photo_profile'])) {
    // récupérer les informations du fichier (nom, extension, chemin)
    echo '<pre>';
    var_dump($_FILES['photo_profile']);
    echo '</pre>';

    $fileName = $_FILES['photo_profile']['name'];
    $tmpDir = $_FILES['photo_profile']['tmp_name'];

    /** Fonction pour récupérer l'extension du fichier */
    $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    echo "file Extension = $fileExtension";
    echo '<br>';

    //ne accepter que les jpg, png, jpeg
    echo $fileExtension;
    $allowFiles = ['jpg', 'png', 'jpeg'];
    if (in_array($fileExtension, $allowFiles)) {
        //vérifier qu'il n'y a pas d'erreur
        echo '<pre>';
        print_r($_FILES);
        echo '</pre>';

        if ($_FILES["photo_profile"]["error"] === 0) {
            // il n'y a pas d'erreurs
            if ($_FILES["photo_profile"]["size"] <= MAX_SIZE) {
                //La taille est inférieure à 3M
                /**Fonction qui sauvegarde le fichier à l'endroit désiré */
                //Format: img-upload-12455555 .fileExtension
                move_uploaded_file($tmpDir, "./upload/" . uniqid("img-") . "." . $fileExtension);

                // sauvegarder le fichier sur le serveur  
                echo "Files uploaded";
            } else {
                //La taille trop élevée
                echo "Fichier trop volumineux (>" . MAX_SIZE . "octets)";
            }
        } else {
            echo 'Une erreur a été rencontrée lors du chargement du fichier ! Réessayez svp!';
        }


    } else {
        echo 'Fichiers $fileExtension non autorisés !' . "<br>";
        echo 'Formats autorisés: ' . implode(", ", $allowFiles);
    }

} else {
    // rediriger ce dernier sur la page de formulaire
    echo "No files uploaded";

    // rediriger ce dernier sur la page de formulaire
    header('Location:/index.php?errors=no_file_uploaded');
}

// Affiche les informations du formulaire
// echo '<pre>';
// print_r($_FILES);
// echo '</pre>';

// Affiche les informations du formulaire et le type de chacun d'eux
// echo '<pre>';
// var_dump($_FILES);
// echo '</pre>'

//les valeurs fausses en php
//false, 0, 0.0, "0", -0.0, "", [], null
// echo (bool) "0";

?>