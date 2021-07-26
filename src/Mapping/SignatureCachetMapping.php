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
}
