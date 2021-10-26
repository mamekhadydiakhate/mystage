<?php

namespace App\Entity;

use App\Entity\Evenement;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\CommentaireRepository;
use phpDocumentor\Reflection\DocBlock\Description;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=CommentaireRepository::class)
 */
class Commentaire
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"evenement:read"})
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     * @Groups({"commentaire:read"})
     * @Groups({"evenement:detail"})
     */
    private $description;

    /**
     * @ORM\Column(type="datetime")
     * @Groups({"commentaire:read"})
     * @Groups({"evenement:detail"})
     */
    private $createdAt;

    /**
     * @ORM\ManyToOne(targetEntity=Evenement::class, inversedBy="commentaire")
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"commentaire:read"})
     */
    private $evenement;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getEvenement(): ?Evenement
    {
        return $this->evenement;
    }

    public function setEvenement(?Evenement $evenement): self
    {
        $this->evenement = $evenement;

        return $this;
    }
}
