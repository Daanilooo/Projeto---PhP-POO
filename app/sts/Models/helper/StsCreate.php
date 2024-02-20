<?php

namespace Sts\Models\helper;

class StsCreate extends StsConn
{
    private $Tabela;
    private $Dados;
    private $Resultado;
    private $Query;
    private $Conn;

    public function getResultado(){
        return $this->Resultado;
    }

    public function exeCreate($Tabela, array $Dados){
        $this->Tabela = $Tabela;
        $this->Dados = $Dados;

        $colunas = implode(',',array_keys($this->Dados));
        $valores = ':'.implode(', :',array_keys($this->Dados));
        $this->Query = "INSERT INTO $this->Tabela ($colunas) 
                        VALUES ($valores)";
        $this->Conn = parent::getConn();
        try{
            $this->Query = $this->Conn->prepare($this->Query);
            $this->Query->execute($this->Dados);
            $this->Resultado = $this->Conn->lastInsertId();
        }catch (\Exception $e){
            $this->Resultado = null;
        }

    }

}