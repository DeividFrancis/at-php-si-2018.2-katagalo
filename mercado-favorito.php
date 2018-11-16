<?php
$titulo = "Mercados Favoritos - KataGalo";
require_once "./config.php";
include PROJECT_ROOT."/html/_partHTML/head.php";
include PROJECT_ROOT."/html/_partHTML/headerGlobal.php"?>

<body class="hidden-sn cyan-skin clearfix animated fadeIn" data-spy="scroll" data-target="#scrollspy" data-offset="15">
<main>
    <section class="text-center container">
        <div class="row">
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
        </div> <!-- ./End row -->
    </section> <!-- ./End section -->
</main>

<main></main>

<?php
include PROJECT_ROOT."/html/_partHTML/footer.php" ?>

</body>

</html>