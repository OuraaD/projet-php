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
        $stmt = $this->pdo->prepare('SELECT * FROM user');
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public  function getUserById($param)
    {
        $stmt = $this->pdo->prepare('SELECT * FROM user WHERE id= :id');
        $stmt->bindParam(':id', $param, \PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function updateUserById( $pseudo,$email, $statut, $id)
    {
        $stmt = $this->pdo->prepare('UPDATE user SET email= :email, pseudo= :pseudo, statut= :statut WHERE id= :id');
        $stmt->bindParam(':pseudo', $pseudo, \PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, \PDO::PARAM_STR);
        $stmt->bindParam(':statut', $statut, \PDO::PARAM_STR);
        $stmt->bindParam(':id', $id, \PDO::PARAM_INT);

        return $stmt->execute();
    }
}
