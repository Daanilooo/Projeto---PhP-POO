<?php

namespace Sts\Controllers;
use Sts\Models\StsCadastrarCatArtigo;
use Core\ConfigView;

class CadastrarCatArtigo extends StsCadastrarCatArtigo
{
    private $Dados;
    private $Info;

    public function principal(){
        $sql = new StsCadastrarCatArtigo();
        
        $this->Dados['adms_sits'] = $sql->listarSituacoes();

        
        $form = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        if(!empty($form['CadCatArtigo'])){
            unset($form['CadCatArtigo']);
            
            $sql->cadCatArtigo($form);
        }


        $carregarView = new ConfigView('artigo',$this->Dados);
        $carregarView->renderizar();
    }

}
?>