<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Producto
 *
 * @ORM\Table(name="producto")
 * @ORM\Entity(repositoryClass="MainBundle\Repository\ProductoRepository")
 */
class Producto
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
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="marca", type="string", length=255)
     */
    private $marca;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_barra", type="string", length=20, unique=true)
     */
    private $codigoBarra;

    /**
     * @var int
     *
     * @ORM\Column(name="stock", type="integer")
     */
    private $stock;

    /**
     * @var int
     *
     * @ORM\Column(name="stock_minimo", type="integer")
     */
    private $stockMinimo;

    /**
     * @var int
     *
     * @ORM\Column(name="categoria_id", type="integer")
     */
    private $categoriaId;

    /**
     * @var string
     *
     * @ORM\Column(name="proveedor", type="string", length=45)
     */
    private $proveedor;

    /**
     * @var float
     *
     * @ORM\Column(name="precio_venta_unitario", type="float")
     */
    private $precioVentaUnitario;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255)
     */
    private $descripcion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_alta", type="datetimetz")
     */
    private $fechaAlta;


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
     * @return Producto
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
     * Set marca
     *
     * @param string $marca
     * @return Producto
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get marca
     *
     * @return string 
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set codigoBarra
     *
     * @param string $codigoBarra
     * @return Producto
     */
    public function setCodigoBarra($codigoBarra)
    {
        $this->codigoBarra = $codigoBarra;

        return $this;
    }

    /**
     * Get codigoBarra
     *
     * @return string 
     */
    public function getCodigoBarra()
    {
        return $this->codigoBarra;
    }

    /**
     * Set stock
     *
     * @param integer $stock
     * @return Producto
     */
    public function setStock($stock)
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * Get stock
     *
     * @return integer 
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Set stockMinimo
     *
     * @param integer $stockMinimo
     * @return Producto
     */
    public function setStockMinimo($stockMinimo)
    {
        $this->stockMinimo = $stockMinimo;

        return $this;
    }

    /**
     * Get stockMinimo
     *
     * @return integer 
     */
    public function getStockMinimo()
    {
        return $this->stockMinimo;
    }

    /**
     * Set categoriaId
     *
     * @param integer $categoriaId
     * @return Producto
     */
    public function setCategoriaId($categoriaId)
    {
        $this->categoriaId = $categoriaId;

        return $this;
    }

    /**
     * Get categoriaId
     *
     * @return integer 
     */
    public function getCategoriaId()
    {
        return $this->categoriaId;
    }

    /**
     * Set proveedor
     *
     * @param string $proveedor
     * @return Producto
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
     * Set precioVentaUnitario
     *
     * @param float $precioVentaUnitario
     * @return Producto
     */
    public function setPrecioVentaUnitario($precioVentaUnitario)
    {
        $this->precioVentaUnitario = $precioVentaUnitario;

        return $this;
    }

    /**
     * Get precioVentaUnitario
     *
     * @return float 
     */
    public function getPrecioVentaUnitario()
    {
        return $this->precioVentaUnitario;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Producto
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
     * Set fechaAlta
     *
     * @param \DateTime $fechaAlta
     * @return Producto
     */
    public function setFechaAlta($fechaAlta)
    {
        $this->fechaAlta = $fechaAlta;

        return $this;
    }

    /**
     * Get fechaAlta
     *
     * @return \DateTime 
     */
    public function getFechaAlta()
    {
        return $this->fechaAlta;
    }
}
