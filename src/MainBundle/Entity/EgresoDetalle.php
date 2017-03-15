<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EgresoDetalle
 *
 * @ORM\Table(name="egreso_detalle")
 * @ORM\Entity(repositoryClass="MainBundle\Repository\EgresoDetalleRepository")
 */
class EgresoDetalle
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
     * @ORM\Column(name="compra_id", type="integer")
     */
    private $compraId;

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
     * @var int
     *
     * @ORM\Column(name="egreso_tipo_id", type="integer")
     */
    private $egresoTipoId;

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
     * Set compraId
     *
     * @param integer $compraId
     * @return EgresoDetalle
     */
    public function setCompraId($compraId)
    {
        $this->compraId = $compraId;

        return $this;
    }

    /**
     * Get compraId
     *
     * @return integer 
     */
    public function getCompraId()
    {
        return $this->compraId;
    }

    /**
     * Set productoId
     *
     * @param integer $productoId
     * @return EgresoDetalle
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
     * @return EgresoDetalle
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
     * @return EgresoDetalle
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
     * Set egresoTipoId
     *
     * @param integer $egresoTipoId
     * @return EgresoDetalle
     */
    public function setEgresoTipoId($egresoTipoId)
    {
        $this->egresoTipoId = $egresoTipoId;

        return $this;
    }

    /**
     * Get egresoTipoId
     *
     * @return integer 
     */
    public function getEgresoTipoId()
    {
        return $this->egresoTipoId;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return EgresoDetalle
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
