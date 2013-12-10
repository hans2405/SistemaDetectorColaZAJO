<?php
/*
 * (c) Taller de grado 1 gestion 2013-1
 *
 */

namespace Taller\RutaMicroBundle\Entity;

use Doctrine\ORM\EntityRepository;

class RutaRepository extends EntityRepository
{
	/**
     * Devuelve la ruta de dicha linea
     */

    public function findRutaMicro($linea)
    {
        $em = $this->getEntityManager();

        $consulta = $em->createQuery("
   			SELECT r
            FROM RutaMicroBundle:Ruta r JOIN r.lineaMicro l
            WHERE l.nombre = :linea
        ");
        $consulta->setParameter('linea', $linea);
        $consulta->useResultCache(true, 3600);

        return $consulta->getResult();
    }

     /**
     * Devuelve la ruta segun la calle
     */
    
    public function findRutaCalle($lugar, $calle)
    {
        $em = $this->getEntityManager();

        $consulta = $em->createQuery("
            SELECT r
            FROM RutaMicroBundle:Ruta r JOIN r.calle c
            WHERE c.nombre = :calle
        ");
        // $consulta->setParameter('lugar', $lugar);
        $consulta->setParameter('calle', $calle);
        $consulta->useResultCache(true, 3600);

        return $consulta->getResult();
    }

    // /**
    //  * Devuelve la ruta segun el lugar o calle
    //  */
    
    // public function findRutaLugarCalle($lugar, $calle)
    // {
    //     $em = $this->getEntityManager();

    //     $consulta = $em->createQuery("
    //         SELECT r
    //         FROM RutaMicroBundle:Ruta r JOIN r.calle c JOIN c.lugar l
    //         WHERE c.nombre = :calle or l.nombre = :calle
    //     ");
    //     // $consulta->setParameter('lugar', $lugar);
    //     $consulta->setParameter('calle', $calle);
    //     $consulta->useResultCache(true, 3600);

    //     return $consulta->getResult();
    // }

    /**
     * Devuelve la Linea de micro segun el lugar o calle
     */
    
    public function findMicroLugarCalle($lugar, $calle)
    {
        $em = $this->getEntityManager();

        $consulta = $em->createQuery("
            SELECT DISTINCT m.nombre
            FROM RutaMicroBundle:Ruta r JOIN r.lineaMicro m JOIN r.calle c JOIN c.lugar l
            WHERE c.nombre = :calle or l.nombre = :calle
        ");
        // $consulta->setParameter('lugar', $lugar);
        $consulta->setParameter('calle', $calle);
        $consulta->useResultCache(true, 3600);

        return $consulta->getResult();
    }

    /**
     * Devuelve la Linea de micro segun la calle
     */
    
    public function findMicroCalle($lugar, $calle)
    {
        $em = $this->getEntityManager();

        $consulta = $em->createQuery("
            SELECT DISTINCT m.nombre
            FROM RutaMicroBundle:Ruta r JOIN r.lineaMicro m JOIN r.calle c
            WHERE c.nombre = :calle
        ");
        // $consulta->setParameter('lugar', $lugar);
        $consulta->setParameter('calle', $calle);
        $consulta->useResultCache(true, 3600);

        return $consulta->getResult();
    }

}