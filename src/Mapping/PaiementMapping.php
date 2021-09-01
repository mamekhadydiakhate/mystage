<?php

namespace App\Mapping;

use App\Entity\Paiement;

class PaiementMapping extends BaseMapping{

    public function setPaiementData($data,$paiement){
        $paiement->setUser(isset($data['user'])?$data['user']:$paiement->getUser());
        $paiement->setValidite(isset($data['validite'])?$data['validite']:$paiement->getValidite());
        $paiement->setNumeroDossier(isset($data['numeroDossier'])?$data['numeroDossier']:$paiement->getNumeroDossier());
        $paiement->setMontant(isset($data['montant'])?$data['montant']:$paiement->getMontant());
        $paiement->setDateEmission(isset($data['dateEmission'])?new \DateTime($data['dateEmission']):$paiement->getDateEmission());
        $paiement->setDateReception(isset($data['dateReception'])?new \DateTime($data['dateReception']):$paiement->getDateReception());
        $paiement->setNumeroPaiement(isset($data['numeroPaiement'])?$data['numeroPaiement']:$paiement->getNumeroPaiement());
        $paiement->setAgent(isset($data['agent'])?$data['agent']:$paiement->getAgent());
        $paiement->setAyantDroit(isset($data['ayantDroit'])?$data['ayantDroit']:$paiement->getAyantDroit());
        return $paiement;
    }

    public function addPaiement($data){
        $paiement=new Paiement();
        return $this->setPaiementData($data,$paiement);
    }

    public function hydratePaiement($paiement){
        return array(
            $this->ID_KEY=>$paiement->getId(),
            "numeroDossier"=>$paiement->getNumeroDossier(),
            "numeroPaiement"=>$paiement->getNumeroPaiement(),
            "montant"=>$paiement->getMontant(),
            "dateEmission"=>$paiement->getDateEmission()?date_format($paiement->getDateEmission(),'Y-m-d'):null,
            "dateReception"=>$paiement->getDateReception()?date_format($paiement->getDateReception(),'Y-m-d'):null,
            "validite"=>$paiement->getValidite(),
            "userId"=>$paiement->getUser()?$paiement->getUser()->getId():null,
            "userNom"=>$paiement->getUser()?$paiement->getUser()->getNom():null,
            "userPrenom"=>$paiement->getUser()?$paiement->getUser()->getPrenom():null,
            "ayantDroitId"=>$paiement->getAyantDroit()?$paiement->getAyantDroit()->getId():null,
            "ayantDroitNom"=>$paiement->getAyantDroit()?$paiement->getAyantDroit()->getNom():null,
            "ayantDroitPrenom"=>$paiement->getAyantDroit()?$paiement->getAyantDroit()->getPrenom():null,
            "agentId"=>$paiement->getAyantDroit()?$paiement->getAyantDroit()->getId():null,
            "agentNom"=>$paiement->getAyantDroit()?$paiement->getAyantDroit()->getNom():null,

        );
    }

    public function validatePaiement($paiement){
        $paiement->setValidite(1);
        return$paiement;
    }
}
