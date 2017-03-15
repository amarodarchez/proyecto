<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categoria
 *
 * @ORM\Table(name="categoria")
 * @ORM\Entity(repositoryClass="MainBundle\Repository\CategoriaRepository")
 */
class Categoria
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
     * @ORM\Column(name="nombre", type="string", length=45, unique=true)
     */
    private $nombre;

    /**
     * @var int
     *
     * @ORM\Column(name="categoria_padre_id", type="integer")
     */
    private $categoriaPadreId;


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
     * @return Categoria
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
     * Set categoriaPadreId
     *
     * @param integer $categoriaPadreId
     * @return Categoria
     */
    public function setCategoriaPadreId($categoriaPadreId)
    {
        $this->categoriaPadreId = $categoriaPadreId;

        return $this;
    }

    /**
     * Get categoriaPadreId
     *
     * @return integer 
     */
    public function getCategoriaPadreId()
    {
        return $this->categoriaPadreId;
    }
}
