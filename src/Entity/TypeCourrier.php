<?php

namespace App\Entity;

use App\Repository\TypeCourrierRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TypeCourrierRepository::class)
 */
class TypeCourrier
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $libelle;

    /**
     * @ORM\OneToMany(targetEntity=Courrier::class, mappedBy="typeCourrier")
     */
    private $courriers;

    public function __construct()
    {
        $this->courriers = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(?string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * @return Collection|Courrier[]
     */
    public function getCourriers(): Collection
    {
        return $this->courriers;
    }

    public function addCourrier(Courrier $courrier): self
    {
        if (!$this->courriers->contains($courrier)) {
            $this->courriers[] = $courrier;
            $courrier->setTypeCourrier($this);
        }

        return $this;
    }

    public function removeCourrier(Courrier $courrier): self
    {
        if ($this->courriers->removeElement($courrier)) {
            // set the owning side to null (unless already changed)
            if ($courrier->getTypeCourrier() === $this) {
                $courrier->setTypeCourrier(null);
            }
        }

        return $this;
    }
}
