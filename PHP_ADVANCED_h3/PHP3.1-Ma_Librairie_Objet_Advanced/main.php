<?php
session_start();
if(empty($_SESSION['login'])) 
{
  header('Location: http://localhost/index.php');
  exit();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
  <head>
    <title>Administration</title>
  </head>
  <body>
 <?php
    echo 'Bienvenue ', $_SESSION['login'];
  ?>
  </body>
</html>