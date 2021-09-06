<?php


namespace App\Controller;


use ApiPlatform\Core\Validator\ValidatorInterface;
use App\Annotation\QMLogger;
use App\Mapping\AyantDroitMapping;
use App\Model\AyantDroitManager;
use Doctrine\ORM\EntityManagerInterface;
use FOS\RestBundle\Controller\Annotations as Rest;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class AyantDroitController extends BaseController
{
    private $ayantDroitManager;
    public function __construct(AyantDroitManager $ayantDroitManager,JWTTokenManagerInterface $jwtManager, \Swift_Mailer $mailer, TokenStorageInterface $tokenStorage, EntityManagerInterface $em, ValidatorInterface $validator)
    {
        parent::__construct($jwtManager, $mailer, $tokenStorage, $em, $validator);
        $this->ayantDroitManager= $ayantDroitManager;
    }
    /**
     * @Rest\Post("/ayantDroit")
     * @QMLogger(message="Ajout ayant droit")
     */
    public function ajouterAyantDroit(Request $request){
        $data=json_decode($request->getContent(),true);
        return new JsonResponse($this->ayantDroitManager->addAyantDroit($data));
    }
    /**
     * @Rest\Get("/searchAyantDroit")
     * @QMLogger(message="Recherche ayant droit")
     */
    public function searchAyantDroit(Request $request){
        $search=$request->query->get("email",'');
        return new JsonResponse($this->ayantDroitManager->searchAyantDroit($search));
    }


    /**
     * @Rest\Get("/listAyantDroit")
     * @QMLogger(message="Liste des ayants droit")
     */
    public function listAyantDroit(Request $request){
        $page=$request->query->get("page",1);
        $limit=$request->query->get("limit",getenv('LIMIT'));
        return new JsonResponse($this->ayantDroitManager->listAyantDroit($page,$limit));
    }
    /**
     * @Rest\Get("/ayantDroit/{id}")
     * @QMLogger(message="Detail d'un ayant droit")
     */
    public function detailsAyantDroit($id){
        return new JsonResponse($this->ayantDroitManager->detailsAyantDroit($id));
    }


    /**
     * @Rest\Put("/ayantDroit/{id}")
     * @QMLogger(message="Modification d'un ayant droit")
     */
    public function updateAyantDroit($id,Request $request){
        $data=json_decode($request->getContent(),true);
        return new JsonResponse($this->ayantDroitManager->updateAyantDroit($id,$data));
    }
    /**
     * @Rest\Get("/listLiensFamilial")
     * @QMLogger(message="Liste des liens familiales")
     */
    public function listLiensFamilial(){
        return new JsonResponse($this->ayantDroitManager->listLiensFamilial());
    }
    /**
     * @Rest\Get("/listStatutLegal")
     * @QMLogger(message="Liste des statut legales")
     */
    public function listStatutLegal(){
        return new JsonResponse($this->ayantDroitManager->listStatutLegal());
    }
    /**
     * @Rest\Get("/ayantsDroit/{id}")
     * @QMLogger(message="Liste des ayants droits d'un agent")
     */
    public function ayantsDroitByAgent(Request $request,$id){
        $page=$request->query->get("page",1);
        $limit=$request->query->get("limit",getenv('LIMIT'));
        return new JsonResponse($this->ayantDroitManager->ayantsDroitByAgent($page,$limit,$id));
    }
}
