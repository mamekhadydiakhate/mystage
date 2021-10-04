<?php

namespace App\Controller;

use App\Entity\Periodicite;
use App\Controller\BaseController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PeriodiciteController extends BaseController
{
    /**
     * @Route("/periodicite", name="periodicite")
     */
    public function index(): Response
    {
        return $this->render('periodicite/index.html.twig', [
            'controller_name' => 'PeriodiciteController',
        ]);
    }
}
