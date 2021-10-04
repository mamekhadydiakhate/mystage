<?php

namespace App\Controller;

use App\Entity\TrancheHoraire;
use App\Controller\BaseController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TrancheHoraireController extends BaseController
{
    /**
     * @Route("/tranche/horaire", name="tranche_horaire")
     */
    public function index(): Response
    {
        return $this->render('tranche_horaire/index.html.twig', [
            'controller_name' => 'TrancheHoraireController',
        ]);
    }
}