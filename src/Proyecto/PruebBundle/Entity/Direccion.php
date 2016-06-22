<?php

namespace Proyecto\PruebBundle\Entity;

/**
 * Direccion
 */
class Direccion
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $calle;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set calle
     *
     * @param string $calle
     *
     * @return Direccion
     */
    public function setCalle($calle)
    {
        $this->calle = $calle;

        return $this;
    }

    /**
     * Get calle
     *
     * @return string
     */
    public function getCalle()
    {
        return $this->calle;
    }
   
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $personal;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->personal = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add personal
     *
     * @param \Proyecto\PruebBundle\Entity\Personal $personal
     *
     * @return Direccion
     */
    public function addPersonal(\Proyecto\PruebBundle\Entity\Personal $personal)
    {
        $this->personal[] = $personal;

        return $this;
    }

    /**
     * Remove personal
     *
     * @param \Proyecto\PruebBundle\Entity\Personal $personal
     */
    public function removePersonal(\Proyecto\PruebBundle\Entity\Personal $personal)
    {
        $this->personal->removeElement($personal);
    }

    /**
     * Get personal
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPersonal()
    {
        return $this->personal;
    }
}
