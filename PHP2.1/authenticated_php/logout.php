<?php

//script de déconnexion

// récupère la session actuelle
session_start();

//supprime toutes les variables de session
session_unset();
session_destroy();

//redirection
Header("Location: /authenticated.php");
exit();



?>