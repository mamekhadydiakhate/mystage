<?php

namespace App\Model;

use App\Entity\Agent;
use App\Entity\AyantDroit;
use App\Entity\Paiement;
use App\Entity\User;
use App\Mapping\PaiementMapping;
use App\Service\BaseService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class PaiementManager extends BaseManager{
    private $paiementMapping;
    public function __construct(PaiementMapping $paiementMapping,BaseService $baseService, \Swift_Mailer $mailer, SerializerInterface $serializer, ValidatorInterface $validator, EntityManagerInterface $em)
    {
        $this->paiementMapping=$paiementMapping;
        parent::__construct($baseService, $mailer, $serializer, $validator, $em);
    }

    public function addPaiement($data){
        $data['ayantDroit']=isset($data['ayantDroitId'])?$this->em->getRepository(AyantDroit::class)->find($data['ayantDroitId']):null;
        $data['agent']=isset($data['agentId'])?$this->em->getRepository(Agent::class)->find($data['agentId']):null;
        $data['user']=isset($data['userId'])?$this->em->getRepository(User::class)->find($data['userId']):null;
        $paiement=$this->paiementMapping->addPaiement($data);
        $this->em->persist($paiement);
        $this->em->flush();
        return array($this->SUCCESS_KEY => true, $this->CODE_KEY => 201,$this->MESSAGE_KEY => 'Paiement ajoute avec succes!');
    }

    public function searchPaiement($search){
        $paiemnt=$this->em->getRepository(Paiement::class)->searchPaiement($search);
        if (!$paiemnt){
            return array($this->SUCCESS_KEY => false, $this->CODE_KEY => 500,$this->MESSAGE_KEY => 'Paiement introuvable!');
        }
        return array($this->SUCCESS_KEY => true, $this->CODE_KEY => 200,"data" =>$this->paiementMapping->hydratePaiement($paiemnt[0]));
    }

    public function validerPaiement($id){
        $paiemnt=$this->em->getRepository(Paiement::class)->find($id);
        if (!$paiemnt){
            return array($this->SUCCESS_KEY => false, $this->CODE_KEY => 500,$this->MESSAGE_KEY => 'Paiement introuvable!');
        }
        $paiemnt=$this->paiementMapping->validatePaiement($paiemnt);
        $this->em->persist($paiemnt);
        $this->em->flush();
        return array($this->SUCCESS_KEY => true, $this->CODE_KEY => 200,$this->MESSAGE_KEY =>'Paiement valide avec succes');

    }

    public function paiementEffectues($page){
        $limit=getenv("LIMIT");
        $paiements=$this->em->getRepository(Paiement::class)->findBy(["validite"=>1],[],10,($page - 1) * $limit);
        $total=$this->em->getRepository(Paiement::class)->count(["validite"=>1]);
        if (!$paiements){
            return array("code"=>500,"status"=>false,"message"=>"Paiements inexistants");
        }
        $tabPaiements=array();
        foreach ($paiements as $paiement){
            $tabPaiements[]=$this->paiementMapping->hydratePaiement($paiement);
        }
        return array("code"=>200,"status"=>true,'total'=>$total,"data"=>$tabPaiements);
    }
}