<?php
$titulo = "Cadastro de Produtos - KataGalo";
require_once "./config.php";
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
            <form class="text-center" action="#" method="POST" style="color: #aaa;">
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="md-form">
                            <input type="text" placeholder="Nome do produto" id="cadNomeProduto" name="pro_nome" maxlength="250" length="250" required class="form-control">
                        </div> <!-- ./End md-form -->
                    </div> <!-- ./End col-md-6 -->
                    <div class="col-md-6">
                        <div class="md-form">
                            <input type="text" required id="CadProdutoPreco" name="pro_preco" placeholder="Preço do produto" class="form-control">
                        </div> <!-- ./End md-form -->
                    </div> <!-- ./End col-md-6 -->
                </div> <!-- ./End form-row -->

                <div class="form-row">
                    <div class="col-md-6">
                        <div class="md-form">
                            <input type="text" placeholder="Código de barras" required id="CadProdutoBarcode" name="pro_barcode" class="form-control">
                        </div> <!-- ./md-form -->
                    </div> <!-- ./col-md-6 -->
                    <div class="col-md-6">
                        <div class="md-form">
                            <select class="mdb-select md-form colorful-select dropdown-ins" id="cadProdutoCategoria" name="proc_descricao" searchable="Pesquise aqui...">
                                <option value="" disabled selected>Categoria do produto</option>
                                <option value="1">Limpeza</option>
                                <option value="2">Alimentação</option>
                                <option value="3">Carnes</option>
                                <option value="4">Bebidas</option>
                            </select>
                        </div> <!-- ./md-form -->
                    </div> <!-- ./col-md-6 -->
                </div> <!-- ./End form-row -->

                <div class="form-row">
                    <div class="col-md-6">
                        <div class="md-form">
                            <textarea type="text" placeholder="Descrição do produto" id="CaddescricaoProduto" required name="pro_descricao" class="md-textarea form-control" maxlength="250" length="250" rows="8"></textarea>
                        </div> <!-- ./md-form -->
                    </div> <!-- ./col-md-6 -->
                    <div class="col-md-4">
                        <div class="md-form">
                            <div class="mb-2 d-md-block container">
                                <div class="float-right">
                                    <input type="file" required id="user-add-input" onchange="readURL(this, 'user-add');" name="pro_imagem" style="display:none;"/>
                                    <img class="d-md-block container d-block img-fluid img-produtos" src="images/logo_mercados/img-test-mercado.jpg" id="image-user-add" onclick='addImageUser()'/>
                                </div> <!-- ./End custom-file -->
                            </div> <!-- ./End input-group mb-3 md-form -->
                        </div> <!-- ./End md-form -->
                    </div> <!-- ./End col-md-6 -->
                </div> <!-- ./End form-row -->

                <div class="col-md-7 float-right">
                    <button class="btn btn-success btn-block btn-md mt-0 my-5">Gravar&nbsp;&nbsp;<i class="fa fa-check fa-lg"></i></button>
                </div> <!-- ./End col-md-6 -->
            </form><!-- Form -->
        </div><!-- ./End Material form register -->
    </div>
</main>

<main>

</main>

<?php
include PROJECT_ROOT."/html/_partHTML/footer2.php"
?>

</body>