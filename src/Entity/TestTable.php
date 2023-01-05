<?php

namespace App\Entity;

use App\Repository\TestTableRepository;
use ApiPlatform\Metadata\Post;
use ApiPlatform\Metadata\Delete;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;

#[ORM\Entity(repositoryClass: TestTableRepository::class)]
#[ApiResource]
class TestTable
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $idConfidentiel = null;

    #[ORM\Column(length: 255)]
    private ?string $oui = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdConfidentiel(): ?string
    {
        return $this->idConfidentiel;
    }

    public function setIdConfidentiel(string $idConfidentiel): self
    {
        $this->idConfidentiel = $idConfidentiel;

        return $this;
    }

    public function getOui(): ?string
    {
        return $this->oui;
    }

    public function setOui(string $oui): self
    {
        $this->oui = $oui;

        return $this;
    }
}
