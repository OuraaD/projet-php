<?php

namespace App\Repository;

class UserRepository extends  AbstractRepository
{
    public function getUserEmail($email)
    {
        $stmt = $this->pdo->prepare('SELECT *FROM user WHERE email= :email');
        $stmt->bindParam(':email', $email, \PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }
}
