<?php

namespace Dex\ManagerBundle\Entity;

use Sonata\UserBundle\Entity\BaseUser as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Sonata\UserBundle\Model\UserInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class User extends BaseUser implements UserInterface
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


    public function __construct() {
        parent::__construct();
    }
    /**
     * Get id
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}