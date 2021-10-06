<?php

namespace App\Entity;

use App\Repository\CalendarioRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CalendarioRepository::class)
 */
class Calendario
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
    private $fecha_ultima_menstr;

    /**
     * @ORM\Column(type="smallint")
     */
    private $duracion_ciclo;

    /**
     * @ORM\Column(type="date")
     */
    private $fecha_concepcion;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFechaUltimaMenstr(): ?\DateTimeInterface
    {
        return $this->fecha_ultima_menstr;
    }

    public function setFechaUltimaMenstr(\DateTimeInterface $fecha_ultima_menstr): self
    {
        $this->fecha_ultima_menstr = $fecha_ultima_menstr;

        return $this;
    }

    public function getDuracionCiclo(): ?int
    {
        return $this->duracion_ciclo;
    }

    public function setDuracionCiclo(int $duracion_ciclo): self
    {
        $this->duracion_ciclo = $duracion_ciclo;

        return $this;
    }

    public function getFechaConcepcion(): ?\DateTimeInterface
    {
        return $this->fecha_concepcion;
    }

    public function setFechaConcepcion(\DateTimeInterface $fecha_concepcion): self
    {
        $this->fecha_concepcion = $fecha_concepcion;

        return $this;
    }
}
