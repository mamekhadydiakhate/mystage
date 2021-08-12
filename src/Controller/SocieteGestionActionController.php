<?php

namespace App\Controller;

use ApiPlatform\Core\Validator\ValidatorInterface;
use App\Annotation\QMLogger;
use App\Model\SocieteGestionActionManager;
use Doctrine\ORM\EntityManagerInterface;
use FOS\RestBundle\Controller\Annotations as Rest;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class SocieteGestionActionController extends BaseController{
    private $societeGestionActionManager;
    public function __construct(SocieteGestionActionManager $societeGestionActionManager,JWTTokenManagerInterface $jwtManager, \Swift_Mailer $mailer, TokenStorageInterface $tokenStorage, EntityManagerInterface $em, ValidatorInterface $validator)
    {
        $this->societeGestionActionManager=$societeGestionActionManager;
        parent::__construct($jwtManager, $mailer, $tokenStorage, $em, $validator);
    }

    /**
     * @Rest\Post("/addSociete")
     * @QMLogger(message="Ajout Societe Gestion Action")
     */
    public function ajoutSociete(Request $request){
        $data=json_decode($request->getContent(),true);
        return new JsonResponse($this->societeGestionActionManager->addSocieteGestionAction($data));
    }

    /**
     * @Rest\Get("/searchSociete")
     * @QMLogger(message="Recherche Societe Gestion Action")
     */
    public function searchSociete(Request $request){
        $search=$request->query->get('libelle','');
        return new JsonResponse($this->societeGestionActionManager->rechercheSocieteGestionAction($search));
    }

    /**
     * @Rest\Get("/listSocietes")
     * @QMLogger(message="Liste des societe de gestion d'action")
     */
    public function listSociete(Request $request){
        $page=$request->query->get('page',1);
        $limit=$request->query->get('limit',getenv('LIMIT'));
        return new JsonResponse($this->societeGestionActionManager->listeSocieteGestionAction($page,$limit));
    }


    /**
     * @Rest\Put("/updateSociete/{id}")
     * @QMLogger(message="Modififer societe de gestion d'action")
     */
    public function updateSociete(Request $request,$id){
        $data=json_decode($request->getContent(),true);
        return new JsonResponse($this->societeGestionActionManager->updateSocieteGestionAction($data,$id));
    }



    /**
     * @Rest\Get("/deleteSociete/{id}")
     * @QMLogger(message="Supprimer societe de gestion d'action")
     */
    public function deleteSocieteGestionAction($id){
        return new JsonResponse($this->societeGestionActionManager->deleteSocieteGestionAction($id));
    }

}
