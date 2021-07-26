<?php
namespace App\Mapping;

use ApiPlatform\Core\Validator\ValidatorInterface;
use App\Entity\Document;
use App\Service\BaseService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Serializer\SerializerInterface;

class DocumentMapping extends BaseMapping{
    public function __construct(\Swift_Mailer $mailer, BaseService $baseService, EntityManagerInterface $em, ValidatorInterface $validator, SerializerInterface $serializer, UserPasswordEncoderInterface $encoder)
    {
        parent::__construct($mailer, $baseService, $em, $validator, $serializer, $encoder);
    }

    public function setDocumentData($document,$data){
        $document->setLibelle(isset($data['libelle'])?$data['libelle']:$document->getLibelle());
        $document->setUser(isset($data['user'])?$data['user']:$document->getUser());
        $document->setTypeDocument(isset($data['typeDocument'])?$data['typeDocument']:$document->getTypeDocument());
        $document->setAgent(isset($data['agent'])?$data['agent']:$document->getAgent());
        $document->setDateDelivrance(isset($data['dateDelivrance'])?new \DateTime($data['dateDelivrance']):$document->getDateDelivrance());
        $document->setDateExpiration(isset($data['dateExpiration'])?new \DateTime($data['dateExpiration']):$document->getDateExpiration());
        $document->setDateValidite(isset($data['dateValidite'])?new \DateTime($data['dateValidite']):$document->getDateValidite());
        $document->setJugement(isset($data['jugement'])?$data['jugement']:$document->getJugement());
        $document->setNotaire(isset($data['notaire'])?$data['notaire']:$document->getNotaire());
        $document->setNumeroDocument(isset($data['numeroDocument'])?$data['numeroDocument']:$document->getNumeroDocument());
        return $document;
        //??   $document->setFichier(isset($data['fichier'])?new \DateTime($data['dateValidite']):$document->getDateValidite());
    }

    public function addDocument($data){
        $document=new Document();
        $document=$this->setDocumentData($document,$data);
        if (isset($data['fichier'])&& is_file($data['fichier'])){
            $doc=$this->baseService->uploadFile($data['fichier'],$data['document_directory']);
            if ($doc['isValid']==true){
                $document->setFichier($doc['filename']);
            }else{
                return array("code"=>500,"status"=>false,"message"=>"Fichier invalide!");
            }
        }
        return $document;
    }

    public function hydrateDocument($document){
        return array(
            $this->ID_KEY=>$document->getId(),
            $this->LIBELLE_KEY=>$document->getLibelle(),
            "numeroDocument"=>$document->getNumeroDocument(),
            "typeDocument"=>array(
                $this->ID_KEY=>$document->getTypeDocument()?$document->getTypeDocument()->getId():null,
                $this->LIBELLE_KEY=>$document->getTypeDocument()?$document->getTypeDocument()->getLibelle():null,
            ),
            "user"=>array(
                $this->ID_KEY=>$document->getUser()?$document->getUser()->getId():null,
                $this->NOM_KEY=>$document->getUser()?$document->getUser()->getNom():null,
                $this->PRENOM_KEY=>$document->getUser()?$document->getUser()->getPrenom():null
            ),
            "agent"=>array(
                $this->ID_KEY=>$document->getAgent()?$document->getAgent()->getId():null,
                $this->NOM_KEY=>$document->getAgent()?$document->getAgent()->getNom():null,
                $this->MATRICULE_KEY=>$document->getAgent()?$document->getAgent()->getMatricule():null
            ),
            "notaire"=>array(
                $this->ID_KEY=>$document->getNotaire()?$document->getNotaire()->getId():null,
                $this->NOM_KEY=>$document->getNotaire()?$document->getNotaire()->getNom():null,
                $this->PRENOM_KEY=>$document->getNotaire()?$document->getNotaire()->getPrenom():null
            ),
            "jugement"=>array(
                $this->ID_KEY=>$document->getJugement()?$document->getJugement()->getId():null,
                $this->NOM_KEY=>$document->getJugement()?$document->getJugement()->getNom():null,
               "numeroJugement"=>$document->getJugement()?$document->getJugement()->getNumeroJugement():null
            ),
            "dateDelivrance"=>$document->getDateDelivrance()?date_format($document->getDateDelivrance(),'Y-m-d'):null,
            "dateValidite"=>$document->getDateValidite()?date_format($document->getDateValidite(),'Y-m-d'):null,
            "dateExpiration"=>$document->getDateExpiration()?date_format($document->getDateExpiration(),'Y-m-d'):null,
        );
    }
}
