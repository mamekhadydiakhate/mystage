<?php

namespace App\Mapping;

use App\Entity\SocieteGestionAction;

class SocieteGestionActionMapping extends BaseMapping
{
    public function addSocieteGestionAction($data)
    {
        $societeGestionAction = new SocieteGestionAction();
        return $this->setSocieteGestionActionData($data, $societeGestionAction);
    }

    private function setSocieteGestionActionData($data, $societeGestionAction)
    {
        $libelle = isset($data['libelle']) ? $data['libelle'] : $societeGestionAction->getLibelle();
        $societeGestionAction->setLibelle($libelle);
        return $societeGestionAction;
    }
}
