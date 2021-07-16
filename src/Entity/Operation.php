<?php

namespace App\Entity;

use App\Repository\OperationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OperationRepository::class)
 */
class Operation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $libelle;

    /**
     * @ORM\OneToMany(targetEntity=Trace::class, mappedBy="operation")
     */
    private $trace;

    public function __construct()
    {
        $this->trace = new ArrayCollection();
    }

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

    /**
     * @return Collection|Trace[]
     */
    public function getTrace(): Collection
    {
        return $this->trace;
    }

    public function addTrace(Trace $trace): self
    {
        if (!$this->trace->contains($trace)) {
            $this->trace[] = $trace;
            $trace->setOperation($this);
        }

        return $this;
    }

    public function removeTrace(Trace $trace): self
    {
        if ($this->trace->removeElement($trace)) {
            // set the owning side to null (unless already changed)
            if ($trace->getOperation() === $this) {
                $trace->setOperation(null);
            }
        }

        return $this;
    }
}
