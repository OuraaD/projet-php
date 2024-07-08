<?php

namespace App\Core;

class Router
{
    private  array $routes;

    public function __construct()
    {
        $this->add_route('/', function () {
        });
        $this->add_route('/contactez-nous', function () {
        });
        $this->add_route('/voiture/{id}', function () {
        });
    }

    // method add_route utilise uniquement par la class
    // 2 parametres chaine de caractere et le deuxieme une fonction
    
    private function add_route(string $route, callable $closure)
    {
        $route = str_replace('/', '/', $route);

        $pattern = preg_replace('/{(\w+)}/', '(?P<$1>[^/]+)', $route);

        $pattern = '/^' . $pattern . '$/';

        $this->routes[$pattern] = $closure;
    }

    /**
     * Get the value of routes
     */ 
    public function getRoutes():array
    {
        return $this->routes;
    }

    /**
     * Set the value of routes
     *
     * @return  self
     */ 
    public function setRoutes(array $routes):self
    {
        $this->routes = $routes;

        return $this;
    }
}
