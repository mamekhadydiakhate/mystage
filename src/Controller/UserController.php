<?php
namespace App\Controller;

use DateTime;
use Exception;
use Monolog\Logger;
use App\Entity\User;
use App\Form\UserType;
use App\Model\UserManager;
use App\Annotation\QMLogger;
use App\Repository\UserRepository;
use App\Repository\GroupeRepository;
use App\Service\AccessControlService;
use Psr\Container\ContainerInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations\Put;
use FOS\RestBundle\Controller\Annotations\Post;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\Delete;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class UserController extends BaseController {
    private $userManager;
    private $userRepository;
public function __construct(UserRepository $userRepository,UserManager $userManager,JWTTokenManagerInterface $jwtManager, \Swift_Mailer $mailer, TokenStorageInterface $tokenStorage, EntityManagerInterface $em, \ApiPlatform\Core\Validator\ValidatorInterface $validator)
{
    $this->userManager=$userManager;
    $this->userRepository=$userRepository;
    parent::__construct($jwtManager, $mailer, $tokenStorage, $em, $validator);
}

    /**
     * @Rest\Post("/passwordChange")
     * @QMLogger(message="Changement de mot de passe")
     */
    public function passwordChange(Request $request,UserPasswordEncoderInterface $passwordEncoder,SerializerInterface $serializer,ValidatorInterface $validator,ContainerInterface $container){
       $values=$request->request->all();
       $oldPassword=(isset($values["oldPassword"]) && $values["oldPassword"])?$values["oldPassword"]:null;
       $plainPassword=(isset($values["plainPassword"]) && $values["plainPassword"])?$values["plainPassword"]:null;
       $token = $container->get('security.token_storage')->getToken();
       $decodeT = $this->jwtM->decode($token);
       $utilisateur=$this->getDoctrine()->getRepository(User::class)->findOneBy(["email"=>$decodeT["username"]]);
       if(!$utilisateur){
           $utilisateur =$this->getDoctrine()->getRepository(User::class)->findOneBy(["username"=>$decodeT["username"]]);
       }
        if(!$utilisateur){
            $message="Utilisateur inexistant";
            return new JsonResponse(array('status' => 502, 'status'=> false, 'message' =>$message));
        }
        $verifOldPass= $passwordEncoder->isPasswordValid($utilisateur, $oldPassword);
        $encodePassword=$passwordEncoder->encodePassword($utilisateur,$values["password"]);
        $form = $this->createForm(UserType::class, $utilisateur);
        $form->handleRequest($request);
        $form->submit($values);
        $errorsAssert = $validator->validate($utilisateur);
        if(count($errorsAssert)>0){
           $err = json_decode($serializer->serialize($errorsAssert, 'json'),true);
           return new JsonResponse(array("code"=>500,"status"=>false,"message"=>$err["detail"]));
        }
        if(!$verifOldPass){
            $message="mot de pass actuel invalide";
            return new JsonResponse(array('status' => 504, 'status'=> false, 'message' =>$message));
        }
        if(strcmp($values["password"],$plainPassword)!==0){
            $message="Les deux mots de passe saisis sont différents";
            return new JsonResponse(array('status' => 502, 'status'=> false, 'message' =>$message));
        }
        $passes=$this->em->getRepository(HistoriquePass::class)->findBy(array("user"=>$utilisateur),array("date"=>"DESC"),3);
        if($passes){
            foreach ($passes as $passe) {
                if(strcmp($encodePassword,$passe->getPassword()) == 0){
                    $message="Vous ne devez pas saisir les trois derniers mots de passe utilisés";
                    return new JsonResponse(array('status' => 504, 'status'=> false, 'message' =>$message));
                }
            }
        }                         
        //$histoPass=new HistoriquePass();
        $utilisateur->setPasswordRequestedAt(new DateTime(date("Y-m-d H:i:s")));
        $utilisateur->setPassword($encodePassword);
        $utilisateur->setEnabled(1);
        $utilisateur->setIsPasswordChanged(1);
        //$histoPass->setPassword($encodePassword);
        //$histoPass->setDate(new DateTime(date("Y-m-d H:i:s")));
        //$histoPass->setUser($utilisateur);
       // $this->getDoctrine()->getManager()->persist($histoPass);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->flush();
                $data = [
                    'status' => true,
                    'code' => 200,
                    'message' => 'mot de pass modifié'
                ];
                return new JsonResponse($data);
    }

    /**
     * @Rest\Get("/deconnexion")
     * @QMLogger(message="deconnexion")
     */
    public function deconnexion(){
        return new JsonResponse(array('status' => 200, 'status'=> true, 'message' =>"vous êtes bien déconnecté"));
    }


    /**
     * @Rest\Post("/addUser")
     * @QMLogger(message="Ajout utilisateur")
     */
    public function adduser(Request $request){
        $data=json_decode($request->getContent(),true);
        return new JsonResponse($this->userManager->adduser($data));
    }
    /**
     * @Rest\Get("/user/{id}")
     * @QMLogger(message="Details utilisateur")
     */
    public function get($id){
        return new JsonResponse($this->userManager->get($id));
    }

    /**
     * @Get("/users")
     * @QMLogger(message="Liste utilisateurs")
     */
    public function listUsers(Request $request)
    { 
        $page = $request->query->get('page', 1);
        $limit = $request->query->get('limit', getenv('LIMIT'));
        $user = $this->getDoctrine()->getRepository(User::class)->findAll();

        return new JsonResponse($this->userManager->listUsers($page,$limit));
        
    } 

    /**
     * @Rest\Put("/user/{id}")
     * @QMLogger(message="Modifier utilisateur")
     * 
     */
    public function modifierUtilisateur(Request $request,$id){
        $data=json_decode($request->getContent(),true);
        return new JsonResponse($this->userManager->updateUser($id,$data));
    }


    /**
     * @Rest\Post("/blockUser/{id}")
     * @QMLogger(message="Bloquer utilisateur")
     */
    public function bloquerUtilisateur(Request $request,$id){
        $data=json_decode($request->getContent(),true);
        return new JsonResponse($this->userManager->enabledUser($data,$id));
    }

    /**
     * @Rest\Get("/search")
     * @QMLogger(message="Recherche utilisateur")
     */
    public function searchUser(Request $request){
        $search=$request->query->get('matricule','');
        return new JsonResponse($this->userManager->searchUser($search));
    }
    /**
     * @Rest\Get("/listEmails")
     * @QMLogger(message="Liste des emails")
     */
    public function listEmails(){
        return new JsonResponse($this->userManager->listEmailUsers());
    }

}
