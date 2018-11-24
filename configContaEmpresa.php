<?php
$titulo = "Sua Conta - KataGalo";
require_once "./config.php";
include PROJECT_ROOT."/html/_partHTML/head.php";
include PROJECT_ROOT."/html/_partHTML/headerGlobal.php" ?>

<body class="hidden-sn cyan-skin clearfix animated fadeIn">
<main>
    <div class="content">
        <div class="container">
            <div class="form-row">
                <div class="col-md-4 mb-4">
                    <div class="card card-profile container mb-3">
                        <div class="card-avatar">
                            <div class="zoom">
                                <input type="file" required id="empresa-add-input" onchange="readURL(this, 'empresa-add');" name="empresa_foto" style="display:none"/>
                                <img class="rounded-circle container d-block img-fluid logo-perfil" src="images/logo_mercados/img-test-mercado.jpg" id="image-empresa-add"
                                     onclick='addImageEmpresa()'/>
                            </div> <!-- ./End zoom -->
                        </div> <!-- ./End card-avatar -->
                        <div class="content">
                            <p class="card-title font-weight-bold h3-responsive text-center" id="nomeEmpresa" name="loj_fantasia"
                               value="<?php echo isset($n->loj_fantasia) ? $n->loj_fantasia : null ?>">NOME DA EMPRESA</p>
                        </div> <!-- ./End content -->
                    </div> <!-- ./End card card-profile container -->
                    <div class="mb-2">
                        <a class="btn danger-color-dark btn-block btn-lg font-weight-bold white-text" data-toggle="modal" data-target="#modalCadastroProduto">
                            <i class="fas fa-clipboard-list fa-lg"></i>&nbsp;&nbsp;Cadastro de Produto
                        </a>

                        <a class="btn info-color-dark btn-block btn-lg font-weight-bold white-text" data-toggle="modal" data-target="#modalCadastroCampanha">
                            <i class="fas fa-pencil-alt fa-lg"></i>&nbsp;&nbsp;Cadastrar Campanha
                        </a>
                    </div>
                </div> <!-- ./End foto do perfil -->

                <div class="col-md-8 mb-4">
                    <div class="card">
                        <div class="card-header info-color-dark">
                            <p class="my-0 h2-responsive text-uppercase white-text text-center font-weight-bold">Dados do Perfil</p>
                        </div>
                        <div class="card-content">
                            <form class="container" action="configContaEmpresa.php" method="post" style="color: #aaa;">
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="md-form">
                                            <input type="text" placeholder="Razão social" id="razaoSocialPj" name="loj_razaoSocial" maxlength="250" required class="form-control"
                                                   value="<?php echo isset($n->loj_razaoSocial) ? $n->loj_razaoSocial : null ?>">
                                        </div> <!-- ./End md-form -->
                                    </div><!-- ./End col-md-6 -->
                                    <div class="col-md-6">
                                        <div class="md-form">
                                            <input type="text" placeholder="Nome fantasia" id="nomeFantasia" name="loj_fantasia" maxlength="250" required class="form-control"
                                                   value="<?php echo isset($n->loj_fantasia) ? $n->loj_fantasia : null ?>">
                                        </div> <!-- ./End md-form -->
                                    </div><!-- ./End col-md-6 -->
                                </div> <!-- ./End form-row -->

                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="md-form">
                                            <input type="email" placeholder="Email Corporativo" required id="emailCorporativo" name="pes_login" maxlength="250" class="form-control"
                                                   value="<?php echo isset($n->pes_login) ? $n->pes_login : null ?>">
                                        </div> <!-- ./End md-form -->
                                    </div><!-- ./End col-md-6 -->
                                    <div class="col-md-6">
                                        <div class="md-form">
                                            <input type="text" placeholder="CNPJ" class="form-control" required id="cnpjEmpresa" name="pes_receita" autocomplete="on"
                                                   value="<?php echo isset($n->peS_receita) ? $n->pes_receita : null ?>">
                                        </div> <!-- ./End md-form -->
                                    </div><!-- ./End col-md-6 -->
                                </div> <!-- ./End form-row -->

                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="md-form">
                                            <input type="text" placeholder="CEP" id="pesCep" name="end_cep" maxlength="9" required class="form-control" autocomplete="on"
                                                   value="<?php echo isset($n->end_cep) ? $n->end_cep : null ?>">
                                        </div> <!-- ./End md-form -->
                                    </div> <!-- ./End col-md-6 -->
                                    <div class="col-md-6">
                                        <div class="md-form">
                                            <input type="text" placeholder="Localização" id="pesLocalizacao" name="end_localizacao" maxlength="250" class="form-control"
                                                   value="<?php echo isset($n->end_localizacao) ? $n->end_localizacao : null ?>">
                                        </div> <!-- ./End md-form -->
                                    </div> <!-- ./End col-md-6 -->
                                </div> <!-- ./End form-row -->

                                <div class="form-row">
                                    <div class="col-md-4">
                                        <div class="md-form">
                                            <input type="text" placeholder="Endereço" maxlength="250" class="form-control" id="pesEndereco" required name="end_endereco"
                                                   autocomplete="on" value="<?php echo isset($n->end_endereço) ? $n->loj_fantasia : null ?>">
                                        </div> <!-- ./End md-form -->
                                    </div> <!-- ./End col-md-4 -->
                                    <div class="col-md-4">
                                        <div class="md-form">
                                            <input type="text" placeholder="Número" class="form-control" id="pesNumero" required name="end_numero" autocomplete="on"
                                                   value="<?php echo isset($n->end_numero) ? $n->end_numero : null ?>">
                                        </div> <!-- ./End md-form -->
                                    </div> <!-- ./End col-md-4 -->
                                    <div class="col-md-4">
                                        <div class="md-form">
                                            <input type="text" placeholder="Cidade" maxlength="250" class="form-control" id="pesCidade" required name="cid_cidade"
                                                   autocomplete="on" value="<?php echo isset($n->cid_cidade) ? $n->cid_cidade : null ?>">
                                        </div> <!-- ./End md-form -->
                                    </div> <!-- ./End col-md-4 -->
                                </div> <!-- ./End form-row -->

                                <div class="form-row">
                                    <div class="col-md-4">
                                        <div class="md-form">
                                            <input type="text" placeholder="Estado" min="2" maxlength="2" class="form-control" id="pesEstado" required name="est_sigla"
                                                   autocomplete="on" value="<?php echo isset($n->est_sigla) ? $n->est_sigla : null ?>">
                                        </div> <!-- ./End md-form -->
                                    </div> <!-- ./End col-md-4 -->
                                    <div class="col-md-4">
                                        <div class="md-form">
                                            <input type="text" placeholder="Bairro" class="form-control" id="pesBairro" maxlength="250" required name="end_bairro" autocomplete="on"
                                                   value="<?php echo isset($n->end_bairro) ? $n->end_bairro : null ?>">
                                        </div> <!-- ./End md-form -->
                                    </div> <!-- ./End col-md-4 -->
                                    <div class="col-md-4">
                                        <div class="md-form">
                                            <input type="text" placeholder="Complemento" class="form-control" id="pesComplemento" maxlength="250" name="end_complemento"
                                                   autocomplete="on" value="<?php echo isset($n->end_complemento) ? $n->end_complemento : null ?>">
                                        </div> <!-- ./End md-form -->
                                    </div> <!-- ./End col-md-4 -->
                                </div> <!-- ./End form-row -->

                                <div class="col-md-6 float-right">
                                    <div class="md-form">
                                        <button type="submit" name="btnConfirmarAtualizacao" class="btn btn-purple btn-block mb-2">Confirmar</button>
                                    </div> <!-- ./End md-form -->
                                </div> <!-- ./End col-md-8 float-right -->
                            </form> <!-- ./End form -->
                        </div> <!-- ./End card-content -->
                    </div> <!-- ./End card -->
                </div> <!-- ./End col-md-8 -->
            </div> <!-- ./End form-row -->
        </div> <!-- ./End container -->
    </div> <!-- ./End content -->
