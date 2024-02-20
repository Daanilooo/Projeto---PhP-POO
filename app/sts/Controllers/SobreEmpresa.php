<?php

namespace Sts\Controllers;

use Core\ConfigView;

class SobreEmpresa
{
    public function principal(){
        $carregarView = new ConfigView('sobre_empresa');
        $carregarView->renderizar();
    }

}