<?php
$titulo = "Página inicial - KataGalo";
require_once "./config.php";
include PROJECT_ROOT."/html/_partHTML/head.php";
include PROJECT_ROOT."/html/_partHTML/header.index.php" ?>


<body class="hidden-sn cyan-skin clearfix animated fadeIn">
<main>
    <section class="text-center my-0">
        <h2 class="h2-responsive font-weight-bold text-center my-5 animated bounceInUp">DESTAQUE DO DIA</h2>
        <div id="multi-item-example" class="carousel slide carousel-multi-item container" data-ride="carousel">
            <div class="controls-top container animated bounceInUp">
                <button type="button" class="btn-floating btn-rounded btn btn-cyan" href="#multi-item-example" data-toggle="tooltip" title="Anterior" data-slide="prev">
                    <i class="fas fa-angle-left fa-2x"></i>
                </button>
                <button type="button" class="btn-floating btn-rounded btn btn-cyan" href="#multi-item-example" data-toggle="tooltip" title="Próximo" data-slide="next">
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
                                    <img src="images/logo_mercados/img-test-mercado.jpg" class="card-img-top" alt="">
                                </a>
                            </div> <!-- Card image -->
                            <div class="card-body card-body-cascade text-center">
                                <a href="page-mercado.php" class="card-title my-4 ml-4 animated bounceIn"><strong>Mercado 1</strong></a>
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
                                    <img src="images/logo_mercados/img-test-mercado.jpg" class="card-img-top" alt="">
                                </a>
                            </div> <!-- Card image -->
                            <div class="card-body card-body-cascade text-center">
                                <a href="page-mercado.php" class="card-title my-4 ml-4 animated bounceIn"><strong>Mercado 2</strong></a>
                                <span class="float-right">
                                    <a class="ml-3" data-toggle="tooltip" id="favoritoId" onClick="mudaCorFav(this.id)" data-placement="top" title="Adicionar aos favoritos"><i
                                                class="fas fa-heart"></i></a>
                                </span>
                            </div> <!-- ./End card-body card-body-cascade text-center -->
                        </div><!-- ./End card card-cascade narrower card-ecommerce -->
                    </div> <!-- ./End col-md-4 mb-2 clearfix d-md-block -->

                    <div class="col-md-4 mb-2 clearfix d-none d-md-block">
                        <div class="card card-cascade narrower card-ecommerce">
                            <div class="align-items-center overlay zoom img-produtos container">
                                <a href="page-mercado.php">
                                    <img src="images/logo_mercados/img-test-mercado.jpg" class="card-img-top" alt="">
                                </a>
                            </div> <!-- Card image -->
                            <div class="card-body card-body-cascade text-center">
                                <a href="page-mercado.php" class="card-title my-4 ml-4 animated bounceIn"><strong>Mercado 3</strong></a>
                                <span class="float-right">
                                    <a class="ml-3" data-toggle="tooltip" id="favoritoId" onClick="mudaCorFav(this.id)" data-placement="top" title="Adicionar aos favoritos"><i
                                                class="fas fa-heart"></i></a>
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
                                    <img src="images/logo_mercados/img-test-mercado.jpg" class="card-img-top" alt="">
                                </a>
                            </div> <!-- Card image -->
                            <div class="card-body card-body-cascade text-center">
                                <a href="page-mercado.php" class="card-title my-4 ml-4 animated bounceIn"><strong>Mercado 4</strong></a>
                                <span class="float-right">
                                    <a class="ml-3" data-toggle="tooltip" id="favoritoId" onClick="mudaCorFav(this.id)" data-placement="top" title="Adicionar aos favoritos"><i
                                                class="fas fa-heart"></i></a>
                                </span>
                            </div> <!-- ./End card-body card-body-cascade text-center -->
                        </div><!-- ./End card card-cascade narrower card-ecommerce -->
                    </div> <!-- ./End col-md-4 mb-2 clearfix d-md-block -->

                    <div class="col-md-4 mb-2 clearfix d-none d-md-block">
                        <div class="card card-cascade narrower card-ecommerce">
                            <div class="align-items-center overlay zoom img-produtos container">
                                <a href="page-mercado.php">
                                    <img src="images/logo_mercados/img-test-mercado.jpg" class="card-img-top" alt="">
                                </a>
                            </div> <!-- Card image -->
                            <div class="card-body card-body-cascade text-center">
                                <a href="page-mercado.php" class="card-title my-4 ml-4 animated bounceIn"><strong>Mercado 5</strong></a>
                                <span class="float-right">
                                    <a class="ml-3" data-toggle="tooltip" id="favoritoId" onClick="mudaCorFav(this.id)" data-placement="top" title="Adicionar aos favoritos"><i
                                                class="fas fa-heart"></i></a>
                                </span>
                            </div> <!-- ./End card-body card-body-cascade text-center -->
                        </div><!-- ./End card card-cascade narrower card-ecommerce -->
                    </div> <!-- ./End col-md-4 mb-2 clearfix d-md-block -->

                    <div class="col-md-4 mb-2 clearfix d-none d-md-block">
                        <div class="card card-cascade narrower card-ecommerce">
                            <div class="align-items-center overlay zoom img-produtos container">
                                <a href="page-mercado.php">
                                    <img src="images/logo_mercados/img-test-mercado.jpg" class="card-img-top" alt="">
                                </a>
                            </div> <!-- Card image -->
                            <div class="card-body card-body-cascade text-center">
                                <a href="page-mercado.php" class="card-title my-4 ml-4 animated bounceIn"><strong>Mercado 6</strong></a>
                                <span class="float-right">
                                    <a class="ml-3" data-toggle="tooltip" id="favoritoId" onClick="mudaCorFav(this.id)" data-placement="top" title="Adicionar aos favoritos">
                                        <i class="fas fa-heart"></i></a>
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
    <section class="text-center my-2 container">
        <h2 class="h2-responsive font-weight-bold text-center my-2 animated bounceInUp">Mercados</h2>
        <div class="row">
            <div class="col-md-4 mb-2 clearfix d-md-block">
                <div class="card card-cascade narrower card-ecommerce">
                    <div class="align-items-center overlay zoom img-produtos container">
                        <a href="page-mercado.php">
                            <img src="images/logo_mercados/mercado_a_luzitana.jpg" class="card-img-top" alt="">
                        </a>
                    </div> <!-- Card image -->
                    <div class="card-body card-body-cascade text-center">
                        <a href="page-mercado.php" class="card-title my-4 ml-4 animated bounceIn"><strong>Mercado 1</strong></a>
                        <span class="float-right">
                            <a class="ml-3" data-toggle="tooltip" id="favoritoId" onClick="mudaCorFav(this.id)" data-placement="top" title="Adicionar aos favoritos">
                                <i class="fas fa-heart"></i></a>
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

</html>