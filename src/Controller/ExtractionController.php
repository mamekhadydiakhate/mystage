<?php

namespace App\Controller;

use App\Entity\Extraction;
use App\Controller\BaseController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ExtractionController extends BaseController
{
    /**
     * @Route("/extraction", name="extraction")
     */
    public function index(): Response
    {
        return $this->render('extraction/index.html.twig', [
            'controller_name' => 'ExtractionController',
        ]);
    }
}
