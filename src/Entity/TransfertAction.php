<?php

namespace App\Entity;

use App\Repository\TransfertActionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TransfertActionRepository::class)
 */
class TransfertAction
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $numeroTransfert;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nombreAction;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $validite;

    /**
     * @ORM\ManyToOne(targetEntity=SocieteGestionAction::class, inversedBy="transfertActions")
     */
    private $societeGestionAction;

    /**
     * @ORM\OneToMany(targetEntity=Agent::class, mappedBy="transfertAction")
     */
    private $agents;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateTransfert;

    public function __construct()
    {
        $this->agents = new ArrayCollection();
        $this->dateTransfert=new \DateTime("now");
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumeroTransfert(): ?int
    {
        return $this->numeroTransfert;
    }

    public function setNumeroTransfert(?int $numeroTransfert): self
    {
        $this->numeroTransfert = $numeroTransfert;

        return $this;
    }

    public function getNombreAction(): ?int
    {
        return $this->nombreAction;
    }

    public function setNombreAction(?int $nombreAction): self
    {
        $this->nombreAction = $nombreAction;

        return $this;
    }

    public function getValidite(): ?int
    {
        return $this->validite;
    }

    public function setValidite(?int $validite): self
    {
        $this->validite = $validite;

        return $this;
    }

    public function getSocieteGestionAction(): ?SocieteGestionAction
    {
        return $this->societeGestionAction;
    }

    public function setSocieteGestionAction(?SocieteGestionAction $societeGestionAction): self
    {
        $this->societeGestionAction = $societeGestionAction;

        return $this;
    }

    /**
     * @return Collection|Agent[]
     */
    public function getAgents(): Collection
    {
        return $this->agents;
    }

    public function addAgent(Agent $agent): self
    {
        if (!$this->agents->contains($agent)) {
            $this->agents[] = $agent;
            $agent->setTransfertAction($this);
        }

        return $this;
    }

    public function removeAgent(Agent $agent): self
    {
        if ($this->agents->removeElement($agent)) {
            // set the owning side to null (unless already changed)
            if ($agent->getTransfertAction() === $this) {
                $agent->setTransfertAction(null);
            }
        }

        return $this;
    }

    public function getDateTransfert(): ?\DateTimeInterface
    {
        return $this->dateTransfert;
    }

    public function setDateTransfert(?\DateTimeInterface $dateTransfert): self
    {
        $this->dateTransfert = $dateTransfert;

        return $this;
    }
}
