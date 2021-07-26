<?php

namespace App\Mapping;

use App\Entity\Courrier;

class CourrierMapping extends BaseMapping{

    public function setCourrierData($data,$courrier){
        $courrier->setUser(isset($data['user'])?$data['user']:$courrier->getUser());
        $courrier->setAgent(isset($data['agent'])?$data['agent']:$courrier->getAgent());
        $courrier->setCommentaire(isset($data['commentaire'])?$data['commentaire']:$courrier->getCommentaire());
        $courrier->setValidite(isset($data['validite'])?$data['validite']:$courrier->getValidite());
        $courrier->setAttestationNonRevocation(isset($data['attestationNonrevoction'])?$data['attestationNonrevoction']:$courrier->getAttestationNonRevocation());
        $courrier->setCertificatAdministrationLegale(isset($data['certificatAdministrationLegale'])?$data['certificatAdministrationLegale']:$courrier->getCertificatAdministrationLegale());
        $courrier->setConclusionDemande(isset($data['conclusionDemande'])?$data['conclusionDemande']:$courrier->getConclusionDemande());
        $courrier->setTypeCourrier(isset($data['typeCourrier'])?$data['typeCourrier']:$courrier->getTypeCourrier());
        $courrier->setProcuration(isset($data['procuration'])?$data['procuration']:$courrier->getProcuration());
        $courrier->setNumeroCourrier(isset($data['numeroCourrier'])?$data['numeroCourrier']:$courrier->getNumeroCourrier());
        $courrier->setObjetCourrier(isset($data['objetCourrier'])?$data['objetCourrier']:$courrier->getObjetCourrier());
        $courrier->setNumerotation(isset($data['numerotation'])?$data['numerotation']:$courrier->getNumerotation());
        $courrier->setGenerateurValiditeCourrier(isset($data['generateurValiditeCourrier'])?$data['generateurValiditeCourrier']:$courrier->getGenerateurValiditeCourrier());
        $courrier->setDateAccuseDfc(isset($data['dateAccuseDfc'])?new \DateTime($data['dateAccuseDfc']):$courrier->getDateAccuseDfc());
        $courrier->setDateCourrier(isset($data['dateCourrier'])?new \DateTime($data['dateCourrier']):$courrier->getDateCourrier());
        $courrier->setDateDerniereNotification(isset($data['dateDerniereNotification'])?new \DateTime($data['dateDerniereNotification']):$courrier->getDateDerniereNotification());
        $courrier->setDateValiditeCourrier(isset($data['dateValiditeCourrier'])?new \DateTime($data['dateValiditeCourrier']):$courrier->getDateValiditeCourrier());
        $courrier->setPieceIdentite(isset($data['pieceIdentite'])?$data['pieceIdentite']:$courrier->getPieceIdentite());
        $courrier->setNumeroCaseCocheeProcuration(isset($data['numeroCaseCocheeProcuration'])?$data['numeroCaseCocheeProcuration']:$courrier->getNumeroCaseCocheeProcuration());
        $courrier->setNumeroCaseCocheeAttestationNonRevocation(isset($data['numeroCaseCocheeAttestationNonRevocation'])?$data['numeroCaseCocheeAttestationNonRevocation']:$courrier->getNumeroCaseCocheeAttestationNonRevocation());
        $courrier->setNotification72heures(isset($data['notification72heures'])?$data['notification72heures']:$courrier->getNotification72heures());
        $courrier->setNouvelleNumerotationCourrier(isset($data['nouvelleNumerotationCourrier'])?$data['nouvelleNumerotationCourrier']:$courrier->getNouvelleNumerotationCourrier());
        $courrier->setCourrierEnvoye(isset($data['courrierEnvoye'])?$data['courrierEnvoye']:$courrier->getCourrierEnvoye());
        $courrier->setJugementCuratelle(isset($data['jugementCuratelle'])?$data['jugementCuratelle']:$courrier->getJugementCuratelle());
        $courrier->setJugementHeredite(isset($data['jugementHeredite'])?$data['jugementHeredite']:$courrier->getJugementHeredite());
        $courrier->setNumeroCaseCocheeCertificat(isset($data['numeroCaseCocheeCertificat'])?$data['numeroCaseCocheeCertificat']:$courrier->getNumeroCaseCocheeCertificat());
        $courrier->setNumeroCaseCocheeJugementCuratelle(isset($data['numeroCaseCocheeJugementCuratelle'])?$data['numeroCaseCocheeJugementCuratelle']:$courrier->getNumeroCaseCocheeJugementCuratelle());
        return $courrier;
    }

