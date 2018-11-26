<?php
$titulo = "Entrar - KataGalo";
require_once "./config.php";
include PROJECT_ROOT."/html/_partHTML/head.php" ?>

<body class="hidden-sn elegant-color animated fadeIn clearfix">
<main class="container animated fadeIn max-vertical">
    <div class="card">
        <h6 class="card-header info-color-dark float-left py-3">
            <p class="my-3 h5-responsive white-text float-left font-weight-bold" title="Voltar para página inicial">
                <a href="index.php">
                    <i class="fas fa-arrow-left fa-2x white-text"></i>
                </a>
            </p>
            <p class="my-4 h3-responsive text-uppercase white-text text-center font-weight-bold">Acessar conta</p>
        </h6>

        <!--Card content-->
        <div class="card-body px-lg-5 pt-0">
            <form action="#" method="post" style="color: #aaa;">
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="md-form input-group">
                            <input type="email" placeholder="Email" class="form-control border rounded" required id="login_email" name="pes_login" autocomplete="on">
                        </div> <!-- ./End md-form -->
                    </div> <!-- ./End col-md-6 -->
                    <div class="col-md-6">
                        <div class="md-form input-group">
                            <input type="password" class="form-control border rounded" placeholder="Senha" minlength="8" maxlength="32" id="login_senha" name="pes_senha" required>
                            <div class="input-group-append">
                                <button class="btn btn-info m-0 px-2" type="button" id="showLoginPassword" title="Mostrar senha">
                                    <i class="fas fa-eye fa-lg"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <input type="hidden" name="method" value="insert"/>

                <div class="text-center float-right col-md-4 d-block small mt-2">
                    <button class="btn success-color-dark btn-block btn-lg font-weight-bold" id="btnLogin" type="submit">Entrar&nbsp;&nbsp;
                        <i class="fas fa-sign-in-alt fa-lg"></i>
                    </button> <!-- ./text-center float-right col-md-6 d-block small mt-2 -->
                </div>

                <div class="float-right col-md-4 d-block small mt-2">
                    <a class="btn warning-color-dark white-text btn-block btn-lg font-weight-bold" data-toggle="modal" data-target="#modalRegisterForm" id="btnRegistrar"><i
                                class="fas fa-pencil-alt fa-lg"></i>&nbsp;&nbsp;Registrar
                    </a> <!-- ./text-center float-right col-md-6 d-block small mt-2 -->
                </div>

                <div class="float-right col-md-4 d-block small mt-3">
                    <a type="button" class="btn btn-link btn-block btn-md" id="btnRecuperarSenha" data-toggle="modal" data-target="#modalRecupeForm">
                        <p class="blue-text font-weight-bold">Esqueci minha senha</p>
                    </a> <!-- ./End text-center float-right col-md-4 d-block small mt-2 -->
                </div> <!-- ./End text-center float-right col-md-6 d-block small mt-2 -->
            </form> <!-- ./End Form -->
        </div> <!-- ./End card-body px-lg-5 pt-0 -->
    </div> <!-- ./End Material form login -->
</main> <!-- ./End main -->

