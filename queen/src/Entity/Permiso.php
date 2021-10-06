<?php

namespace App\Entity;

use App\Repository\PermisoRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PermisoRepository::class)
 */
class Permiso
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $fechayhora;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nombre_autorizado;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $token;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFechayhora(): ?\DateTimeInterface
    {
        return $this->fechayhora;
    }

    public function setFechayhora(\DateTimeInterface $fechayhora): self
    {
        $this->fechayhora = $fechayhora;

        return $this;
    }

    public function getNombreAutorizado(): ?string
    {
        return $this->nombre_autorizado;
    }

    public function setNombreAutorizado(string $nombre_autorizado): self
    {
        $this->nombre_autorizado = $nombre_autorizado;

        return $this;
    }

    public function getToken(): ?string
    {
        return $this->token;
    }

    public function setToken(string $token): self
    {
        $this->token = $token;

        return $this;
    }
}
