<?php
$titulo = "Cadastro de pessoa fisica";
require_once "../config.php";
include PROJECT_ROOT."/html/_partHTML/head.php" ?>

<body class="hidden-sn elegant-color clearfix animated fadeIn">
<main class="container">
    <div class="card">
        <h6 class="card-header info-color-dark text-center py-3">
            <p class="my-3 h5-responsive white-text float-left font-weight-bold" data-toggle="tooltip" data-placement="left" title="Voltar para área de login">
                <a href="login.php">
                    <i class="fas fa-arrow-left fa-2x white-text"></i>
                </a>
            </p>
            <p class="my-3 h3-responsive white-text text-center font-weight-bold">CADASTRE-SE NO KATAGALO</p>
        </h6>

        <!--Card content-->
        <div class="card-body px-lg-5 pt-0">

            <div class="my-2 p-j">
                <p>Apenas para cadastro de Pessoa Física.</p>
            </div>

            <!-- Form -->
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
                            <input type="text" placeholder="CPF/CNPJ" class="form-control" id="cpfcnpj" required name="pes_receita" autocomplete="on" onblur="validaCPF()">
                            <div class="invalid-feedback">Você não preencheu o CPF/CNPJ</div>
                        </div> <!-- ./End md-form -->
                    </div> <!-- ./End col-md-6 -->
                    <div class="col-md-6">
                        <div class="md-form">
                            <input type="text" placeholder="CEP" class="form-control" maxlength="8" length="8" id="pesCep" required name="end_cep" autocomplete="on">
                            <div class="invalid-feedback">Digite o CEP</div>
                        </div> <!-- ./End md-form -->
                    </div> <!-- ./End col-md-6 -->
                </div> <!-- ./End form-row -->

                <div class="form-row">
                    <div class="col-md-6">
                        <div class="md-form">
                            <input type="text" placeholder="Endereço" maxlength="250" length="250" class="form-control" id="pesEndereco" required name="end_endereco" autocomplete="on">
                            <div class="invalid-feedback">Digite seu endereço</div>
                        </div> <!-- ./End md-form -->
                    </div> <!-- ./End col-md-6 -->
                    <div class="col-md-6">
                        <div class="md-form">
                            <input type="text" placeholder="Cidade" maxlength="250" length="250" class="form-control" id="pesCidade" required name="cid_cidade" autocomplete="on">
                            <div class="invalid-feedback">Digite sua cidade</div>
                        </div> <!-- ./End md-form -->
                    </div> <!-- ./End col-md-6 -->
                </div> <!-- ./End form-row -->

                <div class="form-row">
                    <div class="col-md-6">
                        <div class="md-form">
                            <input type="text" placeholder="Estado" min="2" maxlength="2" length="2" class="form-control" id="pesEstado" required name="est_sigla" autocomplete="on">
                            <div class="invalid-feedback">Digite seu estado</div>
                        </div> <!-- ./End md-form -->
                    </div> <!-- ./End col-md-6 -->
                    <div class="col-md-6">
                        <div class="md-form">
                            <input type="text" placeholder="Bairro" class="form-control" id="pesBairro" maxlength="250" length="250" required name="end_bairro" autocomplete="on">
                            <div class="invalid-feedback">Digite seu bairro</div>
                        </div> <!-- ./End md-form -->
                    </div> <!-- ./End col-md-6 -->
                </div> <!-- ./End form-row -->

                <div class="form-row">
                    <div class="col-md-6">
                        <div class="md-form">
                            <input type="password" placeholder="Senha" minlength="8" maxlength="32" length="32" required id="senhaUsuario" name="pes_senha" class="form-control">
                        </div> <!-- ./End md-form -->
                    </div> <!-- ./End col-md-6 -->
                    <div class="col-md-6">
                        <div class="md-form">
                            <input type="password" placeholder="Repetir senha" minlength="8" maxlength="32" length="32" required id="senhaUsuario2" name="pes_senha" onblur="verificaSenha()" class="form-control">
                            <div class="invalid-feedback">Os campos de senhas devem ser preenchidos</div>
                        </div> <!-- ./End md-form -->
                    </div> <!-- ./End col-md-6 -->
                </div> <!-- ./End form-row -->

                <div class="text-center float-left col-md-6 d-block small mt-2">
                    <button class="btn btn-success btn-block btn-md" id="btnRegistrarPessoaFisica" type="submit">Registar&nbsp;&nbsp;
                        <i class="fas fa-sign-in-alt"></i></button>
                </div>

                <div class="text-center float-right col-md-6 d-block small mt-2">
                    <a class="btn btn-info btn-block btn-md" id="btnLoginPessoaFisica" href="login.php">Já possui conta?</a>
                </div>
        </div>
    </div><!-- ./End Material form register -->
    </form><!-- Form -->
</main>

<main>

</main>

<?php
include PROJECT_ROOT."/html/_partHTML/footer2.php"
?>
</body>

</html>