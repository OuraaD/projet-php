<?php

namespace App\Controller\Admin;

use App\Controller\Admin\AbstractAdminController;
use App\Repository\UserRepository;

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
        $this->render('user-update-form', ['id' => $param['id']]);
    }
}
