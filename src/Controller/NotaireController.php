<?php

namespace App\Controller;

use ApiPlatform\Core\Validator\ValidatorInterface;
use App\Annotation\QMLogger;
use App\Model\NotaireManager;
use Doctrine\ORM\EntityManagerInterface;
use FOS\RestBundle\Controller\Annotations as Rest;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class NotaireController extends BaseController{
    private $notaireManager;
   public function __construct(NotaireManager $notaireManager,JWTTokenManagerInterface $jwtManager, \Swift_Mailer $mailer, TokenStorageInterface $tokenStorage, EntityManagerInterface $em, ValidatorInterface $validator)
   {
       $this->notaireManager=$notaireManager;
       parent::__construct($jwtManager, $mailer, $tokenStorage, $em, $validator);
   }

    /**
     * @Rest\Post("/notaire")
     * @QMLogger(message="Ajout notaire")
     */
    public function ajoutNotaire(Request $request){
        $data=json_decode($request->getContent(),true);
        return new JsonResponse($this->notaireManager->addNotaire($data));
    }

    /**
     * @Rest\Get("/notaires")
     * @QMLogger(message="Liste notaires")
     */
    public function listeNotaires(Request $request){
        $page=$request->query->get('page',1);
        return new JsonResponse($this->notaireManager->listNotaires($page));
    }


    /**
     * @Rest\Delete("/notaire/{id}")
     * @QMLogger(message="Supprimer notaire")
     */
    public function deleteNotaire($id){
        return new JsonResponse($this->notaireManager->deleteNotaire($id));
    }

    /**
     * @Rest\Get("/notaire/{id}")
     * @QMLogger(message="Details notaire")
     */
    public function detailsNotaire($id){
        return new JsonResponse($this->notaireManager->detailsNotaire($id));
    }

    /**
     * @Rest\Put("/notaire/{id}")
     * @QMLogger(message="Modifier notaire")
     */
    public function modifierNotaire($id,Request $request){
        $data=json_decode($request->getContent(),true);
        return new JsonResponse($this->notaireManager->updateNotaire($data,$id));
    }

}
