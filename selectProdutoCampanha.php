<?php
$titulo = "Selecionar Produto - KataGalo";
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
                        <a data-toggle="modal" data-target="#modalMudaPrecoProd">
                            <img src="images/logos_produtos/img-test-produto.jpg" name="pro_imagem" class="card-img-top" alt="Imagem do produto"
                                 title="Clique aqui para mudar o preço do produto"/>
                        </a>
                        <div class="badge badge-pill green mr-1 mt-3 animated bounceIn">Novo</div>
                        <div class="badge badge-pill red mr-1 animated bounceIn" name="pro_categoria">Categoria:</div>
                    </div>
                    <div class="card-body card-body-cascade text-center">
                        <p class="card-title my-2 animated bounceIn form-check">
                            <input type="checkbox" class="form-check-input" id="selectProduto" name="selectCheckboxProduto"/>
                            <label class="form-check-label font-weight-bold" name="pro_nome" for="selectProduto">Nome do produto</label>
                        </p>
                        <div class="card-footer px-1">
                            <span class="float-left" id="pro_preco"><del>R$ 0,00</del></span>
                            <span class="text-center" id="camp_precopromocao">R$ 0,00</span>
                            <span class="float-right">
                                <a class="ml-3" data-toggle="tooltip" id="alertaId" onClick="mudaCorAlerta(this.id)" data-placement="top" title="Receber Notificação"
                                   data-original-title="Receber Notificação"><i class="fas fa-bell"></i></a>
                                <a class="ml-3" data-toggle="tooltip" id="favoritoId" onClick="mudaCorFav(this.id)" data-placement="top" title="Adicionar aos favoritos"
                                   data-original-title="Adicionar aos favoritos"><i class="fas fa-heart"></i></a>
                            </span> <!-- ./End float-right -->
                        </div> <!-- ./End card-footer px-1 -->
                    </div> <!-- ./End card-body card-body-cascade text-center -->
                </div> <!-- ./End card card-cascade narrower card-ecommerce -->
            </div> <!-- ./End ol-md-4 mb-2 clearfix d-md-block -->
        </div> <!-- ./End row -->
    </section> <!-- ./End section -->
</main> <!-- ./End main -->

<main>
    <div class="modal fade" id="modalMudaPrecoProd" tabindex="-1" role="dialog" aria-labelledby="modalMudaPrecoProduto" aria-hidden="true">
        <div class="modal-dialog cascading-modal modal-avatar" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <img src="images/logos_produtos/img-test-produto.jpg" name="pro_imagem" class="rounded-circle img-responsive" alt="Imagem do produto" style="width: 200px"/>
                </div>
                <div class="modal-body text-center mb-1">
                    <h5 class="mt-1 mb-2" name="pro_nome">Nome do produto</h5>
                    <div class="md-form ml-0 mr-0">
                        <input placeholder="Preço para promoção" type="text" id="campanhaProdutoPreco" name="camp_precocampanha" class="form-control">
                    </div>
                    <div class="text-center mt-4">
                        <button class="btn success-color font-weight-bold btn-block btn-lg" type="submit" id="btnSalvaNovoPrecoProduto" name="btnGravaPrecoNovo">Salvar&nbsp;&nbsp
                            <i class="fas fa-check fa-lg"></i></button>
                    </div> <!-- ./End text-center mt-4 -->
                </div> <!-- ./End modal-body text-center mb-1 -->
            </div> <!-- ./End modal-content -->
        </div> <!-- ./End modal-dialog modal-dialog-centered cascading-modal modal-avatar -->
    </div> <!-- ./End modal fade -->
</main> <!-- ./End main -->

<?php
include PROJECT_ROOT."/html/_partHTML/footer.php"
?>

</body>
