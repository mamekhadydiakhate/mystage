<?php

namespace App\Mapping;

use App\Entity\Jugement;

class JugementMapping extends BaseMapping{

    public function setJugementData($data,$jugement){
     $jugement->setNom(isset($data['nom'])?$data['nom']:$jugement->getNom());
     $jugement->setValidite(isset($data['validite'])?$data['validite']:$jugement->getNom());
     $jugement->setNumeroJugement(isset($data['numeroJugement'])?$data['numeroJugement']:$jugement->getNumeroJugement());
     $jugement->setDate(isset($data['date'])?new \DateTime($data['date']):$jugement->getDate());
     $jugement->setTribunal(isset($data['tribunal'])?$data['tribunal']:$jugement->getTribunal());
     return $jugement;
    }

    public function addJugement($data){
        $jugement=new Jugement();
        return $this->setJugementData($data,$jugement);
    }

    public function updateJugement($data,$jugement){
        return $this->setJugementData($data,$jugement);
    }

    public function hydrateJugement($jugement){
        return array(
          $this->ID_KEY=>$jugement->getId(),
          $this->NOM_KEY=>$jugement->getNom(),
          $this->VALIDITE_KEY=>$jugement->getValidite(),
          "numeroJugement"=>$jugement->getNumeroJugement(),
          "tribunal"=>$jugement->getTribunal(),
          "date"=>$jugement->getDate()?date_format($jugement->getDate(),'Y-m-d'):null,
        );
    }

    public function listJugements($jugements){
        $tabJugements=[];
        if ($jugements){
            foreach ($jugements as $jugement){
                $tabJugements[]=$this->hydrateJugement($jugement);
            }
        }
        return $tabJugements;
    }
}
