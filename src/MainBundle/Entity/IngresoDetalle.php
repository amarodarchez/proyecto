<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IngresoDetalle
 *
 * @ORM\Table(name="ingreso_detalle")
 * @ORM\Entity(repositoryClass="MainBundle\Repository\IngresoDetalleRepository")
 */
class IngresoDetalle
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
     * @var int
     *
     * @ORM\Column(name="ingreso_tipo_id", type="integer")
     */
    private $ingresoTipoId;

    /**
     * @var int
     *
     * @ORM\Column(name="producto_id", type="integer")
     */
    private $productoId;

    /**
     * @var int
     *
     * @ORM\Column(name="cantidad", type="integer")
     */
    private $cantidad;

    /**
     * @var float
     *
     * @ORM\Column(name="precio_unitario", type="float")
     */
    private $precioUnitario;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255)
     */
    private $descripcion;

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
     * Set ingresoTipoId
     *
     * @param integer $ingresoTipoId
     * @return IngresoDetalle
     */
    public function setIngresoTipoId($ingresoTipoId)
    {
        $this->ingresoTipoId = $ingresoTipoId;

        return $this;
    }

    /**
     * Get ingresoTipoId
     *
     * @return integer 
     */
    public function getIngresoTipoId()
    {
        return $this->ingresoTipoId;
    }

    /**
     * Set productoId
     *
     * @param integer $productoId
     * @return IngresoDetalle
     */
    public function setProductoId($productoId)
    {
        $this->productoId = $productoId;

        return $this;
    }

    /**
     * Get productoId
     *
     * @return integer 
     */
    public function getProductoId()
    {
        return $this->productoId;
    }

    /**
     * Set cantidad
     *
     * @param integer $cantidad
     * @return IngresoDetalle
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return integer 
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set precioUnitario
     *
     * @param float $precioUnitario
     * @return IngresoDetalle
     */
    public function setPrecioUnitario($precioUnitario)
    {
        $this->precioUnitario = $precioUnitario;

        return $this;
    }

    /**
     * Get precioUnitario
     *
     * @return float 
     */
    public function getPrecioUnitario()
    {
        return $this->precioUnitario;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return IngresoDetalle
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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return IngresoDetalle
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
