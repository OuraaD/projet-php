<?php

namespace App\Core;

class Session
{
    public function __construct()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
    }

    public function  setFlashMessage(string $message, string $importance = 'warning')
    {
        $_SESSION['message'] =

            '<div class="alert alert-' . $importance . ' alert-dismissible fade show" role="alert">
    ' . $message . '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
    }
    public function displayFlashMessage()
    {
        if (isset($_SESSION['message'])) {
            echo $_SESSION['message'];
            unset($_SESSION['message']);
        }
    }
    public function createSession(array $array)
    {
        $_SESSION['LOGGED_USERNAME'] = $array['pseudo'];
        $_SESSION['LOGGED_ID'] = $array['id'];
        if ($array['statut'] == true) {
            $_SESSION["LOGGED_ADMIN"] = true;
        }
    }
}
