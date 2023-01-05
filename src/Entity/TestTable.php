<?php

namespace App\Entity;

use App\Repository\TestTableRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TestTableRepository::class)]
class TestTable
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $idConfidentiel = null;

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
}
