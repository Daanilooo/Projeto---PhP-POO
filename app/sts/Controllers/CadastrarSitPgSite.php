<?php

namespace Sts\Controllers;
use Sts\Models\StsCadastrarSitPgSite;
use Core\ConfigView;



class CadastrarSitPgSite extends StsCadastrarSitPgSite
{
    private $Dados;

    public function principal(){
        $sql = new StsCadastrarSitPgSite();
        $this->Dados['adms_cors'] = $sql->listarCores();
        
        $form = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        if(!empty($form['CadSitPgSite'])){
            unset($form['CadSitPgSite']);
            
            $sql->inserirSitPgSite($form);
        }
        $carregarView = new ConfigView('cadSitPgSite',$this->Dados);
        $carregarView->renderizar();
    }
}


