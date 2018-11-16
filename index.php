<?php
$titulo = "Página inicial - KataGalo";
require_once "./config.php";
include PROJECT_ROOT."/html/_partHTML/head.php";
include PROJECT_ROOT."/html/_partHTML/header.index.php" ?>


<body class="hidden-sn cyan-skin clearfix animated fadeIn">
<main>
    <section class="text-center">
        <h1 class="h1-responsive font-weight-bold text-center animated bounceInUp">DESTAQUE DO DIA</h1>
        <hr class="container">
        <div id="multi-item-example" class="carousel slide carousel-multi-item container" data-ride="carousel">

            <div class="controls-top container animated bounceInUp">
                <button type="button" class="btn-floating btn-rounded btn btn-cyan" href="#multi-item-example" title="Anterior" data-slide="prev">
                    <i class="fas fa-angle-left fa-2x"></i>
                </button>
                <button type="button" class="btn-floating btn-rounded btn btn-cyan" href="#multi-item-example" title="Próximo" data-slide="next">
                    <i class="fas fa-angle-right fa-2x"></i>
                </button>
            </div> <!-- Controls -->

            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li class="primary-color active" data-target="#multi-item-example" data-slide-to="0"></li>
                <li class="primary-color" data-target="#multi-item-example" data-slide-to="1"></li>
            </ol> <!-- ./End Indicators -->

            <!-- Slides -->
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="col-md-4 mb-2 clearfix d-md-block">
                        <div class="card card-cascade narrower card-ecommerce">
                            <div class="align-items-center overlay zoom img-produtos container">
                                <a href="page-mercado.php">
                                    <img src="images/logo_mercados/img-test-mercado.jpg" id="img-mercado" name="img_fotoComercio" class="card-img-top" alt="">
                                </a>
                            </div> <!-- Card image -->
                            <div class="card-body card-body-cascade text-center">
                                <a href="page-mercado.php" class="card-title my-4 ml-4 animated bounceIn text-uppercase">
                                    <strong id="lojNome" name="loj_nome">Nome do mercado</strong>
                                </a>
                                <span class="float-right">
                                    <a class="ml-3" data-toggle="tooltip" id="favoritoId" onClick="mudaCorFav(this.id)" data-placement="top" title="Adicionar aos favoritos">
                                        <i class="fas fa-heart"></i>
                                    </a>
                                </span>
                            </div> <!-- ./End card-body card-body-cascade text-center -->
                        </div><!-- ./End card card-cascade narrower card-ecommerce -->
                    </div> <!-- ./End col-md-4 mb-2 clearfix d-md-block -->

                    <div class="col-md-4 mb-2 clearfix d-none d-md-block">
                        <div class="card card-cascade narrower card-ecommerce">
                            <div class="align-items-center overlay zoom img-produtos container">
                                <a href="page-mercado.php">
                                    <img src="images/logo_mercados/img-test-mercado.jpg" id="img-mercado" name="img_fotoComercio" class="card-img-top" alt="">
                                </a>
                            </div> <!-- Card image -->
                            <div class="card-body card-body-cascade text-center">
                                <a href="page-mercado.php" class="card-title my-4 ml-4 animated bounceIn text-uppercase">
                                    <strong id="lojNome" name="loj_nome">Nome do mercado</strong>
                                </a>
                                <span class="float-right">
                                    <a class="ml-3" data-toggle="tooltip" id="favoritoId" onClick="mudaCorFav(this.id)" data-placement="top" title="Adicionar aos favoritos">
                                        <i class="fas fa-heart"></i>
                                    </a>
                                </span>
                            </div> <!-- ./End card-body card-body-cascade text-center -->
                        </div><!-- ./End card card-cascade narrower card-ecommerce -->
                    </div> <!-- ./End col-md-4 mb-2 clearfix d-md-block -->

                    <div class="col-md-4 mb-2 clearfix d-none d-md-block">
                        <div class="card card-cascade narrower card-ecommerce">
                            <div class="align-items-center overlay zoom img-produtos container">
                                <a href="page-mercado.php">
                                    <img src="images/logo_mercados/img-test-mercado.jpg" id="img-mercado" name="img_fotoComercio" class="card-img-top" alt="">
                                </a>
                            </div> <!-- Card image -->
                            <div class="card-body card-body-cascade text-center">
                                <a href="page-mercado.php" class="card-title my-4 ml-4 animated bounceIn text-uppercase">
                                    <strong id="lojNome" name="loj_nome">Nome do mercado</strong>
                                </a>
                                <span class="float-right">
                                    <a class="ml-3" data-toggle="tooltip" id="favoritoId" onClick="mudaCorFav(this.id)" data-placement="top" title="Adicionar aos favoritos">
                                        <i class="fas fa-heart"></i>
                                    </a>
                                </span>
                            </div> <!-- ./End card-body card-body-cascade text-center -->
                        </div><!-- ./End card card-cascade narrower card-ecommerce -->
                    </div> <!-- ./End col-md-4 mb-2 clearfix d-md-block -->
                </div><!-- ./carousel-item active and First slide -->

                <!-- Second slide -->
                <div class="carousel-item">
                    <div class="col-md-4 mb-2 clearfix d-md-block">
                        <div class="card card-cascade narrower card-ecommerce">
                            <div class="align-items-center overlay zoom img-produtos container">
                                <a href="page-mercado.php">
                                    <img src="images/logo_mercados/img-test-mercado.jpg" id="img-mercado" name="img_fotoComercio" class="card-img-top" alt="">
                                </a>
                            </div> <!-- Card image -->
                            <div class="card-body card-body-cascade text-center">
                                <a href="page-mercado.php" class="card-title my-4 ml-4 animated bounceIn text-uppercase">
                                    <strong id="lojNome" name="loj_nome">Nome do mercado</strong>
                                </a>
                                <span class="float-right">
                                    <a class="ml-3" data-toggle="tooltip" id="favoritoId" onClick="mudaCorFav(this.id)" data-placement="top" title="Adicionar aos favoritos">
                                        <i class="fas fa-heart"></i>
                                    </a>
                                </span>
                            </div> <!-- ./End card-body card-body-cascade text-center -->
                        </div><!-- ./End card card-cascade narrower card-ecommerce -->
                    </div> <!-- ./End col-md-4 mb-2 clearfix d-md-block -->

                    <div class="col-md-4 mb-2 clearfix d-none d-md-block">
                        <div class="card card-cascade narrower card-ecommerce">
                            <div class="align-items-center overlay zoom img-produtos container">
                                <a href="page-mercado.php">
                                    <img src="images/logo_mercados/img-test-mercado.jpg" id="img-mercado" name="img_fotoComercio" class="card-img-top" alt="">
                                </a>
                            </div> <!-- Card image -->
                            <div class="card-body card-body-cascade text-center">
                                <a href="page-mercado.php" class="card-title my-4 ml-4 animated bounceIn text-uppercase">
                                    <strong id="lojNome" name="loj_nome">Nome do mercado</strong>
                                </a>
                                <span class="float-right">
                                    <a class="ml-3" data-toggle="tooltip" id="favoritoId" onClick="mudaCorFav(this.id)" data-placement="top" title="Adicionar aos favoritos">
                                        <i class="fas fa-heart"></i>
                                    </a>
                                </span>
                            </div> <!-- ./End card-body card-body-cascade text-center -->
                        </div><!-- ./End card card-cascade narrower card-ecommerce -->
                    </div> <!-- ./End col-md-4 mb-2 clearfix d-md-block -->

                    <div class="col-md-4 mb-2 clearfix d-none d-md-block">
                        <div class="card card-cascade narrower card-ecommerce">
                            <div class="align-items-center overlay zoom img-produtos container">
                                <a href="page-mercado.php">
                                    <img src="images/logo_mercados/img-test-mercado.jpg" id="img-mercado" name="img_fotoComercio" class="card-img-top" alt="">
                                </a>
                            </div> <!-- Card image -->
                            <div class="card-body card-body-cascade text-center">
                                <a href="page-mercado.php" class="card-title my-4 ml-4 animated bounceIn text-uppercase">
                                    <strong id="lojNome" name="loj_nome">Nome do mercado</strong>
                                </a>
                                <span class="float-right">
                                    <a class="ml-3" data-toggle="tooltip" id="favoritoId" onClick="mudaCorFav(this.id)" data-placement="top" title="Adicionar aos favoritos">
                                        <i class="fas fa-heart"></i>
                                    </a>
                                </span>
                            </div> <!-- ./End card-body card-body-cascade text-center -->
                        </div><!-- ./End card card-cascade narrower card-ecommerce -->
                    </div> <!-- ./End col-md-4 mb-2 clearfix d-md-block -->
                </div><!-- Second slide -->
            </div> <!-- Slides -->
        </div> <!-- Carousel Wrapper -->
    </section> <!-- Section: Products v.5 -->
