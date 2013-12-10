<?php

namespace Taller\RutaMicroBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Caja
 */
class Caja
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $nro;

    /**
     * @var string
     */
    private $descripcion;

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
     * Set nro
     *
     * @param integer $nro
     * @return Caja
     */
    public function setNro($nro)
    {
        $this->nro = $nro;
    
        return $this;
    }

    /**
     * Get nro
     *
     * @return integer 
     */
    public function getNro()
    {
        return $this->nro;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Caja
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    
        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set estado
     *
     * @param boolean $estado
     * @return Caja
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
     * @return Caja
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
