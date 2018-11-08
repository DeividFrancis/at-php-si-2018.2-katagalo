<?php
$titulo = "Produtos favoritos - KataGalo";
require_once "./config.php";
include PROJECT_ROOT."/html/_partHTML/head.php";
include PROJECT_ROOT."/html/_partHTML/headerConfigContaUsuario.php" ?>

<body class="hidden-sn cyan-skin clearfix animated fadeIn">
<main>
    <!-- ./Start Section produtos -->
    <section class="text-center my-0 container">
        <div class="row">
            <div class="col-md-4 mb-2 clearfix d-md-block">
                <div class="card card-cascade narrower card-ecommerce">
                    <div class="align-items-center overlay zoom img-produtos animated bounceIn container">
                        <a href="produto-page.php">
                            <img src="images/logos_produtos/img-test-produto.jpg" class="card-img-top" alt="">
                        </a>
                    </div>
                    <div class="container h5-responsive">
                        <span class="badge badge-pill green mr-1 my-3 animated bounceIn">Novo</span>
                        <span class="badge badge-pill red mr-1 my-3 animated bounceIn">Categoria: --</span>
                    </div>
                    <div class="card-body card-body-cascade text-center">
                        <a href="produto-pag.php">
                            <p class="card-title animated bounceIn">
                                <strong>Produto 1</strong>
                            </p>
                        </a>
                        <div class="card-footer px-1">
                            <span class="float-left"><del>R$ 0,00</del></span>
                            <span class="text-center mr-1">R$ 0,00</span>
                            <span class="float-right">
                                <a class="ml-3" data-toggle="tooltip" id="alertaId" onClick="mudaCorAlerta(this.id)" data-placement="top" title="Receber Notificação"
                                   data-original-title="Receber Notificação">
									<i class="fas fa-bell"></i></a>
								<a class="ml-3" data-toggle="tooltip" id="favoritoId" onClick="mudaCorFav(this.id)" data-placement="top" title="Adicionar aos favoritos"
                                   data-original-title="Adicionar aos favoritos">
									<i class="fas fa-heart"></i>
                                </a>
                        </div> <!-- ./End card-footer px-1 -->
                    </div> <!-- ./card-body card-body-cascade text-center -->
                </div> <!-- ./card card-cascade narrower card-ecommerce -->
            </div> <!-- ./col-md-4 mb-2 -->
        </div> <!-- ./class="row" -->
    </section><!-- ./End Section -->
</main>

<main>

</main>

<?php
include PROJECT_ROOT."/html/_partHTML/footer.php" ?>

</body>

</html>