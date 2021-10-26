<?php

namespace App\Controller;



use App\Entity\User;
use App\Entity\Structure;
use App\Annotation\QMLogger;
use App\Controller\BaseController;
use App\Repository\StructureRepository;
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

class StructureController extends BaseController
{
    private StructureRepository $structureRepo;

    public function __construct(StructureRepository $structureRepo)
    {
        $this->structureRepo = $structureRepo;
        $user= new User;
    }
    /**
     * @Post("/structure", name="structures")
     * 
     */
    public function addStructure(Request $request ,ValidatorInterface $validator ,SerializerInterface $serializer): Response
    {

        $structure = $serializer->deserialize($request->getContent(), structure::class,'json');
        $errors = $validator->validate($structure);
    if (count($errors) > 0)
    {
        $errorsString =$serializer->serialize($errors,"json");
        
        return new JsonResponse( $errorsString ,Response::HTTP_BAD_REQUEST,[],true);
    }
    /*$message=(new\Swift_Message)
        ->setSubject('DCIRE, PILOTAGE PERFORMANCE')
        ->setFrom('xxxxx@orange-sonatel.com')
        ->setTo($user->getEmail())
        ->setBody("Votre structure est enregistré avec succé");
    $mailer->send($message);*/
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($structure);
        $entityManager->flush();
    
        return new JsonResponse("succes",Response::HTTP_CREATED,[],true);
       
    }

    /**
     * @Get("/structure", name="structure")
     */
    public function listStructure(): Response
    {
       
         $structures = $this->structureRepo->findAll();
         
        return $this->json($structures);
    }
      /**
     * @Get("/structure/{id}")
     * @QMLogger(message="Details structure")
     */
    public function detailsStructure($id){
        $structures = $this->structureRepo->find($id);
        return $this->json($structures);
    }

    /**
    * @Delete("/delete-structure/{id}", name="delete_structure")
    */
    public function deleteStructure(int $id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $structure = $entityManager->getRepository(structure::class)->find($id);
        $entityManager->remove($structure);
        $entityManager->flush();

    return $this->redirectToRoute("structures");
    }
     /**
     * @Put("/structure/{id}")
     * @QMLogger(message="modifier structure")
     */
    public function modifiStructure($id){
        $structure = $this->structureRepo->find($id);
        $structure = $serializer->deserialize($request->getContent(), structure::class,'json');

        return new JsonResponse($this->structureManager->modifistructure($id));
    }
}

