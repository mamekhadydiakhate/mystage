<?php


namespace App\Controller;


use App\Entity\Profil;
use App\Annotation\QMLogger;
use App\Model\ProfilManager;
use App\Controller\BaseController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\Put;
use FOS\RestBundle\Controller\Annotations\Post;
use FOS\RestBundle\Controller\Annotations\Route;
use FOS\RestBundle\Controller\Annotations\Delete;
use ApiPlatform\Core\Validator\ValidatorInterface;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\JsonResponse;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class ProfilController extends BaseController
{
    private $profilManager;
    public function __construct(ProfilManager $profilManager,JWTTokenManagerInterface $jwtManager, \Swift_Mailer $mailer, TokenStorageInterface $tokenStorage, EntityManagerInterface $em, ValidatorInterface $validator)
    {
        $this->profilManager=$profilManager;
        parent::__construct($jwtManager, $mailer, $tokenStorage, $em, $validator);
    }

    /**
     * @Rest\Post("/profil")
     * @Route("/profil", name="profil_add", methods={"POST"})
     * @QMLogger(message="Ajout profil")
     */
    public function Post(Request $request){
        $data=json_decode($request->getContent(),true);
        return new JsonResponse($this->profilManager->addProfil($data));
    }

    /**
     * @Rest\Get("/profils")
     * @QMLogger(message="Liste profil")
     */
    public function Get($id){
        return new JsonResponse($this->profilManager->Get());
    }


    /**
     * @Rest\Delete("/profil/{id}")
     * @QMLogger(message="Supprimer profil")
     */
    public function Delete($id){
        return new JsonResponse($this->profilManager->Delete($id));
    }

    /**
     * @Rest\Put("/profil/{id}")
     * @QMLogger(message="Modifier profil")
     */
    public function Put($id,Request $request){
        $data=json_decode($request->getContent(),true);
        return new JsonResponse($this->profilManager->put($data,$id));
    }

}
