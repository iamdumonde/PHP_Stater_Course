<?php
require APP_ROOT . "/app/models/AlbumModel.php";

class AlbumController
{

    public function home()
    {
        $albums = AlbumModel::getAlbums();
        //Afficher la liste de tous les albums 
        require(APP_ROOT . "/app/views/home.phtml");
    }

    public function store(string $title, string $artiste)
    {
        //Enregistrer un nouvel albulm
        AlbumModel::addAlbum($title, $artiste);
        require APP_ROOT . "/app/views/addAlbum.phtml";
    }

    public function destroy($id)
    {
        //supprimer un album
        AlbumModel::deleteAlbum($id);
        //redirection sur la page d'accueil
        header("HTTP1.1 302 Found");
        header("Location: /home");
    }

    public function editAlbum(int $id)
    {
        //éditer le formulaire d'édition d'un album

        //Rechercher l'album à modifier dans la base de donnée
        $album = AlbumModel::getAlbumById($id);
        //Require de la bonne vue
        require(APP_ROOT . "/app/views/editAlbum.phtml");
    }

    public function updateAlbum(int $id, string $title, string $artiste)
    {
        //Mettre à jour d'édition d'un album
        AlbumModel::updateAlbum($id, $title, $artiste);
        header("HTTP1.1 302 Found");
        header("Location: /home");
    }

    public function show($id)
    {
        //Afficher les détails d'un album spécifique
    }



}

?>