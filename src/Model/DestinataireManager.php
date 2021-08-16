<?php

namespace App\Model;

use App\Entity\Destinataire;
use App\Entity\RoleDestinataire;
use App\Entity\User;
use App\Mapping\DestinataireMapping;
use App\Service\BaseService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Role\Role;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class DestinataireManager extends BaseManager{
    private $destinataireMapping;
    public function __construct(DestinataireMapping $destinataireMapping,BaseService $baseService, \Swift_Mailer $mailer, SerializerInterface $serializer, ValidatorInterface $validator, EntityManagerInterface $em)
    {
        $this->destinataireMapping=$destinataireMapping;
        parent::__construct($baseService, $mailer, $serializer, $validator, $em);
    }

    public function addDestinataire($data){
        $data['user']=isset($data['userId'])?$this->em->getRepository(User::class)->find($data['userId']):null;
        $data['roleDestinataire']=isset($data['roleDestinataireId'])?$this->em->getRepository(RoleDestinataire::class)->find($data['roleDestinataireId']):null;
        $destinataire=$this->destinataireMapping->addDestinataire($data);
        $this->em->persist($destinataire);
        $this->em->flush();
        return array("code"=>201,"status"=>true,$this->MESSAGE_KEY=>"Destinataire créé avec succés!");
    }

    public function searchDestinataire($search){
        $destinataire=$this->em->getRepository(Destinataire::class)->searchDestinataire($search);
        if (!$destinataire){
            return array("code"=>500,"status"=>false,$this->MESSAGE_KEY=>"Destinataire introuvable");
        }
        return array("code"=>200,"status"=>false,"data"=>$this->destinataireMapping->hydrateDestinataire($destinataire[0]));
    }

    public function detailsDestinataire($id){
        $destinataire=$this->em->getRepository(Destinataire::class)->find($id);
        if (!$destinataire){
            return array("code"=>500,"status"=>false,$this->MESSAGE_KEY=>"Destinataire introuvable");
        }
        return array("code"=>200,"status"=>false,"data"=>$this->destinataireMapping->hydrateDestinataire($destinataire));
    }


    public function updateDestinataire($id,$data){
        $destinataire=$this->em->getRepository(Destinataire::class)->find($id);
        if (!$destinataire){
            return array("code"=>500,"status"=>false,$this->MESSAGE_KEY=>"Destinataire introuvable");
        }
        $destinataire=$this->destinataireMapping->updateDestinataire($data,$destinataire);
        $this->em->persist($destinataire);
        $this->em->flush();
        return array("code"=>200,"status"=>false,"message"=>"Destinataire modifié avec succes");
    }

    public function listDestinataire($page,$limit){
        $destinataires=$this->em->getRepository(Destinataire::class)->findBy([],[],$limit,($page - 1) * $limit);
        if (!$destinataires){
            return array("code"=>500,"status"=>false,$this->MESSAGE_KEY=>"Destinataire introuvable");
        }
        $tabDestinataires=[];
        foreach ($destinataires as $destinataire){
            $tabDestinataires[]=$this->destinataireMapping->hydrateDestinataire($destinataire);
        }
        return array("code"=>200,"status"=>false,"data"=>$tabDestinataires);
    }
}
