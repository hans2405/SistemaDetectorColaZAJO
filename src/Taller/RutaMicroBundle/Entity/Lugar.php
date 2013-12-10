<?php

namespace Taller\RutaMicroBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lugar
 */
class Lugar
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
    private $foto;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $calle;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->calle = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Lugar
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
     * Set foto
     *
     * @param string $foto
     * @return Lugar
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return Lugar
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
     * Add calle
     *
     * @param \Taller\RutaMicroBundle\Entity\Calle $calle
     * @return Lugar
     */
    public function addCalle(\Taller\RutaMicroBundle\Entity\Calle $calle)
    {
        $this->calle[] = $calle;
    
        return $this;
    }

    /**
     * Remove calle
     *
     * @param \Taller\RutaMicroBundle\Entity\Calle $calle
     */
    public function removeCalle(\Taller\RutaMicroBundle\Entity\Calle $calle)
    {
        $this->calle->removeElement($calle);
    }

    /**
     * Get calle
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCalle()
    {
        return $this->calle;
    }

    public function __toString(){
        return $this->getNombre();
    }
}