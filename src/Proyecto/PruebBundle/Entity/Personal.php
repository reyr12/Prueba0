<?php

namespace Proyecto\PruebBundle\Entity;

/**
 * Personal
 */
class Personal
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nombre;


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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Personal
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
    public function __toString()
    {
        return $this->nombre;
    }
    /**
     * @var \Proyecto\PruebBundle\Entity\Direccion
     */
    private $direccion;


    /**
     * Set direccion
     *
     * @param \Proyecto\PruebBundle\Entity\Direccion $direccion
     *
     * @return Personal
     */
    public function setDireccion(\Proyecto\PruebBundle\Entity\Direccion $direccion = null)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return \Proyecto\PruebBundle\Entity\Direccion
     */
    public function getDireccion()
    {
        return $this->direccion;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->direccion = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add direccion
     *
     * @param \Proyecto\PruebBundle\Entity\Direccion $direccion
     *
     * @return Personal
     */
    public function addDireccion(\Proyecto\PruebBundle\Entity\Direccion $direccion)
    {
        $this->direccion[] = $direccion;

        return $this;
    }

    /**
     * Remove direccion
     *
     * @param \Proyecto\PruebBundle\Entity\Direccion $direccion
     */
    public function removeDireccion(\Proyecto\PruebBundle\Entity\Direccion $direccion)
    {
        $this->direccion->removeElement($direccion);
    }
}