</main> <!-- ./End main -->

<!-- --------------------------------------------------------------- -->
<!-- ----------------- MODAL DE CADASTRAR PRODUTO ------------------ -->
<!-- --------------------------------------------------------------- -->
<main>
    <div class="modal animated fade" id="modalCadastroProduto" tabindex="-1" role="dialog" aria-labelledby="modalCadProduto" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header info-color-dark text-center">
                    <h4 class="modal-title w-100 white-text font-weight-bold">Cadastrar Produto</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="white-text h4-responsive" aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" method="post" style="color: #aaa;">
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="md-form">
                                    <input type="text" placeholder="Nome do produto" id="cadNomeProduto" name="pro_nome" maxlength="250" required class="form-control" value="<?php echo isset($n->pro_nome) ? $n->pro_nome : null ?>">
                                </div> <!-- ./End md-form -->
                            </div> <!-- ./End col-md-6 -->
                            <div class="col-md-6">
                                <div class="md-form">
                                    <input type="text" required id="CadProdutoPreco" name="pro_preco" placeholder="Preço do produto" class="form-control preco" value="<?php echo isset($n->pro_preco) ? $n->pro_preco : null ?>">
                                </div> <!-- ./End md-form -->
                            </div> <!-- ./End col-md-6 -->
                        </div> <!-- ./End form-row -->

                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="md-form">
                                    <input type="text" placeholder="Código de barras" required id="CadProdutoBarcode" name="pro_barcode" class="form-control" value="<?php echo isset($n->pro_barcode) ? $n->pro_barcode : null ?>">
                                </div> <!-- ./md-form -->
                            </div> <!-- ./col-md-6 -->
                            <div class="col-md-6">
                                <div class="md-form">
                                    <select class="mdb-select md-form colorful-select dropdown-ins" required id="cadProdutoCategoria" name="pro_categoria" searchable="Pesquise aqui..." value="<?php echo isset($n->pro_categoria) ? $n->pro_categoria : null ?>">
                                        <option value="" disabled selected>Categoria do produto</option>
                                        <option value="1">Limpeza</option>
                                        <option value="2">Alimentação</option>
                                        <option value="3">Carnes</option>
                                        <option value="4">Bebidas</option>
                                    </select>
                                </div> <!-- ./md-form -->
                            </div> <!-- ./col-md-6 -->
                        </div> <!-- ./End form-row -->

                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="md-form">
                                    <textarea type="text" placeholder="Descrição do produto" id="CaddescricaoProduto" required name="pro_descricao" class="md-textarea form-control" maxlength="250" length="250" rows="8" value="<?php echo isset($n->pro_descricao) ? $n->pro_descrição : null ?>"></textarea>
                                </div> <!-- ./md-form -->
                            </div> <!-- ./col-md-6 -->
                            <div class="col-md-5">
                                <div class="md-form">
                                    <div class="mb-2 d-md-block container">
                                        <div class="float-right">
                                            <input type="file" required id="produto-add-input" onchange="readURL(this, 'produto-add');" name="pro_imagem" style="display:none;" value="<?php echo isset($n->pro_imagem) ? $n->pro_imagem : null ?>"/>
                                            <img class="d-md-block container d-block img-fluid img-produtos" src="images/logo_mercados/img-test-mercado.jpg" id="image-produto-add"
                                                 onclick='addImageProduto()'/>
                                        </div> <!-- ./End custom-file -->
                                    </div> <!-- ./End input-group mb-3 md-form -->
                                </div> <!-- ./End md-form -->
                            </div> <!-- ./End col-md-6 -->
                        </div> <!-- ./End form-row -->

                        <div class="col-md-12 float-right">
                            <button class="btn btn-success btn-block mt-5">Gravar&nbsp;&nbsp;<i class="fa fa-check fa-lg"></i></button>
                        </div> <!-- ./End col-md-6 -->
                    </form> <!-- ./End Form -->
                </div> <!-- ./End modal-body mx-3 -->
            </div> <!-- ./End modal-content -->
        </div> <!-- ./End modal-dialog modal-fluid container -->
    </div> <!-- ./End modal animated bounceIn -->
