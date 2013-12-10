<?php

namespace Taller\RutaMicroBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Horario
 */
class Horario
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $horaApertura;

    /**
     * @var \DateTime
     */
    private $horaCierre;

    /**
     * @var string
     */
    private $dias;

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
     * Set horaApertura
     *
     * @param \DateTime $horaApertura
     * @return Horario
     */
    public function setHoraApertura($horaApertura)
    {
        $this->horaApertura = $horaApertura;
    
        return $this;
    }

    /**
     * Get horaApertura
     *
     * @return \DateTime 
     */
    public function getHoraApertura()
    {
        return $this->horaApertura;
    }

    /**
     * Set horaCierre
     *
     * @param \DateTime $horaCierre
     * @return Horario
     */
    public function setHoraCierre($horaCierre)
    {
        $this->horaCierre = $horaCierre;
    
        return $this;
    }

    /**
     * Get horaCierre
     *
     * @return \DateTime 
     */
    public function getHoraCierre()
    {
        return $this->horaCierre;
    }

    /**
     * Set dias
     *
     * @param string $dias
     * @return Horario
     */
    public function setDias($dias)
    {
        $this->dias = $dias;
    
        return $this;
    }

    /**
     * Get dias
     *
     * @return string 
     */
    public function getDias()
    {
        return $this->dias;
    }

    /**
     * Set estado
     *
     * @param boolean $estado
     * @return Horario
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
     * @return Horario
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
