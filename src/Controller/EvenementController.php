<?php

namespace App\Controller;

use App\Entity\Evenement;
use App\Controller\BaseController;
use App\Repository\EvenementRepository;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations\Get;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations\Post;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class EvenementController extends BaseController
{
    private EvenementRepository $evenementRepo;

    public function __construct(EvenementRepository $evenementRepo)
    {
        $this->evenementRepo = $evenementRepo;
    }


     /**
     * @Post("/evenement", name="evenements")
     */
    public function addevenement(Request $request): Response
    {

        $evenementObject = $serializer->deserialize($evenementJson, 'App\Entity\evenement[]','json');
    
        return new JsonResponse("succes",Response::HTTP_CREATED,[],true);
       
    }

    /**
     * @Get("/evenement", name="evenements")
     */
    public function listEvenement(): Response
    {
        $evenements = $this->evenementRepo->findAll();
        return $this->json($evenements);
        
    }
}
