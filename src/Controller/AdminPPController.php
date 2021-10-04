<?php

namespace App\Controller;

use App\Entity\AdminPP;
use App\Controller\BaseController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminPPController extends BaseController
{
    /**
     * @Route("/admin/p/p", name="admin_p_p")
     */
    public function index(): Response
    {
        return $this->render('admin_pp/index.html.twig', [
            'controller_name' => 'AdminPPController',
        ]);
    }
}
