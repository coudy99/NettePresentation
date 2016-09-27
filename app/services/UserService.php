<?php

namespace App\Services;

use App\Dao\IUserDao;

class UserService implements IUserService
{

    private $userDao;

    public function __construct(IUserDao $userDao)
    {
        $this->userDao = $userDao;
    }   

    public function getAllUsers()
    {
        return $this->userDao->getAllUsers();
    }

    public function getUserById($id)
    {
        return $this->userDao->getUserById($id);
    }

}

?>