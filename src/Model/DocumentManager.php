<?php
namespace App\Model;

use App\Entity\Agent;
use App\Entity\Document;
use App\Entity\Jugement;
use App\Entity\Notaire;
use App\Entity\TypeDocument;
use App\Entity\User;
use App\Mapping\DocumentMapping;
use App\Service\BaseService;
use Doctrine\ORM\EntityManagerInterface;
use Proxies\__CG__\App\Entity\Agence;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class DocumentManager extends BaseManager{
    private $documentMapping;
    public function __construct(DocumentMapping $documentMapping,BaseService $baseService, \Swift_Mailer $mailer, SerializerInterface $serializer, ValidatorInterface $validator, EntityManagerInterface $em)
    {
        parent::__construct($baseService, $mailer, $serializer, $validator, $em);
        $this->documentMapping=$documentMapping;
    }

    public function addDocument($data){
        $data['user']=isset($data['userId'])?$this->em->getRepository(User::class)->find($data['userId']):null;
        $data['typeDocument']=isset($data['typeDocumentId'])?$this->em->getRepository(TypeDocument::class)->find($data['typeDocumentId']):null;
        $data['agent']=isset($data['agentId'])?$this->em->getRepository(Agent::class)->find($data['agentId']):null;
        $data['jugement']=isset($data['jugementId'])?$this->em->getRepository(Jugement::class)->find($data['jugementId']):null;
        $data['notaire']=isset($data['notaireId'])?$this->em->getRepository(Notaire::class)->find($data['notaireId']):null;
        $document=$this->documentMapping->addDocument($data);
        $this->em->persist($document);
        $this->em->flush();
        return array("code"=>201,"status"=>true,"message"=>"Document créé avec succés");
    }


    public function searchDocument($search){
        $document=$this->em->getRepository(Document::class)->searchDocument($search);
        if (!$document){
            return array("code"=>500,"status"=>false,"message"=>"Document inexistant");
        }
        return array("code"=>200,"status"=>true,"data"=>$this->documentMapping->hydrateDocument($document[0]));
    }
}
