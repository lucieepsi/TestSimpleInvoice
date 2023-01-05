<?php

namespace App\Entity;


use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\GetCollection;
use ApiPlatform\Metadata\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use App\Repository\PublictableRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PublictableRepository::class)]
#[ApiResource(
    operations:[
        new Get(normalizationContext: ['groups' => 'publictable:item']),
        new GetCollection(normalizationContext: ['groups' => 'publictable:list'])
    ],
    order: ['score' => 'DESC']
)]
class Publictable
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['publictable:list', 'publictable:item'])]
    private ?int $id = null;

    #[ORM\Column]
    #[Groups(['publictable:list', 'publictable:item'])]
    private ?int $score = null;

    #[ORM\Column(length: 255)]
    #[Groups(['publictable:item'])]
    private ?string $ceChampsNeDoitPasEtreVisible = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getScore(): ?int
    {
        return $this->score;
    }

    public function setScore(int $score): self
    {
        $this->score = $score;

        return $this;
    }

    public function getCeChampsNeDoitPasEtreVisible(): ?string
    {
        return $this->ceChampsNeDoitPasEtreVisible;
    }

    public function setCeChampsNeDoitPasEtreVisible(string $ceChampsNeDoitPasEtreVisible): self
    {
        $this->ceChampsNeDoitPasEtreVisible = $ceChampsNeDoitPasEtreVisible;

        return $this;
    }
}
