<?php

namespace App\Model;

use App\Entity\Operation;
use App\Entity\Trace;
use App\Entity\User;
use App\Service\BaseService;
use App\Service\ConnectedUserService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class TraceManager extends BaseManager{
    private $tokenStorage;
    public function __construct(TokenStorageInterface $tokenStorage,BaseService $baseService, \Swift_Mailer $mailer, SerializerInterface $serializer, ValidatorInterface $validator, EntityManagerInterface $em)
    {
        $this->tokenStorage=$tokenStorage;
        parent::__construct($baseService, $mailer, $serializer, $validator, $em);
    }
    public function addTrace($data){
        $trace=new Trace();
        $trace->setUser(ConnectedUserService::getConnectedUser($this->tokenStorage,$this->em->getRepository(User::class)));
        $trace->setAddresseIp($_SERVER['REMOTE_ADDR']);
        $trace->setOperation(isset($data['operation'])?$this->em->getRepository(Operation::class)->findOneBy(["libelle"=>$data['operation']]):null);
        $this->em->persist($trace);
        $this->em->flush();
    }
}
