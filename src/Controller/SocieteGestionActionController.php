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

}
