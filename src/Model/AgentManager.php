<?php


namespace App\Model;


use App\Entity\Agent;
use App\Mapping\AgentMapping;
use App\Service\BaseService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class AgentManager extends BaseManager
{
    private $agentMapping;
    public function __construct(AgentMapping $agentMapping,BaseService $baseService, \Swift_Mailer $mailer, SerializerInterface $serializer, ValidatorInterface $validator, EntityManagerInterface $em)
    {
        $this->agentMapping=$agentMapping;
        parent::__construct($baseService, $mailer, $serializer, $validator, $em);
    }

    public function addAgent($data){
        $agent=$this->agentMapping->addAgent($data);
        $this->em->persist($agent);
        $this->em->flush();
        return array("code"=>200,"status"=>true,$this->MESSAGE_KEY=>"Agent ajoute avec succes");
    }

    public function searchAgent($search){
        $agent=$this->em->getRepository(Agent::class)->searchAgent($search);
        if (!$agent){
            return array("code"=>500,"status"=>false,$this->MESSAGE_KEY=>"Agent inexistant");
        }
        return array("code"=>200,"status"=>true,"data"=>$this->agentMapping->hydrateAgent($agent[0]));
    }
}
