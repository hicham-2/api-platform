<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\RecetteRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RecetteRepository::class)]
#[ApiResource]
class Recette
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Name = null;

    #[ORM\Column(length: 255)]
    private ?string $Liste_ingredients = null;

    #[ORM\Column(length: 255)]
    private ?string $Instruction_preparation = null;

    /**
     * @ORM\ManyToOne(targetEntity=Difficulte::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private ?Difficulté $difficulte = null;

    /**
     * @ORM\ManyToOne(targetEntity=Categorie::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private ?Categorie $categorie = null;

    #[ORM\Column(length: 255)]
    private ?string $Categorie = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): static
    {
        $this->Name = $Name;

        return $this;
    }

    public function getListeIngredients(): ?string
    {
        return $this->Liste_ingredients;
    }

    public function setListeIngredients(string $Liste_ingredients): static
    {
        $this->Liste_ingredients = $Liste_ingredients;

        return $this;
    }

    public function getInstructionPreparation(): ?string
    {
        return $this->Instruction_preparation;
    }

    public function setInstructionPreparation(string $Instruction_preparation): static
    {
        $this->Instruction_preparation = $Instruction_preparation;

        return $this;
    }

    public function getDifficulte(): ?Difficulté
    {
        return $this->difficulte;
    }

    public function setDifficulte(?Difficulté $difficulte): static
    {
        $this->difficulte = $difficulte;

        return $this;
    }

    public function getCategorie(): ?Categorie
    {
        return $this->categorie;
    }

    public function setCategorie(?Categorie $categorie): static
    {
        $this->categorie = $categorie;

        return $this;
    }
}
