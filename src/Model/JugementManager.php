<?php


namespace App\Model;



use App\Entity\Agent;
use App\Entity\Jugement;
use App\Entity\Notaire;
use App\Entity\Tribunal;
use App\Mapping\AgentMapping;
use App\Mapping\DocumentMapping;
use App\Mapping\JugementMapping;
use App\Service\BaseService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class JugementManager extends BaseManager
{
    private $jugementMapping;
    private $agentMapping;
    private $documentMapping;

    public function __construct(DocumentMapping $documentMapping,AgentMapping $agentMapping,JugementMapping $jugementMapping,BaseService $baseService, \Swift_Mailer $mailer, SerializerInterface $serializer, ValidatorInterface $validator, EntityManagerInterface $em)
    {
        $this->jugementMapping=$jugementMapping;
        $this->agentMapping=$agentMapping;
        $this->documentMapping=$documentMapping;
        parent::__construct($baseService, $mailer, $serializer, $validator, $em);
    }

    public function addJugement($data){
        $jugement=$this->jugementMapping->addJugement($data);
        $this->em->persist($jugement);
        $this->em->flush();
        return array($this->SUCCESS_KEY => true, $this->CODE_KEY => 200,$this->MESSAGE_KEY => 'Jugement cree avec succes!');
    }

    public function detailsJugement($id){
        $jugement=$this->em->getRepository(Jugement::class)->find($id);
        if (!$jugement) {
            return array($this->SUCCESS_KEY => false, $this->CODE_KEY => 500,$this->MESSAGE_KEY => 'Jugement inexistant!');
        }
        return $this->jugementMapping->hydrateJugement($jugement);
    }


    public function updateJugement($data,$id){
        $jugement=$this->em->getRepository(Jugement::class)->find($id);
        if (!$jugement) {
            return array($this->SUCCESS_KEY => false, $this->CODE_KEY => 500,$this->MESSAGE_KEY => 'Jugement inexistant!');
        }
        $jugement=$this->jugementMapping->updateJugement($data,$jugement);
        $this->em->persist($jugement);
        $this->em->flush();
        return array($this->SUCCESS_KEY => false, $this->CODE_KEY => 500,$this->MESSAGE_KEY => 'Jugement modifie avec succes!');

    }


    public function deleteJugement($id){
        $jugement=$this->em->getRepository(Jugement::class)->find($id);
        if (!$jugement) {
            return array($this->SUCCESS_KEY => false, $this->CODE_KEY => 500,$this->MESSAGE_KEY => 'Jugement inexistant!');
        }
        $this->em->remove($jugement);
        $this->em->flush();
        return array($this->SUCCESS_KEY => false, $this->CODE_KEY => 500,$this->MESSAGE_KEY => 'Jugement suprrime avec succes!');

    }


    public function listJugements($page){
        $jugements=$this->em->getRepository(Jugement::class)->listJugements($page,$this->LIMIT);
        if (!$jugements) {
            return array($this->SUCCESS_KEY => false, $this->CODE_KEY => 500,$this->MESSAGE_KEY => 'Jugements inexistant!');
        }
        $total=$this->em->getRepository(Jugement::class)->countJugements();
        return array($this->SUCCESS_KEY => true, $this->CODE_KEY => 200,"total"=>$total,"data" => $this->jugementMapping->listJugements($jugements));
    }

    public function addJugementDocAgent($data){
        //dd($data,json_decode($data['dataJugement'],true),json_decode($data['dataAgent'],true));
        $dataJugement=json_decode($data['dataJugement'],true);
       // isset($dataJugement['notaireId'])?$dataJugement['notaire']=$this->em->getRepository(Notaire::class)->find($dataJugement['notaireId']):'';
        isset($dataJugement['tribunalId'])?$dataJugement['tribunal']=$this->em->getRepository(Tribunal::class)->find($dataJugement['tribunalId']):'';
        $dataAgent=json_decode($data['dataAgent'],true);
        $jugement=$this->jugementMapping->addJugement($dataJugement);
        $agent=$this->agentMapping->addAgent($dataAgent);
        $documen=$this->documentMapping->addDocument($data);
         $jugement->addDocument($documen);
         $agent->addDocument($documen);
        $this->em->persist($jugement);
        $this->em->persist($agent);
        $this->em->persist($documen);
        $this->em->flush();
        return array("code"=>200,"success"=>true,"message"=>"Jugement ajouté avec succés");
    }

}
