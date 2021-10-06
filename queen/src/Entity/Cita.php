<?php

namespace App\Entity;

use App\Repository\CitaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CitaRepository::class)
 */
class Cita
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $fecha_cita;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $hora_cita;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $anotaciones;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $conclusion;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFechaCita(): ?\DateTimeInterface
    {
        return $this->fecha_cita;
    }

    public function setFechaCita(\DateTimeInterface $fecha_cita): self
    {
        $this->fecha_cita = $fecha_cita;

        return $this;
    }

    public function getHoraCita(): ?\DateTimeInterface
    {
        return $this->hora_cita;
    }

    public function setHoraCita(?\DateTimeInterface $hora_cita): self
    {
        $this->hora_cita = $hora_cita;

        return $this;
    }

    public function getAnotaciones(): ?string
    {
        return $this->anotaciones;
    }

    public function setAnotaciones(string $anotaciones): self
    {
        $this->anotaciones = $anotaciones;

        return $this;
    }

    public function getConclusion(): ?string
    {
        return $this->conclusion;
    }

    public function setConclusion(?string $conclusion): self
    {
        $this->conclusion = $conclusion;

        return $this;
    }
}
