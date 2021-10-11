<?php

namespace App\Controller;



use App\Entity\User;
use App\Annotation\QMLogger;
use App\Controller\BaseController;
use App\Entity\PointDeCoordination;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\Put;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations\Post;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\PointDeCoordinationRepository;
use FOS\RestBundle\Controller\Annotations\Delete;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PointDeCoordinationController extends BaseController
{
    private PointDeCoordinationRepository $pointDeCoordinationRepo;

    public function __construct(PointDeCoordinationRepository $pointDeCoordinationRepo)
    {
        $this->pointDeCoordinationRepo = $pointDeCoordinationRepo;
        $user= new User;
    }
    /**
     * @Post("/pointDeCoordination", name="pointDeCoordinations")
     */
    public function addPointDeCoordination(Request $request ,ValidatorInterface $validator ,SerializerInterface $serializer): Response
    {

        $pointDeCoordination = $serializer->deserialize($request->getContent(), pointDeCoordination::class,'json');
        $errors = $validator->validate($pointDeCoordination);
    if (count($errors) > 0)
    {
        $errorsString =$serializer->serialize($errors,"json");
        
        return new JsonResponse( $errorsString ,Response::HTTP_BAD_REQUEST,[],true);
    }
    /*$message=(new\Swift_Message)
        ->setSubject('DCIRE, PILOTAGE PERFORMANCE')
        ->setFrom('xxxxx@orange-sonatel.com')
        ->setTo($user->getEmail())
        ->setBody("Votre activité est enregistré avec succé");
    $mailer->send($message);*/
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($region);
        $entityManager->flush();
    
        return new JsonResponse("succes",Response::HTTP_CREATED,[],true);
       
    }

    /**
     * @Get("/pointdecoordination", name="pointDeCoordination")
     */
    public function listPointDeCoordination(): Response
    {
       
         $pointDeCoordinations = $this->pointDeCoordinationRepo->findAll();
         
        return $this->json($pointDeCoordinations);
    }
      /**
     * @Get("PointDeCoordination/{id}")
     * @QMLogger(message="Details pointDeCoordination")
     */
    public function detailsPointDeCoordination($id){
        $pointDeCoordinations = $this->pointDeCoordinationRepo->find($id);
        return new JsonResponse($this->pointDeCoordinationManager->detailsPointDeCoordination($id));
    }

    /**
    * @Delete("/delete-pointDeCoordination/{id}", name="delete_pointDeCoordination")
    */
    public function deletePointDeCoordination(int $id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $pointDeCoordination = $entityManager->getRepository(PointDeCoordination::class)->find($id);
        $entityManager->remove($pointDeCoordination);
        $entityManager->flush();

    return $this->redirectToRoute("pointDeCoordinations");
    }
     /**
     * @Put("/pointdecoordination/{id}", name="modifie_pointDeCoordination")
     * @QMLogger(message="modifier pointDeCoordination")
     */
    public function modifiPointDeCoordination($id){
        $pointDeCoordination = $this->pointDeCoordinationRepo->find($id);
        $pointDeCoordination = $serializer->deserialize($request->getContent(), PointDeCoordination::class,'json');

        return new JsonResponse($this->pointDeCoordinationManager->modifipointDeCoordination($id));
    }
}
