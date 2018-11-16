<?php
$titulo = "Produtos Favoritos - KataGalo";
require_once "./config.php";
include PROJECT_ROOT."/html/_partHTML/head.php";
include PROJECT_ROOT."/html/_partHTML/headerGlobal.php" ?>

<body class="hidden-sn cyan-skin clearfix animated fadeIn">
<main>
    <!-- ./Start Section produtos -->
    <section class="text-center my-0 container">
        <div class="row">
            <div class="col-md-4 mb-2 clearfix d-block">
                <div class="card card-cascade narrower card-ecommerce">
                    <div class="align-items-center overlay zoom img-produtos container animated bounceIn">
                        <a href="produto-page.php">
                            <img src="images/logos_produtos/img-test-produto.jpg" id="imgProduto" name="pro_imagem" class="card-img-top my-3" alt="Imagem do produto"/>
                        </a>
                        <div class="badge badge-pill green mr-1 animated bounceIn">Novo</div>
                        <div class="badge badge-pill red mr-1 animated bounceIn" name="pro_categoria">Categoria:</div>
                    </div>
                    <div class="card-body card-body-cascade text-center">
                        <a href="produto-page.php">
                            <p class="card-title my-4 animated bounceIn text-uppercase"><strong name="pro_nome">Nome do produto</strong></p>
                        </a>
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
        </div> <!-- ./class="row" -->
    </section><!-- ./End Section -->
</main>

<main>

</main>

<?php
include PROJECT_ROOT."/html/_partHTML/footer.php" ?>

</body>

</html>