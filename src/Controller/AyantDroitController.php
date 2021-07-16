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
}
