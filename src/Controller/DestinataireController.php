<?php

namespace App\Controller;

use ApiPlatform\Core\Validator\ValidatorInterface;
use App\Annotation\QMLogger;
use App\Model\DestinataireManager;
use Doctrine\ORM\EntityManagerInterface;
use FOS\RestBundle\Controller\Annotations as Rest;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class DestinataireController extends BaseController{
    private $destinataireManager;

    public function __construct(DestinataireManager $destinataireManager,JWTTokenManagerInterface $jwtManager, \Swift_Mailer $mailer, TokenStorageInterface $tokenStorage, EntityManagerInterface $em, ValidatorInterface $validator)
    {
        $this->destinataireManager=$destinataireManager;
        parent::__construct($jwtManager, $mailer, $tokenStorage, $em, $validator);
    }

    /**
     * @Rest\Post("/destinataire")
     * @QMLogger(message="Ajouter destinataire")
     */
    public function ajoutdestinataire(Request $request){
        $data=json_decode($request->getContent(),true);
        return new JsonResponse($this->destinataireManager->addDestinataire($data));
    }

    /**
     * @Rest\Get("/searchDestinataire")
     * @QMLogger(message="Recherche destinataire")
     */
    public function rechercherDestinataire(Request $request){
        $search=$request->query->get('email','');
        return new JsonResponse($this->destinataireManager->searchDestinataire($search));
    }

    /**
     * @Rest\Get("/listDestinataire")
     * @QMLogger(message="Liste des destinataires")
     */
    public function listDestinataire(Request $request){
        $page=$request->query->get('page',1);
        $limit=$request->query->get('limit',getenv('LIMIT'));
        return new JsonResponse($this->destinataireManager->listDestinataire($page,$limit));
    }


    /**
     * @Rest\Get("/destinataire/{id}")
     * @QMLogger(message="Details destinataire")
     */
    public function detailsDestinataire($id){
        return new JsonResponse($this->destinataireManager->detailsDestinataire($id));
    }

    /**
     * @Rest\Get("/updateDestinataire/{id}")
     * @QMLogger(message="Mofidifier destinataire")
     */
    public function updateDestinataire($id){
        return new JsonResponse($this->destinataireManager->updateDestinataire($id));
    }

}
