<?php

namespace App\Entity;

use App\Repository\MedicoRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MedicoRepository::class)
 */
class Medico
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
    private $nombre_medico;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $apellido_medico;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombreMedico(): ?string
    {
        return $this->nombre_medico;
    }

    public function setNombreMedico(string $nombre_medico): self
    {
        $this->nombre_medico = $nombre_medico;

        return $this;
    }

    public function getApellidoMedico(): ?string
    {
        return $this->apellido_medico;
    }

    public function setApellidoMedico(string $apellido_medico): self
    {
        $this->apellido_medico = $apellido_medico;

        return $this;
    }
}
