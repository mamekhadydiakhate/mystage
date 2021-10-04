<?php

namespace App\Controller;

use App\Entity\Difficulte;
use App\Controller\BaseController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DifficulteController extends BaseController
{
    /**
     * @Route("/difficulte", name="difficulte")
     */
    public function index(): Response
    {
        return $this->render('difficulte/index.html.twig', [
            'controller_name' => 'DifficulteController',
        ]);
    }
}
