<?php

namespace App\Entity;

use App\Repository\NotaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=NotaRepository::class)
 */
class Nota
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
    private $fecha_nota;

    /**
     * @ORM\Column(type="string", length=1000)
     */
    private $descrip_nota;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFechaNota(): ?\DateTimeInterface
    {
        return $this->fecha_nota;
    }

    public function setFechaNota(\DateTimeInterface $fecha_nota): self
    {
        $this->fecha_nota = $fecha_nota;

        return $this;
    }

    public function getDescripNota(): ?string
    {
        return $this->descrip_nota;
    }

    public function setDescripNota(string $descrip_nota): self
    {
        $this->descrip_nota = $descrip_nota;

        return $this;
    }
}
