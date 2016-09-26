<?php

namespace App\Dao\Doctrine;

use App\Dao;
use Kdyby\Doctrine\EntityManager;
use App\Model\User;
use App\Dao\IUserDao;

class UserDaoDoctrine implements IUserDao
{
    private $EntityManager;

    public function __construct(EntityManager $EntityManager)
    {
        $this->EntityManager = $EntityManager;
    }

    public function getUserById($id)
    {
        return $this->EntiryManager->getRepository(User::getClassName())->findById($id);
    }

    public function getAllUsers()
    {
        return $this->EntityManager->getRepository(User::getClassName())->findAll();
    }

}

?>