<?php

namespace App\Mapping;

use App\Entity\Destinataire;

class DestinataireMapping extends BaseMapping{

    public function setDestinataireData($data,$destinataire){
     $destinataire->setEmail(isset($data['email'])?$data['email']:$destinataire->getEmail());
     $destinataire->setUser(isset($data['user'])?$data['user']:$destinataire->getUser());
     $destinataire->setRoleDestinataire(isset($data['roleDestinataire'])?$data['roleDestinataire']:$destinataire->getRoleDestinataire());
     return $destinataire;
    }

    public function addDestinataire($data){
        $destinataire=new Destinataire();
        return $this->setDestinataireData($data,$destinataire);
    }

    public function hydrateDestinataire($destinataire){
        return array(
            $this->ID_KEY=>$destinataire->getId(),
            $this->EMAIL_KEY=>$destinataire->getEmail(),
            "user"=>array(
                $this->ID_KEY=>$destinataire->getUser()?$destinataire->getUser()->getId():null,
                $this->NOM_KEY=>$destinataire->getUser()?$destinataire->getUser()->getNom():null,
                $this->PRENOM_KEY=>$destinataire->getUser()?$destinataire->getUser()->getPrenom():null,
            ),
            "roleDestinateire"=>array(
                $this->ID_KEY=>$destinataire->getRoleDestinataire()?$destinataire->getRoleDestinataire()->getId():null,
                $this->LIBELLE_KEY=>$destinataire->getRoleDestinataire()?$destinataire->getRoleDestinataire()->getLibelle():null,
            )
        );
    }
}