</main> <!-- ./End main -->

<!-- --------------------------------------------------------------- -->
<!-- ----------------- MODAL DE CADASTRO CAMPANHA ------------------ -->
<!-- --------------------------------------------------------------- -->
<main>
    <div class="modal animated fade" id="modalCadastroCampanha" tabindex="-1" role="dialog" aria-labelledby="modalCadCampanha" aria-hidden="true">
        <div class="modal-dialog modal-fluid container" role="document">
            <div class="modal-content">
                <div class="modal-header info-color-dark text-center">
                    <h4 class="modal-title w-100 white-text font-weight-bold">Cadastrar Campanha</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="white-text h3-responsive" aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="selectProdutoCampanha.php" method="post" style="color: #aaa;">
                        <div class="form-row">
                            <div class="col-md-4">
                                <div class="md-form">
                                    <input type="text" placeholder="Nome da Campanha" required id="cadNomeCampanha" name="cam_nome" maxlength="250" class="form-control" value="<?php echo isset($n->cam_nome) ? $n->cam_nome : null ?>">
                                </div> <!-- ./End md-form -->
                            </div> <!-- ./End col-md-4 -->
                            <div class="col-md-4">
                                <div class="md-form">
                                    <input type="text" placeholder="Data de início da promoção" required id="dataInicioCampanha" name="cam_inicio" class="form-control date" value="<?php echo isset($n->cam_inicio) ? $n->cam_inicio : null ?>">
                                </div>
                            </div> <!-- ./End col-md-4 -->
                            <div class="col-md-4">
                                <div class="md-form">
                                    <input type="text" placeholder="Data final da campanha" required id="CadDataFinalCampanha" name="cam_fim" class="form-control date" value="<?php echo isset($n->cam_fim) ? $n->cam_fim : null ?>">
                                </div> <!-- ./End md-form -->
                            </div> <!-- ./End col-md-6 -->
                        </div> <!-- ./End form-row -->

                        <div class="form-row">
                            <div class="col-md-12">
                                <div class="md-form">
                                    <textarea type="text" placeholder="Digite algo sobre a campanha" id="CadObservacaoCampanha" required name="cam_observacao"
                                              class="md-textarea form-control" maxlength="2000" length="2000" rows="5" value="<?php echo isset($n->cam_observacao) ? $n->cam_observacao : null ?>"></textarea>
                                </div> <!-- ./md-form -->
                            </div> <!-- ./col-md-6 -->
                        </div> <!-- ./End form-row -->

                        <input type="hidden" name="method" value="insert"/>

                        <div class="col-md-4 float-right">
                            <button type="submit" id="btnGravaPromo" class="btn btn-success btn-block">Gravar&nbsp;&nbsp;
                                <i class="fa fa-check fa-lg"></i></button>
                        </div> <!-- ./End col-md-6 -->
                    </form> <!-- ./End Form -->
                </div> <!-- ./End modal-body mx-3 -->
            </div> <!-- ./End modal-content -->
        </div> <!-- ./End modal-dialog modal-fluid container -->
    </div> <!-- ./End modal animated bounceIn -->
</main> <!-- ./End main -->


<?php
include PROJECT_ROOT."/html/_partHTML/footer.php"
?>

</body>