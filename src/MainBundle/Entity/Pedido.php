<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pedido
 *
 * @ORM\Table(name="pedido")
 * @ORM\Entity(repositoryClass="MainBundle\Repository\PedidoRepository")
 */
class Pedido
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
     * @ORM\Column(name="estado_id", type="integer")
     */
    private $estadoId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_alta", type="datetimetz")
     */
    private $fechaAlta;

    /**
     * @var int
     *
     * @ORM\Column(name="usuario_id", type="integer")
     */
    private $usuarioId;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="string", length=255)
     */
    private $observacion;

    /**
     * @var string
     *
     * @ORM\Column(name="motivo_cancelacion", type="string", length=255, nullable="true")
     */
    private $motivoCancelacion;


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
     * Set estadoId
     *
     * @param integer $estadoId
     * @return Pedido
     */
    public function setEstadoId($estadoId)
    {
        $this->estadoId = $estadoId;

        return $this;
    }

    /**
     * Get estadoId
     *
     * @return integer 
     */
    public function getEstadoId()
    {
        return $this->estadoId;
    }

    /**
     * Set fechaAlta
     *
     * @param \DateTime $fechaAlta
     * @return Pedido
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

    /**
     * Set usuarioId
     *
     * @param integer $usuarioId
     * @return Pedido
     */
    public function setUsuarioId($usuarioId)
    {
        $this->usuarioId = $usuarioId;

        return $this;
    }

    /**
     * Get usuarioId
     *
     * @return integer 
     */
    public function getUsuarioId()
    {
        return $this->usuarioId;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     * @return Pedido
     */
    public function setObservacion($observacion)
    {
        $this->observacion = $observacion;

        return $this;
    }

    /**
     * Get observacion
     *
     * @return string 
     */
    public function getObservacion()
    {
        return $this->observacion;
    }

    /**
     * Set motivoCancelacion
     *
     * @param string $motivoCancelacion
     * @return Pedido
     */
    public function setMotivoCancelacion($motivoCancelacion)
    {
        $this->motivoCancelacion = $motivoCancelacion;

        return $this;
    }

    /**
     * Get motivoCancelacion
     *
     * @return string 
     */
    public function getMotivoCancelacion()
    {
        return $this->motivoCancelacion;
    }
}
