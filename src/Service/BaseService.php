<?php


namespace App\Service;


use App\Entity\Action;
use App\Entity\Contrat;
use App\Entity\Interimaire;
use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class BaseService
{
    private $mailer;
    protected $em;
    protected $interimaireMapping;
    protected $tokenStorage;
    protected $cc=array('mohamed.sall@orange-sonatel.com','binetou.diallo@orange-sonatel.com',"babacar.fall4@orange-sonatel.com");
    public function __construct(\Swift_Mailer $mailer, EntityManagerInterface $em,TokenStorageInterface $tokenStorage)
    {
        $this->mailer=$mailer;
        $this->em = $em;
        $this->tokenStorage = $tokenStorage;
    }
    public function sendMail($data){
         $message = (new \Swift_Message())
            ->setFrom(array('no-reply@orange-sonatel.com'=>'KOLEURE SONATEL'))
            ->setTo($data['to']);
         if (isset($data['cc'])){
             $message->setCc($data['cc']);
         }
            $message->setSubject($data['subject'])
            //   ->attach(\Swift_Attachment::fromPath($chemin))
            ->setBody($data['body'] ,
                'text/html');
        $this->mailer->send($message);
    }

    public function uploadFile($file,$directory){
        $allowed  = ['jpg', 'jpeg', 'png', 'gif','pdf','PDF','JPG','JPEG','PNG'];
        if ($file){
            $fichier = md5(uniqid()).'.'.$file->guessExtension();
            $bool=false;
            if (in_array($file->guessExtension(),$allowed)){
                $bool=true;
            }
            if ($bool){
                $file->move(
                    $directory,
                    $fichier
                );
            }
            return array(
                "filename"=>$fichier,
                "isValid"=>$bool
            );
        }else{
            return array(
                "filename"=>null,
                "isValid"=>false
            );
        }

    }

    public function checkDatas($data, $repo, $repo2)
    {
        if($data)
        {
            $entity = $repo->find($data);
            if(!$entity)
            {
                return array($data => 'error');
            }
            return $repo2->findBy(['interimaire' => $entity]);
        }
        return  $repo2->findAll();
    }

    public function monthToFrench($month = null)
    {
        if($month){
            $theMonth = $month;
        }else{
            $theMonth = date("F", strtotime('m'));
        }
        $english_months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
        $french_months = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre');
        return str_replace($english_months, $french_months, $theMonth );
    }

    public function boucleStatByContrat($arrays, $number)
    {
        foreach ($arrays as $contrat)
        {
            $contrat->getInterimaire() ? $number++ : $number = $number + 0;
        }
        return $number;
    }

    public function traitementStat($firstday, $lastday, $key, $datas, $mapping, $structure = null, $agence = null)
    {
        $totalInterims = $this->em->getRepository(Interimaire::class)->countInterim();
        $newInterims = $this->em->getRepository(Interimaire::class)->countnewInterim($firstday, $lastday, $structure);
        $finInterims = $this->em->getRepository(Interimaire::class)->nbInterimFinContrat($lastday, $structure, $agence);
        //dd($finInterims);
        $data = $mapping->hydrateStatInterim($totalInterims, $newInterims, $finInterims, $key);

        array_push($datas, $data);
        return $datas;
    }

    public function convertMonth($num)
    {
        switch ($num){
            case 1: $num = 'Jan';
                break;
            case 2: $num = 'Fev';
                break;
            case 3: $num = 'Mars';
                break;
            case 4: $num = 'Avr';
                break;
            case 5: $num = 'Mai';
                break;
            case 6: $num = 'Jui';
                break;
            case 7: $num = 'Jul';
                break;
            case 8: $num = 'Aou';
                break;
            case 9: $num = 'Sep';
                break;
            case 10: $num = 'Oct';
                break;
            case 11: $num = 'Nov';
                break;
            case 12: $num = 'Dec';
        }
        return $num;
    }

    public function makeHistory($libelle, $mapping)
    {
        $userRepo=$this->em->getRepository(User::class);
        $histo['actionneur']=ConnectedUserService::getConnectedUser($this->tokenStorage,$userRepo);
        $histo['action']= $this->em->getRepository(Action::class)->findOneBy(["libelle"=>$libelle]);
        if($histo['action'] != null){
            $history=$mapping->addHistorique($histo);
            $this->em->persist($history);
            $this->em->flush();
        }
    }

    public function setSqlAdvancedSearch($data){
        $i=0;
        $req='';
        $join=array();
        if (count($data)==0){
            return array("success"=>false,"code"=>502,"data"=>array("message"=>"Veuillez renseigner un filtre pour la recherche!"));
        }
        foreach ($data as $key=>$value){
            if ($this->generateKey($key)=='p'){
                if (count($data)>=1){
                    if($i==0){
                        $req.=$this->generateKey($key).".".$key." LIKE '%".$value."%'";
                    }elseif ($i>0 && $i<=count($data)-1){
                        $req.=" AND ".$this->generateKey($key).".".$key." LIKE '%".$value."%'";
                    }
                }
            }elseif ($this->generateKey($key)=='i' && $key=='agence'){
                $join['i']=" JOIN agence a ON i.agence_id = a.id ";
                if (count($data)>=1){
                    if($i==0){
                        $req.=$this->generateKey($key).".".$key."_id = ".$value;
                    }elseif ($i>0 && $i<=count($data)-1){
                        $req.=" AND ".$this->generateKey($key).".".$key."_id =  ".$value;
                    }
                }
            }elseif ($this->generateKey($key)=='i' && $key!='agence'){
                if (count($data)>=1){
                    if($i==0){
                        $req.=$this->generateKey($key).".".$key." LIKE '%".$value."%'";
                    }elseif ($i>0 && $i<=count($data)-1){
                        $req.=" AND ".$this->generateKey($key).".".$key." LIKE '%".$value."%'";
                    }
                }
            }elseif ($this->generateKey($key)=='c'){
                $join['c']=" JOIN contrat c ON c.interimaire_id = i.id ";

                if ($key=="date_signature"){
                    $p= " YEAR(c.date_signature) = $value";
                }else{
                    $p=$this->generateKey($key).".".$key." LIKE '%".$value."%'";
                }
                if (count($data)>=1){
                    if($i==0){
                        $req.=$p;
                    }elseif ($i>0 && $i<=count($data)-1){
                        $req.=" AND ".$p;
                    }
                }
            }elseif ($this->generateKey($key)=='s' &&  $key!='direction'){
             //   $join['s']=" JOIN structure s ON i.structure_id = s.id  ";

                if (count($data)>=1){
                    if($i==0){
                        $req.=$this->generateKey($key).".".$key." LIKE '%".$value."%'";
                    }elseif ($i>0 && $i<=count($data)-1){
                        $req.=" AND ".$this->generateKey($key).".".$key." LIKE '%".$value."%'";
                    }
                }
            }elseif ($this->generateKey($key)=='s' &&  $key=='direction'){

              //  $join['s']=" JOIN structure s ON i.structure_id = s.id  ";
                if (count($data)>=1){
                    if($i==0){
                        $req.=$this->generateKey($key).".".$key."_id= ".$value;
                    }elseif ($i>0 && $i<=count($data)-1){
                        $req.=" AND ".$this->generateKey($key).".".$key."_id= ".$value;
                    }
                }
            }
            $i++;
        }
         return array("req"=>$req,"join"=>$join);
    }
    private function generateKey($key){
        $cle='';
        if ($key=='nom' || $key=='prenom' ||$key=='matricule' ||  $key=='email'||  $key=='fonction'){
            $cle='p';
        }elseif ($key=='agence'){
            $cle='i';
        }elseif ( $key=='date_signature' ){
            $cle='c';
        }elseif ($key=="direction" || $key=='departement' || $key=='service'){
            $cle='s';
        }
        return $cle;
    }

    public function convertMonthOnNumber($nom)
    {
        switch ($nom){
            case 'janvier': $num = 1;
                break;
            case 'fevrier': $num = 2;
                break;
            case 'mars': $num = 3;
                break;
            case 'avril': $num = 4;
                break;
            case 'mai': $num = 5;
                break;
            case 'juin': $num = 6;
                break;
            case 'juillet': $num = 7;
                break;
            case 'aout': $num = 8;
                break;
            case 'septembre': $num = 9;
                break;
            case 'octobre': $num = 10;
                break;
            case 'novembre': $num = 11;
                break;
            case 'decembre': $num = 12;
        }
        return $num;
    }

    public function monthToFrenchName(int$month)
    {
        $english_months = array(01, 02, 03, 04, 05, 06, 07, 8, 9, 10, 11, 12);
        $french_months = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre');
        return str_replace($english_months, $french_months, $month );
    }

}
