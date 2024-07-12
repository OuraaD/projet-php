<?php

namespace App\Controller\Front;

use App\Controller\Front\AbstractController;
use App\Core\Session;
use App\Repository\UserRepository;

class ConnexionController extends AbstractController
{
    public function showLoginForm(): void
    {
        $this->render('connexion');
    }

    public function logOut()
    {
        session_start();
        session_unset();
        session_destroy();
        header("Location:" . SITE_NAME . '/');
        exit;
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

                $session->createSession($user);

                if ($user && $user['mot_de_passe'] == $password) {
                    $session->setFlashMessage('Vous etes connecté', 'success');
                    header("Location:" . SITE_NAME . '/');
                    exit;
                }
            }
        }
    }
}
