<div class="content p-1">
    <div class="list-group-item">
        <div class="d-flex">
            <div class="mr-auto p-2">
                <h2 class="display-4 titulo">Cadastrar Situação Página Site</h2>
            </div>
        </div><hr>
        <?php
        if (isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?> 
        <form method="POST" action="" enctype="multipart/form-data">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label><span class="text-danger">*</span>Nome</label>
                    <input name="nome" type="text" class="form-control" placeholder="Nome da situação de página do site">
                </div>
                <div class="form-group col-md-6">
                    <label><span class="text-danger">*</span>Cor</label>
                    <select name="adms_cor_id" id="adms_cor_id" class="form-control">
                        <option value="">Selecione</option>
                        <!-- criar um foreach para apresentar as cores-->
                        <?php
                        foreach($this->Dados['adms_cors'] as $cors){

                        
                            extract($cors);
                        ?>
                        <option value='<?=$id?>'><?=$nome?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <p>
                <span class="text-danger">*</span>Campo obrigatório
            </p>
            <input name="CadSitPgSite" type="submit" class="btn btn-warning" value="Salvar">
        </form>
    </div>
</div>



