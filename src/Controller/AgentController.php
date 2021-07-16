<?php

namespace App\Controller;

use ApiPlatform\Core\Validator\ValidatorInterface;
use App\Annotation\QMLogger;
use App\Model\AgentManager;
use Doctrine\ORM\EntityManagerInterface;
use FOS\RestBundle\Controller\Annotations as Rest;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class AgentController extends BaseController{
    private $agentManager;
    public function __construct(AgentManager $agentManager,JWTTokenManagerInterface $jwtManager, \Swift_Mailer $mailer, TokenStorageInterface $tokenStorage, EntityManagerInterface $em, ValidatorInterface $validator)
    {
        parent::__construct($jwtManager, $mailer, $tokenStorage, $em, $validator);
        $this->agentManager=$agentManager;
    }


    /**
     * @Rest\Post("/agent")
     * @QMLogger(message="Ajout agent")
     */
    public function ajouterAgent(Request $request){
        $data=json_decode($request->getContent(),true);
        return new JsonResponse($this->agentManager->addAgent($data));
    }


    /**
     * @Rest\Get("/agent")
     * @QMLogger(message="Recherche agent")
     */
    public function searchAgent(Request $request){
        $search=$request->query->get('matricule','');
        return new JsonResponse($this->agentManager->searchAgent($search));
    }

}
