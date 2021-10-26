<?php

namespace App\Controller;




use App\Entity\User;
use App\Entity\Activite;
use PHPJasper\PHPJasper;
use App\Entity\Evenement;
use App\Entity\Structure;
use App\Entity\Difficulte;
use App\Entity\Periodicite;
use App\Annotation\QMLogger;
use App\Entity\TrancheHoraire;
use FOS\UserBundle\Mailer\Mailer;
use App\Controller\BaseController;
use App\Repository\UserRepository;
use App\Entity\PointDeCoordination;
use App\Repository\ActiviteRepository;
use App\Repository\StructureRepository;
use App\Repository\TrancheHoraireRepository;
use Symfony\Component\Console\Output\Output;
use Symfony\Component\Serializer\Serializer;
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
    private UserRepository $userRepo;
    private StructureRepository $structurerepo;
    private TrancheHoraireRepository $trancheHoraireRepo;

    public function __construct(ActiviteRepository $activiteRepo ,UserRepository $userRepo ,
                StructureRepository $structureRepo ,TrancheHoraireRepository $trancheHoraireRepo)
    {
        $this->activiteRepo = $activiteRepo;
        $this->userRepo = $userRepo;
        $this->structureRepo = $structureRepo;
        $this->trancheHoraireRepo = $trancheHoraireRepo;
        $serializer = new Serializer();

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
    $user= $this->userRepo->find($request->get('user'));
    //$user = $this->getUser();
    $structure= $this->structureRepo->find($request->get('structure'));
    $trancheHoraire= $this->trancheHoraireRepo->find($request->get('trancheHoraire'));
        $activite->setUser($user);
        $activite->setTrancheHoraire($trancheHoraire);
        $activite->setStructure($structure);


        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($activite);
        $entityManager->flush();
        return new JsonResponse("succes",Response::HTTP_CREATED,[],true);
        $message=(new\Swift_Message)
        ->setSubject('DCIRE, PILOTAGE PERFORMANCE')
        ->setFrom('xxxxx@orange-sonatel.com')
        ->setTo('ddiatou1@gmail.com')
        ->setBody("Votre activité est enregistré avec succé");
    $mailer->send($message);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($region);
        $entityManager->flush();
     ;
      
    }

    /**
     * @Get("/activite", name="activite")
     */
    public function listActivite(): Response
    {
        #$activiteJson=file_get_contents("https://server/reportserver/ReportService2010.asmx?wsdl");
        $activites = $this->activiteRepo->findAll();
        $response = $this->json($activites, 200, [], ['groups' => 'activite:read']);

        return $response;    
    }
      /**
     * @Get("/activite/{id}")
     * @QMLogger(message="Details activite")
     */
    public function detailsactivite($id){
        $activites = $this->activiteRepo->find($id);
        
        $response = $this->json($activites, 200, [], ['groups' => 'activite:read']);

        return $response;
        
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
