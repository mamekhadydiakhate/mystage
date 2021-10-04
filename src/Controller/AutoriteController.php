<?php

namespace App\Controller;

use App\Entity\Autorite;
use App\Controller\BaseController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AutoriteController extends BaseController
{
    /**
     * @Route("/autorite", name="autorite")
     */
    public function index(): Response
    {
        return $this->render('autorite/index.html.twig', [
            'controller_name' => 'AutoriteController',
        ]);
    }
}
