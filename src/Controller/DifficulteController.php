<?php

namespace App\Controller;

use App\Entity\Difficulte;
use App\Controller\BaseController;
use App\Repository\DifficulteRepository;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations\Get;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations\Post;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DifficulteController extends BaseController
{
    private DifficulteRepository $difficulteRepo;

    public function __construct(DifficulteRepository $difficulteRepo)
    {
        $this->difficulteRepo = $difficulteRepo;
    }

    /**
     * @Post("/difficulte", name="difficultes")
     */
    public function adddifficulte(Request $request): Response
    {

        $difficulteObject = $serializer->deserialize($difficulteJson, 'App\Entity\difficulte[]','json');
    
        return new JsonResponse("succes",Response::HTTP_CREATED,[],true);
       
    }

    /**
     * @Get("/difficulte", name="difficulte")
     */
    public function listdifficulte(): Response
    {
        $difficultes = $this->difficulteRepo->findAll();
        return $this->json($difficultes);
        
    }
}
