<?php

namespace App\Services;

interface IUserService
{

    public function getUserById($id);
    public function getAllUsers();

}

?>