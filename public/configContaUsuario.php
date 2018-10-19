<?php
$titulo = "Configuração da conta - KataGalo";
require_once "../config.php";
include PROJECT_ROOT."/html/_partHTML/head.php";
include PROJECT_ROOT."/html/_partHTML/headerConfigConta.php"?>

<body class="hidden-sn cyan-skin clearfix animated fadeIn">
<main class="container">
    <div class="content">
        <div class="container">
            <div class="form-row">
                <div class="col-md-8 mb-4">
                    <div class="card">
                        <div class="card-header info-color">
                            <p class="my-0 h3-responsive white-text text-center font-weight-bold">PERFIL</p>
                        </div>
                        <div class="card-content">
                            <form class="text-center container" action="#" method="POST" style="color: #aaa;">
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="md-form">
                                            <input type="text" id="nomeCompleto" name="pes_nome" required class="form-control" autofocus>
                                            <label for="nomeCompleto">Nome Completo</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="md-form">
                                            <input type="email" id="emailLogin" name="pes_login" required class="form-control">
                                            <label for="emailLogin*">Email</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="md-form">
                                            <input type="text" id="cpfcnpj" name="pes_receita" required class="form-control">
                                            <label for="cpfcnpj">CPF/CNPJ</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="md-form">
                                            <input type="text" id="endereco" name="end_endereco" required class="form-control">
                                            <label for="endereco">Endereço</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="md-form">
                                            <input type="text" id="numeroEndereco" name="end_numero" required class="form-control">
                                            <label for="numeroEndereço">Número</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="md-form">
                                            <input type="text" id="bairroEndereco" name="end_bairro" required class="form-control">
                                            <label for="bairroEndereço">Bairro</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="md-form">
                                            <input type="text" id="complementoEndereco" name="end_complemento" class="form-control">
                                            <label for="complementoEndereco">Complemento</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="md-form">
                                            <input type="text" id="cepEndereco" name="end_cep" class="form-control">
                                            <label for="cepEndereco">CEP</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="md-form">
                                            <input type="text" id="localizacaoEndereco" name="end_localizacao" class="form-control">
                                            <label for="localizacaoEndereco">Localização</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="md-form">
                                            <button type="submit" name="btnConfirmarAtualizacao" class="btn btn-purple btn-block mb-2">Confirmar</button>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-profile container">
                        <div class="card-avatar">
                            <div class="zoom">
                                <input type="file" required id="user-add-input" onchange="readURL(this, 'user-add');" name="foto" style="display:none"/>
                                <img class="rounded-circle container d-block img-fluid logo-perfil" src="images/logo_mercados/img-test-mercado.jpg" id="image-user-add" onclick='addImageUser()'/>
                            </div>
                        </div>
                        <div class="content">
                            <p class="card-title font-weight-bold h3-responsive text-center">NOME DO USUARIO</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<main>

</main>

<!-- // JQuery -->
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
<!--<script type="text/javascript" src="http://cidades-estados-js.googlecode.com/files/cidades-estados-v0.2.js"></script>-->

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
<script type="text/javascript" src="js/estados_cidades.js"></script>
<!--<script type="text/javascript" src="js/estados_cidades.json"></script>-->

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