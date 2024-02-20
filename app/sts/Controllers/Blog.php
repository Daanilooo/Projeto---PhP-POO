<?php

namespace Sts\Controllers;

use Core\ConfigView;

class Blog
{
    public function principal(){
        $carregarView = new ConfigView('blog');
        $carregarView->renderizar();
    }

}