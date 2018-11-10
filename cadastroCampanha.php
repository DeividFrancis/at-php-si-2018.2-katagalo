<?php
$titulo = "Cadastrar Promoção - KataGalo";
require_once "./config.php";
include PROJECT_ROOT."/html/_partHTML/head.php";
include PROJECT_ROOT."/html/_partHTML/headerConfigContaEmpresa.php" ?>

<body class="hidden-sn cyan-skin clearfix animated fadeIn">
<main>
    <section class="text-center container">
        <div class="row">
            <div class="col-md-4 mb-2 clearfix d-md-block">
                <div class="card card-cascade narrower card-ecommerce">
                    <div class="align-items-center overlay zoom img-produtos container animated bounceIn">
                        <a data-toggle="modal" data-target="#modalCadastroCampanha">
                            <img src="images/logos_produtos/img-test-produto.jpg" class="card-img-top my-3" alt="">
                        </a>
                        <div class="badge badge-pill green mr-1 animated bounceIn">Novo</div>
                        <div class="badge badge-pill red mr-1 animated bounceIn">Categoria: ---</div>
                    </div>
                    <div class="card-body card-body-cascade text-center">
                        <a data-toggle="modal" data-target="#modalCadastroCampanha">
                            <p class="card-title my-4 animated bounceIn"><strong>Produto 1</strong></p>
                        </a>
                        <div class="card-footer px-1">
                            <span class="float-left"><del>R$ 0,00</del></span>
                            <span class="">R$ 0,00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<main>
    <div class="modal animated bounceIn" id="modalCadastroCampanha" tabindex="-1" role="dialog" aria-labelledby="modalCadastrarCampanha" aria-hidden="true">
        <div class="modal-dialog modal-fluid container" role="document">
            <div class="modal-content">
                <div class="modal-header info-color-dark text-center">
                    <h4 class="modal-title w-100 white-text font-weight-bold">Cadastro de Promoção</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="white-text h4-responsive" aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <!-- Form -->
                    <form class="text-center needs-validation" novalidate action="#" method="POST" style="color: #aaa;">
                        <div class="my-3 p-j grey-text">
                            <p>Para poder iniciar uma campanha/promoção basta preencher todos os campos abaixo.</p>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="md-form">
                                    <input type="text" placeholder="Nome do produto" id="cadNomeProduto" name="pro_nome" maxlength="250" length="250" required
                                           class="form-control disabled">
                                </div> <!-- ./End md-form -->
                            </div> <!-- ./End col-md-6 -->
                            <div class="col-md-6">
                                <div class="md-form">
                                    <input type="text" required id="CadProdutoPreco" name="pro_preco" placeholder="Preço do produto" class="form-control">
                                </div> <!-- ./End md-form -->
                            </div> <!-- ./End col-md-6 -->
                        </div> <!-- ./End form-row -->

                        <div class="form-row">
                            <div class="col-md-4">
                                <div class="md-form">
                                    <input type="text" required id="campanhaProdutoPreco" name="camp_precopromocao" placeholder="Preço promoção" class="form-control">
                                </div> <!-- ./End md-form -->
                            </div> <!-- ./End col-md-6 -->
                            <div class="col-md-4">
                                <div class="md-form">
                                    <input type="text" required id="campanhaDataInicio" name="cam_inicio" placeholder="Data de Início da promoção" class="form-control"/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="md-form">
                                    <input type="text" required id="campanhaDataFim" name="cam_fim" placeholder="Data de finalização da promoção" class="form-control"/>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="md-form">
                                    <input type="text" placeholder="Código de barras" required id="CadProdutoBarcode" name="pro_barcode" class="form-control">
                                </div> <!-- ./md-form -->
                            </div> <!-- ./col-md-6 -->
                            <div class="col-md-6">
                                <div class="md-form">
                                    <select class="mdb-select md-form colorful-select dropdown-ins" id="cadProdutoCategoria" name="proc_descricao"
                                            searchable="Pesquise aqui...">
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
                                    <textarea type="text" placeholder="Descrição do produto" id="CaddescricaoProduto" required name="pro_descricao"
                                              class="md-textarea form-control" maxlength="250" length="250" rows="8"></textarea>
                                </div> <!-- ./md-form -->
                            </div> <!-- ./col-md-6 -->
                            <div class="col-md-4">
                                <div class="md-form">
                                    <div class="mb-2 d-md-block container">
                                        <div class="float-right">
                                            <input type="file" required id="produto-add-input" onchange="readURL(this, 'produto-add');" name="pro_imagem"
                                                   style="display:none;"/>
                                            <img class="d-md-block container d-block img-fluid img-produtos" src="images/logo_mercados/img-test-mercado.jpg"
                                                 id="image-produto-add" onclick='addImageProduto()'/>
                                        </div> <!-- ./End custom-file -->
                                    </div> <!-- ./End input-group mb-3 md-form -->
                                </div> <!-- ./End md-form -->
                            </div> <!-- ./End col-md-6 -->
                        </div> <!-- ./End form-row -->

                        <div class="text-center container col-md-7 small mt-2">
                            <button class="btn danger-color-dark btn-block btn-xl" name="btnRecuperarSenha" type="submit">Enviar para email</button>
                        </div>
                    </form><!-- ./End Form -->
                </div>
            </div>
        </div>
    </div>
</main>

<?php
include PROJECT_ROOT."/html/_partHTML/footer.php"
?>

</body>