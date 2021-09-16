<?php

namespace App\Controller;

use ApiPlatform\Core\Validator\ValidatorInterface;
use App\Annotation\QMLogger;
use App\Model\JugementManager;
use Doctrine\ORM\EntityManagerInterface;
use FOS\RestBundle\Controller\Annotations as Rest;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class JugementController extends BaseController{
    private $jugementManager;
    public function __construct(JugementManager $jugementManager,JWTTokenManagerInterface $jwtManager, \Swift_Mailer $mailer, TokenStorageInterface $tokenStorage, EntityManagerInterface $em, ValidatorInterface $validator)
    {
        $this->jugementManager=$jugementManager;
        parent::__construct($jwtManager, $mailer, $tokenStorage, $em, $validator);
    }

    /**
     * @Rest\Post("/jugement")
     * @QMLogger(message="Ajout jugement")
     */
    public function ajoutJugement(Request $request){
        $data=json_decode($request->getContent(),true);
        return new JsonResponse($this->jugementManager->addJugement($data));
    }

    /**
     * @Rest\Get("/jugements")
     * @QMLogger(message="Liste jugements")
     */
    public function listeJugements(Request $request){
        $page=$request->query->get('page',1);
        return new JsonResponse($this->jugementManager->listJugements($page));
    }


    /**
     * @Rest\Delete("/jugement/{id}")
     * @QMLogger(message="Supprimer jugement")
     */
    public function deleteJugement($id){
        return new JsonResponse($this->jugementManager->deleteJugement($id));
    }

    /**
     * @Rest\Get("/jugement/{id}")
     * @QMLogger(message="Details jugement")
     */
    public function detailsJugement($id){
        return new JsonResponse($this->jugementManager->detailsJugement($id));
    }

    /**
     * @Rest\Put("/jugement/{id}")
     * @QMLogger(message="Modifier jugement")
     */
    public function modifierJugement($id,Request $request){
        $data=json_decode($request->getContent(),true);
        return new JsonResponse($this->jugementManager->updateJugement($data,$id));
    }

    /**
     * @Rest\Post("/addJugementDocAgent")
     * @QMLogger(message="Ajout Jugement Document")
     */
    public function addJugementDocAgent(Request $request){
        $data=$request->request->all();
        $data['fichier']=$request->files->get('fichier');
        return new JsonResponse($this->jugementManager->addJugementDocAgent($data));
    }

}
