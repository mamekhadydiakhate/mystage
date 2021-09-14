<?php

namespace App\Controller;

use ApiPlatform\Core\Validator\ValidatorInterface;
use App\Annotation\QMLogger;
use App\Model\SignatureCachetManager;
use Doctrine\ORM\EntityManagerInterface;
use FOS\RestBundle\Controller\Annotations as Rest;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class SignatureCachetController extends BaseController{

    private $signatureCachetManager;
    public function __construct(SignatureCachetManager $signatureCachetManager,JWTTokenManagerInterface $jwtManager, \Swift_Mailer $mailer, TokenStorageInterface $tokenStorage, EntityManagerInterface $em, ValidatorInterface $validator)
    {
        parent::__construct($jwtManager, $mailer, $tokenStorage, $em, $validator);
        $this->signatureCachetManager=$signatureCachetManager;
    }

    /**
     * @Rest\Post("/signatureCachet")
     * @QMLogger(message="Ajout signature cachet")
     */
    public function ajoutSignatureCachet(Request $request){
        $data=$request->request->all();
        $data['fichier']=$request->files->get('fichier');
        $data['document_directory']=$this->getParameter('document_directory');
        return new JsonResponse($this->signatureCachetManager->addSignatureCachet($data));
    }

    /**
     * @Rest\Get("/listSignaturesCachet")
     * @QMLogger(message="Ajout signature cachet")
     */
    public function listSignaturesCachet(){
         return new JsonResponse($this->signatureCachetManager->listSignaturesCachet());
    }
}
