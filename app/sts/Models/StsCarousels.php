<?php

namespace Sts\Models;

use Sts\Models\helper\StsRead;

class StsCarousels
{
    private $Resultado;

    public function index(){
        $listar = new StsRead();
        $listar->execRead('sts_carousels',
                            'WHERE  adms_sit_id = :adms_sit_id LIMIT :limit',
                            ':adms_sit_id=1&:limit=3');
        $this->Resultado = $listar->getResultado();
        return $this->Resultado;
    }

}