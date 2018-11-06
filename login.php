<?php
$titulo = "Login - KataGalo";
require_once "./config.php";
include PROJECT_ROOT . "/html/_partHTML/head.php" ?>

<body class="hidden-sn elegant-color clearfix">
<main class="container animated bounceIn">
    <div class="card">
        <h6 class="card-header info-color-dark float-left py-3">
            <p class="my-2 h5-responsive white-text float-left font-weight-bold" data-toggle="tooltip" data-placement="left" title="Voltar para página inicial">
                <a href="index.php">
                    <i class="fas fa-arrow-left fa-2x white-text"></i>
                </a>
            </p>
            <p class="my-3 h3-responsive white-text text-center font-weight-bold">Fazer Login</p>
        </h6>

        <!--Card content-->
        <div class="card-body px-lg-5 pt-0">
            <form class="text-center needs-validation" novalidate action="#" method="POST" style="color: #aaa;">
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="md-form">
                            <input type="text" placeholder="CPF/CNPJ" class="form-control cpfcnpj" required id="login-cpfcnpj" name="pes_receita" autocomplete="on">
                            <div class="invalid-feedback">Você não preencheu o CPF/CNPJ</div>
                            <div class="valid-feedback">CPF/CNPJ correto</div>
                        </div> <!-- ./End md-form -->
                    </div> <!-- ./End col-md-6 -->
                    <div class="col-md-6">
                        <div class="md-form">
                            <input type="password" placeholder="Senha" minlength="8" maxlength="32" length="32" name="pes_senha" required id="loginSenhaUsuario" class="form-control">
                            <div class="invalid-feedback">Senha precisa ser preenchida</div>
                            <div class="valid-feedback">Senha está correta</div>
                        </div> <!-- ./End md-form -->
                    </div> <!-- ./End col-md-6 -->
                </div> <!-- ./End form-row -->

                <div class="text-center float-right col-md-4 d-block small mt-2">
                    <button class="btn btn-success btn-block btn-xl" id="btnLogin" type="submit">Entrar&nbsp;&nbsp;
                        <i class="fas fa-sign-in-alt fa-lg"></i>
                    </button> <!-- ./text-center float-right col-md-6 d-block small mt-2 -->
                </div>

                <div class="text-center float-right col-md-4 d-block small mt-2">
                    <a class="btn btn-warning btn-block btn-xl" data-toggle="modal" data-target="#modalRegisterForm" id="btnLogin">Registrar&nbsp;&nbsp;
                        <i class="fas fa-pencil-alt fa-lg"></i>
                    </a> <!-- ./text-center float-right col-md-6 d-block small mt-2 -->
                </div>

                <div class="text-center float-right col-md-4 d-block small mt-2">
                    <a type="button" class="btn btn-link btn-block btn-md" id="btnRecuperarSenha" data-toggle="modal" data-target="#modalRecupeForm">
                        <p class="blue-text font-weight-bold">Esqueci minha senha</p>
                    </a> <!-- ./End text-center float-right col-md-4 d-block small mt-2 -->
                </div> <!-- ./End text-center float-right col-md-6 d-block small mt-2 -->
            </form><!-- ./End Form -->
        </div> <!-- ./End card-body px-lg-5 pt-0 -->
    </div><!-- ./End Material form login -->
</main>

