<?php

namespace App\Mapping;

use App\Entity\Notaire;

class NotaireMapping extends BaseMapping{


    public function setNotaireData($notaire,$data){
        $notaire->setAdresse(isset($data['adresse'])?$data['adresse']:$notaire->getAdresse());
        $notaire->setEmail(isset($data['email'])?$data['email']:$notaire->getEmail());
        $notaire->setPrenom(isset($data['prenom'])?$data['prenom']:$notaire->getPrenom());
        $notaire->setNom(isset($data['nom'])?$data['nom']:$notaire->getNom());
        $notaire->setChargeDossier(isset($data['chargeDossier'])?$data['chargeDossier']:$notaire->getChargeDossier());
        $notaire->setNumeroDossier(isset($data['numeroDossier'])?$data['numeroDossier']:$notaire->getNumeroDossier());
        $notaire->setTel1(isset($data['tel1'])?$data['tel1']:$notaire->getTel1());
        $notaire->setTel2(isset($data['tel2'])?$data['tel2']:$notaire->getTel2());
        $notaire->setValidite(isset($data['validite'])?$data['validite']:$notaire->getValidite());
        return $notaire;
    }

    public function addNotaire($data){
        $notaire=new Notaire();
        return $this->setNotaireData($notaire,$data);
    }

    public function updateNotaire($data,$notaire){
        return $this->setNotaireData($notaire,$data);
    }

    public function hydrateNotaire($notaire){
        return array(
            $this->ID_KEY=>$notaire->getId(),
            $this->PRENOM_KEY=>$notaire->getPrenom(),
            $this->NOM_KEY=>$notaire->getNom(),
            $this->ADRESSE_KEY=>$notaire->getAdresse(),
            $this->EMAIL_KEY=>$notaire->getEmail(),
            $this->TEL_1KEY=>$notaire->getTel1(),
            $this->TEL_2KEY=>$notaire->getTel2(),
            $this->VALIDITE_KEY=>$notaire->getValidite(),
            "numeroDossier"=>$notaire->getNumeroDossier(),
            "chargeDossier"=>$notaire->getChargeDossier()
        );
    }
}
