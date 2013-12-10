<?php

namespace Taller\RutaMicroBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


use Symfony\Component\Security\Core\Role\RoleInterface;

/**
 * Roles
 */
class Roles implements RoleInterface
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombre;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Roles
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

     public function getRole() {
        return $this->getNombre();
    }

    public function __toString(){
        return $this->getNombre();
    }


}