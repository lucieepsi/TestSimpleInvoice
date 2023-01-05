<?php

namespace App\Entity;

use App\Repository\ElementPriveeCommeJamaisRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ElementPriveeCommeJamaisRepository::class)]
class ElementPriveeCommeJamais
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    public function getId(): ?int
    {
        return $this->id;
    }
}
