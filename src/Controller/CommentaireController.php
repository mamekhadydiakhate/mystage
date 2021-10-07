<?php

namespace App\Controller;

use App\Entity\Commentaire;
use App\Controller\BaseController;
use App\Repository\CommentaireRepository;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations\Get;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations\Post;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CommentaireController extends BaseController
{
    private CommentaireRepository $commentaireRepo;

    public function __construct(CommentaireRepository $commentaireRepo)
    {
        $this->commentaireRepo = $commentaireRepo;
    }

     /**
     * @Post("/commentaire", name="commentaires")
     */
    public function addcommentaire(Request $request): Response
    {

        $commentaireObject = $serializer->deserialize($commentaireJson, 'App\Entity\commentaire[]','json');
    
        return new JsonResponse("succes",Response::HTTP_CREATED,[],true);
       
    }

     /**
     * @Get("/commentaire", name="commentaire")
     */
    public function listCommentaire(): Response
    {
        $commentaires = $this->commentaireRepo->findAll();
        return $this->json($commentaires);
        
    }

}
