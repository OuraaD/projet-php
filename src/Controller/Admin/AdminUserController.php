<?php

namespace App\Controller\Admin;

use App\Controller\Admin\AbstractAdminController;
use App\Repository\UserRepository;

class AdminUserController extends AbstractAdminController
{

    public function users()
    {
        $repository = new UserRepository();
        $utilisateurs=$repository->getAllUser();
        $this->render('admin/dashboard-users',['users'=>$utilisateurs]);
    }
}
