<?php


namespace App\Mapping;


use App\Entity\AyantDroit;

class AyantDroitMapping extends BaseMapping
{
    public function addAyantDroit($data){
        $ayantDroit=new AyantDroit();
        return $this->setAyantDroitData($data,$ayantDroit);
    }

    public function updateAyantDroit($data,$ayantDroit){
        return $this->setAyantDroitData($data,$ayantDroit);
    }

    public function setAyantDroitData($data,$ayantDroit){
        $ayantDroit->setValidite(isset($data['validite'])?$data['validite']:$ayantDroit->getValidite());
        $ayantDroit->setNom(isset($data['nom'])?$data['nom']:$ayantDroit->getNom());
        $ayantDroit->setIsMandataire(isset($data['isMandataire'])?$data['isMandataire']:$ayantDroit->getIsMandataire());
        $ayantDroit->setPrenom(isset($data['prenom'])?$data['prenom']:$ayantDroit->getPrenom());
        $ayantDroit->setEmail(isset($data['email'])?$data['email']:$ayantDroit->getEmail());
        $ayantDroit->setTel1(isset($data['tel1'])?$data['tel1']:$ayantDroit->getTel1());
        $ayantDroit->setTel2(isset($data['tel2'])?$data['tel2']:$ayantDroit->getTel2());
        $ayantDroit->setDateNaissance(isset($data['dateNaissance'])?new \DateTime($data['dateNaissance']):$ayantDroit->getDateNaissance());
        $ayantDroit->setSexe(isset($data['sexe'])?$data['sexe']:$ayantDroit->getSexe());
        $ayantDroit->setStatutLegal(isset($data['statutLegal'])?$data['statutLegal']:$ayantDroit->getStatutLegal());
        $ayantDroit->setLienFamilial(isset($data['lienFamilial'])?$data['lienFamilial']:$ayantDroit->getLienFamilial());
        //$ayantDroit->setDocument(isset($data['document'])?$data['document']:$ayantDroit->getDocument());
        $ayantDroit->setAgent(isset($data['agent'])?$data['agent']:$ayantDroit->getAgent());
        return $ayantDroit;
    }

    public function hydrateAyantDroit($ayantDroit){
        return array(
            $this->ID_KEY=>$ayantDroit->getId(),
            $this->NOM_KEY=>$ayantDroit->getNom(),
            $this->PRENOM_KEY=>$ayantDroit->getPrenom(),
            "document"=>$ayantDroit->getDocument(),
            "lienFamilial"=>array(
                $this->ID_KEY=> $ayantDroit->getLienFamilial()?$ayantDroit->getLienFamilial()->getId():null,
                $this->LIBELLE_KEY=> $ayantDroit->getLienFamilial()?$ayantDroit->getLienFamilial()->getLibelle():null,
            ),
        "sexe"=>$ayantDroit->getSexe(),
            "tel1"=>$ayantDroit->getTel1(),
            "tel2"=>$ayantDroit->getTel2(),
             "isMandataire"=>$ayantDroit->getIsMandataire(),
             $this->VALIDITE_KEY=>$ayantDroit->getValidite(),
            "statutLegal"=>array(
               $this->ID_KEY=>$ayantDroit->getStatutLegal()?$ayantDroit->getStatutLegal()->getId():null,
               $this->LIBELLE_KEY=>$ayantDroit->getStatutLegal()?$ayantDroit->getStatutLegal()->getLibelle():null,
            ),
            $this->DATENAISANCE_KEY=>$ayantDroit->getDateNaissance()?date_format($ayantDroit->getDateNaissance(),'Y-m-d'):null
        );
    }
}
