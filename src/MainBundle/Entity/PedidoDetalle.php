<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PedidoDetalle
 *
 * @ORM\Table(name="pedido_detalle")
 * @ORM\Entity(repositoryClass="MainBundle\Repository\PedidoDetalleRepository")
 */
class PedidoDetalle
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
     * @var int
     *
     * @ORM\Column(name="pedido_id", type="integer")
     */
    private $pedidoId;


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
     * Set productoId
     *
     * @param integer $productoId
     * @return PedidoDetalle
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
     * @return PedidoDetalle
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
     * Set pedidoId
     *
     * @param integer $pedidoId
     * @return PedidoDetalle
     */
    public function setPedidoId($pedidoId)
    {
        $this->pedidoId = $pedidoId;

        return $this;
    }

    /**
     * Get pedidoId
     *
     * @return integer 
     */
    public function getPedidoId()
    {
        return $this->pedidoId;
    }
}
