<?php
$titulo = "Página do produto - KataGalo";
require_once "./config.php";
include PROJECT_ROOT."/html/_partHTML/head.php";
include PROJECT_ROOT."/html/_partHTML/headerGlobal.php" ?>

<body class="hidden-sn cyan-skin clearfix animated fadeIn">
<main>
    <div class="container">
        <div class="row wow animated bounceIn">
            <div class="col-md-4 mb-2 container img-fluid zoom">
                <img src="images/logos_produtos/img-test-produto.jpg" class="card-img-top" name="pro_imagem" alt="Imagem do produto">
            </div>

            <!--Grid column-->
            <div class="col-md-7">
                <div class="p-0">
                    <div class="mb-3">
                        <span class="badge badge-pill green mr-1">Novo</span>
                        <span class="badge badge-pill red mr-1" name="pro_categoria">Categoria:</span>
                    </div>
                    <div class="my-4">
                        <strong class="h3-responsive" name="pro_nome">Nome do produto</strong>
                    </div>

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs mb-tabs nav-justified primary-color-dark" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#unidade" role="tab">Unidade</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#peso" role="tab">Peso</a>
                        </li>
                    </ul>

                    <!-- Tab panels -->
                    <div class="tab-content">
                        <div class="tab-pane fade ml-5 in show active" id="unidade" role="tabpanel">
                            <span name="por_preco"><del>R$ 0,00</del></span>
                            <span class="ml-3" name="camp_precocampanha">R$ 0,00</span>
                        </div>

                        <div class="tab-pane fade ml-5" id="peso" role="tabpanel">
                            <span name="por_preco"><del>R$ 0,00</del></span>
                            <span class="ml-3" name="camp_precocampanha">R$ 0,00</span>
                        </div>
                    </div>

                    <div class="form-row my-3">
                        <div class="col-md-5 my-3 text-center">
                            <a class="ml-3" data-toggle="tooltip" id="alertaId" onClick="mudaCorAlerta(this.id)" data-placement="top" title="Receber Notificação">
                                <i class="fas fa-bell fa-lg"></i>&nbsp;&nbsp;Receber Notificação</a>
                        </div>

                        <span class="block-exam ple text-center border-left border-gray"></span>

                        <div class="col-md-5 my-3 text-center">
                            <a class="ml-3" data-toggle="tooltip" id="favoritoId" onClick="mudaCorFav(this.id)" data-placement="top" title="Adicionar aos favoritos">
                                <i class="fas fa-heart fa-lg"></i>&nbsp;&nbsp;Adicionar aos favoritos</a>
                        </div>
                    </div>

                    <div class="accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
                        <div class="card">
                            <div class="card-header" role="tab" id="headingOne">
                                <a data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    <p class="mb-0 font-weight-bold">Descrição<i class="fa fa-angle-down rotate-icon"></i></p>
                                </a>
                            </div>
                            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordionEx" id="descricaoProduto"
                                 name="pro_descricao">
                                <div class="card-body p-j">
                                    Descrição do produto
                                </div> <!-- ./End card-body p-j -->
                            </div> <!-- ./End collapse show -->
                        </div> <!-- ./End card -->
                    </div> <!-- ./End accordion -->
                </div> <!-- ./End p-0 -->
            </div> <!-- ./End col-md-7 -->
        </div> <!-- ./End row wow animated bounceIn -->
    </div> <!-- ./End container -->
</main> <!-- ./End main -->

<main>
    <section class="text-center">
        <h1 class="h1-responsive font-weight-bold text-center">Produtos em Destaques</h1>

        <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
            <div class="controls-top">
                <button type="button" class="btn-floating btn btn-cyan" href="#multi-item-example" data-slide="prev" title="Anterior">
                    <i class="fas fa-angle-left fa-2x"></i>
                </button>
                <button type="button" class="btn-floating btn btn-cyan" href="#multi-item-example" data-slide="next" title="Próximo">
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
                <div class="carousel-item active">
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
                </div><!-- ./End First slide -->

                <!-- Second slide -->
                <div class="carousel-item">
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
                </div><!-- Second slide -->
            </div> <!-- Slides -->
        </div> <!-- Carousel Wrapper -->
    </section> <!-- Section: Products v.5 -->
</main>

<main>

</main>

<?php
include PROJECT_ROOT."/html/_partHTML/footer.php" ?>

</body>

</html>