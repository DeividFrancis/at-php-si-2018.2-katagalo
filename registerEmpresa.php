<?php
$titulo = "Registro de pessoa juridica";
require_once "./config.php";
include PROJECT_ROOT."/html/_partHTML/head.php" ?>

<body class="hidden-sn elegant-color clearfix animated fadeIn">
<main class="container">
    <div class="card">
        <h6 class="card-header info-color-dark text-center">
            <p class="h5-responsive white-text float-left font-weight-bold" data-toggle="tooltip" data-placement="left" title="Voltar para área de login">
                <a href="index.php">
                    <i class="fas fa-arrow-left fa-2x white-text"></i>
                </a>
            </p>
            <p class="my-3 h3-responsive white-text text-center font-weight-bold">Cadastre sua empresa</p>
        </h6>

        <div class="card-body pt-0">
            <div class="my-2 p-j grey-text">
                <p>Para cadastro de Empresa, cadastrar os dados iguais aos da Receita Federal.</p>
            </div>

            <form class="text-center" action="configContaEmpresa.php" method="post" style="color: #aaa;">
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="md-form">
                            <input type="text" placeholder="Razão social" id="razaoSocialPj" name="loj_razaosocial" maxlength="250" required class="form-control">
                        </div> <!-- ./End md-form -->
                    </div><!-- ./End col-md-6 -->
                    <div class="col-md-6">
                        <div class="md-form">
                            <input type="text" placeholder="Nome fantasia" id="nomeFantasia" name="loj_fantasia" maxlength="250" required class="form-control">
                        </div> <!-- ./End md-form -->
                    </div><!-- ./End col-md-6 -->
                </div> <!-- ./End form-row -->

                <div class="form-row">
                    <div class="col-md-6">
                        <div class="md-form">
                            <input type="email" placeholder="Email Corporativo" required id="emailCorporativo" name="pes_login" maxlength="250" class="form-control">
                        </div> <!-- ./End md-form -->
                    </div><!-- ./End col-md-6 -->
                    <div class="col-md-6">
                        <div class="md-form">
                            <input type="text" placeholder="CEP" id="pesCep" name="end_cep" maxlength="9" required class="form-control" autocomplete="on">
                        </div> <!-- ./End md-form -->
                    </div> <!-- ./End col-md-6 -->
                </div> <!-- ./End form-row -->

                <div class="form-row">
                    <div class="col-md-4">
                        <div class="md-form">
                            <input type="text" placeholder="Endereço" maxlength="250" class="form-control" id="pesEndereco" required name="end_endereco"
                                   autocomplete="on">
                        </div> <!-- ./End md-form -->
                    </div> <!-- ./End col-md-4 -->
                    <div class="col-md-4">
                        <div class="md-form">
                            <input type="text" placeholder="Número" class="form-control" id="pesNumero" required name="end_numero" autocomplete="on">
                        </div> <!-- ./End md-form -->
                    </div> <!-- ./End col-md-4 -->
                    <div class="col-md-4">
                        <div class="md-form">
                            <input type="text" placeholder="Cidade" maxlength="250" class="form-control" id="pesCidade" required name="cid_cidade" autocomplete="on">
                        </div> <!-- ./End md-form -->
                    </div> <!-- ./End col-md-4 -->
                </div> <!-- ./End form-row -->

                <div class="form-row">
                    <div class="col-md-4">
                        <div class="md-form">
                            <input type="text" placeholder="Estado" minlength="2" maxlength="2" class="form-control" id="pesEstado" required name="est_sigla" autocomplete="on">
                        </div> <!-- ./End md-form -->
                    </div> <!-- ./End col-md-4 -->
                    <div class="col-md-4">
                        <div class="md-form">
                            <input type="text" placeholder="Bairro" class="form-control" id="pesBairro" maxlength="250" required name="end_bairro" autocomplete="on">
                        </div> <!-- ./End md-form -->
                    </div> <!-- ./End col-md-4 -->
                    <div class="col-md-4">
                        <div class="md-form">
                            <input type="text" placeholder="Complemento (Opcional)" class="form-control" id="pesComplemento" maxlength="250" name="end_complemento" autocomplete="on">
                        </div> <!-- ./End md-form -->
                    </div> <!-- ./End col-md-4 -->
                </div> <!-- ./End form-row -->

                <div class="form-row">
                    <div class="col-md-6">
                        <div class="md-form">
                            <input type="password" placeholder="Senha" minlength="8" maxlength="32" length="32" required id="senha" name="pes_senha" class="form-control">
                        </div> <!-- ./End md-form -->
                    </div> <!-- ./End col-md-6 -->
                    <div class="col-md-6">
                        <div class="md-form">
                            <input type="password" placeholder="Repetir senha" minlength="8" maxlength="32" length="32" id="repetirSenha" name="pes_repetirSenha" required
                                   class="form-control" onblur="verificaSenha()">
                        </div> <!-- ./End md-form -->
                    </div> <!-- ./End col-md-6 -->
                </div> <!-- ./End form-row -->

                <div class="text-center float-left col-md-6 d-block mt-2">
                    <button class="btn success-color-dark btn-lg btn-block font-weight-bold" name="btnRegistrarEmpresa" type="submit">Registar&nbsp;&nbsp;
                        <i class="fas fa-sign-in-alt"></i>
                    </button>
                </div> <!-- ./end text-center float-left col-md-6 d-block small mt-2 -->

                <div class="text-center float-right col-md-6 d-block mt-2">
                    <a class="btn info-color-dark btn-lg btn-block white-text font-weight-bold" name="btnFazerLogin" href="login.php">Já possui conta?</a>
                </div> <!-- ./End text-center float-right col-md-6 d-block small mt-2 -->
            </form><!-- Form -->
            <input type="hidden" name="method" value="insert"/>
        </div>
    </div><!-- ./End Material form register -->
</main>

<main>

</main>

<?php
include PROJECT_ROOT."/html/_partHTML/footer2.php"
?>

</body>

</html>