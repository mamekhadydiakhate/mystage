<?php

namespace App\Model;

use App\Entity\Tribunal;
use App\Mapping\TribunalMapping;
use App\Service\BaseService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class TribunalManager extends BaseManager{
    private $tribunalMapping;
    public function __construct(TribunalMapping $tribunalMapping,BaseService $baseService, \Swift_Mailer $mailer, SerializerInterface $serializer, ValidatorInterface $validator, EntityManagerInterface $em)
    {
        parent::__construct($baseService, $mailer, $serializer, $validator, $em);
        $this->tribunalMapping = $tribunalMapping;
    }

    public function addTribunal($data){
        $tribunal = $this->tribunalMapping->addTribunal($data);
        $this->em->persist($tribunal);
        $this->em->flush();
        return array("status"=>201,"code"=>201,"message"=>"Tribunal créé avec succés");
    }

    public function updateTribunal($data,$id){
        $tribunal = $this->em->getRepository(Tribunal::class)->find($id);
        if (!$tribunal){
            return array("status"=>false,"code"=>500,"message"=>"Tribunal inexistant");
        }
        $tribunal = $this->tribunalMapping->updateTribunal($data,$tribunal);
        $this->em->persist($tribunal);
        $this->em->flush();
        return array("status"=>true,"code"=>200,"message"=>"Tribunal modifié avec succés");
    }

    public function listTribunal(){
        $tribunals = $this->em->getRepository(Tribunal::class)->findAll();
        if (!$tribunals){
            return array("status"=>false,"code"=>500,"message"=>"Tribunal inexistants");
        }
        $tabTribunal=array();
        foreach ($tribunals as $tribunal){
            $tabTribunal[]=$this->tribunalMapping->hydrateTribunal($tribunal);
        }
        return array("status"=>true,"code"=>200,"data"=>$tabTribunal);
    }

    public function deleteTribunal($id){
        $tribunal = $this->em->getRepository(Tribunal::class)->find($id);
        if (!$tribunal){
            return array("status"=>false,"code"=>500,"message"=>"Tribunal inexistant");
        }
        $this->em->remove($tribunal);
        $this->em->flush();
        return array("status"=>true,"code"=>200,"message"=>"Tribunal inexistant");
    }
}
