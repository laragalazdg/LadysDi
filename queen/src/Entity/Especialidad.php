<?php

namespace App\Entity;

use App\Repository\EspecialidadRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EspecialidadRepository::class)
 */
class Especialidad
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
    private $nombre_especialidad;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombreEspecialidad(): ?string
    {
        return $this->nombre_especialidad;
    }

    public function setNombreEspecialidad(string $nombre_especialidad): self
    {
        $this->nombre_especialidad = $nombre_especialidad;

        return $this;
    }
}
