<?php

namespace App\Model;

use App\Entity\Agent;
use App\Entity\AyantDroit;
use App\Entity\Document;
use App\Entity\LienFamilial;
use App\Entity\StatutLegal;
use App\Mapping\AyantDroitMapping;
use App\Service\BaseService;
use Doctrine\ORM\EntityManagerInterface;
use PhpParser\Comment\Doc;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class AyantDroitManager extends BaseManager{

    private $ayantDroitMapping;
    public function __construct(AyantDroitMapping $ayantDroitMapping,BaseService $baseService, \Swift_Mailer $mailer, SerializerInterface $serializer, ValidatorInterface $validator, EntityManagerInterface $em)
    {
        $this->ayantDroitMapping=$ayantDroitMapping;
        parent::__construct($baseService, $mailer, $serializer, $validator, $em);
    }

    public function addAyantDroit($data){
        $data['agent']=isset($data['agentId'])?$this->em->getRepository(Agent::class)->find($data['agentId']):null;
        $data['statutLegal']=isset($data['statutLegalId'])?$this->em->getRepository(StatutLegal::class)->find($data['statutLegalId']):null;
        $data['lienFamilial']=isset($data['lienFamilialId'])?$this->em->getRepository(LienFamilial::class)->find($data['lienFamilialId']):null;
        $data['document']=isset($data['documentId'])?$this->em->getRepository(Document::class)->find($data['documentId']):null;
        $ayantDroit=$this->ayantDroitMapping->addAyantDroit($data);
        $this->em->persist($ayantDroit);
        $this->em->flush();
        return array("code"=>201,"status"=>true,"message"=>"Ayant droit créé avec succés");
    }

    public function searchAyantDroit($search){
        $ayantDroit=$this->em->getRepository(AyantDroit::class)->searchAyantDroit($search);
        if (!$ayantDroit){
            return array("code"=>500,"status"=>false,"message"=>"Ayant droit inexistant");
        }
        return array("code"=>200,"status"=>false,"data"=>$this->ayantDroitMapping->hydrateAyantDroit($ayantDroit[0]));
    }

    public function detailsAyantDroit($id){
        $ayantDroit=$this->em->getRepository(AyantDroit::class)->find($id);
        if (!$ayantDroit){
            return array("code"=>500,"status"=>false,"message"=>"Ayant droit inexistant");
        }
        return array("code"=>200,"status"=>false,"data"=>$this->ayantDroitMapping->hydrateAyantDroit($ayantDroit));
    }

    public function updateAyantDroit($id,$data){
        $ayantDroit=$this->em->getRepository(AyantDroit::class)->find($id);
        if (!$ayantDroit){
            return array("code"=>500,"status"=>false,"message"=>"Ayant droit inexistant");
        }
        isset($data['agentId'])?$data['agent']=$this->em->getRepository(Agent::class)->find($data['agentId']):'';
        isset($data['statutLegalId'])?$data['statutLegal']=$this->em->getRepository(StatutLegal::class)->find($data['statutLegalId']):'';
       isset($data['lienFamilialId'])? $data['lienFamilial']=$this->em->getRepository(LienFamilial::class)->find($data['lienFamilialId']):'';
      isset($data['documentId'])?  $data['document']=$this->em->getRepository(Document::class)->find($data['documentId']):'';

        $ayantDroit=$this->ayantDroitMapping->updateAyantDroit($data,$ayantDroit);
        $this->em->persist($ayantDroit);
        $this->em->flush();
        return array("code"=>200,"status"=>false,"message"=>"Ayant droit modifie avec succes");
    }

    public function listAyantDroit($page,$limit){
        $ayantDroits=$this->em->getRepository(AyantDroit::class)->listAyantDroit($page,$limit);
        if (!$ayantDroits){
            return array("code"=>500,"status"=>false,"message"=>"Ayants droit inexistants");
        }
        $tabAyantDroit=array();
        foreach ($ayantDroits as $ayantDroit){
            $tabAyantDroit[]=$this->ayantDroitMapping->hydrateAyantDroit($ayantDroit);
        }
        return array("code"=>200,"status"=>false,"data"=>$tabAyantDroit);
    }
}
