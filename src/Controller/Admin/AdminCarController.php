<?php

namespace App\Controller\Admin;

use App\Controller\Admin\AbstractAdminController;
use App\Repository\CarRepository;

class AdminCarController extends AbstractAdminController
{
    public function index()
    {
        $recup =new CarRepository;
        $cars =$recup->getAllcar();

        $this->render('dashboard-car',['cars'=>$cars]);
    }

    public function showCarCreateForm()
    {
      $this->render('car');
    }
}
    
    // public function modifyCar()
    // {
    //     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //         $session = new Session();
    //         if (
    //             isset($_POST['id'])
    //             && isset($_POST['model'])
    //             && isset($_POST['description'])
    //             && isset($_POST['prix'])
    //             && isset($_POST['image_pass'])
    //             && !empty($_POST['id'])
    //             && !empty($_POST['model'])
    //             && !empty($_POST['description'])
    //             && !empty($_POST['prix'])
    //             && !empty($_POST['image_pass'])
    //         ) {
    //             $email = trim($_POST['email']);
    //             $pseudo = trim($_POST['pseudo']);
    //             $id = trim($_POST['id']);
    //             $statut = $_POST['statut'] === 'true' ? true : false;


    //             $modify = new CarRepository;
    //             $isUpdateResult = $modify->updateUserById($pseudo, $email, $statut, $id);


    //             if ($isUpdateResult) {
    //                 $session->setFlashMessage("L'utilisateur a été mis à jour avec succès.");
    //                 header('Location:' . SITE_NAME . "/dashboard/users/modifier/$id");
    //                 exit;
    //             } else {
    //                 $session->setFlashMessage("Echec de la mise à jour .");
    //                 header('Location:' . SITE_NAME . "/dashboard/users/modifier/$id");
    //                 exit;
    //             }
    //         }
    //     }
    // }
    // }


