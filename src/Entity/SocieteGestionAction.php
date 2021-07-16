<?php

namespace App\Entity;

use App\Repository\SocieteGestionActionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SocieteGestionActionRepository::class)
 */
class SocieteGestionAction
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
     * @ORM\OneToMany(targetEntity=TransfertAction::class, mappedBy="societeGestionAction")
     */
    private $transfertActions;

    public function __construct()
    {
        $this->transfertActions = new ArrayCollection();
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
     * @return Collection|TransfertAction[]
     */
    public function getTransfertActions(): Collection
    {
        return $this->transfertActions;
    }

    public function addTransfertAction(TransfertAction $transfertAction): self
    {
        if (!$this->transfertActions->contains($transfertAction)) {
            $this->transfertActions[] = $transfertAction;
            $transfertAction->setSocieteGestionAction($this);
        }

        return $this;
    }

    public function removeTransfertAction(TransfertAction $transfertAction): self
    {
        if ($this->transfertActions->removeElement($transfertAction)) {
            // set the owning side to null (unless already changed)
            if ($transfertAction->getSocieteGestionAction() === $this) {
                $transfertAction->setSocieteGestionAction(null);
            }
        }

        return $this;
    }
}
