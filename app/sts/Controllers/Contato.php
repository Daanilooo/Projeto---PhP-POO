<?php

namespace Sts\Controllers;

use Core\ConfigView;
use Sts\Models\StsContato;

class Contato
{
    public function principal(){
        $form = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        if(!empty($form['CadMsgCont'])){
            unset($form['CadMsgCont']);
            $insert = new StsContato();
            $insert->cadContato($form);
        }

        $carregarView = new ConfigView('contato');
        $carregarView->renderizar();
    }
}