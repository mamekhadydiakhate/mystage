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

class TransfertActoinController extends BaseController{
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
    public function searchSociete(Request $request){
        $search=$request->query->get('numeroTransfert','');
        return new JsonResponse($this->transfertActionManager->searchTransfertAction($search));
    }
}
