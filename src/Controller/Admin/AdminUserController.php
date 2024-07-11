<?php

namespace App\Controller\Admin;

use App\Controller\Admin\AbstractAdminController;
use App\Repository\UserRepository;
use App\Core\Session;

class AdminUserController extends AbstractAdminController
{

    public function users()
    {
        $repository = new UserRepository();
        $utilisateurs = $repository->getAllUser();
        $this->render('dashboard-users', ['users' => $utilisateurs]);
    }

    public function showUserUpdateForm($param)
    {
        // $param['id']
        $user = new UserRepository();
        $recup = $user->getUserById($param['id']);
        $this->render('user-update-form', ['user' => $recup]);
    }
    public function modifyUserById()
    {
    
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $session=new Session();
            if (
                isset($_POST['email'])
                && isset($_POST['pseudo'])
                && isset($_POST['id'])
                && !empty($_POST['email'])
                && !empty($_POST['pseudo'])
                && !empty($_POST['id'])


            ) {
                $email = trim($_POST['email']);
                $pseudo = trim($_POST['pseudo']);
                $id = trim($_POST['id']);

                $modify=new UserRepository;
                $isUpdateResult=$modify->updateUserById($email,$pseudo,$id);

                if ($isUpdateResult) {
                    $session->setFlashMessage("L'utilisateur a été mis à jour avec succès.");
                    header('Location:'. SITE_NAME .'/dashboard/users/modifier');
                    exit;
                }else{
                    $session->setFlashMessage("Echec de la mise à jour .");
                    header('Location:'. SITE_NAME .'/dashboard/users/modifier');
                    exit;
                }

            }
        }
    }
}
