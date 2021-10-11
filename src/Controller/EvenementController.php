<?php

namespace App\Controller;



use App\Entity\User;
use App\Entity\Evenement;
use App\Annotation\QMLogger;
use App\Controller\BaseController;
use App\Repository\EvenementRepository;
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

class EvenementController extends BaseController
{
    private EvenementRepository $evenementRepo;

    public function __construct(EvenementRepository $evenementRepo)
    {
        $this->evenementRepo = $evenementRepo;
        $user= new User;
    }
    /**
     * @Post("/evenement", name="evenements")
     */
    public function addEvenement(Request $request ,ValidatorInterface $validator ,SerializerInterface $serializer): Response
    {

        $evenement = $serializer->deserialize($request->getContent(), Evenement::class,'json');
        $errors = $validator->validate($evenement);
    if (count($errors) > 0)
    {
        $errorsString =$serializer->serialize($errors,"json");
        
        return new JsonResponse( $errorsString ,Response::HTTP_BAD_REQUEST,[],true);
    }
    /*$message=(new\Swift_Message)
        ->setSubject('DCIRE, PILOTAGE PERFORMANCE')
        ->setFrom('xxxxx@orange-sonatel.com')
        ->setTo($user->getEmail())
        ->setBody("Votre evenement est enregistré avec succé");
    $mailer->send($message);*/
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($evenement);
        $entityManager->flush();
    
        return new JsonResponse("succes",Response::HTTP_CREATED,[],true);
       
    }

    /**
     * @Get("/evenement", name="evenement")
     */
    public function listEvenement(): Response
    {
       
         $evenements = $this->evenementRepo->findAll();
         
        return $this->json($evenements);
    }
      /**
     * @Get("/evenement/{id}")
     * @QMLogger(message="Details evenement")
     */
    public function detailsEvenement($id){
        $evenements = $this->evenementRepo->find($id);
        return new JsonResponse($this->evenementManager->detailsEvenement($id));
    }

    /**
    * @Delete("/delete-evenement/{id}", name="delete_evenement")
    */
    public function deleteEvenement(int $id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $evenement = $entityManager->getRepository(evenement::class)->find($id);
        $entityManager->remove($evenement);
        $entityManager->flush();

    return $this->redirectToRoute("evenements");
    }
     /**
     * @Put("/evenement/{id}")
     * @QMLogger(message="modifier evenement")
     */
    public function modifiEvenement($id){
        $evenement = $this->evenementRepo->find($id);
        $evenement = $serializer->deserialize($request->getContent(), Evenement::class,'json');

        return new JsonResponse($this->evenementManager->modifiEvenement($id));
    }
}
