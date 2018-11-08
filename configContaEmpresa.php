<?php
$titulo = "Configurações da conta - KataGalo";
require_once "./config.php";
include PROJECT_ROOT."/html/_partHTML/head.php";
include PROJECT_ROOT."/html/_partHTML/headerConfigContaEmpresa.php" ?>

<body class="hidden-sn cyan-skin clearfix animated fadeIn">
<main>
    <div class="content">
        <div class="container">
            <div class="form-row">
                <!-- ./Start foto do perfil -->
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
                            <p class="card-title font-weight-bold h3-responsive text-center">NOME DA EMPRESA</p>
                        </div> <!-- ./End content -->
                    </div> <!-- ./End card card-profile container -->
                    <div class="mb-2">
                        <button class="btn danger-color-dark btn-block btn-lg font-weight-bold" data-toggle="modal" data-target="#modalCadastroProduto">
                            <i class="fas fa-clipboard-list fa-lg"></i>&nbsp;&nbsp;Cadastro de Produto
                        </button>

                        <button class="btn info-color-dark btn-block btn-lg font-weight-bold" data-toggle="modal" data-target="#modalCadastroCampanha">
                            <i class="fas fa-pencil-alt fa-lg"></i>&nbsp;&nbsp;Cadastrar Campanha
                        </button>
                    </div>
                </div> <!-- ./End foto do perfil -->

                <div class="col-md-8 mb-4">
                    <div class="card">
                        <div class="card-header info-color-dark">
                            <p class="my-0 h3-responsive white-text text-center font-weight-bold">Dados do Perfil</p>
                        </div>
                        <div class="card-content">
                            <form class="text-center container needs-validation" novalidate action="#" method="POST" style="color: #aaa;">
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="md-form">
                                            <input type="text" placeholder="Razão social" id="razaoSocialPj" name="loj_razaosocial" maxlength="250" length="250" required
                                                   class="form-control disabled">
                                            <div class="invalid-feedback">Digite a Razão Social</div>
                                        </div> <!-- ./End md-form -->
                                    </div><!-- ./End col-md-6 -->
                                    <div class="col-md-6">
                                        <div class="md-form">
                                            <input type="text" placeholder="Nome fantasia" id="nomeFantasia" name="loj_fantasia" maxlength="250" length="250" required
                                                   class="form-control">
                                            <div class="invalid-feedback">Digite o Nome Fantasia</div>
                                        </div> <!-- ./End md-form -->
                                    </div><!-- ./End col-md-6 -->
                                </div> <!-- ./End form-row -->

                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="md-form">
                                            <input type="email" placeholder="Email Corporativo" required id="emailCorporativo" name="pes_login" maxlength="250" length="250"
                                                   class="form-control">
                                            <div class="invalid-feedback">Digite o email corporativo</div>
                                        </div> <!-- ./End md-form -->
                                    </div><!-- ./End col-md-6 -->
                                    <div class="col-md-6">
                                        <div class="md-form">
                                            <input type="text" placeholder="CNPJ" class="form-control disabled" disabled required id="cnpjEmpresa" name="pes_receita"
                                                   autocomplete="on">
                                            <div class="invalid-feedback">Digite seu CNPJ</div>
                                        </div> <!-- ./End md-form -->
                                    </div><!-- ./End col-md-6 -->
                                </div> <!-- ./End form-row -->

                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="md-form">
                                            <input type="text" placeholder="CEP" id="pesCep" name="end_cep" pattern="[0-9] {5} [\ -]? [0-9] {3}" maxlength="9" required
                                                   class="form-control" autocomplete="on">
                                            <div class="invalid-feedback">Digite o CEP</div>
                                        </div> <!-- ./End md-form -->
                                    </div> <!-- ./End col-md-6 -->
                                    <div class="col-md-6">
                                        <div class="md-form">
                                            <input type="text" placeholder="Localização" id="pesLocalizacao" name="end_localizacao" maxlength="250" required
                                                   class="form-control">
                                            <div class="invalid-feedback">Escolha a localização</div>
                                        </div> <!-- ./End md-form -->
                                    </div> <!-- ./End col-md-6 -->
                                </div> <!-- ./End form-row -->

                                <div class="form-row">
                                    <div class="col-md-4">
                                        <div class="md-form">
                                            <input type="text" placeholder="Endereço" maxlength="250" length="250" class="form-control" id="pesEndereco" required
                                                   name="end_endereco" autocomplete="on">
                                            <div class="invalid-feedback">Digite seu endereço</div>
                                        </div> <!-- ./End md-form -->
                                    </div> <!-- ./End col-md-4 -->
                                    <div class="col-md-4">
                                        <div class="md-form">
                                            <input type="text" placeholder="Número" maxlength="20" class="form-control" id="pesNumero" required name="end_numero"
                                                   autocomplete="on">
                                            <div class="invalid-feedback">Digite seu número</div>
                                        </div> <!-- ./End md-form -->
                                    </div> <!-- ./End col-md-4 -->
                                    <div class="col-md-4">
                                        <div class="md-form">
                                            <input type="text" placeholder="Cidade" maxlength="250" length="250" class="form-control" id="pesCidade" required name="cid_cidade"
                                                   autocomplete="on">
                                            <div class="invalid-feedback">Digite sua cidade</div>
                                        </div> <!-- ./End md-form -->
                                    </div> <!-- ./End col-md-4 -->
                                </div> <!-- ./End form-row -->

                                <div class="form-row">
                                    <div class="col-md-4">
                                        <div class="md-form">
                                            <input type="text" placeholder="Estado" min="2" maxlength="2" length="2" class="form-control" id="pesEstado" required
                                                   name="est_sigla" autocomplete="on">
                                            <div class="invalid-feedback">Digite seu estado</div>
                                        </div> <!-- ./End md-form -->
                                    </div> <!-- ./End col-md-4 -->
                                    <div class="col-md-4">
                                        <div class="md-form">
                                            <input type="text" placeholder="Bairro" class="form-control" id="pesBairro" maxlength="250" length="250" required name="end_bairro"
                                                   autocomplete="on">
                                            <div class="invalid-feedback">Digite seu bairro</div>
                                        </div> <!-- ./End md-form -->
                                    </div> <!-- ./End col-md-4 -->
                                    <div class="col-md-4">
                                        <div class="md-form">
                                            <input type="text" placeholder="Complemento" class="form-control" id="pesComplemento" maxlength="250" length="250" required
                                                   name="end_complemento" autocomplete="on">
                                            <div class="invalid-feedback">Digite seu complemento</div>
                                        </div> <!-- ./End md-form -->
                                    </div> <!-- ./End col-md-4 -->
                                </div> <!-- ./End form-row -->

                                <div class="col-md-8 float-right">
                                    <div class="md-form">
                                        <button type="submit" name="btnConfirmarAtualizacao" class="btn btn-purple btn-block mb-2">Confirmar</button>
                                        <div class="clearfix"></div>
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
        <!-- ----------------- MODAL DE RECUPERAR SENHA -------------------- -->
        <!-- --------------------------------------------------------------- -->
