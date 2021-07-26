<?php

namespace App\Controller;

use ApiPlatform\Core\Validator\ValidatorInterface;
use App\Annotation\QMLogger;
use App\Controller\BaseController;
use App\Model\DocumentManager;
use Doctrine\ORM\EntityManagerInterface;
use FOS\RestBundle\Controller\Annotations as Rest;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class DocumentController extends BaseController{
    private $documentManager;
    public function __construct(DocumentManager $documentManager,JWTTokenManagerInterface $jwtManager, \Swift_Mailer $mailer, TokenStorageInterface $tokenStorage, EntityManagerInterface $em, ValidatorInterface $validator)
    {
        parent::__construct($jwtManager, $mailer, $tokenStorage, $em, $validator);
        $this->documentManager = $documentManager;
    }


    /**
     * @Rest\Post("/ajoutDocument")
     * @QMLogger(message="Ajout document")
     */
    public function ajouterDocument(Request $request){
        $data=$request->request->all();
        $data['fichier']=$request->files->get('fichier');
        $data['document_directory']=$this->getParameter('document_directory');
        return new JsonResponse($this->documentManager->addDocument($data));
    }

    /**
     * @Rest\Get("/searchDocument")
     * @QMLogger(message="Recherche document")
     */
    public function rechercherDocument(Request $request){
        $search=$request->query->get('numero');
        return new JsonResponse($this->documentManager->searchDocument($search));
    }

}