<!-- --------------------------------------------------------------- -->
<!-- ----------------- MODAL DE REGISTRO --------------------------- -->
<!-- --------------------------------------------------------------- -->
<main>
    <div class="modal animated fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="modalRegisterConta" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header info-color-dark text-center">
                    <stronf class="modal-title w-100 white-text h3-responsive text-uppercase font-weight-bold">Registrar conta</stronf>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="white-text h4-responsive" aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <form action="configContaUsuario.php" method="post" style="color: #aaa;">
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="md-form input-group">
                                    <input type="text" placeholder="Nome Completo" maxlength="250" id="registerNomeCompleto" required name="pes_nome" class="form-control border rounded"
                                           value="<?php echo isset($n->pes_nome) ? $n->pes_nome : null ?>">
                                </div> <!-- ./End md-form -->
                            </div> <!-- ./End col-md-6 -->
                            <div class="col-md-6">
                                <div class="md-form input-group">
                                    <input type="email" placeholder="Email" maxlength="250" required id="pesEmailRegister" name="pes_login" class="form-control border rounded"
                                           value="<?php echo isset($n->pes_login) ? $n->pes_login : null ?>">
                                </div> <!-- ./End md-form -->
                            </div> <!-- ./End col-md-6 -->
                        </div> <!-- ./End form-row -->

                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="md-form input-group">
                                    <input type="text" placeholder="CEP" class="form-control border rounded" maxlength="9" required id="pesCep" name="end_cep" autocomplete="on"
                                           value="<?php echo isset($n->end_cep) ? $n->end_cep : null ?>">
                                </div> <!-- ./End md-form -->
                            </div> <!-- ./End col-md-4 -->
                            <div class="col-md-6">
                                <div class="md-form input-group">
                                    <input type="text" placeholder="Endereço" maxlength="250" class="form-control border rounded" required id="pesEndereco" name="end_endereco"
                                           autocomplete="on"
                                           value="<?php echo isset($n->end_endereco) ? $n->end_endereco : null ?>">
                                </div> <!-- ./End md-form -->
                            </div> <!-- ./End col-md-4 -->
                        </div> <!-- ./End form-row -->

                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="md-form input-group">
                                    <input type="text" placeholder="Número" maxlength="20" class="form-control border rounded" required id="pesNumero" name="end_numero"
                                           autocomplete="on"
                                           value="<?php echo isset($n->end_numero) ? $n->end_numero : null ?>">
                                </div> <!-- ./End md-form -->
                            </div> <!-- ./End col-md-4 -->
                            <div class="col-md-6">
                                <div class="md-form input-group">
                                    <input type="text" placeholder="Cidade" maxlength="250" class="form-control border rounded" required id="pesCidade" name="cid_cidade"
                                           autocomplete="on"
                                           value="<?php echo isset($n->cid_cidade) ? $n->cid_cidade : null ?>">
                                </div> <!-- ./End md-form -->
                            </div> <!-- ./End col-md-4 -->
                        </div> <!-- ./End form-row -->

                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="md-form input-group">
                                    <input type="text" placeholder="UF" min="2" maxlength="2" class="form-control border rounded" required id="pesEstado" name="est_sigla"
                                           autocomplete="on"
                                           value="<?php echo isset($n->est_sigla) ? $n->est_sigla : null ?>">
                                </div> <!-- ./End md-form -->
                            </div> <!-- ./End col-md-4 -->
                            <div class="col-md-6">
                                <div class="md-form input-group">
                                    <input type="text" placeholder="Bairro" class="form-control border rounded" maxlength="250" required id="pesBairro" name="end_bairro"
                                           autocomplete="on"
                                           value="<?php echo isset($n->end_bairro) ? $n->end_bairro : null ?>">
                                </div> <!-- ./End md-form -->
                            </div> <!-- ./End col-md-4 -->
                        </div> <!-- ./End form-row -->

                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="md-form input-group">
                                    <input type="password" placeholder="Senha" minlength="8" maxlength="32" required id="senha" name="pes_senha"
                                           class="form-control border rounded" value="<?php echo isset($n->pes_senha) ? $n->pes_senha : null ?>">
                                    <div class="input-group-append">
                                        <button class="btn btn-info m-0 px-2" type="button" id="showRegisterPassword" title="Mostrar senha">
                                            <i class="fas fa-eye fa-lg"></i>
                                        </button>
                                    </div>
                                </div> <!-- ./End md-form -->
                            </div> <!-- ./End col-md-6 -->
                            <div class="col-md-6">
                                <div class="md-form input-group">
                                    <input type="password" placeholder="Repetir senha" minlength="8" maxlength="32" required id="repetirSenha" name="pes_repetirSenha"
                                           class="form-control border rounded" onblur="verificaSenha()" value="<?php echo isset($n->pes_repetirSenha) ? $n->pes_repetirSenha : null ?>">
                                    <div class="input-group-append">
                                            <button class="btn btn-info m-0 px-2" type="button" id="showConfirmarRegisterPasswordUsuario" title="Mostrar senha">
                                            <i class="fas fa-eye fa-lg"></i>
                                        </button>
                                    </div>
                                </div> <!-- ./End md-form -->
                            </div> <!-- ./End col-md-6 -->
                        </div> <!-- ./End form-row -->

                        <input type="hidden" name="method" value="insert"/>

                        <div class="col-md-6 mb-2 float-left">
                            <button class="btn btn-success btn-block btn-lg font-weight-bold" id="btnRegistrarPessoaFisica" type="submit">Registar&nbsp;&nbsp;
                                <i class="fas fa-sign-in-alt"></i>
                            </button>
                        </div> <!-- ./End text-center float-right col-md-12 d-block small mt-2 -->

                        <div class="col-md-6 mb-2 float-left">
                            <a href="registerEmpresa.php" class="btn info-color-dark btn-block btn-lg white-text font-weight-bold" id="btnRegistrarPessoaJuridica"><i
                                        class="fas fa-pencil-alt fa-lg"></i>&nbsp;&nbsp;Cadastre sua empresa</a>
                        </div> <!-- ./End text-center float-right col-md-12 d-block small mt-2 -->
                    </form> <!-- ./End Form -->
                </div> <!-- ./End modal-body mx-3 -->
            </div> <!-- ./End Material form register -->
        </div> <!-- ./End modal-dialog -->
    </div> <!-- ./End modal animated fadeIn -->
</main> <!-- ./End main -->

<!-- --------------------------------------------------------------- -->
<!-- ----------------- MODAL DE RECUPERAR SENHA -------------------- -->
<!-- --------------------------------------------------------------- -->
<main>
    <div class="modal animated fade" id="modalRecupeForm" tabindex="-1" role="dialog" aria-labelledby="modalRecuperarConta" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header danger-color-dark text-center">
                    <h4 class="modal-title w-100 white-text font-weight-bold">Recuperar senha</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="white-text h4-responsive" aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="text-center" action="#" method="post" style="color: #aaa;">
                        <div class="my-2 p-j grey-text">
                            <p>Para recuperar a sua senha, digita abaixo o email que foi cadastrado quando você fez o cadastro no nosso site.</p>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12">
                                <div class="md-form">
                                    <input type="email" placeholder="Digite seu email..." class="form-control" required id="emailRecuperarSenha" name="email_recuperar_senha"
                                           autocomplete="on">
                                </div>
                            </div>
                        </div>

                        <input type="hidden" name="method" value="insert"/>

                        <div class="text-center mt-2">
                            <button class="btn danger-color-dark btn-block font-weight-bold" name="btnRecuperarSenha" id="btn_recuperarSenha" type="submit">Enviar para email</button>
                        </div><!-- ./End text-center mt-2 -->
                    </form><!-- ./End Form -->
                </div><!-- ./End modal-body -->
            </div><!-- ./End modal-content -->
        </div><!-- ./End modal-dialog modal-dialog-centered modal-lg -->
    </div><!-- ./End modal animated bounceIn -->
</main> <!-- ./End main -->

<?php
include PROJECT_ROOT."/html/_partHTML/footer2.php"
?>

</body>