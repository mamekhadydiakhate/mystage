<?php

namespace App\Controller;



use App\Entity\Activite;
use App\Annotation\QMLogger;
use App\Controller\BaseController;
use App\Repository\ActiviteRepository;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\Put;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations\Post;
use Symfony\Component\Routing\Annotation\Route;
use FOS\RestBundle\Controller\Annotations\Delete;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ActiviteController extends BaseController
{
    private ActiviteRepository $activiteRepo;

    public function __construct(ActiviteRepository $activiteRepo)
    {
        $this->activiteRepo = $activiteRepo;
    }

    /**
     * @Post("/activite", name="activites")
     */
    public function addActivite(Request $request ,ValidatorInterface $validator ,SerializerInterface $serializer): Response
    {

        $activite = $serializer->deserialize($request->getContent(), Activite::class,'json');
        $errors = $validator->validate($region);
    if (count($errors) > 0)
    {
        $errorsString =$serializer->serialize($errors,"json");
        return new JsonResponse( $errorsString ,Response::HTTP_BAD_REQUEST,[],true);
    }
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($region);
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
        return new JsonResponse($this->activiteManager->detailsactivite($id));
    }

    /**
    * @Delete("/delete-activite/{id}", name="delete_activite")
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
    public function modifiactivite($id){
        $activite = $this->activiteRepo->find($id);
        $activite = $serializer->deserialize($request->getContent(), Activite::class,'json');

        return new JsonResponse($this->activiteManager->modifiactivite($id));
    }
}
