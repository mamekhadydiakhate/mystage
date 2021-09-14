<?php

namespace App\Mapping;

use App\Entity\SignatureCachet;

class SignatureCachetMapping extends BaseMapping{

    public function addSignatureCachet($data){
        $signatureCachet=new SignatureCachet();
        $signatureCachet->setUser(isset($data['user'])?$data['user']:$signatureCachet->getUser());
        if (isset($data['fichier'])&& is_file($data['fichier'])){
            $doc=$this->baseService->uploadFile($data['fichier'],$data['document_directory']);
            if ($doc['isValid']==true){
                $signatureCachet->setLibelle($doc['filename']);
            }else{
                return array("code"=>500,"status"=>false,"message"=>"Fichier invalide!");
            }
        }
        return $signatureCachet;
    }

    public function listSignaturesCachet($signaturesCachets){
        foreach ($signaturesCachets as $signaturesCachet){
            $tab[]=array(
                $this->ID_KEY=>$signaturesCachet->getId(),
                "fichier"=>"public/uploads/documents/".$signaturesCachet->getLibelle(),
                "user"=>array(
                    $this->ID_KEY=>$signaturesCachet->getUser()?$signaturesCachet->getUser()->getId():null,
                    $this->PRENOM_KEY=>$signaturesCachet->getUser()?$signaturesCachet->getUser()->getPrenom():null,
                    $this->NOM_KEY=>$signaturesCachet->getUser()?$signaturesCachet->getUser()->getNom():null,
                )

            );
        }
        return $tab;
    }
}