<main>
    <div class="modal animated bounceIn" id="modalCadastroProduto" tabindex="-1" role="dialog" aria-labelledby="modalCadProduto" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header info-color-dark text-center">
                    <h4 class="modal-title w-100 white-text font-weight-bold">Cadastrar Produto</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="white-text h4-responsive" aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <form class="text-center needs-validation" novalidate action="#" method="POST"
                          style="color: #aaa;">
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="md-form">
                                    <input type="text" placeholder="Nome do produto" id="cadNomeProduto" name="pro_nome" maxlength="250" length="250" required
                                           class="form-control">
                                    <div class="invalid-feedback">Digite o nome do produto</div>
                                </div> <!-- ./End md-form -->
                            </div> <!-- ./End col-md-6 -->
                            <div class="col-md-6">
                                <div class="md-form">
                                    <input type="text" required id="CadProdutoPreco" name="pro_preco" placeholder="Preço do produto" class="form-control">
                                    <div class="invalid-feedback">Digite o preço do produto</div>
                                </div> <!-- ./End md-form -->
                            </div> <!-- ./End col-md-6 -->
                        </div> <!-- ./End form-row -->

                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="md-form">
                                    <input type="text" placeholder="Código de barras" required id="CadProdutoBarcode" name="pro_barcode" class="form-control">
                                    <div class="invalid-feedback">Digite o código de barras</div>
                                </div> <!-- ./md-form -->
                            </div> <!-- ./col-md-6 -->
                            <div class="col-md-6">
                                <div class="md-form">
                                    <select class="mdb-select md-form colorful-select dropdown-ins" required id="cadProdutoCategoria" name="proc_descricao"
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

                        <div class="col-md-7 float-right">
                            <button class="btn btn-success btn-block btn-md mt-0 my-5">Gravar&nbsp;&nbsp;<i class="fa fa-check fa-lg"></i></button>
                        </div> <!-- ./End col-md-6 -->
                    </form> <!-- ./End Form -->
                </div> <!-- ./End modal-body mx-3 -->
            </div> <!-- ./End modal-content -->
        </div>
    </div>
