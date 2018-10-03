<?php 
$titulo = "Página do Mercado - KataGalo";
require_once "../config.php";
require PROJECT_ROOT."/html/_partHTML/head.php";
require PROJECT_ROOT."/html/_partHTML/headerGlobal.php"?>

<body class="hidden-sn cyan-skin clearfix animated fadeIn">
    <main>
        <!-- Section: Products v.5 -->
        <section class="text-center my-0">

            <!-- Section heading -->
            <h2 class="h2-responsive font-weight-bold text-center my-5">Produtos em Destaques</h2>

            <!-- Carousel Wrapper -->
            <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

                <!-- Controls -->
                <div class="controls-top">
                    <button type="button" class="btn-floating btn btn-cyan" href="#multi-item-example" data-slide="prev">
                        <i class="fas fa-angle-left fa-2x"></i>
                    </button>
                    <button type="button" class="btn-floating btn btn-cyan" href="#multi-item-example" data-slide="next">
                        <i class="fas fa-angle-right fa-2x"></i>
                    </button>
                </div> <!-- Controls -->

                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li class="primary-color active" data-target="#multi-item-example" data-slide-to="0"></li>
                    <li class="primary-color" data-target="#multi-item-example" data-slide-to="1"></li>
                </ol> <!-- Indicators -->

                <!-- Slides -->
                <div class="carousel-inner" role="listbox">

                    <!-- First slide -->
                    <div class="carousel-item active">
                        <div class="col-md-4 mb-2 clearfix d-md-block">
                            <div class="card card-cascade narrower card-ecommerce">
                                <div class="align-items-center overlay img-produtos container animated bounceIn">
                                    <a href="produto-page.php">
                                        <img src="images/logos_produtos/img-test-produto.jpg" class="card-img-top my-3"
                                            alt="">
                                    </a>
                                    <div class="badge badge-pill green mr-1 animated bounceIn">Novo</div>
                                    <div class="badge badge-pill red mr-1 animated bounceIn">Categoria: ---</div>
                                </div> <!-- Card image -->
                                <div class="card-body card-body-cascade text-center">
                                    <a href="produto-page.php">
                                        <p class="card-title my-4 animated bounceIn">
                                            <strong>Produto 1</strong>
                                        </p>
                                    </a>
                                    <!-- Card footer -->
                                    <div class="card-footer px-1">
                                        <span class="float-left"><del>R$ 0,00</del></span>
                                        <span class="text-center">R$ 0,00</span>
                                        <span class="float-right">
                                            <a class="ml-3" data-toggle="tooltip" id="alertaId" onClick="mudaCorAlerta(this.id)"
                                                data-placement="top" title="Receber Notificação" data-original-title="Receber Notificação">
                                                <i class="fas fa-bell"></i></a>
                                            <a class="ml-3" data-toggle="tooltip" id="favoritoId" onClick="mudaCorFav(this.id)"
                                                data-placement="top" title="Adicionar aos favoritos"
                                                data-original-title="Adicionar aos favoritos">
                                                <i class="fas fa-heart"></i></a>
                                            <!-- o evento onclick chama a função addFav la do arquivo js/ajax.js e passa como parametro o id do Produto Obs: substituir o idProd por codigo PHP para imprimir o id do produto -->
                                        </span> <!-- ./End float-right -->
                                    </div> <!-- ./End card-footer px-1 -->
                                </div> <!-- ./End card-body card-body-cascade text-center -->
                            </div><!-- ./End card card-cascade narrower card-ecommerce -->
                        </div> <!-- ./End col-md-4 mb-2 clearfix d-md-block -->

                        <div class="col-md-4 mb-2 clearfix d-none d-md-block">
                            <div class="card card-cascade narrower card-ecommerce">
                                <div class="align-items-center overlay img-produtos container animated bounceIn">
                                    <a href="produto-page.php">
                                        <img src="images/logos_produtos/img-test-produto.jpg" class="card-img-top my-3"
                                            alt="">
                                    </a>
                                    <div class="badge badge-pill green mr-1 animated bounceIn">Novo</div>
                                    <div class="badge badge-pill red mr-1 animated bounceIn">Categoria: ---</div>
                                </div> <!-- Card image -->

                                <div class="card-body card-body-cascade text-center">
                                    <a href="produto-page.php">
                                        <p class="card-title my-4 animated bounceIn"><strong>Produto 2</strong></p>
                                    </a>

                                    <!-- Card footer -->
                                    <div class="card-footer px-1">
                                        <span class="float-left"><del>R$ 0,00</del></span>
                                        <span class="text-center">R$ 0,00</span>
                                        <span class="float-right">
                                            <a class="ml-3" data-toggle="tooltip" id="alertaId" onClick="mudaCorAlerta(this.id)"
                                                data-placement="top" title="Receber Notificação" data-original-title="Receber Notificação">
                                                <i class="fas fa-bell"></i></a>
                                            <a class="ml-3" data-toggle="tooltip" id="favoritoId" onClick="mudaCorFav(this.id)"
                                                data-placement="top" title="Adicionar aos favoritos"
                                                data-original-title="Adicionar aos favoritos">
                                                <i class="fas fa-heart"></i></a>
                                            <!-- o evento onclick chama a função addFav la do arquivo js/ajax.js e passa como parametro o id do Produto Obs: substituir o idProd por codigo PHP para imprimir o id do produto -->
                                        </span> <!-- ./End float-right -->
                                    </div> <!-- ./End card-footer px-1 -->
                                </div> <!-- ./End card-body card-body-cascade text-center -->
                            </div><!-- ./End card card-cascade narrower card-ecommerce -->
                        </div> <!-- ./End col-md-4 mb-2 clearfix d-md-block -->

                        <div class="col-md-4 mb-2 clearfix d-none d-md-block">
                            <div class="card card-cascade narrower card-ecommerce">
                                <div class="align-items-center overlay img-produtos container animated bounceIn">
                                    <a href="produto-page.php">
                                        <img src="images/logos_produtos/img-test-produto.jpg" class="card-img-top my-3"
                                            alt="">
                                    </a>
                                    <div class="badge badge-pill green mr-1 animated bounceIn">Novo</div>
                                    <div class="badge badge-pill red mr-1 animated bounceIn">Categoria: ---</div>
                                </div> <!-- Card image -->
                                <div class="card-body card-body-cascade text-center">
                                    <a href="produto-page.php">
                                        <p class="card-title my-4 animated bounceIn"><strong>Produto 3</strong></p>
                                    </a>
                                    <!-- Card footer -->
                                    <div class="card-footer px-1">
                                        <span class="float-left"><del>R$ 0,00</del></span>
                                        <span class="text-center">R$ 0,00</span>
                                        <span class="float-right">
                                            <a class="ml-3" data-toggle="tooltip" id="alertaId" onClick="mudaCorAlerta(this.id)"
                                                data-placement="top" title="Receber Notificação" data-original-title="Receber Notificação">
                                                <i class="fas fa-bell"></i></a>
                                            <a class="ml-3" data-toggle="tooltip" id="favoritoId" onClick="mudaCorFav(this.id)"
                                                data-placement="top" title="Adicionar aos favoritos"
                                                data-original-title="Adicionar aos favoritos">
                                                <i class="fas fa-heart"></i></a>
                                            <!-- o evento onclick chama a função addFav la do arquivo js/ajax.js e passa como parametro o id do Produto Obs: substituir o idProd por codigo PHP para imprimir o id do produto -->
                                        </span> <!-- ./End float-right -->
                                    </div> <!-- ./End card-footer px-1 -->
                                </div> <!-- ./End card-body card-body-cascade text-center -->
                            </div><!-- ./End card card-cascade narrower card-ecommerce -->
                        </div> <!-- ./End col-md-4 mb-2 clearfix d-md-block -->
                    </div><!-- ./End First slide -->

                    <!-- Second slide -->
                    <div class="carousel-item">
                        <div class="col-md-4 mb-2 clearfix d-md-block">
                            <div class="card card-cascade narrower card-ecommerce">
                                <div class="align-items-center overlay img-produtos container animated bounceIn">
                                    <a href="produto-page.php">
                                        <img src="images/logos_produtos/img-test-produto.jpg" class="card-img-top my-3"
                                            alt="">
                                    </a>
                                    <div class="badge badge-pill green mr-1 animated bounceIn">Novo</div>
                                    <div class="badge badge-pill red mr-1 animated bounceIn">Categoria: ---</div>
                                </div> <!-- Card image -->
                                <div class="card-body card-body-cascade text-center">
                                    <a href="produto-page.php">
                                        <p class="card-title my-4 animated bounceIn"><strong>Produto 4</strong></p>
                                    </a>
                                    <!-- Card footer -->
                                    <div class="card-footer px-1">
                                        <span class="float-left"><del>R$ 0,00</del></span>
                                        <span class="text-center">R$ 0,00</span>
                                        <span class="float-right">
                                            <a class="ml-3" data-toggle="tooltip" id="alertaId" onClick="mudaCorAlerta(this.id)"
                                                data-placement="top" title="Receber Notificação" data-original-title="Receber Notificação">
                                                <i class="fas fa-bell"></i></a>
                                            <a class="ml-3" data-toggle="tooltip" id="favoritoId" onClick="mudaCorFav(this.id)"
                                                data-placement="top" title="Adicionar aos favoritos"
                                                data-original-title="Adicionar aos favoritos">
                                                <i class="fas fa-heart"></i></a>
                                            <!-- o evento onclick chama a função addFav la do arquivo js/ajax.js e passa como parametro o id do Produto Obs: substituir o idProd por codigo PHP para imprimir o id do produto -->
                                        </span> <!-- ./End float-right -->
                                    </div> <!-- ./End card-footer px-1 -->
                                </div> <!-- ./End card-body card-body-cascade text-center -->
                            </div><!-- ./End card card-cascade narrower card-ecommerce -->
                        </div> <!-- ./End col-md-4 mb-2 clearfix d-md-block -->

                        <div class="col-md-4 mb-2 clearfix d-none d-md-block">
                            <div class="card card-cascade narrower card-ecommerce">
                                <div class="align-items-center overlay img-produtos container animated bounceIn">
                                    <a href="produto-page.php">
                                        <img src="images/logos_produtos/img-test-produto.jpg" class="card-img-top my-3"
                                            alt="">
                                    </a>
                                    <div class="badge badge-pill green mr-1 animated bounceIn">Novo</div>
                                    <div class="badge badge-pill red mr-1 animated bounceIn">Categoria: ---</div>
                                </div> <!-- Card image -->
                                <div class="card-body card-body-cascade text-center">
                                    <a href="produto-page.php">
                                        <p class="card-title my-4 animated bounceIn"><strong>Produto 5</strong></p>
                                    </a>
                                    <!-- Card footer -->
                                    <div class="card-footer px-1">
                                        <span class="float-left"><del>R$ 0,00</del></span>
                                        <span class="text-center">R$ 0,00</span>
                                        <span class="float-right">
                                            <a class="ml-3" data-toggle="tooltip" id="alertaId" onClick="mudaCorAlerta(this.id)"
                                                data-placement="top" title="Receber Notificação" data-original-title="Receber Notificação">
                                                <i class="fas fa-bell"></i></a>
                                            <a class="ml-3" data-toggle="tooltip" id="favoritoId" onClick="mudaCorFav(this.id)"
                                                data-placement="top" title="Adicionar aos favoritos"
                                                data-original-title="Adicionar aos favoritos">
                                                <i class="fas fa-heart"></i></a>
                                            <!-- o evento onclick chama a função addFav la do arquivo js/ajax.js e passa como parametro o id do Produto Obs: substituir o idProd por codigo PHP para imprimir o id do produto -->
                                        </span> <!-- ./End float-right -->
                                    </div> <!-- ./End card-footer px-1 -->
                                </div> <!-- ./End card-body card-body-cascade text-center -->
                            </div><!-- ./End card card-cascade narrower card-ecommerce -->
                        </div> <!-- ./End col-md-4 mb-2 clearfix d-md-block -->

                        <div class="col-md-4 mb-2 clearfix d-none d-md-block">
                            <div class="card card-cascade narrower card-ecommerce">
                                <div class="align-items-center overlay img-produtos container animated bounceIn">
                                    <a href="produto-page.php">
                                        <img src="images/logos_produtos/img-test-produto.jpg" class="card-img-top my-3"
                                            alt="">
                                    </a>
                                    <div class="badge badge-pill green mr-1 animated bounceIn">Novo</div>
                                    <div class="badge badge-pill red mr-1 animated bounceIn">Categoria: ---</div>
                                </div> <!-- Card image -->
                                <div class="card-body card-body-cascade text-center">
                                    <a href="produto-page.php">
                                        <p class="card-title my-4 animated bounceIn"><strong>Produto 6</strong></p>
                                    </a>
                                    <!-- Card footer -->
                                    <div class="card-footer px-1">
                                        <span class="float-left"><del>R$ 0,00</del></span>
                                        <span class="text-center">R$ 0,00</span>
                                        <span class="float-right">
                                            <a class="ml-3" data-toggle="tooltip" id="alertaId" onClick="mudaCorAlerta(this.id)"
                                                data-placement="top" title="Receber Notificação" data-original-title="Receber Notificação">
                                                <i class="fas fa-bell"></i></a>
                                            <a class="ml-3" data-toggle="tooltip" id="favoritoId" onClick="mudaCorFav(this.id)"
                                                data-placement="top" title="Adicionar aos favoritos"
                                                data-original-title="Adicionar aos favoritos">
                                                <i class="fas fa-heart"></i></a>
                                            <!-- o evento onclick chama a função addFav la do arquivo js/ajax.js e passa como parametro o id do Produto Obs: substituir o idProd por codigo PHP para imprimir o id do produto -->
                                        </span> <!-- ./End float-right -->
                                    </div> <!-- ./End card-footer px-1 -->
                                </div> <!-- ./End card-body card-body-cascade text-center -->
                            </div><!-- ./End card card-cascade narrower card-ecommerce -->
                        </div> <!-- ./End col-md-4 mb-2 clearfix d-md-block -->
                    </div><!-- Second slide -->
                </div> <!-- Slides -->
            </div> <!-- Carousel Wrapper -->
        </section> <!-- Section: Products v.5 -->
    </main>

    <main>
        <!-- ./Start Section produtos -->
        <section class="text-center my-5 container">
            <h2 class="h2-responsive font-weight-bold text-center my-3 animated bounceInUp">Veja mais</h2>
            <div class="row">

                <div class="col-md-4 mb-2 clearfix d-md-block">
                    <div class="card card-cascade narrower card-ecommerce">
                        <div class="align-items-center overlay zoom img-produtos container animated bounceIn">
                            <a href="produto-page.php">
                                <img src="images/logos_produtos/img-test-produto.jpg" class="card-img-top my-3" alt="">
                            </a>
                            <div class="badge badge-pill green mr-1 animated bounceIn">Novo</div>
                            <div class="badge badge-pill red mr-1 animated bounceIn">Categoria: ---</div>
                        </div>
                        <div class="card-body card-body-cascade text-center">
                            <a href="produto-page.php">
                                <p class="card-title my-4 animated bounceIn">
                                    <strong>Produto 1</strong>
                                </p>
                            </a>
                            <div class="card-footer px-1">
                                <span class="float-left"><del>R$ 0,00</del></span>
                                <span class="text-center">R$ 0,00</span>
                                <span class="float-right">
                                    <a class="ml-3" data-toggle="tooltip" id="alertaId" onClick="mudaCorAlerta(this.id)"
                                        data-placement="top" title="Receber Notificação" data-original-title="Receber Notificação">
                                        <i class="fas fa-bell"></i></a>
                                    <a class="ml-3" data-toggle="tooltip" id="favoritoId" onClick="mudaCorFav(this.id)"
                                        data-placement="top" title="Adicionar aos favoritos" data-original-title="Adicionar aos favoritos">
                                        <i class="fas fa-heart"></i></a>
                                    <!-- o evento onclick chama a função addFav la do arquivo js/ajax.js e passa como parametro o id do Produto Obs: substituir o idProd por codigo PHP para imprimir o id do produto -->
                                </span> <!-- ./End float-right -->
                            </div> <!-- ./End card-footer px-1 -->
                        </div> <!-- ./card-body card-body-cascade text-center -->
                    </div> <!-- ./card card-cascade narrower card-ecommerce -->
                </div> <!-- ./col-md-4 mb-2 -->

                <div class="col-md-4 mb-2 clearfix d-md-block">
                    <div class="card card-cascade narrower card-ecommerce">
                        <div class="align-items-center overlay zoom img-produtos container animated bounceIn">
                            <a href="produto-page.php">
                                <img src="images/logos_produtos/img-test-produto.jpg" class="card-img-top my-3" alt="">
                            </a>
                            <div class="badge badge-pill green mr-1 animated bounceIn">Novo</div>
                            <div class="badge badge-pill red mr-1 animated bounceIn">Categoria: ---</div>
                        </div>
                        <div class="card-body card-body-cascade text-center">
                            <a href="produto-page.php">
                                <p class="card-title my-4 animated bounceIn">
                                    <strong>Produto 2</strong>
                                </p>
                            </a>
                            <div class="card-footer px-1">
                                <span class="float-left"><del>R$ 0,00</del></span>
                                <span class="text-center">R$ 0,00</span>
                                <span class="float-right">
                                    <a class="ml-3" data-toggle="tooltip" id="alertaId" onClick="mudaCorAlerta(this.id)"
                                        data-placement="top" title="Receber Notificação" data-original-title="Receber Notificação">
                                        <i class="fas fa-bell"></i></a>
                                    <a class="ml-3" data-toggle="tooltip" id="favoritoId" onClick="mudaCorFav(this.id)"
                                        data-placement="top" title="Adicionar aos favoritos" data-original-title="Adicionar aos favoritos">
                                        <i class="fas fa-heart"></i></a>
                                    <!-- o evento onclick chama a função addFav la do arquivo js/ajax.js e passa como parametro o id do Produto Obs: substituir o idProd por codigo PHP para imprimir o id do produto -->
                                </span> <!-- ./End float-right -->
                            </div> <!-- ./End card-footer px-1 -->
                        </div> <!-- ./card-body card-body-cascade text-center -->
                    </div> <!-- ./card card-cascade narrower card-ecommerce -->
                </div> <!-- ./col-md-4 mb-2 -->

                <div class="col-md-4 mb-2 clearfix d-md-block">
                    <div class="card card-cascade narrower card-ecommerce">
                        <div class="align-items-center overlay zoom img-produtos container animated bounceIn">
                            <a href="produto-page.php">
                                <img src="images/logos_produtos/img-test-produto.jpg" class="card-img-top my-3" alt="">
                            </a>
                            <div class="badge badge-pill green mr-1 animated bounceIn">Novo</div>
                            <div class="badge badge-pill red mr-1 animated bounceIn">Categoria: ---</div>
                        </div>
                        <div class="card-body card-body-cascade text-center">
                            <a href="produto-page.php">
                                <p class="card-title my-4 animated bounceIn">
                                    <strong>Produto 3</strong>
                                </p>
                            </a>
                            <div class="card-footer px-1">
                                <span class="float-left"><del>R$ 0,00</del></span>
                                <span class="text-center">R$ 0,00</span>
                                <span class="float-right">
                                    <a class="ml-3" data-toggle="tooltip" id="alertaId" onClick="mudaCorAlerta(this.id)"
                                        data-placement="top" title="Receber Notificação" data-original-title="Receber Notificação">
                                        <i class="fas fa-bell"></i></a>
                                    <a class="ml-3" data-toggle="tooltip" id="favoritoId" onClick="mudaCorFav(this.id)"
                                        data-placement="top" title="Adicionar aos favoritos" data-original-title="Adicionar aos favoritos">
                                        <i class="fas fa-heart"></i></a>
                                    <!-- o evento onclick chama a função addFav la do arquivo js/ajax.js e passa como parametro o id do Produto Obs: substituir o idProd por codigo PHP para imprimir o id do produto -->
                                </span> <!-- ./End float-right -->
                            </div> <!-- ./End card-footer px-1 -->
                        </div> <!-- ./card-body card-body-cascade text-center -->
                    </div> <!-- ./card card-cascade narrower card-ecommerce -->
                </div> <!-- ./col-md-4 mb-2 -->
            </div> <!-- ./class="row" -->
        </section><!-- ./End Section -->
    </main>
    <!--/Main layout-->

    <!--Footer-->
    <footer class="page-footer text-center text-md-left pt-4">

        <!--Social buttons-->
        <div class="social-section text-center">
            <ul class="list-unstyled list-inline">
                <button type="button" class="btn btn-floating btn-rounded btn-fb"><i class="fab fa-facebook-f fa-lg"></i></button>
                <button type="button" class="btn btn-floating btn-rounded btn-tw"><i class="fa fa-twitter fa-lg"></i></button>
                <button type="button" class="btn btn-floating btn-rounded btn-gplus"><i class="fa fa-google-plus fa-lg"></i></button>
                <button type="button" class="btn btn-floating btn-rounded btn-li"><i class="fa fa-linkedin fa-lg"></i></button>
                <button type="button" class="btn btn-floating btn-rounded btn-ins"><i class="fa fa-instagram fa-lg"></i></button>
                <button type="button" class="btn btn-floating btn-rounded btn-pin"><i class="fa fa-pinterest fa-lg"></i></button>
            </ul>
        </div>
        <!--/.Social buttons-->

        <!--Copyright-->
        <div class="footer-copyright py-3 text-left">
            <div class="container-fluid text-center">
                <p class="white-text">Todo os direitos reservados &copy; <a href="index.php" class="grey-text">KataGalo</a></p>
            </div>
        </div>
        <!--/.Copyright-->

    </footer>
    <!--/.End Footer-->

    	<!-- // JQuery -->
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>

    <!-- // Tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>

    <!-- // Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- // MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

    <!-- // Outros JS's -->
    <script type="text/javascript" src="js/limiteDeCaracteres.js"></script>
    <script type="text/javascript" src="js/ajax.js"></script>
    <script type="text/javascript" src="js/mascaras.js"></script>
    <script type="text/javascript" src="js/uploadImg.js"></script>

<script>
    // Material Select Initialization
    $(document).ready(function () {
        $('.mdb-select').material_select();
    });

    // SideNav Initialization
    $(".button-collapse").sideNav()

    new WOW().init()

    // Tooltips Initialization
    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
    })
</script>

</body>

</html>