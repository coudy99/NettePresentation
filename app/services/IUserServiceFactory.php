<?php

namespace App\Services;

interface IUserServiceFactory
{
    /**
     * @return UserService
     */
    public function create();

}

?>