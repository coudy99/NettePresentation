<?php

namespace App\Dao;

interface IUserDao
{
    public function getUserById($id);
    public function getAllUsers();
}

?>