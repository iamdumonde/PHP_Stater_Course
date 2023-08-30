<?php

class AuthModels {
    public $users = [];

    /**
     * Fonction qui ajoute un user dans notre tableau
     */
    public function addUser($username, $password){
        //Password_BCRYPT
        $this->users[$username] = password_hash($password, PASSWORD_DEFAULT);
    }

    /**
     * Fonction qui recherce un user dans notre tableau
     */
    public function getUser($username) : null | string{
        return $this->users[$username] ?? null;
    }
}

?>