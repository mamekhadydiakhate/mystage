<?php

namespace App\Controller;

use ApiPlatform\Core\Validator\ValidatorInterface;
use App\Annotation\QMLogger;
use App\Model\TransfertActionManager;
use Doctrine\ORM\EntityManagerInterface;
use FOS\RestBundle\Controller\Annotations as Rest;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class TransfertActionController extends BaseController{
    private $transfertActionManager;
    public function __construct(TransfertActionManager $transfertActionManager,JWTTokenManagerInterface $jwtManager, \Swift_Mailer $mailer, TokenStorageInterface $tokenStorage, EntityManagerInterface $em, ValidatorInterface $validator)
    {
        $this->transfertActionManager=$transfertActionManager;
        parent::__construct($jwtManager, $mailer, $tokenStorage, $em, $validator);
    }

    /**
     * @Rest\Post("/transfertAction")
     * @QMLogger(message="Ajout transfert action")
     */
    public function addTransfertAction(Request $request){
        $data=json_decode($request->getContent(),true);
        return new JsonResponse($this->transfertActionManager->addTransfertAction($data));
    }

    /**
     * @Rest\Get("/searchTransfertAction")
     * @QMLogger(message="Recherche Societe Gestion Action")
     */
    public function searchTransfertAction(Request $request){
        $search=$request->query->get('numeroTransfert','');
        return new JsonResponse($this->transfertActionManager->searchTransfertAction($search));
    }

    /**
     * @Rest\Put("/validerTransfertAction/{id}")
     * @QMLogger(message="Valider transfert d'action")
     */
    public function validerTransfertAction($id){
        return new JsonResponse($this->transfertActionManager->validerTransfertAction($id));
    }

    /**
     * @Rest\Get("/transfertsEffectues")
     * @QMLogger(message="Consultation transferts effectues")
     */
    public function transfertsEffectues(Request $request){
        $page=$request->query->get('page',1);
        return new JsonResponse($this->transfertActionManager->consulterTransfertActionEffectues($page));
    }

    /**
     * @Rest\Get("/detailsTransfert/{id}")
     * @QMLogger(message="Details transferts")
     */
    public function detailsTransfert($id){
        return new JsonResponse($this->transfertActionManager->detailsTransfert($id));
    }
}
