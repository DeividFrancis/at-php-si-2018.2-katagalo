<?php
$titulo = "Cadastro de Produtos - KataGalo";
require_once "../config.php";
include PROJECT_ROOT."/html/_partHTML/head.php" ?>

<body class="hidden-sn elegant-color clearfix animated fadeIn">
<main class="container">
    <div class="card">
        <h6 class="card-header info-color-dark text-center py-3">
            <p class="my-3 h5-responsive white-text float-left font-weight-bold">
                <a href="index.php">
                    <i class="fas fa-arrow-left fa-2x white-text"></i>
                </a>
            </p>
            <p class="my-3 h3-responsive white-text text-center font-weight-bold">Cadastro de Produtos</p>
        </h6>

        <!--Card content-->
        <div class="card-body px-lg-5 pt-0">
            <!-- Form -->
            <form class="text-center" action="#" method="POST" style="color: #aaa;">
                <div class="form-row">
                    <div class="col-md-6">
                        <!-- Código de barras -->
                        <div class="md-form">
                            <input type="text" id="cadProdutoBarcode" name="pro_barcode" minlength="1" maxlength="80" required class="form-control"
                                   autofocus>
                            <label for="cadProdutoBarcode">Código de barras</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <!-- Preço do produto -->
                        <div class="md-form">
                            <input type="text" required id="CadProdutoPreco" name="preco" placeholder="R$ 0,00" class="form-control">
                            <label for="CadProdutoPreco">Preço</label>
                        </div> <!-- ./End md-form -->
                    </div> <!-- ./End col-md-6 -->
                </div> <!-- ./End form-row -->

                <div class="form-row">
                    <div class="col-md-6">
                        <!-- ./Descrição -->
                        <div class="md-form">
                            <textarea type="text" id="descricao" required name="descricao" class="md-textarea form-control" maxlength="250" length="250" rows="4"></textarea>
                            <label for="descricao">Descrição</label>
                        </div> <!-- ./md-form -->
                    </div> <!-- ./col-md-6 -->

                    <div class="col-md-6">
                        <div class="md-form">
                            <div class="input-group mb-3 mt-5 p-2">
                                <div class="custom-file">
                                    <input type="file" required class="custom-file-input" name="uploadImage" id="inputGroupFile01" onchange="readName()" aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label" id="labelInputImg" for="inputGroupFile01">Selecione um arquivo</label>
                                </div> <!-- ./End custom-file -->
                            </div> <!-- ./End input-group mb-3 md-form -->
                        </div> <!-- ./End md-form -->
                    </div> <!-- ./End col-md-6 -->
                </div> <!-- ./End form-row -->

                <div class="col-md-6 float-right">
                    <!-- Botão Enviar -->
                    <button class="btn btn-success btn-block btn-md mt-0 my-5">Gravar&nbsp;&nbsp;<i class="fa fa-check fa-lg"></i></button>
                </div> <!-- ./End col-md-6 -->
        </div><!-- ./End Material form register -->
    </div>
    </form><!-- Form -->
</main>

<main>

</main>

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