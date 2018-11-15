<?php
$titulo = "Selecionar Produto - KataGalo";
require_once "./config.php";
include PROJECT_ROOT."/html/_partHTML/head.php";
//include PROJECT_ROOT."/html/_partHTML/headerConfigContaEmpresa.php" ?>

<body class="hidden-sn cyan-skin clearfix animated fadeIn">
<main>
    <form method="post" action="#">
        <p class="h1-responsive container container text-center font-weight-bold text-uppercase">Selecione os produtos</p>
        <section class="text-center container">
            <div class="row">
                <div class="col-md-4 mb-2 clearfix d-md-block">
                    <div class="card card-cascade narrower card-ecommerce">
                        <div class="align-items-center overlay zoom img-produtos container animated bounceIn">
                            <img src="images/logos_produtos/img-test-produto.jpg" id="pro_imagem" name="img-produto" class="card-img-top" alt="Imagem do produto"/>
                            <div class="badge badge-pill green mr-1 mt-3 animated bounceIn">Novo</div>
                            <div class="badge badge-pill red mr-1 animated bounceIn" id="pro_categoria">Categoria:</div>
                        </div>
                        <div class="card-body card-body-cascade text-center">
                            <p class="card-title animated bounceIn form-check">
                                <input type="checkbox" class="form-check-input" id="selectProduto" name="selectCheckboxProduto"/>
                                <label class="form-check-label font-weight-bold" id="pro_nome" for="selectProduto">Nome do produto</label>
                            </p>
                            <div class="card-footer px-1">
                                <div class="col-md-4 mb-2 float-left">
                                    <del>
                                        <span class="text-center h4-responsive font-weight-bold red-text" name="precoProduto" id="pro_preco">0,00</span>
                                    </del>
                                </div>
                                <div class="col-md-8 float-right">
                                    <input type="text" class="form-control text-center font-weight-bold" id="camp_precopromocao" name="campanhaProdutoPreco" value="0,00">
                                </div>
                            </div> <!-- ./End card-footer px-1 -->
                            <input type="hidden" name="method" value="insert"/>
                        </div> <!-- ./End card-body card-body-cascade text-center -->
                    </div> <!-- ./End card card-cascade narrower card-ecommerce -->
                </div> <!-- ./End ol-md-4 mb-2 clearfix d-md-block -->
            </div> <!-- ./End row -->
            <div class="container col-md-4 mt-2 float-right">
                <button class="btn success-color-dark btn-block btn-lg" id="btnGravarPromo" type="submit">Gravar promoção</button>
            </div>
        </section> <!-- ./End section -->
    </form>
</main> <!-- ./End main -->

<main>

</main> <!-- ./End main -->

<?php
include PROJECT_ROOT."/html/_partHTML/footer.php"
?>

</body>
