<?php

namespace Sts\Models;

use Sts\Models\helper\StsCreate;

class StsContato
{
    private $Resultado;
    private $Dados;
    public function getResultado(){
        return $this->Resultado;
    }
    public function cadContato(array $Dados){
        $this->Dados = $Dados;
        $cadContato = new StsCreate();
        $cadContato->exeCreate('sts_contatos',$this->Dados);

        if ($cadContato->getResultado()) {
            $_SESSION['msg'] = "<div class='alert alert-success'>Mensagem enviada com sucesso!</div>";
            $this->Resultado = true;
        } else {
            $_SESSION['msg'] = "<div class='alert alert-danger'>Erro: Mensagem não foi enviada!</div>";
            $this->Resultado = false;
        }


    }

}