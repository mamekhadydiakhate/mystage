<?php

namespace App\Mapping;

use App\Entity\Acitvite;

class AcitviteMapping extends BaseMapping
{
    public function addacitvite($data)
    {
        $acitvite = new acitvite();
        return $this->setAcitviteData($data, $acitvite);
    }

    private function setAcitviteData($data, $acitvite)
    {
        $libelle = isset($data['libelle']) ? $data['libelle'] : $acitvite->getLibelle();
        $acitvite->setLibelle($libelle);
        return $acitvite;
    }

    public function updateacitvite($data)
    {
     return $this->setacitviteData($data);
    }
}