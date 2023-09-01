## MySQLi (MySQL Improved) et PDO(PHP Data Object)
sont des extensions PHP qui permettent aux devs d'interagir avec les bases de données relationnelles; telles que MySQL, SQLite, PostgreSQL...

'MySQLi' est spécifiquement connu pour MySQL.
'PDO' est plus générique et prend en charge plusieurs types de bases de données.

# Connection avec PDO
Pour utiliser PDO, il daut plus au moins 5 étapes:

1. Créer une connexion a la BDD,
```PHP
/** DSN: Data Source Name est une chaîne de caractère utilisée 
 * pour identifier et spécifier la BDD                  
 */

$dsn = "mysql:host=localhost;dbname:base_de_données";
$username = "root";
$password = "";

$pdo = new PDO($dsn, $db_username, $db_password);
```

2. Exécuter une requête;

```PHP
//requête avec des paramètres
$pdo->query("SELECT * FROM `users`;")

//requête sans paramètres
    foreach($pdo->query($sql, PDO::FETCH_OBJ) as $user){
        echo '<pre>';
        print_r($user);
        echo '</pre>';
        echo $user->id . " " . $user->usersname ." ". $user->users_password;
    }


```
3. Récupérer les données;
4. Fermer la connexion