<?php

namespace App\Controller;

use App\Controller\AbstractController;
use App\Repository\UserRepository;

class ConnexionController extends AbstractController
{
    public function showLoginForm()
    {
        $this->render('connexion');
    }

    public function logIn()
    {
        // var_dump($_POST);

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (
                isset($_POST['email']) && isset($_POST['password']) && !empty($_POST['email']) &&
                !empty($_POST['password'])
            ) {
                $email = trim($_POST['email']);
                $password = trim($_POST['password']);

                $user = new UserRepository;
                $user=$user->getUserEmail($email);

                if ($user == false) {
                    echo 'Idiot !';
                }
                if ($user['mot_de_passe'] !== $password){
                    echo 'Bienvenue !';
                }
                else{
                    echo'Nimp';
                }
            } 
        }
    }
}