</main>

<main>
    <section class="text-center container">
        <h1 class="h1-responsive font-weight-bold text-center animated bounceInUp">Mercados</h1>
        <hr>
        <div class="row">
            <div class="col-md-4 mb-2 clearfix d-block">
                <div class="card card-cascade narrower card-ecommerce">
                    <div class="align-items-center overlay zoom img-produtos container">
                        <a href="page-mercado.php">
                            <img src="images/logo_mercados/mercado_a_luzitana.jpg" id="imgMercado" name="img_fotoComercio" class="card-img-top" alt="">
                        </a>
                    </div> <!-- Card image -->
                    <div class="card-body card-body-cascade text-center">
                        <a href="page-mercado.php" class="card-title my-4 ml-4 animated bounceIn text-uppercase">
                            <strong id="lojNome" name="loj_nome">Nome do mercado</strong>
                        </a>
                        <span class="float-right">
                            <a class="ml-3" data-toggle="tooltip" id="favoritoId" onClick="mudaCorFav(this.id)" data-placement="top" title="Adicionar aos favoritos">
                                <i class="fas fa-heart"></i>
                            </a>
                        </span>
                    </div> <!-- ./End card-body card-body-cascade text-center -->
                </div><!-- ./End card card-cascade narrower card-ecommerce -->
            </div> <!-- ./End col-md-4 mb-2 clearfix d-md-block -->
        </div> <!-- ./End class="row" -->
    </section><!-- ./End Section -->
</main><!--/Main layout-->

<main>

</main>

<?php
include PROJECT_ROOT."/html/_partHTML/footer.php" ?>

</body>