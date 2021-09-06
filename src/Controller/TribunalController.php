<?php

namespace App\Controller;

use ApiPlatform\Core\Validator\ValidatorInterface;
use App\Annotation\QMLogger;
use App\Model\TribunalManager;
use Doctrine\ORM\EntityManagerInterface;
use FOS\RestBundle\Controller\Annotations as Rest;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class TribunalController extends BaseController{
    private $tribunalManager;
    public function __construct(TribunalManager $tribunalManager,JWTTokenManagerInterface $jwtManager, \Swift_Mailer $mailer, TokenStorageInterface $tokenStorage, EntityManagerInterface $em, ValidatorInterface $validator)
    {
        parent::__construct($jwtManager, $mailer, $tokenStorage, $em, $validator);
        $this->tribunalManager=$tribunalManager;
    }
    /**
     * @Rest\Post("/addTribunal")
     * @QMLogger(message="Ajout tribunal")
     */

    public function addTribunal(Request $request){
        $data = json_decode($request->getContent(),true);
        return new JsonResponse($this->tribunalManager->addTribunal($data));
    }

    /**
     * @Rest\Post("/updateTribunal/{id}")
     * @QMLogger(message="Modifier tribunal")
     */

    public function updateTribunal(Request $request,$id){
        $data = json_decode($request->getContent(),true);
        return new JsonResponse($this->tribunalManager->updateTribunal($data,$id));
    }

    /**
     * @Rest\Get("/deleteTribunal/{id}")
     * @QMLogger(message="Supprimer tribunal")
     */

    public function deleteTribunal($id){
        return new JsonResponse($this->tribunalManager->deleteTribunal($id));
    }

    /**
     * @Rest\Get("/listTribunaux")
     * @QMLogger(message="Liste des tribunaux")
     */

    public function listTribunaux(){

        return new JsonResponse($this->tribunalManager->listTribunal());
    }
}
