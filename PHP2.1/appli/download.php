<?php
echo "Bienvenue Sur la page de téléchargement";
// var_dump($_GET);

//On a bien demandé à télécharger un fichier
if(isset($_GET['file']) && !empty($_GET['file'])){
    $filePath = "upload/" . $_GET['file'];

    echo $_filePath;

    // Si le fichier existe 
    if(file_exists($filePath)){
        //Définir les en-têtes pour forcer le téléchargement du fichier
        /**
         * Indique que le contenu du fichier est de type binaire et que le navigateur doit traiter le fichier
         * comme un téléchargement plutot que de tenter de l'afficher
         */
        header("Content-Type: application/octet-stream");

        //
        header("Content-Disposition: attachment; filename=") . basename($filePath);
        header("Content-Length: ". filesize($filePath));

        //Lire et afficher le contenu du fichier
        readfile($filePath);

    } else {
        //affiche un message d'erreur
        echo "Le fichier n'existe pas !";
    }

}

?>