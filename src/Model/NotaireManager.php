<?php

namespace App\Model;

use App\Entity\Notaire;
use App\Mapping\NotaireMapping;
use App\Service\BaseService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class NotaireManager extends BaseManager{
    private $notaireMapping;
    public function __construct(NotaireMapping $notaireMapping,BaseService $baseService, \Swift_Mailer $mailer, SerializerInterface $serializer, ValidatorInterface $validator, EntityManagerInterface $em)
    {
        $this->notaireMapping = $notaireMapping;
        parent::__construct($baseService, $mailer, $serializer, $validator, $em);
    }

    public function addNotaire($data){
        $notaire=$this->notaireMapping->addNotaire($data);
        $this->em->persist($notaire);
        $this->em->flush();
        return array("code"=>200,"status"=>true,$this->MESSAGE_KEY=>"Notaire ajoute avec succes!");
    }

    public function updateNotaire($data,$id){
        $notaire=$this->em->getRepository(Notaire::class)->find($id);
        if (!$notaire) {
            return array($this->SUCCESS_KEY => false, $this->CODE_KEY => 500,$this->MESSAGE_KEY => 'Notaire inexistant!');
        }
        $notaire=$this->notaireMapping->updateNotaire($data,$notaire);
        $this->em->persist($notaire);
        $this->em->flush();
        return array($this->SUCCESS_KEY => true, $this->CODE_KEY => 200,$this->MESSAGE_KEY => 'Notaire modifie avec succes!');

    }

    public function deleteNotaire($id){
        $notaire=$this->em->getRepository(Notaire::class)->find($id);
        if (!$notaire) {
            return array($this->SUCCESS_KEY => false, $this->CODE_KEY => 500,$this->MESSAGE_KEY => 'Notaire inexistant!');
        }
        $this->em->remove($notaire);
        $this->em->flush();
        return array($this->SUCCESS_KEY => true, $this->CODE_KEY => 200,$this->MESSAGE_KEY => 'Notaire supprime avec succes!');
    }

    public function detailsNotaire($id){
        $notaire=$this->em->getRepository(Notaire::class)->find($id);
        if (!$notaire) {
            return array($this->SUCCESS_KEY => false, $this->CODE_KEY => 500,$this->MESSAGE_KEY => 'Notaire inexistant!');
        };
        return array($this->SUCCESS_KEY => true, $this->CODE_KEY => 200,"data"=>$this->notaireMapping->hydrateNotaire($notaire));
    }


    public function listNotaires($page){
        $notaire=$this->em->getRepository(Notaire::class)->listNotaires($page,$this->LIMIT);
        if (!$notaire) {
            return array($this->SUCCESS_KEY => false, $this->CODE_KEY => 500,$this->MESSAGE_KEY => 'Notaire inexistant!');
        }
        $total=$this->em->getRepository(Notaire::class)->countNotaires();
        return array($this->SUCCESS_KEY => true, $this->CODE_KEY => 200,"total"=>$total,"data" => $notaire);
    }


}
