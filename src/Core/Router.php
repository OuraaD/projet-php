<?php

namespace App\Core;

use App\Controller\Front\CarController;
use App\Controller\Front\HomeController;
use App\Controller\Front\ContactController;
use App\Controller\Front\ConnexionController;
use App\Controller\Admin\AdminController;
use App\Controller\Admin\AdminUserController;




class Router
{
    private  array $routes;
    private $currentController;


    public function __construct()
    {
        $this->add_route('/', function () {
            $this->currentController = new HomeController();
            $this->currentController->index();
        });
        $this->add_route('/reservation/{id}', function ($param) {
            $this->currentController = new CarController();
            $this->currentController->showReservationDetails($param);
        });

        $this->add_route('/voiture/{id}', function ($param) {
            var_dump($param);
        });

        $this->add_route('/contact', function () {
            $this->currentController = new ContactController();
            $this->currentController->showContactForm();
        });

        $this->add_route('/connexion', function () {
            $this->currentController = new ConnexionController();
            $this->currentController->showLoginForm();
        });

        $this->add_route('/login', function () {
            $this->currentController = new ConnexionController();
            $this->currentController->logIn();
        });

        $this->add_route('/dashboard', function () {
            $this->currentController = new AdminController();
            $this->currentController->index();
        });

        $this->add_route('/dashboard/users', function () {
            $this->currentController = new AdminUserController();
            $this->currentController->users();
        });

        $this->add_route('/dashboard/users/modifier/{id}', function ($param) {
            $this->currentController = new AdminUserController();
            $this->currentController->showUserUpdateForm($param);
        });
    }

    // method add_route utilise uniquement par la class
    // 2 parametres chaine de caractere et le deuxieme une fonction

    private function add_route(string $route, callable $closure)
    {
        $route = str_replace('/', '\/', $route);

        $pattern = preg_replace('/\{(\w+)\}/', '(?P<$1>[^\/]+)', $route);

        $pattern = '/^' . $pattern . '$/';

        $this->routes[$pattern] = $closure;
    }

    public function execute()
    {
        $requestUri = $_SERVER['REQUEST_URI'];
        $requestUri = str_replace('/projet-php', '', $requestUri);
        foreach ($this->routes as $key => $closure) {
            if (preg_match($key, $requestUri, $matches)) {
                array_shift($matches);
                $closure($matches);
                return;
            }
        }
        require_once '../templates/error-404.php';
    }
}
