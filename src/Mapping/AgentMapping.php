<?php

namespace App\Mapping;

use App\Entity\Agent;

class AgentMapping extends BaseMapping{

    public function setAgentData($data,$agent){
        $agent->setNom(isset($data['nom'])?$data['nom']:$agent->getNom());
        $agent->setPrenom(isset($data['prenom'])?$data['prenom']:$agent->getPrenom());
        $agent->setValidite(isset($data['validite'])?$data['validite']:$agent->getValidite());
       // $agent->setNumeroDossier(isset($data['numeroDossier'])?$data['numeroDossier']:$agent->getNumeroDossier());
        $agent->setNombreAction(isset($data['nombreAction'])?$data['nombreAction']:$agent->getNombreAction());
        $agent->setCommentaire(isset($data['commentaire'])?$data['commentaire']:$agent->getCommentaire());
        $agent->setTransfertAction(isset($data['transfertAcion'])?$data['transfertAcion']:$agent->getTransfertAction());
        $agent->setDateTransfertAction(isset($data['dateTransfertAction'])?new \DateTime($data['dateTransfertAction']):$agent->getDateTransfertAction());
        $agent->setMatricule(isset($data['matricule'])?$data['matricule']:$agent->getMatricule());
        return $agent;
    }

    public function addAgent($data){
        $agent=new Agent();
        return $this->setAgentData($data,$agent);
    }

    public function updateAgent($data,$agent){
        return $this->setAgentData($data,$agent);
    }
    public function hydrateAgent($agent){
        return array(
            $this->ID_KEY=>$agent->getId(),
            $this->MATRICULE_KEY=>$agent->getMatricule(),
            $this->NOM_KEY=>$agent->getNom(),
            $this->PRENOM_KEY=>$agent->getPrenom(),
            "commentaire"=>$agent->getCommentaire(),
            "nombreAction"=>$agent->getNombreAction(),
           // "numeroDossier"=>$agent->getNumeroDossier(),
            "validite"=>$agent->getValidite(),
            "dateTransfertAction"=>$agent->getDateTransfertAction()?date_format($agent->getDateTransfertAction(),'Y-m-d'):null,
        );
    }
}
