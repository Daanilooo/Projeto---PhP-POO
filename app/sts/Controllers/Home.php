<?php
    namespace Sts\Controllers;

    use Core\ConfigView;
    use Sts\Models\StsCarousels;

    class Home
    {
        private $Dados;

        public function principal() {
            $home = new StsCarousels();
            $this->Dados['sts_carousels'] = $home->index();
            //var_dump($this->Dados);

            $carregarView = new ConfigView('home', $this->Dados);
            $carregarView->renderizar();
        }

    }