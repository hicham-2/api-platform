<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\DifficultéRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DifficultéRepository::class)]
#[ApiResource]
class Difficulté
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Niveau = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNiveau(): ?string
    {
        return $this->Niveau;
    }

    public function setNiveau(string $Niveau): static
    {
        $this->Niveau = $Niveau;

        return $this;
    }
}
