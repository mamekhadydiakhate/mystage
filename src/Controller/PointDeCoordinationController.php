<?php

namespace App\Controller;

use App\Controller\BaseController;
use App\Entity\PointDeCoordination;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations\Get;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations\Post;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\PointDeCoordinationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PointDeCoordinationController extends BaseController
{
    private PointDeCoordinationRepository $pointdecoordinationRepo;

    public function __construct(PointDeCoordinationRepository $pointdecoordinationRepo)
    {
        $this->pointdecoordinationRepo = $pointdecoordinationRepo;
    }


     /**
     * @Post("/pointdecoordination", name="pointdecoordinations")
     */
    public function addpointdecoordination(Request $request): Response
    {

        $pointdecoordinationObject = $serializer->deserialize($pointdecoordinationJson, 'App\Entity\pointdecoordination[]','json');
    
        return new JsonResponse("succes",Response::HTTP_CREATED,[],true);
       
    }

    /**
     * @Get("/pointdecoordination", name="pointdecoordinations")
     */
    public function listpointdecoordination(): Response
    {
        $pointdecoordinations = $this->pointdecoordinationRepo->findAll();
        return $this->json($pointdecoordinations);
        
    }
}