<?php

namespace App\Controller;

use App\Entity\Interim;
use App\Controller\BaseController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class InterimController extends BaseController
{
    /**
     * @Route("/interim", name="interim")
     */
    public function index(): Response
    {
        return $this->render('interim/index.html.twig', [
            'controller_name' => 'InterimController',
        ]);
    }
}
