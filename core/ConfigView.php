<?php


namespace Core;


class ConfigView
{
    public $Arquivo;
    public $Dados;
    public function __construct($Arquivo, array $Dados = null){
        $this->Arquivo = (string) $Arquivo;
        $this->Dados = $Dados;
    }

    public function renderizar(){
        if(file_exists('app/sts/Views/'.$this->Arquivo . '.php')){
            include_once 'app/sts/Views/include/cabecalho.php';
            include_once 'app/sts/Views/include/menu.php';
            include_once 'app/sts/Views/'.$this->Arquivo . '.php';
            include_once 'app/sts/Views/include/rodape.php';
        }
    }

}