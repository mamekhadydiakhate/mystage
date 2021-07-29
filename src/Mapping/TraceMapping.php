<?php

namespace App\Mapping;

use App\Entity\Trace;
use App\Model\BaseManager;

class TraceMapping extends BaseMapping{

    public function hydrateTraces($traces){
        $tabTraces=array();
        foreach ($traces as $trace){
            $tabTraces[]= array(
            $this->ID_KEY=>$trace->getId(),
            "operation"=>array(
                $this->ID_KEY=>$trace->getOperation()?$trace->getOperation()->getId():null,
                $this->LIBELLE_KEY=>$trace->getOperation()?$trace->getOperation()->getLibelle():null,
            ),
            "user"=>array(
                $this->ID_KEY=>$trace->getUser()?$trace->getUser()->getId():null,
                $this->PRENOM_KEY=>$trace->getUser()?$trace->getUser()->getPrenom():null,
                $this->PRENOM_KEY=>$trace->getUser()?$trace->getUser()->getNom():null,
            ),
            "adresseIp"=>$trace->getAddresseIp(),
                "date"=>$trace->getDate()?date_format($trace->getDate(),'Y-m-d'):null,
        );
        }
        return $tabTraces;
    }
}
