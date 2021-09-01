<?php

namespace App\Mapping;

use App\Entity\TransfertAction;

class TransfertActionMapping extends BaseMapping{

    public function setTransfertActionData($data,$transfertAction){
        $transfertAction->setNombreAction(isset($data['nombreAction'])?$data['nombreAction']:$transfertAction->getNombreAction());
        $transfertAction->setValidite(isset($data['validite'])?$data['validite']:$transfertAction->getValidite());
        $transfertAction->setNumeroTransfert(isset($data['numeroTransfert'])?$data['numeroTransfert']:$transfertAction->getNumeroTransfert());
        $transfertAction->setSocieteGestionAction(isset($data['societeGestionAction'])?$data['societeGestionAction']:$transfertAction->getSocieteGestionAction());
        return $transfertAction;
    }

    public function addTransfertAction($data){
        $transfertAction=new TransfertAction();
        return $this->setTransfertActionData($data,$transfertAction);
    }

    public function hydrateTransfertAction($transfertAction){
        return array(
          $this->ID_KEY=>$transfertAction->getId(),
            "validite"=>$transfertAction->getValidite(),
            "numeroTransfert"=>$transfertAction->getNumeroTransfert(),
            "nombreAction"=>$transfertAction->getNombreAction(),
            "societeGestionActionId"=>$transfertAction->getSocieteGestionAction()?$transfertAction->getSocieteGestionAction()->getId():null,
            "societeGestionActionLibelle"=>$transfertAction->getSocieteGestionAction()?$transfertAction->getSocieteGestionAction()->getLibelle():null,
        );
    }

    public function valideTransfertAction($transfertAction){
        $transfertAction->setValidite(1);
        return $transfertAction;
    }
}