<!-- --------------------------------------------------------------- -->
<!-- ----------------- MODAL DE REGISTRO --------------------------- -->
<!-- --------------------------------------------------------------- -->
<main class="container">
    <div class="modal animated bounceIn" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="modalRegisterConta" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header info-color-dark text-center">
                    <h4 class="modal-title w-100 white-text font-weight-bold">Registrar</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="white-text h4-responsive" aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <form  class="text-center needs-validation" novalidate action="#" method="POST" style="color: #aaa;">
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="md-form">
                                    <input type="text" placeholder="Nome Completo" maxlength="250" length="250" id="nomeCompleto" required name="pes_nome" class="form-control">
                                    <div class="invalid-feedback">Você não preencheu o nome completo</div>
                                </div> <!-- ./End md-form -->
                            </div> <!-- ./End col-md-6 -->
                            <div class="col-md-6">
                                <div class="md-form">
                                    <input type="email" placeholder="Email" maxlength="250" length="250" required id="pesEmailLogin" name="pes_login" class="form-control">
                                    <div class="invalid-feedback">Você não preencheu o email</div>
                                </div> <!-- ./End md-form -->
                            </div> <!-- ./End col-md-6 -->
                        </div> <!-- ./End form-row -->

                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="md-form">
                                    <input type="text" placeholder="CPF/CNPJ" class="form-control cpfcnpj" id="registrar-cpfcnpj" required name="pes_receita" autocomplete="on">
                                    <div class="invalid-feedback">Você não preencheu o CPF/CNPJ</div>
                                </div> <!-- ./End md-form -->
                            </div> <!-- ./End col-md-6 -->
                            <div class="col-md-6">
                                <div class="md-form">
                                    <input type="text" placeholder="CEP" class="form-control" maxlength="9" id="pesCep" required name="end_cep" autocomplete="on">
                                    <div class="invalid-feedback">Digite o CEP</div>
                                </div> <!-- ./End md-form -->
                            </div> <!-- ./End col-md-4 -->
                        </div> <!-- ./End form-row -->

                        <div class="form-row">
                            <div class="col-md-4">
                                <div class="md-form">
                                    <input type="text" placeholder="Endereço" maxlength="250" length="250" class="form-control" id="pesEndereco" required name="end_endereco" autocomplete="on">
                                    <div class="invalid-feedback">Digite seu endereço</div>
                                </div> <!-- ./End md-form -->
                            </div> <!-- ./End col-md-4 -->
                            <div class="col-md-4">
                                <div class="md-form">
                                    <input type="text" placeholder="Número" maxlength="20" class="form-control" id="pesNumero" required name="end_numero" autocomplete="on">
                                    <div class="invalid-feedback">Digite seu número</div>
                                </div> <!-- ./End md-form -->
                            </div> <!-- ./End col-md-4 -->
                            <div class="col-md-4">
                                <div class="md-form">
                                    <input type="text" placeholder="Cidade" maxlength="250" length="250" class="form-control" id="pesCidade" required name="cid_cidade" autocomplete="on">
                                    <div class="invalid-feedback">Digite sua cidade</div>
                                </div> <!-- ./End md-form -->
                            </div> <!-- ./End col-md-4 -->
                        </div> <!-- ./End form-row -->

                        <div class="form-row">
                            <div class="col-md-4">
                                <div class="md-form">
                                    <input type="text" placeholder="Estado" min="2" maxlength="2" length="2" class="form-control" id="pesEstado" required name="est_sigla" autocomplete="on">
                                    <div class="invalid-feedback">Digite seu estado</div>
                                </div> <!-- ./End md-form -->
                            </div> <!-- ./End col-md-4 -->
                            <div class="col-md-4">
                                <div class="md-form">
                                    <input type="text" placeholder="Bairro" class="form-control" id="pesBairro" maxlength="250" length="250" required name="end_bairro" autocomplete="on">
                                    <div class="invalid-feedback">Digite seu bairro</div>
                                </div> <!-- ./End md-form -->
                            </div> <!-- ./End col-md-4 -->
                            <div class="col-md-4">
                                <div class="md-form">
                                    <input type="text" placeholder="Complemento" class="form-control" id="pesComplemento" maxlength="250" length="250" required name="end_complemento" autocomplete="on">
                                    <div class="invalid-feedback">Digite seu complemento</div>
                                </div> <!-- ./End md-form -->
                            </div> <!-- ./End col-md-4 -->
                        </div> <!-- ./End form-row -->

                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="md-form">
                                    <input type="password" placeholder="Senha" minlength="8" maxlength="32" length="32" required id="registrarSenhaUsuario" name="pes_senha" class="form-control">
                                    <div class="invalid-feedback">Os campos de senhas devem ser preenchidos</div>
                                </div> <!-- ./End md-form -->
                            </div> <!-- ./End col-md-6 -->
                            <div class="col-md-6">
                                <div class="md-form">
                                    <input type="password" placeholder="Repetir senha" minlength="8" maxlength="32" length="32" required id="repetirRegistrarsenhaUsuario" name="pes_senha" onblur="verificaSenha()" class="form-control">
                                    <div class="invalid-feedback">Os campos de senhas devem ser preenchidos</div>
                                </div> <!-- ./End md-form -->
                            </div> <!-- ./End col-md-6 -->
                        </div> <!-- ./End form-row -->

                        <div class="text-center float-right col-md-12 d-block small mt-2">
                            <button class="btn btn-success btn-block btn-xl" id="btnRegistrarPessoaFisica" type="submit">Registar&nbsp;&nbsp;
                                <i class="fas fa-sign-in-alt"></i>
                            </button>
                        </div> <!-- ./End text-center float-right col-md-12 d-block small mt-2 -->
                    </form> <!-- ./End Form -->
                </div> <!-- ./End modal-body mx-3 -->
            </div> <!-- ./End Material form register -->
        </div> <!-- ./End modal-dialog -->
    </div> <!-- ./End modal animated fadeIn -->
</main>

<!-- --------------------------------------------------------------- -->
<!-- ----------------- MODAL DE RECUPERAR SENHA -------------------- -->
<!-- --------------------------------------------------------------- -->
<main class="container">
    <div class="modal animated bounceIn" id="modalRecupeForm" tabindex="-1" role="dialog" aria-labelledby="modalRecuperarConta" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header danger-color-dark text-center">
                    <h4 class="modal-title w-100 white-text font-weight-bold">Recuperar senha</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="white-text h4-responsive" aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <!-- Form -->
                    <form class="text-center needs-validation" novalidate action="#" method="POST" style="color: #aaa;">
                        <div class="my-3 p-j grey-text">
                            <p>Para recuperar a sua senha, digita abaixo o email que foi cadastrado, quando você fez o cadastro.</p>
                        </div>

                        <div class="form-row">
                            <div class="col-md-12">
                                <!-- CPF -->
                                <div class="md-form">
                                    <input type="email" placeholder="Digite seu email..." class="form-control" required id="emailRecuperarSenha" name="email_recuperar_senha" autocomplete="on">
                                    <div class="invalid-feedback">Você não preencheu com seu email</div>
                                    <div class="valid-feedback">Email está correto</div>
                                </div>
                            </div>
                        </div>

                        <div class="text-center container col-md-7 small mt-2">
                            <button class="btn btn-danger btn-block btn-xl" name="btnRecuperarSenha" type="submit">Enviar para email</button>
                        </div>
                    </form><!-- Form -->
                </div>
            </div>
        </div>
    </div>

</main>

<?php
include PROJECT_ROOT . "/html/_partHTML/footer2.php"
?>

</body>