<?php

namespace App\Entity;

use App\Repository\SintomaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SintomaRepository::class)
 */
class Sintoma
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
    private $nombre_sintoma;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombreSintoma(): ?string
    {
        return $this->nombre_sintoma;
    }

    public function setNombreSintoma(string $nombre_sintoma): self
    {
        $this->nombre_sintoma = $nombre_sintoma;

        return $this;
    }
}
