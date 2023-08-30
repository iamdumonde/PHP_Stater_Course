<?php

//récupère la session actuelle
session_start();

//supprime toutes les variables de session
session_unset();
session_destroy();

//redirection
Header("Location: /index.php");
exit();

?>