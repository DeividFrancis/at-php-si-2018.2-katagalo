<?php
$titulo = "Cadastrar Empresa - KataGalo";
require_once "./config.php";
include PROJECT_ROOT."/html/_partHTML/head.php" ?>

<body class="hidden-sn elegant-color clearfix animated fadeIn">
<main class="container">
    <div class="card">
        <h6 class="card-header info-color-dark text-center">
            <p class="h5-responsive white-text float-left font-weight-bold my-2" title="Voltar para área de login">
                <a href="index.php"><i class="fas fa-arrow-left fa-2x white-text"></i></a>
            </p>
            <p class="my-2 h3-responsive white-text text-center font-weight-bold">Cadastre sua empresa</p>
        </h6>

        <div class="card-body pt-0">
            <div class="my-2 p-j grey-text">
                <p>Para cadastro de Empresa, cadastrar os dados iguais aos da Receita Federal.</p>
            </div>

            <form class="text-center" action="configContaEmpresa.php" method="post" style="color: #aaa;">
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="md-form input-group">
                            <input type="text" placeholder="Razão social" id="razaoSocialPj" name="loj_razaoSocial" maxlength="250" required class="form-control border rounded"
                                   value="<?php echo isset($n->loj_razaoSocial) ? $n->loj_razaoSocial : null ?>">
                        </div> <!-- ./End md-form -->
                    </div><!-- ./End col-md-6 -->
                    <div class="col-md-6">
                        <div class="md-form input-group">
                            <input type="text" placeholder="Nome fantasia" id="nomeFantasia" name="loj_fantasia" maxlength="250" required class="form-control border rounded"
                                   value="<?php echo isset($n->loj_fantasia) ? $n->loj_fantasia : null ?>">
                        </div> <!-- ./End md-form -->
                    </div><!-- ./End col-md-6 -->
                </div> <!-- ./End form-row -->

                <div class="form-row">
                    <div class="col-md-6">
                        <div class="md-form input-group">
                            <input type="email" placeholder="Email Corporativo" required id="emailCorporativo" name="pes_login" maxlength="250" class="form-control border rounded"
                                   value="<?php echo isset($n->pes_login) ? $n->pes_login : null ?>">
                        </div> <!-- ./End md-form -->
                    </div><!-- ./End col-md-6 -->
                    <div class="col-md-6">
                        <div class="md-form input-group">
                            <input type="text" placeholder="CEP" id="pesCep" name="end_cep" maxlength="9" required class="form-control border rounded" autocomplete="on"
                                   value="<?php echo isset($n->end_cep) ? $n->end_cep : null ?>">
                        </div> <!-- ./End md-form -->
                    </div> <!-- ./End col-md-6 -->
                </div> <!-- ./End form-row -->

                <div class="form-row">
                    <div class="col-md-4">
                        <div class="md-form input-group">
                            <input type="text" placeholder="Endereço" maxlength="250" class="form-control border rounded" id="pesEndereco" required name="end_endereco" autocomplete="on"
                                   value="<?php echo isset($n->end_endereco) ? $n->end_endereco : null ?>">
                        </div> <!-- ./End md-form -->
                    </div> <!-- ./End col-md-4 -->
                    <div class="col-md-4">
                        <div class="md-form input-group">
                            <input type="text" placeholder="Número" class="form-control border rounded" id="pesNumero" required name="end_numero" autocomplete="on"
                                   value="<?php echo isset($n->end_numero) ? $n->end_numero : null ?>">
                        </div> <!-- ./End md-form -->
                    </div> <!-- ./End col-md-4 -->
                    <div class="col-md-4">
                        <div class="md-form input-group">
                            <input type="text" placeholder="Cidade" maxlength="250" class="form-control border rounded" id="pesCidade" required name="cid_cidade" autocomplete="on"
                                   value="<?php echo isset($n->cid_cidade) ? $n->cid_cidade : null ?>">
                        </div> <!-- ./End md-form -->
                    </div> <!-- ./End col-md-4 -->
                </div> <!-- ./End form-row -->

                <div class="form-row">
                    <div class="col-md-4">
                        <div class="md-form input-group">
                            <input type="text" placeholder="Estado" minlength="2" maxlength="2" class="form-control border rounded" id="pesEstado" required name="est_sigla"
                                   autocomplete="on"
                                   value="<?php echo isset($n->est_sigla) ? $n->est_sigla : null ?>">
                        </div> <!-- ./End md-form -->
                    </div> <!-- ./End col-md-4 -->
                    <div class="col-md-4">
                        <div class="md-form input-group">
                            <input type="text" placeholder="Bairro" class="form-control border rounded" id="pesBairro" maxlength="250" required name="end_bairro" autocomplete="on"
                                   value="<?php echo isset($n->end_bairro) ? $n->end_bairro : null ?>">
                        </div> <!-- ./End md-form -->
                    </div> <!-- ./End col-md-4 -->
                    <div class="col-md-4">
                        <div class="md-form input-group">
                            <input type="text" placeholder="Complemento (Opcional)" class="form-control border rounded" id="pesComplemento" maxlength="250" name="end_complemento"
                                   autocomplete="on"
                                   value="<?php echo isset($n->end_complemento) ? $n->end_complemento : null ?>">
                        </div> <!-- ./End md-form -->
                    </div> <!-- ./End col-md-4 -->
                </div> <!-- ./End form-row -->

                <div class="form-row">
                    <div class="col-md-6">
                        <div class="md-form input-group">
                            <input type="password" placeholder="Senha" minlength="8" maxlength="32" required id="senha" name="pes_senha" class="form-control border rounded"
                                   value="<?php echo isset($n->pes_senha) ? $n->pes_senha : null ?>">
                            <div class="input-group-append">
                                <button class="btn btn-info m-0 px-2" type="button" id="showRegisterPasswordEmpresa" title="Mostrar senha">
                                    <i class="fas fa-eye fa-lg"></i>
                                </button>
                            </div>
                        </div> <!-- ./End md-form -->
                    </div> <!-- ./End col-md-6 -->
                    <div class="col-md-6">
                        <div class="md-form input-group">
                            <input type="password" placeholder="Repetir senha" minlength="8" maxlength="32" id="repetirSenha" name="pes_repetirSenha" required
                                   class="form-control border rounded" onblur="verificaSenha()" value="<?php echo isset($n->pes_repetirSenha) ? $n->pes_repetirSenha : null ?>">
                            <div class="input-group-append">
                                <button class="btn btn-info m-0 px-2" type="button" id="showConfirmarRegisterPasswordEmpresa" title="Mostrar senha">
                                    <i class="fas fa-eye fa-lg"></i>
                                </button>
                            </div> <!-- ./End md-form -->
                        </div> <!-- ./End col-md-6 -->
                    </div> <!-- ./End form-row -->

                    <input type="hidden" name="method" value="insert"/>

                    <div class="text-center float-left col-md-6 d-block mt-2">
                        <button class="btn success-color-dark btn-lg btn-block font-weight-bold" name="btnRegistrarEmpresa" type="submit">Registar&nbsp;&nbsp;
                            <i class="fas fa-sign-in-alt"></i>
                        </button>
                    </div> <!-- ./end text-center float-left col-md-6 d-block small mt-2 -->

                    <div class="text-center float-right col-md-6 d-block mt-2">
                        <a class="btn info-color-dark btn-lg btn-block white-text font-weight-bold" name="btnFazerLogin" href="login.php">Já possui conta?</a>
                    </div> <!-- ./End text-center float-right col-md-6 d-block small mt-2 -->
            </form><!-- Form -->
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