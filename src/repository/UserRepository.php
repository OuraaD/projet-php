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

    public function getAllUser()
    {
        $stmt = $this->pdo->prepare('SELECT email, pseudo,statut FROM user');
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

}
