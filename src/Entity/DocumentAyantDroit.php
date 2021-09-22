<?php

namespace App\Entity;

use App\Repository\DocumentAyantDroitRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DocumentAyantDroitRepository::class)
 */
class DocumentAyantDroit
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Document::class, inversedBy="documentAyantDroits")
     */
    private $document;

    /**
     * @ORM\ManyToOne(targetEntity=AyantDroit::class, inversedBy="documentAyantDroits")
     */
    private $ayantDroit;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDocument(): ?Document
    {
        return $this->document;
    }

    public function setDocument(?Document $document): self
    {
        $this->document = $document;

        return $this;
    }

    public function getAyantDroit(): ?AyantDroit
    {
        return $this->ayantDroit;
    }

    public function setAyantDroit(?AyantDroit $ayantDroit): self
    {
        $this->ayantDroit = $ayantDroit;

        return $this;
    }
}
