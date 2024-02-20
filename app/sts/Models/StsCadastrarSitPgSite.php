<?php

namespace Sts\Models;

use Sts\Models\helper\StsCreate;
use Sts\Models\helper\StsRead;

class StsCadastrarSitPgSite{
    private $Resultado;
    private $Dados;
    

    public function inserirSitPgSite(array $Dados){
        $this->Dados = $Dados;
        $cadPgSite = new StsCreate();
        $cadPgSite->exeCreate('sts_situacaos_pgs',$this->Dados);

        if ($cadPgSite->getResultado()) {
            $_SESSION['msg'] = "<div class='alert alert-success'>Mensagem enviada com sucesso!</div>";
            $this->Resultado = true;
        } else {
            $_SESSION['msg'] = "<div class='alert alert-danger'>Erro: Mensagem não foi enviada!</div>";
            $this->Resultado = false;
        }
    }

    public function listarCores(){
        $listar = new StsRead();
        $listar->execRead('adms_cors');
        $this->Resultado = $listar->getResultado();
        return $this->Resultado;  
    }

    public function getResultado(){
        return $this->Resultado;    
    }
}