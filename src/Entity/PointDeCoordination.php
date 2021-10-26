<?php

namespace App\Entity;

use App\Entity\Activite;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\PointDeCoordinationRepository;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=PointDeCoordinationRepository::class)
 */
class PointDeCoordination
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     * @Groups({"pointDeCoordination:read"})
     */
    private $libelle;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"pointDeCoordination:read"})
     */
    private $structure_impactee;

    /**
     * @ORM\Column(type="datetime")
     * @Groups({"pointDeCoordination:read"})
     */
    private $createAt;

    /**
     * @ORM\ManyToOne(targetEntity=Activite::class, inversedBy="pointDeCoordination")
     * @Groups({"pointDeCoordination:read"})
     */
    private $activite;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getStructureImpactee(): ?string
    {
        return $this->structure_impactee;
    }

    public function setStructureImpactee(string $structure_impactee): self
    {
        $this->structure_impactee = $structure_impactee;

        return $this;
    }

    public function getCreateAt(): ?\DateTimeInterface
    {
        return $this->createAt;
    }

    public function setCreateAt(\DateTimeInterface $createAt): self
    {
        $this->createAt = $createAt;

        return $this;
    }

    public function getActivite(): ?Activite
    {
        return $this->activite;
    }

    public function setActivite(?Activite $activite): self
    {
        $this->activite = $activite;

        return $this;
    }
}
