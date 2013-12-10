<?php

namespace Taller\RutaMicroBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints as DoctrineAssert;
use Symfony\Component\Validator\ExecutionContextInterface;


/**
 * Usuario
 */
class Usuario implements UserInterface
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
     * @var string
     */
    private $apellidos;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $salt;

    /**
     * @var string
     */
    private $direccion;

    /**
     * @var \DateTime
     */
    private $fechaAlta;

    /**
     * @var \DateTime
     */
    private $fechaNacimiento;

    /**
     * @var integer
     */
    private $ci;

    /**
     * @var string
     */
    private $foto;

    /**
     * @var \Taller\RutaMicroBundle\Entity\Roles
     */
    private $roles;


    /**
     * Método requerido por la interfaz UserInterface
     */
    public function eraseCredentials()
    {
    }

    /**
     * Método requerido por la interfaz UserInterface
     */
    // public function getRoles()
    // {
    //     return array('ROLE_USUARIO');
    // }

    /**
     * Método requerido por la interfaz UserInterface
     */
    public function getUsername()
    {
        return $this->getEmail();
    }


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
     * @return Usuario
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

    /**
     * Set apellidos
     *
     * @param string $apellidos
     * @return Usuario
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string 
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Usuario
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Usuario
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set salt
     *
     * @param string $salt
     * @return Usuario
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Get salt
     *
     * @return string 
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return Usuario
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set fechaAlta
     *
     * @param \DateTime $fechaAlta
     * @return Usuario
     */
    public function setFechaAlta($fechaAlta)
    {
        $this->fechaAlta = $fechaAlta;

        return $this;
    }

    /**
     * Get fechaAlta
     *
     * @return \DateTime 
     */
    public function getFechaAlta()
    {
        return $this->fechaAlta;
    }

    /**
     * Set fechaNacimiento
     *
     * @param \DateTime $fechaNacimiento
     * @return Usuario
     */
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;

        return $this;
    }

    /**
     * Get fechaNacimiento
     *
     * @return \DateTime 
     */
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    /**
     * Set ci
     *
     * @param integer $ci
     * @return Usuario
     */
    public function setCi($ci)
    {
        $this->ci = $ci;

        return $this;
    }

    /**
     * Get ci
     *
     * @return integer 
     */
    public function getCi()
    {
        return $this->ci;
    }

    /**
     * Set foto
     *
     * @param string $foto
     * @return Usuario
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }

    /**
     * Get foto
     *
     * @return string 
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Set roles
     *
     * @param \Taller\RutaMicroBundle\Entity\Roles $roles
     * @return Usuario
     */
    public function setRoles(\Taller\RutaMicroBundle\Entity\Roles $roles = null)
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * Get roles
     *
     * @return \Taller\RutaMicroBundle\Entity\Roles 
     */
    public function getRoles()
    {
        return array("$this->roles");
        
    }

    public function __sleep()
    {
        return array('id');
    }

public function __toString(){
    return $this->getNombre()." ".$this->getApellidos();
}
}