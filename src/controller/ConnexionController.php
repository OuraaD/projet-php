<?php

namespace App\Controller;

use App\Controller\AbstractController;
use App\Core\Session;
use App\Repository\UserRepository;

class ConnexionController extends AbstractController
{
    public function showLoginForm(): void
    {
        $this->render('connexion');
    }

    public function logIn()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $session = new Session();
            if (
                !isset($_POST['email']) ||
                !isset($_POST['password']) ||
                empty($_POST['email']) ||
                empty($_POST['password'])
            ) {
                $session->setFlashMessage('Veuillez remplir tous les champs', 'danger');
                header("Location:" . SITE_NAME . '/connexion');
            } else {
                $email = trim($_POST['email']);
                $password = trim($_POST['password']);

                $user = new UserRepository();
                $user = $user->getUserEmail($email);

                if (!$user || $user['mot_de_passe'] !== $password) {
                    $session->setFlashMessage('Email ou mot de passe incorrect', 'danger');
                    header("Location:" . SITE_NAME . '/connexion');
                }

                if ($user && $user['mot_de_passe'] == $password) {
                    $session->setFlashMessage('Vous etes connecté', 'success');
                    header("Location:" . SITE_NAME . '/connexion');
                }
            }
        } 
    }
}
