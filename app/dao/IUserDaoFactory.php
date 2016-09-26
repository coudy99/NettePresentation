<?php

namespace App\Dao;

use App\Dao\Doctrine\UserDaoDoctrine;

interface IUserDaoFactory
{

    /**
     * @return UserDaoDoctrine
     */
    public function create();
}

?>