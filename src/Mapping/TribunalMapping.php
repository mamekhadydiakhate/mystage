<?php

namespace App\Mapping;

use App\Entity\Tribunal;

class TribunalMapping extends BaseMapping{

    public function setTribunalMapping($data,$tribunal){
        $tribunal->setNom(isset($data['nom'])?$data['nom']:$tribunal->getNom());
        $tribunal->setAdress(isset($data['adresse'])?$data['adresse']:$tribunal->getAdresse());
        return $tribunal;
    }

    public function hydrateTribunal($tribunal){
        return array(
            $this->ID_KEY=>$tribunal->getId(),
            $this->NOM_KEY=>$tribunal->getNom(),
            $this->ADRESSE_KEY=>$tribunal->getAdresse()
        );
    }

    public function addTribunal($data){
        $tribunal = new Tribunal();
        return $this->setTribunalMapping($data,$tribunal);
    }
    public function updateTribunal($data,$tribunal){
        return $this->setTribunalMapping($data,$tribunal);
    }

}
