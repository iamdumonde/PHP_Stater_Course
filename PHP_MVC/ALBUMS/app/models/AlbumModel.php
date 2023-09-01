<?php



// AlbumModel::getAlbums();
class AlbumModel
{
    private static function getConnection()
    {
        //Méthode pour se connecter à la base de donnée
        global $db_host, $db_port, $db_name, $db_username, $db_password;

        try {
            //code...
            //quelques paramètres de connexion
            $options = [
                    //nous avertir de toutes les erreurs de connexion
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    //Renvoyer les données sous forme de donéées associatives
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ];

            //Connexion à la base donnée
            $dsn = "mysql:host=$db_host;dbname=$db_name;port=$db_port;charset=utf8mb4";
            $pdo = new PDO($dsn, $db_username, $db_password, $options);
            echo 'Succesfully';
            return $pdo;

        } catch (\PDOException $e) {
            //
            echo "Erreur " . $e->getMessage() . $e->getLine();
            return null;
        }
    }

    //Méthode pour créer un album (Create)
    public static function addAlbum(string $title, string $artiste)
    {
        //Récupérer ici l'objet de connection à la base de donnée
        $pdo = self::getConnection();
        if($pdo !== null){
            try {
                //code... la requête SQL
                $sql = "INSERT INTO `albums`(`title`, `artiste`) VALUES (?,?);";
                //Statement
                $stmt = $pdo->prepare($sql);
                $albumAdded = $stmt->execute([$title, $artiste]);

                //Assure the success of the add
                if($albumAdded){
                    echo "User added successfully";
                } else {
                    echo "Add failed !";
                }
    
            } catch (\PDOException $e) {
                echo "Erreur " . $e->getMessage();
            }

        }
    }

    //Méthode pour récupérer tous les albums (Read)
    public static function getAlbums()
    {
        //Récupérer ici l'objet de connection à la base de donnée
        $pdo = self::getConnection();
        if($pdo !== null){
            try {
                //code... la Requête sql
                $sql = "SELECT * FROM `albums`;";

                //Statement  ; Requête préparée en Français
                $stmt = $pdo->prepare($sql);
                
                $stmt->execute();//exécuter la requête 
                $albums = $stmt->fetchAll();//renvoyer les résultats trouvés
                // echo '<pre>';
                // print_r($albums);

                return $albums;

                //$results = $pdo->query($sql)->fetchAll;
                //query : lance la requête
                //fetch : affiche le résultats
              
            } catch (\PDOException $e) {
                echo "Erreur " . $e->getMessage();
                return [];
            }

        }
        
    }

    //Méthode pour récupérer un album spécifique (Read)
    public static function getAlbumById(int $id)
    {
        //Récupérer ici l'objet de connection à la base de donnée
        $pdo = self::getConnection();
        if($pdo !== null){
            try {
                //code... SQL Request
                $sql = "SELECT * FROM `albums` WHERE id = ?;";
                //Statement
                $stmt = $pdo->prepare($sql);
                $stmt->execute([$id]);

            } catch (\PDOException $e) {
                echo "Erreur " . $e->getMessage();
            }

        }
    }

    //Méthode pour modifier un album (Update)
    public static function updateAlbum(int $id, string $title, string $artiste)
    {
        //Récupérer ici l'objet de connection à la base de donnée
        $pdo = self::getConnection();
        if($pdo !== null){
            try {
                //code... SQL Request
            
            } catch (\PDOException $e) {
                echo "Erreur " . $e->getMessage();
            }

        }
    }

    //Méthode pour supprimer un album (Delete)
    public static function deleteAlbum(int $id)
    {
        //Récupérer ici l'objet de connection à la base de donnée
        $pdo = self::getConnection();
        if($pdo !== null){
            try {
                //code...
            } catch (\PDOException $e) {
                echo "Erreur " . $e->getMessage();
            }

        }
    }


}

?>