<?php

class AuthView
{

    /**
     * View pour se connecter
     */
    public function showLoginForm()
    {
        echo <<<LOGIN
        <form method='post' action='index.php?action=login'>
        <input type='text' name='username' placeholder='Username'>
        <input type='password' name='password' placeholder='Your Passcode'>
        <button type='submit'>Se connecter</button>
        </form>
        LOGIN;
    }

    /**
     * 
     * View pour créer un compte
     */
    public function showSignupForm()
    {
        echo <<<SIGNUP
        <form method='post' action='index.php?action=signup'>
        <input type='text' name='username' placeholder='Username'>
        <input type='password' name='password' placeholder='Your Passcode'>
        <button type='submit'>S'inscrire</button>
        </form>
        SIGNUP;
    }



}

?>