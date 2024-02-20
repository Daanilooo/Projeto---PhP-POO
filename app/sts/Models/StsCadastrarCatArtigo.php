<?php

namespace Sts\Models;

use Sts\Models\helper\StsCreate;
use Sts\Models\helper\StsRead;

class StsCadastrarCatArtigo extends StsRead
{
    private $Resultado;
    private $Dados;

    public function cadCatArtigo(array $Dados){
        $this->Dados = $Dados;
        $cadArtigo = new StsCreate();
        $cadArtigo->exeCreate('sts_cats_artigos',$this->Dados);

        if ($cadArtigo->getResultado()) {
            $_SESSION['msg'] = "<div class='alert alert-success'>Mensagem enviada com sucesso!</div>";
            $this->Resultado = true;
        } else {
            $_SESSION['msg'] = "<div class='alert alert-danger'>Erro: Mensagem não foi enviada!</div>";
            $this->Resultado = false;
        }
    }

    public function listarSituacoes(){
        $listar = new StsRead();
        $listar->execRead('adms_sits');
        $this->Resultado = $listar->getResultado();
        return $this->Resultado;
    }
}