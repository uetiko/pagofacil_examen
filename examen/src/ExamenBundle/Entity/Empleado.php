<?php

namespace ExamenBundle\Entity;

/**
 * Empleado
 */
class Empleado
{
    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $apPaterno;

    /**
     * @var string
     */
    private $apMaterno;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Empleado
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
     * Set apPaterno
     *
     * @param string $apPaterno
     *
     * @return Empleado
     */
    public function setApPaterno($apPaterno)
    {
        $this->apPaterno = $apPaterno;

        return $this;
    }

    /**
     * Get apPaterno
     *
     * @return string
     */
    public function getApPaterno()
    {
        return $this->apPaterno;
    }

    /**
     * Set apMaterno
     *
     * @param string $apMaterno
     *
     * @return Empleado
     */
    public function setApMaterno($apMaterno)
    {
        $this->apMaterno = $apMaterno;

        return $this;
    }

    /**
     * Get apMaterno
     *
     * @return string
     */
    public function getApMaterno()
    {
        return $this->apMaterno;
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
}

