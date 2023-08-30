<?php

// require "../Models/AuthModels.php";

class AuthControllers
{
    private $model;
    public function __construct(AuthModels $model)
    {
        $this->model = $model;
    }

    public function signupAction($username, $password)
    {
        //Demande au Model d'ajouter l'utilisateur
        $this->model->addUser($username, $password);
    }

    public function loginAction(string $username)
    {
        //Demande au Model de retourner l'utilisateur
        return $this->model->getUser($username);
    }
}

?>