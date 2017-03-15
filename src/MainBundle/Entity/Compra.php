<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Compra
 *
 * @ORM\Table(name="compra")
 * @ORM\Entity(repositoryClass="MainBundle\Repository\CompraRepository")
 */
class Compra
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="proveedor", type="string", length=100)
     */
    private $proveedor;

    /**
     * @var string
     *
     * @ORM\Column(name="proveedor_cuit", type="string", length=15, unique=true)
     */
    private $proveedorCuit;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetimetz")
     */
    private $fecha;


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
     * Set proveedor
     *
     * @param string $proveedor
     * @return Compra
     */
    public function setProveedor($proveedor)
    {
        $this->proveedor = $proveedor;

        return $this;
    }

    /**
     * Get proveedor
     *
     * @return string 
     */
    public function getProveedor()
    {
        return $this->proveedor;
    }

    /**
     * Set proveedorCuit
     *
     * @param string $proveedorCuit
     * @return Compra
     */
    public function setProveedorCuit($proveedorCuit)
    {
        $this->proveedorCuit = $proveedorCuit;

        return $this;
    }

    /**
     * Get proveedorCuit
     *
     * @return string 
     */
    public function getProveedorCuit()
    {
        return $this->proveedorCuit;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Compra
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }
}