</main>

        <!-- --------------------------------------------------------------- -->
        <!-- ----------------- MODAL DE CADASTRO DE CAMPANHA -------------------- -->
        <!-- --------------------------------------------------------------- -->
<main>
    <div class="modal animated bounceIn" id="modalCadastroCampanha" tabindex="-1" role="dialog" aria-labelledby="modalCadProduto" aria-hidden="true">
        <div class="modal-dialog modal-fluid container" role="document">
            <div class="modal-content">
                <div class="modal-header info-color-dark text-center">
                    <h4 class="modal-title w-100 white-text font-weight-bold">Produtos para Promoção</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="white-text h4-responsive" aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-2">
                    <section class="text-center">
                        <div class="row">
                            <div class="col-md-4 mb-2 clearfix d-md-block">
                                <div class="card card-cascade narrower card-ecommerce">
                                    <div class="align-items-center overlay zoom img-produtos container animated bounceIn">
                                        <a data-toggle="modal" data-target="#exampleModalCenter">
                                            <img src="images/logos_produtos/img-test-produto.jpg" class="card-img-top my-3" alt="">
                                        </a>
                                        <div class="badge badge-pill green mr-1 animated bounceIn">Novo</div>
                                        <div class="badge badge-pill red mr-1 animated bounceIn">Categoria: ---</div>
                                    </div>
                                    <div class="card-body card-body-cascade text-center">
                                        <a href="#">
                                            <p class="card-title my-4 animated bounceIn">
                                                <strong>Produto 1</strong>
                                            </p>
                                        </a>
                                        <div class="card-footer px-1">
                                            <span class="float-left"><del>R$ 0,00</del></span>
                                            <span class="text-center">R$ 0,00</span>
                                            <span class="float-right">
                                    <a class="ml-3" data-toggle="tooltip" id="alertaId" onClick="mudaCorAlerta(this.id)" data-placement="top" title="Receber Notificação"
                                       data-original-title="Receber Notificação">
                                        <i class="fas fa-bell"></i></a>
                                    <a class="ml-3" data-toggle="tooltip" id="favoritoId" onClick="mudaCorFav(this.id)" data-placement="top" title="Adicionar aos favoritos"
                                       data-original-title="Adicionar aos favoritos">
                                        <i class="fas fa-heart"></i></a>
                                                <!-- o evento onclick chama a função addFav la do arquivo js/ajax.js e passa como parametro o id do Produto Obs: substituir o idProd por codigo PHP para imprimir o id do produto -->
                                </span> <!-- ./End float-right -->
                                        </div> <!-- ./End card-footer px-1 -->
                                    </div> <!-- ./card-body card-body-cascade text-center -->
                                </div> <!-- ./card card-cascade narrower card-ecommerce -->
                            </div> <!-- ./col-md-4 mb-2 -->
                        </div> <!-- ./class="row" -->
                    </section><!-- ./End Section -->
                </div> <!-- ./End modal-body mx-3 -->
            </div> <!-- ./End modal-content -->
        </div>
    </div>
</main>

<main>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

        <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
        <div class="modal-dialog modal-dialog-centered" role="document">


            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
include PROJECT_ROOT."/html/_partHTML/footer.php"
?>

</body>