<?php

namespace ExamenBundle\Entity;

/**
 * Datos
 */
class Datos
{
    /**
     * @var \DateTime
     */
    private $fechaNacimiento;

    /**
     * @var string
     */
    private $ingreso = '0.0000';

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \ExamenBundle\Entity\Empleado
     */
    private $idEmpleado;


    /**
     * Set fechaNacimiento
     *
     * @param \DateTime $fechaNacimiento
     *
     * @return Datos
     */
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;

        return $this;
    }

    /**
     * Get fechaNacimiento
     *
     * @return \DateTime
     */
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    /**
     * Set ingreso
     *
     * @param string $ingreso
     *
     * @return Datos
     */
    public function setIngreso($ingreso)
    {
        $this->ingreso = $ingreso;

        return $this;
    }

    /**
     * Get ingreso
     *
     * @return string
     */
    public function getIngreso()
    {
        return $this->ingreso;
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
     * Set idEmpleado
     *
     * @param \ExamenBundle\Entity\Empleado $idEmpleado
     *
     * @return Datos
     */
    public function setIdEmpleado(\ExamenBundle\Entity\Empleado $idEmpleado = null)
    {
        $this->idEmpleado = $idEmpleado;

        return $this;
    }

    /**
     * Get idEmpleado
     *
     * @return \ExamenBundle\Entity\Empleado
     */
    public function getIdEmpleado()
    {
        return $this->idEmpleado;
    }
}

