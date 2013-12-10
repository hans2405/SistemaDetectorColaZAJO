<?php

namespace Taller\RutaMicroBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ticket
 */
class Ticket
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nro;

    /**
     * @var \DateTime
     */
    private $fechaHoraEmision;

    /**
     * @var \DateTime
     */
    private $fechaHoraAtencion;

    /**
     * @var \DateTime
     */
    private $fechaHoraFinalizacion;

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
     * @param string $nro
     * @return Ticket
     */
    public function setNro($nro)
    {
        $this->nro = $nro;
    
        return $this;
    }

    /**
     * Get nro
     *
     * @return string 
     */
    public function getNro()
    {
        return $this->nro;
    }

    /**
     * Set fechaHoraEmision
     *
     * @param \DateTime $fechaHoraEmision
     * @return Ticket
     */
    public function setFechaHoraEmision($fechaHoraEmision)
    {
        $this->fechaHoraEmision = $fechaHoraEmision;
    
        return $this;
    }

    /**
     * Get fechaHoraEmision
     *
     * @return \DateTime 
     */
    public function getFechaHoraEmision()
    {
        return $this->fechaHoraEmision;
    }

    /**
     * Set fechaHoraAtencion
     *
     * @param \DateTime $fechaHoraAtencion
     * @return Ticket
     */
    public function setFechaHoraAtencion($fechaHoraAtencion)
    {
        $this->fechaHoraAtencion = $fechaHoraAtencion;
    
        return $this;
    }

    /**
     * Get fechaHoraAtencion
     *
     * @return \DateTime 
     */
    public function getFechaHoraAtencion()
    {
        return $this->fechaHoraAtencion;
    }

    /**
     * Set fechaHoraFinalizacion
     *
     * @param \DateTime $fechaHoraFinalizacion
     * @return Ticket
     */
    public function setFechaHoraFinalizacion($fechaHoraFinalizacion)
    {
        $this->fechaHoraFinalizacion = $fechaHoraFinalizacion;
    
        return $this;
    }

    /**
     * Get fechaHoraFinalizacion
     *
     * @return \DateTime 
     */
    public function getFechaHoraFinalizacion()
    {
        return $this->fechaHoraFinalizacion;
    }

    /**
     * Set estado
     *
     * @param boolean $estado
     * @return Ticket
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
     * @return Ticket
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
