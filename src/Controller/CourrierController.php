<?php

namespace App\Controller;

use ApiPlatform\Core\Validator\ValidatorInterface;
use App\Annotation\QMLogger;
use App\Mapping\CourrierMapping;
use App\Model\CourrierManager;
use Doctrine\ORM\EntityManagerInterface;
use FOS\RestBundle\Controller\Annotations as Rest;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class CourrierController extends BaseController{

    private $courrierManager;
    public function __construct(CourrierManager $courrierManager,JWTTokenManagerInterface $jwtManager, \Swift_Mailer $mailer, TokenStorageInterface $tokenStorage, EntityManagerInterface $em, ValidatorInterface $validator)
    {
        $this->courrierManager=$courrierManager;
        parent::__construct($jwtManager, $mailer, $tokenStorage, $em, $validator);
    }

    /**
     * @Rest\Post("/courrier")
     * @QMLogger(message="Ajout courrier")
     */
    public function ajouterCourrier(Request $request){
        $data=json_decode($request->getContent(),true);
        $data['fichier']=$request->files->get('fichier');
        $data['document_directory']=$this->getParameter('document_directory');
        return new JsonResponse($this->courrierManager->addCourrier($data));
    }
    /**
     * @Rest\Get("/courrier/{id}")
     * @QMLogger(message="Details courrier")
     */
    public function detailsCourrier($id){
        return new JsonResponse($this->courrierManager->detailsCourrier($id));
    }
}
