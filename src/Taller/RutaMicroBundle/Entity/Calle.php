<?php

namespace Taller\RutaMicroBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Calle
 */
class Calle
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
     * @var integer
     */
    private $distancia;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $lugar;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->lugar = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Calle
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
     * Set distancia
     *
     * @param integer $distancia
     * @return Calle
     */
    public function setDistancia($distancia)
    {
        $this->distancia = $distancia;
    
        return $this;
    }

    /**
     * Get distancia
     *
     * @return integer 
     */
    public function getDistancia()
    {
        return $this->distancia;
    }

    /**
     * Add lugar
     *
     * @param \Taller\RutaMicroBundle\Entity\Lugar $lugar
     * @return Calle
     */
    public function addLugar(\Taller\RutaMicroBundle\Entity\Lugar $lugar)
    {
        $this->lugar[] = $lugar;
    
        return $this;
    }

    /**
     * Remove lugar
     *
     * @param \Taller\RutaMicroBundle\Entity\Lugar $lugar
     */
    public function removeLugar(\Taller\RutaMicroBundle\Entity\Lugar $lugar)
    {
        $this->lugar->removeElement($lugar);
    }

    /**
     * Get lugar
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLugar()
    {
        return $this->lugar;
    }

    public function __toString(){
        return $this->getNombre();
    }
}