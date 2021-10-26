<?php

namespace App\Controller;



use App\Entity\User;
use App\Entity\Commentaire;
use App\Annotation\QMLogger;
use App\Controller\BaseController;
use App\Repository\EvenementRepository;
use App\Repository\CommentaireRepository;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\Put;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations\Post;
use Symfony\Component\Routing\Annotation\Route;
use FOS\RestBundle\Controller\Annotations\Delete;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CommentaireController extends BaseController
{
    private CommentaireRepository $commentaireRepo;
    private EvenementRepository $evenementRepo;


    public function __construct(CommentaireRepository $commentaireRepo, EvenementRepository $evenementRepo)
    {
        $this->commentaireRepo = $commentaireRepo;
        $this->evenementRepo = $evenementRepo;
        
       
    }
    /**
     * @Post("/commentaire", name="commentaires")
     */
    public function addCommentaire(Request $request ,ValidatorInterface $validator ,SerializerInterface $serializer): Response
    {

        $commentaire = $serializer->deserialize($request->getContent(), commentaire::class,'json');
        $errors = $validator->validate($commentaire);
    if (count($errors) > 0)
    {
        $errorsString =$serializer->serialize($errors,"json");
        
        return new JsonResponse( $errorsString ,Response::HTTP_BAD_REQUEST,[],true);
    }
    /*$message=(new\Swift_Message)
        ->setSubject('DCIRE, PILOTAGE PERFORMANCE')
        ->setFrom('xxxxx@orange-sonatel.com')
        ->setTo($user->getEmail())
        ->setBody("Votre commentaire est enregistré avec succé");
    $mailer->send($message);*/
    $evenement= $this->evenementRepo->find($request->get('evenement'));
    $commentaire->setEvenement($evenement);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($commentaire);
        $entityManager->flush();
    
        return new JsonResponse("succes",Response::HTTP_CREATED,[],true);
       
    }

    /**
     * @Get("/commentaire", name="commentaire")
     */
    public function listCommentaire(): Response
    {
       
         $commentaires = $this->commentaireRepo->findAll();
         
         $response = $this->json($commentaires, 200, [], ['groups' => 'commentaire:read']);

         return $response; 
    }
      /**
     * @Get("/commentaire/{id}")
     * @QMLogger(message="Details commentaire")
     */
    public function detailsCommentaire($id){
        $commentaires = $this->commentaireRepo->find($id);
        $response = $this->json($commentaires, 200, [], ['groups' => 'commentaire:read']);

        return $response; 
    }

    /**
    * @Delete("/delete-commentaire/{id}", name="delete_commentaire")
    */
    public function deleteCommentaire(int $id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $commentaire = $entityManager->getRepository(commentaire::class)->find($id);
        $entityManager->remove($commentaire);
        $entityManager->flush();

    return $this->redirectToRoute("commentaires");
    }
     /**
     * @Put("/commentaire/{id}")
     * @QMLogger(message="modifier commentaire")
     */
    public function modifiCommentaire($id){
        $commentaire = $this->commentaireRepo->find($id);
        $commentaire = $serializer->deserialize($request->getContent(), commentaire::class,'json');

        return new JsonResponse($this->commentaireManager->modifiCommentaire($id));
    }
}
