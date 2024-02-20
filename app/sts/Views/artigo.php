
<div class="content p-1">

    <div class="list-group-item">

        <div class="d-flex">

            <div class="mr-auto p-2">

                <h2 class="display-4 titulo">Cadastrar Categoria de Artigo</h2>

            </div>

            <div class="p-2">

                    <a href="<?php echo URLADM . 'cat-artigo/listar'; ?>" class="btn btn-outline-info btn-sm">Listar</a>

            </div>           

        </div><hr>

        <?php

        if (isset($_SESSION['msg'])) {

            echo $_SESSION['msg'];

            unset($_SESSION['msg']);

        }

        ?>

        <form method="POST" action="" enctype="multipart/form-data">             

            <div class="form-row">

                <div class="form-group col-md-6">

                    <label><span class="text-danger">*</span> Nome</label>

                    <input name="nome" type="text" class="form-control" placeholder="Nome da categoria">

                </div>

                <div class="form-group col-md-6">

                    <label><span class="text-danger">*</span> Situação</label>

                    <select name="adms_sit_id" id="adms_sit_id" class="form-control">

                        <option value="">Selecione</option>
                       
                        <?php
                            foreach ($this->Dados['adms_sits'] as $sits){
                            extract($sits);
                        
                        ?>
                        <option value = '<?= $id; ?>'><?=$nome?></option>
                        <?php
                            }
                        ?>
                        <!-- criar um foreach para apresentar as situações-->

                        <!-- <option value='$id_sit'>$nome_sit</option>-->

                    </select>

                </div>

            </div>

            <p>

                <span class="text-danger">* </span>Campo obrigatório

            </p>

            <input name="CadCatArtigo" type="submit" class="btn btn-warning" value="Salvar">

        </form>

    </div>

</div>

