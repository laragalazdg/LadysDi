<?php

namespace App\Entity;

use App\Repository\EstudioRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EstudioRepository::class)
 */
class Estudio
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
    private $nombre_estudio;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $url_archivo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $formato;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombreEstudio(): ?string
    {
        return $this->nombre_estudio;
    }

    public function setNombreEstudio(string $nombre_estudio): self
    {
        $this->nombre_estudio = $nombre_estudio;

        return $this;
    }

    public function getUrlArchivo(): ?string
    {
        return $this->url_archivo;
    }

    public function setUrlArchivo(string $url_archivo): self
    {
        $this->url_archivo = $url_archivo;

        return $this;
    }

    public function getFormato(): ?string
    {
        return $this->formato;
    }

    public function setFormato(string $formato): self
    {
        $this->formato = $formato;

        return $this;
    }
}
