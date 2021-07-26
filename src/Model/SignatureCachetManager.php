<?php

namespace App\Model;

use App\Entity\SignatureCachet;
use App\Entity\User;
use App\Mapping\SignatureCachetMapping;
use App\Service\BaseService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class SignatureCachetManager extends BaseManager{
    private $signatureCachetMapping;
    public function __construct(SignatureCachetMapping $signatureCachetMapping,BaseService $baseService, \Swift_Mailer $mailer, SerializerInterface $serializer, ValidatorInterface $validator, EntityManagerInterface $em)
    {
        parent::__construct($baseService, $mailer, $serializer, $validator, $em);
        $this->signatureCachetMapping=$signatureCachetMapping;
    }

    public function addSignatureCachet($data){
        $data["user"]=isset($data['userId'])?$this->em->getRepository(User::class)->find($data['userId']):null;
        $signatureCachet=$this->signatureCachetMapping->addSignatureCachet($data);
        if (is_array($signatureCachet)){
            return $signatureCachet;
        }
        $this->em->persist($signatureCachet);
        $this->em->flush();
        return array("code"=>201,"status"=>true,"message"=>"Signature cachet créé avec succés");

    }

}
