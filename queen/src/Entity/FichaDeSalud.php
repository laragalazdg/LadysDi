<?php

namespace App\Entity;

use App\Repository\FichaDeSaludRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FichaDeSaludRepository::class)
 */
class FichaDeSalud
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $medico;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $alergias;

    /**
     * @ORM\Column(type="string", length=3, nullable=true)
     */
    private $grupo_sanguineo;

    /**
     * @ORM\Column(type="string", length=3, nullable=true)
     */
    private $factor_sanguineo;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $descripcion_salud;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMedico(): ?string
    {
        return $this->medico;
    }

    public function setMedico(?string $medico): self
    {
        $this->medico = $medico;

        return $this;
    }

    public function getAlergias(): ?string
    {
        return $this->alergias;
    }

    public function setAlergias(?string $alergias): self
    {
        $this->alergias = $alergias;

        return $this;
    }

    public function getGrupoSanguineo(): ?string
    {
        return $this->grupo_sanguineo;
    }

    public function setGrupoSanguineo(?string $grupo_sanguineo): self
    {
        $this->grupo_sanguineo = $grupo_sanguineo;

        return $this;
    }

    public function getFactorSanguineo(): ?string
    {
        return $this->factor_sanguineo;
    }

    public function setFactorSanguineo(?string $factor_sanguineo): self
    {
        $this->factor_sanguineo = $factor_sanguineo;

        return $this;
    }

    public function getDescripcionSalud(): ?string
    {
        return $this->descripcion_salud;
    }

    public function setDescripcionSalud(?string $descripcion_salud): self
    {
        $this->descripcion_salud = $descripcion_salud;

        return $this;
    }
}
