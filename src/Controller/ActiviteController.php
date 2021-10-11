<?php

namespace App\Controller;




use App\Entity\User;
use App\Entity\Activite;
use App\Annotation\QMLogger;
use FOS\UserBundle\Mailer\Mailer;
use App\Controller\BaseController;
use App\Repository\ActiviteRepository;
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

class ActiviteController extends BaseController
{
    private ActiviteRepository $activiteRepo;

    public function __construct(ActiviteRepository $activiteRepo)
    {
        $this->activiteRepo = $activiteRepo;
        $user= new User;
    }
    
    /**
     * @Post("/activite", name="activites")
     */
    public function addActivite(Request $request ,ValidatorInterface $validator ,SerializerInterface $serializer): Response
    {

        $activite = $serializer->deserialize($request->getContent(), Activite::class,'json');
        $errors = $validator->validate($activite);
    if (count($errors) > 0)
    {
        $errorsString =$serializer->serialize($errors,"json");
        
        return new JsonResponse( $errorsString ,Response::HTTP_BAD_REQUEST,[],true);
    }
    /*$message=(new\Swift_Message)
        ->setSubject('DCIRE, PILOTAGE PERFORMANCE')
        ->setFrom('xxxxx@orange-sonatel.com')
        ->setTo('ddiatou1@gmail.com')
        ->setBody("Votre activité est enregistré avec succé");
    $mailer->send($message);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($region);
        $entityManager->flush();
     */
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($activite);
        $entityManager->flush();
        return new JsonResponse("succes",Response::HTTP_CREATED,[],true);
      
    }

    /**
     * @Get("/activite", name="activite")
     */
    public function listActivite(): Response
    {
       
         $activites = $this->activiteRepo->findAll();
         
        return $this->json($activites);
    }
      /**
     * @Get("/activite/{id}")
     * @QMLogger(message="Details activite")
     */
    public function detailsactivite($id){
        $activites = $this->activiteRepo->find($id);
        return $this->json($activites);
        
    }
    
    /**
     * @Get("/rechercheactivite")
     * @QMLogger(message="Recherche activite")
     */
    public function rechercherActivite(Request $request){
        $search=$request->query->get('structure');
        $search=$request->query->get('user');
        $search=$request->query->get('profil');
        return new JsonResponse($this->activiteManager->searchactivite($search));
    }

    /**
    * @Delete("/activite/{id}", name="delete_activite")
    */
    public function deleteactivite(int $id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $activite = $entityManager->getRepository(activite::class)->find($id);
        $entityManager->remove($activite);
        $entityManager->flush();

    return $this->redirectToRoute("activites");
    }
     /**
     * @Put("/activite/{id}")
     * @QMLogger(message="modifier activite")
     */
    public function modifiActivite($id){
        $activite = $this->activiteRepo->find($id);
        $activite = $serializer->deserialize($request->getContent(), Activite::class,'json');

        return new JsonResponse($this->activiteManager->modifiActivite($id));
    }
}
