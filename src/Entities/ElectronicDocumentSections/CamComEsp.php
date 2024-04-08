<?php

namespace Mcarral\Sifen\Entities\ElectronicDocumentSections;

/**
 * Class CamComEsp
 * @property-read RasMerc gRasMerc
 * @property-read DetVehN gDetVehN
 * @package Mcarral\Sifen\Entities\ElectronicDocumentSections
 */
class CamComEsp extends ElectronicDocumentSectionBase {

    protected $occurrences = 0;

    public function rules()
    {
        return array_merge(parent::rules(), [
            // 'gRasMerc'  => '',  // Grupo de rastreo de la mercadería
            // 'DetVehN'   => '',  // Grupo de detalle de vehículos nuevos
        ]); // TODO: Change the autogenerated stub
    }

}