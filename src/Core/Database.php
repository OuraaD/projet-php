<?php

namespace App\Core;

class Database
{
    private static string $host='localhost';
    private static string $dbName='car_location';
    private static string $userName='root';
    private static string $password;
    private static  $connexion;

    public static function initConnection():
    {
    }



    /**
     * Get the value of connexion
     */ 
    public function getConnexion()
    {
        return $this->connexion;
    }
}