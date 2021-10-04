<?php

namespace App\Controller;

use App\Controller\BaseController;
use App\Entity\PointDeCoordination;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PointDeCoordinationController extends BaseController
{
    /**
     * @Route("/point/de/coordination", name="point_de_coordination")
     */
    public function index(): Response
    {
        return $this->render('point_de_coordination/index.html.twig', [
            'controller_name' => 'PointDeCoordinationController',
        ]);
    }
}