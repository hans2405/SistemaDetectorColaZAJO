<?php

namespace Taller\RutaMicroBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ruta
 */
class Ruta
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $posicion;

    /**
     * @var float
     */
    private $latitud;

    /**
     * @var float
     */
    private $longitud;

    /**
     * @var \Taller\RutaMicroBundle\Entity\Calle
     */
    private $calle;

    /**
     * @var \Taller\RutaMicroBundle\Entity\LineaMicro
     */
    private $lineaMicro;


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
     * Set posicion
     *
     * @param string $posicion
     * @return Ruta
     */
    public function setPosicion($posicion)
    {
        $this->posicion = $posicion;
    
        return $this;
    }

    /**
     * Get posicion
     *
     * @return string 
     */
    public function getPosicion()
    {
        return $this->posicion;
    }

    /**
     * Set latitud
     *
     * @param float $latitud
     * @return Ruta
     */
    public function setLatitud($latitud)
    {
        $this->latitud = $latitud;
    
        return $this;
    }

    /**
     * Get latitud
     *
     * @return float 
     */
    public function getLatitud()
    {
        return $this->latitud;
    }

    /**
     * Set longitud
     *
     * @param float $longitud
     * @return Ruta
     */
    public function setLongitud($longitud)
    {
        $this->longitud = $longitud;
    
        return $this;
    }

    /**
     * Get longitud
     *
     * @return float 
     */
    public function getLongitud()
    {
        return $this->longitud;
    }

    /**
     * Set calle
     *
     * @param \Taller\RutaMicroBundle\Entity\Calle $calle
     * @return Ruta
     */
    public function setCalle(\Taller\RutaMicroBundle\Entity\Calle $calle = null)
    {
        $this->calle = $calle;
    
        return $this;
    }

    /**
     * Get calle
     *
     * @return \Taller\RutaMicroBundle\Entity\Calle 
     */
    public function getCalle()
    {
        return $this->calle;
    }

    /**
     * Set lineaMicro
     *
     * @param \Taller\RutaMicroBundle\Entity\LineaMicro $lineaMicro
     * @return Ruta
     */
    public function setLineaMicro(\Taller\RutaMicroBundle\Entity\LineaMicro $lineaMicro = null)
    {
        $this->lineaMicro = $lineaMicro;
    
        return $this;
    }

    /**
     * Get lineaMicro
     *
     * @return \Taller\RutaMicroBundle\Entity\LineaMicro 
     */
    public function getLineaMicro()
    {
        return $this->lineaMicro;
    }
}
