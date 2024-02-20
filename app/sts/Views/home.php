<main role="main">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">

        </ol>
        <div class="carousel-inner">
            <?php
            $contator = 0;
            //echo __DIR__;
            foreach ($this->Dados['sts_carousels'] as $carousel){
                //echo $carousel['id'] . "<br>";
                extract($carousel);
                //echo $id . "<br>";
                ?>
                <div class="carousel-item <?php if($contator == 0) { echo "active";}?>">
                    <img class="first-slide img-fluid" src="<?php echo URL;?>/assets/imagens/<?php echo $imagem;?>" alt="<?php echo $titulo;?>">
                    <div class="container">
                        <div class="carousel-caption <?php echo $posicao_text;?>">
                            <h1 class="d-none d-md-block"><?php echo $titulo;?></h1>
                            <p class="d-none d-md-block"><?php echo $descricao;?></p>
                            <p class="d-none d-md-block"><a class="btn btn-lg btn-danger" href="<?php echo $link;?>" role="button"><?php echo $titulo_botao;?></a></p>
                        </div>
                    </div>
                </div>
                <?php
                $contator++;
            }
            ?>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</main>