<?php

namespace App\Entity;

use App\Repository\CoursRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CoursRepository::class)]
class Cours
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $nom = null;

    #[ORM\Column(length: 20)]
    private ?string $date_d = null;

    #[ORM\Column(length: 20)]
    private ?string $date_f = null;

    #[ORM\ManyToOne(inversedBy: 'cours')]
    private ?classe $classe = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDateD(): ?string
    {
        return $this->date_d;
    }

    public function setDateD(string $date_d): static
    {
        $this->date_d = $date_d;

        return $this;
    }

    public function getDateF(): ?string
    {
        return $this->date_f;
    }

    public function setDateF(string $date_f): static
    {
        $this->date_f = $date_f;

        return $this;
    }

    public function getClasse(): ?classe
    {
        return $this->classe;
    }

    public function setClasse(?classe $classe): static
    {
        $this->classe = $classe;

        return $this;
    }
}
