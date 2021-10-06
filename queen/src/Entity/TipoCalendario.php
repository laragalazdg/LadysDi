<?php

namespace App\Entity;

use App\Repository\TipoCalendarioRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TipoCalendarioRepository::class)
 */
class TipoCalendario
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nombre_calendario;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombreCalendario(): ?string
    {
        return $this->nombre_calendario;
    }

    public function setNombreCalendario(string $nombre_calendario): self
    {
        $this->nombre_calendario = $nombre_calendario;

        return $this;
    }
}
