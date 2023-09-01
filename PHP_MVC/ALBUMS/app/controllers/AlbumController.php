<?php
require APP_ROOT . "/app/models/AlbumModel.php";

class AlbumController {

    public function home() {
        $albums = AlbumModel::getAlbums();
        
        //Afficher la liste de tous les albums 
        require (APP_ROOT ."/app/views/home.phtml");
    }

    public function create() {
        //Afficher le formulaire de création d'album
    }

    public function store($title, $artiste) {
        //Enregistrer un nouvel album dans la BDD
    }

    public function show($id) {
        //Afficher les détails d'un album spécifique
    }

    public function edit($id) {
        //éditer le formulaire d'édition d'un album
    }

    public function update($title, $artiste) {
        //Mettre à jour d'édition d'un album
    }

    public function destroy($id) {
        //supprimer un album
    }

}

?>