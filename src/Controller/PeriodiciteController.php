<?php

namespace App\Controller;




use App\Entity\Periodicite;
use App\Annotation\QMLogger;
use FOS\UserBundle\Mailer\Mailer;
use App\Controller\BaseController;
use App\Repository\PeriodiciteRepository;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\Put;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations\Post;
use Symfony\Component\Routing\Annotation\Route;
use FOS\RestBundle\Controller\Annotations\Delete;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PeriodiciteController extends BaseController
{
    private PeriodiciteRepository $periodiciteRepo;

    public function __construct(PeriodiciteRepository $periodiciteRepo)
    {
        $this->periodiciteRepo = $periodiciteRepo;
        $dateDebut = new DateTime();
       
    }
    
    /**
     * @Post("/periodicite", name="periodicites")
     */
    public function addPeriodicite(Request $request ,ValidatorInterface $validator ,SerializerInterface $serializer): Response
    {

        $periodicite = $serializer->deserialize($request->getContent(), periodicite::class,'json');
        $errors = $validator->validate($periodicite);
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
        $entityManager->persist($periodicite);
        $entityManager->flush();
        return new JsonResponse("succes",Response::HTTP_CREATED,[],true);
      
    }

    /**
     * @Get("/periodicite", name="periodicite")
     */
    public function listPeriodicite(): Response
    {
       
         $periodicites = $this->periodiciteRepo->findAll();
         
        return $this->json($periodicites);
    }
      /**
     * @Get("/periodicite/{id}")
     * @QMLogger(message="Details periodicite")
     */
    public function detailsPeriodicite($id){
        $periodicites = $this->periodiciteRepo->find($id);
        
        return $this->json($periodicites);
        
    }
    
    /**
     * @Get("/rechercheperiodicite")
     * @QMLogger(message="Recherche periodicite")
     */
    public function rechercherPeriodicite(Request $request){
        $search=$request->query->get('structure');
        $search=$request->query->get('user');
        $search=$request->query->get('profil');
        return new JsonResponse($this->periodiciteManager->searchPeriodicite($search));
    }

    /**
    * @Delete("/periodicite/{id}", name="delete_periodicite")
    */
    public function deletePeriodicite(int $id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $periodicite = $entityManager->getRepository(Periodicite::class)->find($id);
        $entityManager->remove($periodicite);
        $entityManager->flush();

    return $this->redirectToRoute("periodicites");
    }
     /**
     * @Put("/periodicite/{id}")
     * @QMLogger(message="modifier periodicite")
     */
    public function modifiPeriodicite($id){
        $periodicite = $this->periodiciteRepo->find($id);
        $periodicite = $serializer->deserialize($request->getContent(), Periodicite::class,'json');

        return new JsonResponse($this->periodiciteManager->modifiPeriodicite($id));
    }
}
