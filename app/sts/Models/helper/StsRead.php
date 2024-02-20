<?php
namespace Sts\Models\helper;
use PDO;
class StsRead extends StsConn
{
    private $Select;
    private $Values;
    private $Resultado;
    private $Query;
    private $Conn;

    public function execRead($Tabela, $Termos = null, $TermosValores = null){
        if(!empty($TermosValores)){
            parse_str($TermosValores, $this->Values );
        }
        $this->Select = "SELECT * FROM $Tabela $Termos";
        //SELECT * FROM usuarios WHERE id = :id and status = :status
        $this->Conn = parent::getConn();
        $this->Query = $this->Conn->prepare($this->Select);
        $this->Query->setFetchMode(PDO::FETCH_ASSOC);
        if($this->Values){
            foreach ($this->Values as $coluna => $valor){
                $this->Query->bindValue("$coluna", $valor, PDO::PARAM_INT );
            }
        }
        $this->Query->execute();
        $this->Resultado = $this->Query->fetchAll();

    }
    public function getResultado(){
        return $this->Resultado;
    }

}