<?php

namespace App\Model;

use App\Entity\Agent;
use App\Entity\AyantDroit;
use App\Entity\Courrier;
use App\Entity\TypeCourrier;
use App\Entity\User;
use App\Mapping\CourrierMapping;
use App\Service\BaseService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class CourrierManager extends BaseManager{
    private $courrierMapping;
    public function __construct(CourrierMapping $courrierMapping,BaseService $baseService, \Swift_Mailer $mailer, SerializerInterface $serializer, ValidatorInterface $validator, EntityManagerInterface $em)
    {
        $this->courrierMapping=$courrierMapping;
        parent::__construct($baseService, $mailer, $serializer, $validator, $em);
    }

    public function addCourrier($data){
        $data['agent']=isset($data['agentId'])?$this->em->getRepository(Agent::class)->find($data['agentId']):null;
        $data['user']=isset($data['userId'])?$this->em->getRepository(User::class)->find($data['userId']):null;
        $data['typeCourrier']=isset($data['typeCourrierId'])?$this->em->getRepository(TypeCourrier::class)->find($data['typeCourrierId']):null;
        $courrier=$this->courrierMapping->addCourrier($data);
        if (is_array($courrier)){
            return $courrier;
        }
        $this->em->persist($courrier);
        $this->em->flush();
        return array("code"=>201,"status"=>true,"message"=>"Courrier cree avec succes");

    }

    public function detailsCourrier($id){
        $courrier=$this->em->getRepository(Courrier::class)->find($id);
        if (!$courrier){
            return array("code"=>500,"status"=>false,"message"=>"Courrier inexistant");
        }
        $mandataire=$this->em->getRepository(AyantDroit::class)->findOneBy(['agent'=>true,"isMantadaire"=>true]);
        return array("code"=>200,"status"=>true,"data"=>$this->courrierMapping->hydrateCourrier($courrier,$mandataire));
    }
    public function listeCourrier($page,$limit){
        $courriers=$this->em->getRepository(Courrier::class)->findBy([],[],$limit,($page - 1) * $limit);
        if (!$courriers){
            return array("code"=>500,"status"=>false,"message"=>"Courriers inexistants");
        }
        $tabCourriers=array();
        $total=$this->em->getRepository(Courrier::class)->count([]);
        foreach ($courriers as $courrier){
            $tabCourriers[]=$this->courrierMapping->hydrateCourrier($courrier);
        }
        return array("code"=>200,"status"=>true,"data"=>$tabCourriers,"total"=>$total);
    }
    public function listObjetsCourrier(){
        $objetsCourriers=$this->em->getRepository(TypeCourrier::class)->findAll();
        if (!$objetsCourriers){
            return array("code"=>500,"status"=>false,"message"=>"Objets courriers inexistants!");
        }
              $tabObjetsCourriers[]=$this->courrierMapping->hydrateObjetCourrier($objetsCourriers);
         return array("code"=>200,"status"=>true,"data"=>$tabObjetsCourriers);
    }
}
