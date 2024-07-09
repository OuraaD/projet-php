<?php

namespace App\Controller;

use App\Controller\AbstractController;

class ConnexionController extends AbstractController
{
    public function showLoginForm()
    {
        $this->render('connexion');
    }

    public function logIn()
    {
        var_dump($_POST);

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (
                isset($_POST['email']) && isset($_POST['password']) && !empty($_POST['email']) &&
                !empty($_POST['password'])
            ) {
                $email = trim($_POST['email']);
                $password = trim($_POST['password']);   
            }
        else{
            echo'ERROR 404';
        }
        }
    }
}
