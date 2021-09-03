<?php

namespace App\Controller;

use ApiPlatform\Core\Validator\ValidatorInterface;
use App\Annotation\QMLogger;
use App\Model\PaiementManager;
use Doctrine\ORM\EntityManagerInterface;
use FOS\RestBundle\Controller\Annotations as Rest;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class PaiementController extends BaseController{
    private $paiementManager;

    public function __construct(PaiementManager $paiementManager,JWTTokenManagerInterface $jwtManager, \Swift_Mailer $mailer, TokenStorageInterface $tokenStorage, EntityManagerInterface $em, ValidatorInterface $validator)
    {
        $this->paiementManager=$paiementManager;
        parent::__construct($jwtManager, $mailer, $tokenStorage, $em, $validator);
    }


    /**
     * @Rest\Post("/paiement")
     * @QMLogger(message="Ajouter paiement")
     */
    public function ajouterPaiement(Request $request){
        $data=$request->request->all();
        return new JsonResponse($this->paiementManager->addPaiement($data));
    }

    /**
     * @Rest\Get("/searchPaiement")
     * @QMLogger(message="Rechercher paiement")
     */
    public function searchPaiement(Request $request){
        $search=$request->query->get('numeroPaiement','');
        return new JsonResponse($this->paiementManager->searchPaiement($search));
    }

    /**
     * @Rest\Put("/validerPaiement/{id}")
     * @QMLogger(message="Valider paiement")
     */
    public function validatePaiement($id){
        return new JsonResponse($this->paiementManager->validerPaiement($id));
    }

    /**
     * @Rest\Get("/paiementsEffectues")
     * @QMLogger(message="Paiements effectues")
     */
    public function paiementsEffectues(Request $request){
        $page=$request->query->get('page',1);
        return new JsonResponse($this->paiementManager->paiementEffectues($page));
    }

    /**
     * @Rest\Get("/detailsPaiement/{id}")
     * @QMLogger(message="Details paiements")
     */
    public function detailPaiement($id){
        return new JsonResponse($this->paiementManager->detailPaiement($id));
    }
}
