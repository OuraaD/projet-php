<?php

namespace App\Repository;

class CarRepository extends  AbstractRepository
{
    public function getAllcar()
    {
        $stmt = $this->pdo->prepare('SELECT * FROM car');
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}