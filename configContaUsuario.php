<?php
$titulo = "Sua Conta - KataGalo";
require_once "./config.php";
include PROJECT_ROOT."/html/_partHTML/head.php";
include PROJECT_ROOT."/html/_partHTML/headerGlobal.php" ?>

<body class="hidden-sn cyan-skin clearfix animated fadeIn">
<main>
    <div class="content">
        <div class="container">
            <div class="form-row">
                <div class="col-md-4 mb-4">
                    <div class="card card-profile container mb-3">
                        <div class="card-avatar">
                            <div class="zoom">
                                <input type="file" required id="user-add-input" onchange="readURL(this, 'user-add');" name="pes_foto" style="display:none"/>
                                <img class="rounded-circle container d-block img-fluid logo-perfil" src="images/logo_mercados/img-test-mercado.jpg" id="image-user-add" onclick='addImageUser()'/>
                            </div> <!-- ./End zoom -->
                        </div> <!-- ./End card-avatar -->
                        <div class="content">
                            <p class="card-title font-weight-bold h3-responsive text-center text-uppercase" id="nomeUsuario" name="pes_nome">Nome do usuario</p>
                        </div> <!-- ./End content -->
                    </div> <!-- ./End card card-profile container -->
                    <div class="mb-2">
                        <a href="mercado-favorito.php" class="btn danger-color-dark btn-block btn-lg font-weight-bold white-text">
                            <i class="fas fa-shopping-bag fa-lg"></i>&nbsp;&nbsp;Mercados favoritos
                        </a>
                        <a href="produto-list.php" class="btn info-color-dark btn-block btn-lg font-weight-bold white-text">
                            <i class="fas fa-heart fa-lg" style="color: #ff0000;"></i>&nbsp;&nbsp;Produtos favoritos
                        </a>
                    </div> <!-- ./End Buttons -->
                </div> <!-- ./End foto do perfil -->

                <div class="col-md-8 mb-4">
                    <div class="card">
                        <div class="card-header info-color-dark">
                            <p class="my-0 h3-responsive white-text text-center font-weight-bold">Dados do Perfil</p>
                        </div>
                        <div class="card-content">
                            <form class="container" action="configContaUsuario.php" method="post" style="color: #aaa;">
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="md-form">
                                            <input type="text" placeholder="Nome Completo" maxlength="250" required id="pesNomeCompleto" name="pes_nome" class="form-control">
                                        </div> <!-- ./End md-form -->
                                    </div> <!-- ./End col-md-6 -->
                                    <div class="col-md-6">
                                        <div class="md-form">
                                            <input type="email" placeholder="Email" maxlength="250" required id="pesEmailLogin" name="pes_login" class="form-control">
                                        </div> <!-- ./End md-form -->
                                    </div> <!-- ./End col-md-6 -->
                                </div> <!-- ./End form-row -->

                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="md-form">
                                            <input type="text" placeholder="CPF/CNPJ" class="form-control cpfcnpj" required id="pesCpfCnpj" name="pes_receita"
                                                   autocomplete="on">
                                        </div> <!-- ./End md-form -->
                                    </div> <!-- ./End col-md-6 -->
                                    <div class="col-md-6">
                                        <div class="md-form">
                                            <input type="text" placeholder="CEP" class="form-control" maxlength="9" required id="pesCep" name="end_cep" autocomplete="on">
                                        </div> <!-- ./End col-md-4 -->
                                    </div> <!-- ./End form-row -->
                                </div>

                                <div class="form-row">
                                    <div class="col-md-4">
                                        <div class="md-form">
                                            <input type="text" placeholder="Endereço" maxlength="250" class="form-control" required id="pesEndereco" name="end_endereco"
                                                   autocomplete="on">
                                        </div> <!-- ./End md-form -->
                                    </div> <!-- ./End col-md-4 -->
                                    <div class="col-md-4">
                                        <div class="md-form">
                                            <input type="text" placeholder="Número" maxlength="20" class="form-control" required id="pesNumero" name="end_numero" autocomplete="on">
                                        </div> <!-- ./End md-form -->
                                    </div> <!-- ./End col-md-4 -->
                                    <div class="col-md-4">
                                        <div class="md-form">
                                            <input type="text" placeholder="Cidade" maxlength="250" class="form-control" required id="pesCidade" name="cid_cidade"
                                                   autocomplete="on">
                                        </div> <!-- ./End md-form -->
                                    </div> <!-- ./End col-md-4 -->
                                </div> <!-- ./End form-row -->

                                <div class="form-row">
                                    <div class="col-md-4">
                                        <div class="md-form">
                                            <input type="text" placeholder="Estado" minlength="2" maxlength="2" class="form-control" required id="pesEstado" name="est_sigla"
                                                   autocomplete="on">
                                        </div> <!-- ./End md-form -->
                                    </div> <!-- ./End col-md-4 -->
                                    <div class="col-md-4">
                                        <div class="md-form">
                                            <input type="text" placeholder="Bairro" class="form-control" maxlength="250" required id="pesBairro" name="end_bairro" autocomplete="on">
                                        </div> <!-- ./End md-form -->
                                    </div> <!-- ./End col-md-4 -->
                                    <div class="col-md-4">
                                        <div class="md-form">
                                            <input type="text" placeholder="Complemento (Opcional)" class="form-control" maxlength="250" id="pesComplemento" name="end_complemento"
                                                   autocomplete="on">
                                        </div> <!-- ./End md-form -->
                                    </div> <!-- ./End col-md-4 -->
                                </div> <!-- ./End form-row -->

                                <input type="hidden" name="method" value="insert"/>

                                <div class="col-md-6 float-right">
                                    <div class="md-form">
                                        <button type="submit" name="btnConfirmarAtualizacao" class="btn btn-purple btn-block mb-2">Confirmar</button>
                                    </div> <!-- ./End md-form -->
                                </div> <!-- ./End col-md-8 float-right -->
                            </form> <!-- ./End form -->
                        </div> <!-- ./End card-content-->
                    </div> <!-- ./end card -->
                </div> <!--./ End col-md-8 mb-4 -->
            </div>
        </div>
    </div>
</main>

<main>

</main>

<?php
include PROJECT_ROOT."/html/_partHTML/footer.php"
?>
</body>