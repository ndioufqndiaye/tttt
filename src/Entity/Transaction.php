<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\TransactionRepository")
 */
class Transaction
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $montant;

    /**
     * @ORM\Column(type="integer")
     */
    private $frais;

    /**
     * @ORM\Column(type="date")
     */
    private $dateTransaction;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Utilisateur", inversedBy="transaction", cascade={"persist", "remove"})
     */
    private $Utilisateur;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\ComptePartenaire", inversedBy="transaction", cascade={"persist", "remove"})
     */
    private $ComptePartenaire;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Expediteur", inversedBy="transaction", cascade={"persist", "remove"})
     */
    private $Expediteur;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Recepteur", inversedBy="transaction", cascade={"persist", "remove"})
     */
    private $Recepteur;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMontant(): ?int
    {
        return $this->montant;
    }

    public function setMontant(int $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    public function getFrais(): ?int
    {
        return $this->frais;
    }

    public function setFrais(int $frais): self
    {
        $this->frais = $frais;

        return $this;
    }

    public function getDateTransaction(): ?\DateTimeInterface
    {
        return $this->dateTransaction;
    }

    public function setDateTransaction(\DateTimeInterface $dateTransaction): self
    {
        $this->dateTransaction = $dateTransaction;

        return $this;
    }

    public function getUtilisateur(): ?Utilisateur
    {
        return $this->Utilisateur;
    }

    public function setUtilisateur(?Utilisateur $Utilisateur): self
    {
        $this->Utilisateur = $Utilisateur;

        return $this;
    }

    public function getComptePartenaire(): ?ComptePartenaire
    {
        return $this->ComptePartenaire;
    }

    public function setComptePartenaire(?ComptePartenaire $ComptePartenaire): self
    {
        $this->ComptePartenaire = $ComptePartenaire;

        return $this;
    }

    public function getExpediteur(): ?Expediteur
    {
        return $this->Expediteur;
    }

    public function setExpediteur(?Expediteur $Expediteur): self
    {
        $this->Expediteur = $Expediteur;

        return $this;
    }

    public function getRecepteur(): ?Recepteur
    {
        return $this->Recepteur;
    }

    public function setRecepteur(?Recepteur $Recepteur): self
    {
        $this->Recepteur = $Recepteur;

        return $this;
    }
}
