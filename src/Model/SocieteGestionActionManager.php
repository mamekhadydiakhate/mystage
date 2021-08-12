<?php


namespace App\Model;


use App\Entity\SocieteGestionAction;
use App\Mapping\SocieteGestionActionMapping;
use App\Service\BaseService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class SocieteGestionActionManager extends BaseManager
{
    private $societeGestionActionMapping;
    public function __construct(SocieteGestionActionMapping $societeGestionActionMapping,BaseService $baseService, \Swift_Mailer $mailer, SerializerInterface $serializer, ValidatorInterface $validator, EntityManagerInterface $em)
    {
        parent::__construct($baseService, $mailer, $serializer, $validator, $em);
        $this->societeGestionActionMapping=$societeGestionActionMapping;
    }

    public function addSocieteGestionAction($data){
        $societeGestionAction=$this->societeGestionActionMapping->addSocieteGestionAction($data);
        $this->em->persist($societeGestionAction);
        $this->em->flush();
        return array($this->SUCCESS_KEY => true, $this->CODE_KEY => 201,$this->MESSAGE_KEY => 'Societe gestion action cree avec succes!');
    }

    public function rechercheSocieteGestionAction($search){
        $societeGestionAction=$this->em->getRepository(SocieteGestionAction::class)->searchSociete($search);
        if (!$societeGestionAction){
            return array($this->SUCCESS_KEY => false, $this->CODE_KEY => 500,$this->MESSAGE_KEY => 'Societe inexistante');
        }
        return array($this->SUCCESS_KEY => true, $this->CODE_KEY => 200,"data"=> $societeGestionAction);
    }

    public function listeSocieteGestionAction($page,$limit){
        $societeGestionActions=$this->em->getRepository(SocieteGestionAction::class)->listSociete($page,$limit);
        if (!$societeGestionActions){
            return array($this->SUCCESS_KEY => false, $this->CODE_KEY => 500,$this->MESSAGE_KEY => 'Societe inexistante');
        }
        $total=$this->em->getRepository(SocieteGestionAction::class)->countSociete();
        return array($this->SUCCESS_KEY => true, $this->CODE_KEY => 200,"total"=>$total,"data"=> $societeGestionActions);
    }

    public function updateSocieteGestionAction($data,$id){
        $societeGestionAction=$this->em->getRepository(SocieteGestionAction::class)->find($id);
        if (!$societeGestionAction){
            return array($this->SUCCESS_KEY => false, $this->CODE_KEY => 500,$this->MESSAGE_KEY => 'Societe inexistante');
        }
        $societeGestionAction=$this->societeGestionActionMapping->updateSocieteGestionAction($data,$societeGestionAction);
        $this->em->persist($societeGestionAction);
        $this->em->flush();
        return array($this->SUCCESS_KEY => true, $this->CODE_KEY => 200,"Societe modifiée avec succes");
    }

    public function deleteSocieteGestionAction($id){
        $societeGestionAction=$this->em->getRepository(SocieteGestionAction::class)->find($id);
        if (!$societeGestionAction){
            return array($this->SUCCESS_KEY => false, $this->CODE_KEY => 500,$this->MESSAGE_KEY => 'Societe inexistante');
        }
        $this->em->remove($societeGestionAction);
        $this->em->flush();
        return array($this->SUCCESS_KEY => true, $this->CODE_KEY => 200,"Societe supprimée avec succes");
    }
}