    public function addCourrier($data){
        $courrier=new Courrier();
        $courrier=$this->setCourrierData($data,$courrier);
        if (isset($data['fichier'])&& is_file($data['fichier'])){
            $doc=$this->baseService->uploadFile($data['fichier'],$data['document_directory']);
            if ($doc['isValid']==true){
                $courrier->setFichier($doc['filename']);
            }else{
                return array("code"=>500,"status"=>false,"message"=>"Fichier invalide!");
            }
        }
        return $courrier;
    }

    public function hydrateCourrier($courrier){
        $courrier=new Courrier();
        return array(
            $this->ID_KEY=>$courrier->getId(),
            "numeroCaseCocheeJugementCuratelle"=>$courrier->getNumeroCaseCocheeJugementCuratelle(),
           "numeroCaseCocheeCertificat" =>$courrier->getNumeroCaseCocheeCertificat(),
            "nouvelleNumerotationCourrier"=>$courrier->getNouvelleNumerotationCourrier(),
            "numeroCourrier"=>$courrier->getNumeroCourrier(),
            "notification72heures"=>$courrier->getNotification72heures(),
            "numerotation"=>$courrier->getNumerotation(),
            "numeroCaseCocheeProcuration"=>$courrier->getNumeroCaseCocheeProcuration(),
            "numeroCaseCocheeAttestationNonRevocation"=>$courrier->getNumeroCaseCocheeAttestationNonRevocation(),
            "jugementHeredite"=>$courrier->getJugementHeredite(),
            "jugementCuratelle"=>$courrier->getJugementCuratelle(),
            "courrierEnvoye"=>$courrier->getCourrierEnvoye(),
            "pieceIdentite"=>$courrier->getPieceIdentite(),
            "referenceSaisineDfc"=>$courrier->getReferenceSaisineDfc(),
            "generateurCourrier"=>$courrier->getGenerateurCourrier(),
           "commentaire"=>$courrier->getCommentaire(),
            "validite"=>$courrier->getValidite(),
            "objetCourrier"=>$courrier->getObjetCourrier(),
            'attestationNonRevocation'=>$courrier->getAttestationNonRevocation(),
            'dateValiditeCourrier'=>$courrier->getDateValiditeCourrier()?date_format($courrier->getDateValiditeCourrier(),'Y-m-d'):null,
            'dateDerniereNotification'=>$courrier->getDateDerniereNotification()?date_format($courrier->getDateDerniereNotification(),'Y-m-d'):null,
            'dateCourrier'=>$courrier->getDateCourrier()?date_format($courrier->getDateCourrier(),'Y-m-d'):null,
            'dateAccuseDfc'=>$courrier->getDateAccuseDfc()?date_format($courrier->getDateAccuseDfc(),'Y-m-d'):null,
            'user'=>array(
                $this->ID_KEY=>$courrier->getUser()?$courrier->getUser()->getId():null,
                $this->NOM_KEY=>$courrier->getUser()?$courrier->getUser()->getNom():null,
                $this->PRENOM_KEY=>$courrier->getUser()?$courrier->getUser()->getPrenom():null,
            ),
            'agent'=>array(
                $this->ID_KEY=>$courrier->getAgent()?$courrier->getAgent()->getId():null,
                $this->NOM_KEY=>$courrier->getAgent()?$courrier->getAgent()->getNom():null
            ),
        );
    }
}
