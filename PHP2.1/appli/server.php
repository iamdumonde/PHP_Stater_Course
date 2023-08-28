<?php

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
    
    /**Fonction qui sauvegarde le fichier à l'endroit désiré */
    //Format: img-upload-12455555 .fileExtension
    move_uploaded_file($tmpDir, "./upload/img-upload-" . time() . "." . $fileExtension);
 

    // sauvegarder le fichier sur le serveur  
    echo "Files uploaded";
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

    ?>