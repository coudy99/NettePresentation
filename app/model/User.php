<?php

namespace App\Model;

use Doctrine\ORM\Mapping as ORM;
use Kdyby\Doctrine\Entities\BaseEntity;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class User extends BaseEntity
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $login;

    /**
     * @ORM\Column(type="string")
     */
    protected $password;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    protected $last_login;

    /**
     * @ORM\Column(type="string")
     */
    protected $roles;

}

?>