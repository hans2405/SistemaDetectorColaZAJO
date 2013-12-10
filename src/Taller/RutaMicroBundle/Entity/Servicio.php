<?php

namespace Taller\RutaMicroBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Servicio
 */
class Servicio
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
     * @var boolean
     */
    private $estado;

    /**
     * @var \Taller\RutaMicroBundle\Entity\Sucursal
     */
    private $sucursal;


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
     * @return Servicio
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
     * Set estado
     *
     * @param boolean $estado
     * @return Servicio
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    
        return $this;
    }

    /**
     * Get estado
     *
     * @return boolean 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set sucursal
     *
     * @param \Taller\RutaMicroBundle\Entity\Sucursal $sucursal
     * @return Servicio
     */
    public function setSucursal(\Taller\RutaMicroBundle\Entity\Sucursal $sucursal = null)
    {
        $this->sucursal = $sucursal;
    
        return $this;
    }

    /**
     * Get sucursal
     *
     * @return \Taller\RutaMicroBundle\Entity\Sucursal 
     */
    public function getSucursal()
    {
        return $this->sucursal;
    }
}
