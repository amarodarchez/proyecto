<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MenuDelDia
 *
 * @ORM\Table(name="menu_del_dia")
 * @ORM\Entity(repositoryClass="MainBundle\Repository\MenuDelDiaRepository")
 */
class MenuDelDia
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
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetimetz")
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="habilitado", type="string", length=1)
     */
    private $habilitado;


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
     * @return MenuDelDia
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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return MenuDelDia
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

    /**
     * Set habilitado
     *
     * @param string $habilitado
     * @return MenuDelDia
     */
    public function setHabilitado($habilitado)
    {
        $this->habilitado = $habilitado;

        return $this;
    }

    /**
     * Get habilitado
     *
     * @return string 
     */
    public function getHabilitado()
    {
        return $this->habilitado;
    }
}
