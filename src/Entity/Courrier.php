<?php

namespace App\Entity;

use App\Repository\CourrierRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CourrierRepository::class)
 */
class Courrier
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
    private $numeroCourrier;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $objetCourrier;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $referenceSaisineDfc;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateCourrier;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $jugementHeredite;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $pieceIdentite;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $procuration;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $numeroCaseCocheeProcuration;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $certificatAdministrationLegale;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $jugementCuratelle;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $numeroCaseCocheeCertificat;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $numeroCaseCocheeJugementCuratelle;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $conclusionDemande;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $commentaire;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $generateurCourrier;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $validite;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateValiditeCourrier;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $generateurValiditeCourrier;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateAccuseDfc;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $courrierEnvoye;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $notification72heures;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateDerniereNotification;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $fichier;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $attestationNonRevocation;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $numeroCaseCocheeAttestationNonRevocation;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nouvelleNumerotationCourrier;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $numerotation;

    /**
     * @ORM\ManyToOne(targetEntity=TypeCourrier::class, inversedBy="courriers")
     */
    private $typeCourrier;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="courriers")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity=Agent::class, inversedBy="courriers")
     */
    private $agent;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumeroCourrier(): ?int
    {
        return $this->numeroCourrier;
    }

    public function setNumeroCourrier(?int $numeroCourrier): self
    {
        $this->numeroCourrier = $numeroCourrier;

        return $this;
    }

    public function getObjetCourrier(): ?string
    {
        return $this->objetCourrier;
    }

    public function setObjetCourrier(?string $objetCourrier): self
    {
        $this->objetCourrier = $objetCourrier;

        return $this;
    }

    public function getReferenceSaisineDfc(): ?string
    {
        return $this->referenceSaisineDfc;
    }

    public function setReferenceSaisineDfc(?string $referenceSaisineDfc): self
    {
        $this->referenceSaisineDfc = $referenceSaisineDfc;

        return $this;
    }

    public function getDateCourrier(): ?\DateTimeInterface
    {
        return $this->dateCourrier;
    }

    public function setDateCourrier(?\DateTimeInterface $dateCourrier): self
    {
        $this->dateCourrier = $dateCourrier;

        return $this;
    }

    public function getJugementHeredite(): ?int
    {
        return $this->jugementHeredite;
    }

    public function setJugementHeredite(?int $jugementHeredite): self
    {
        $this->jugementHeredite = $jugementHeredite;

        return $this;
    }

    public function getPieceIdentite(): ?int
    {
        return $this->pieceIdentite;
    }

    public function setPieceIdentite(?int $pieceIdentite): self
    {
        $this->pieceIdentite = $pieceIdentite;

        return $this;
    }

    public function getProcuration(): ?int
    {
        return $this->procuration;
    }

    public function setProcuration(?int $procuration): self
    {
        $this->procuration = $procuration;

        return $this;
    }

    public function getNumeroCaseCocheeProcuration(): ?string
    {
        return $this->numeroCaseCocheeProcuration;
    }

    public function setNumeroCaseCocheeProcuration(?string $numeroCaseCocheeProcuration): self
    {
        $this->numeroCaseCocheeProcuration = $numeroCaseCocheeProcuration;

        return $this;
    }

    public function getCertificatAdministrationLegale(): ?string
    {
        return $this->certificatAdministrationLegale;
    }

    public function setCertificatAdministrationLegale(?string $certificatAdministrationLegale): self
    {
        $this->certificatAdministrationLegale = $certificatAdministrationLegale;

        return $this;
    }

    public function getJugementCuratelle(): ?int
    {
        return $this->jugementCuratelle;
    }

    public function setJugementCuratelle(?int $jugementCuratelle): self
    {
        $this->jugementCuratelle = $jugementCuratelle;

        return $this;
    }

    public function getNumeroCaseCocheeCertificat(): ?string
    {
        return $this->numeroCaseCocheeCertificat;
    }

    public function setNumeroCaseCocheeCertificat(?string $numeroCaseCocheeCertificat): self
    {
        $this->numeroCaseCocheeCertificat = $numeroCaseCocheeCertificat;

        return $this;
    }

    public function getNumeroCaseCocheeJugementCuratelle(): ?string
    {
        return $this->numeroCaseCocheeJugementCuratelle;
    }

    public function setNumeroCaseCocheeJugementCuratelle(?string $numeroCaseCocheeJugementCuratelle): self
    {
        $this->numeroCaseCocheeJugementCuratelle = $numeroCaseCocheeJugementCuratelle;

        return $this;
    }

    public function getConclusionDemande(): ?string
    {
        return $this->conclusionDemande;
    }

    public function setConclusionDemande(?string $conclusionDemande): self
    {
        $this->conclusionDemande = $conclusionDemande;

        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(?string $commentaire): self
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    public function getGenerateurCourrier(): ?int
    {
        return $this->generateurCourrier;
    }

    public function setGenerateurCourrier(?int $generateurCourrier): self
    {
        $this->generateurCourrier = $generateurCourrier;

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

    public function getDateValiditeCourrier(): ?\DateTimeInterface
    {
        return $this->dateValiditeCourrier;
    }

    public function setDateValiditeCourrier(?\DateTimeInterface $dateValiditeCourrier): self
    {
        $this->dateValiditeCourrier = $dateValiditeCourrier;

        return $this;
    }

    public function getGenerateurValiditeCourrier(): ?int
    {
        return $this->generateurValiditeCourrier;
    }

    public function setGenerateurValiditeCourrier(?int $generateurValiditeCourrier): self
    {
        $this->generateurValiditeCourrier = $generateurValiditeCourrier;

        return $this;
    }

    public function getDateAccuseDfc(): ?\DateTimeInterface
    {
        return $this->dateAccuseDfc;
    }

    public function setDateAccuseDfc(?\DateTimeInterface $dateAccuseDfc): self
    {
        $this->dateAccuseDfc = $dateAccuseDfc;

        return $this;
    }

    public function getCourrierEnvoye(): ?int
    {
        return $this->courrierEnvoye;
    }

    public function setCourrierEnvoye(?int $courrierEnvoye): self
    {
        $this->courrierEnvoye = $courrierEnvoye;

        return $this;
    }

    public function getNotification72heures(): ?int
    {
        return $this->notification72heures;
    }

    public function setNotification72heures(?int $notification72heures): self
    {
        $this->notification72heures = $notification72heures;

        return $this;
    }

    public function getDateDerniereNotification(): ?\DateTimeInterface
    {
        return $this->dateDerniereNotification;
    }

    public function setDateDerniereNotification(?\DateTimeInterface $dateDerniereNotification): self
    {
        $this->dateDerniereNotification = $dateDerniereNotification;

        return $this;
    }

    public function getFichier(): ?string
    {
        return $this->fichier;
    }

    public function setFichier(?string $fichier): self
    {
        $this->fichier = $fichier;

        return $this;
    }

    public function getAttestationNonRevocation(): ?int
    {
        return $this->attestationNonRevocation;
    }

    public function setAttestationNonRevocation(?int $attestationNonRevocation): self
    {
        $this->attestationNonRevocation = $attestationNonRevocation;

        return $this;
    }

    public function getNumeroCaseCocheeAttestationNonRevocation(): ?string
    {
        return $this->numeroCaseCocheeAttestationNonRevocation;
    }

    public function setNumeroCaseCocheeAttestationNonRevocation(?string $numeroCaseCocheeAttestationNonRevocation): self
    {
        $this->numeroCaseCocheeAttestationNonRevocation = $numeroCaseCocheeAttestationNonRevocation;

        return $this;
    }

    public function getNouvelleNumerotationCourrier(): ?string
    {
        return $this->nouvelleNumerotationCourrier;
    }

    public function setNouvelleNumerotationCourrier(?string $nouvelleNumerotationCourrier): self
    {
        $this->nouvelleNumerotationCourrier = $nouvelleNumerotationCourrier;

        return $this;
    }

    public function getNumerotation(): ?int
    {
        return $this->numerotation;
    }

    public function setNumerotation(?int $numerotation): self
    {
        $this->numerotation = $numerotation;

        return $this;
    }

    public function getTypeCourrier(): ?TypeCourrier
    {
        return $this->typeCourrier;
    }

    public function setTypeCourrier(?TypeCourrier $typeCourrier): self
    {
        $this->typeCourrier = $typeCourrier;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getAgent(): ?Agent
    {
        return $this->agent;
    }

    public function setAgent(?Agent $agent): self
    {
        $this->agent = $agent;

        return $this;
    }
}
