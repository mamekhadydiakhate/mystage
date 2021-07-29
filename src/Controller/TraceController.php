<?php

namespace App\Controller;

use ApiPlatform\Core\Validator\ValidatorInterface;
use App\Annotation\QMLogger;
use App\Model\TraceManager;
use Doctrine\ORM\EntityManagerInterface;
use FOS\RestBundle\Controller\Annotations as Rest;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class TraceController extends BaseController{
    private $traceManager;
    public function __construct(TraceManager $traceManager,JWTTokenManagerInterface $jwtManager, \Swift_Mailer $mailer, TokenStorageInterface $tokenStorage, EntityManagerInterface $em, ValidatorInterface $validator)
    {
        $this->traceManager=$traceManager;
        parent::__construct($jwtManager, $mailer, $tokenStorage, $em, $validator);
    }

    /**
     * @Rest\Get("/userTrace/{id}")
     * @QMLogger(message="Traces d'un utilisateur")
     */
    public function getUserTraces($id,Request $request){
        $page=$request->query->get('page',1);
        return new JsonResponse($this->traceManager->getUserTraces($id,$page));
    }
    /**
     * @Rest\Get("/traces")
     * @QMLogger(message="Toutes les traces")
     */
    public function getAllTraces(Request $request){
        $page=$request->query->get('page',1);
        return new JsonResponse($this->traceManager->getAllTraces($page));
    }

    /**
     * @Rest\Get("/tracesEntre/{id}")
     * @QMLogger(message="Toutes les traces")
     */
    public function getTracesEntre(Request $request,$id){
        $page=$request->query->get('page',1);
        $data=json_decode($request->getContent(),true);
        return new JsonResponse($this->traceManager->traceBetween($page,$id,$data));
    }
}
