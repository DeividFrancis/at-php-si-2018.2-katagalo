<?php
$titulo = "Registro de pessoa juridica";
require_once "./config.php";
include PROJECT_ROOT . "/html/_partHTML/head.php" ?>

<body class="hidden-sn elegant-color clearfix animated fadeIn">
<main class="container">
    <div class="card">
        <h6 class="card-header info-color-dark text-center py-3">
            <p class="my-3 h5-responsive white-text float-left font-weight-bold" data-toggle="tooltip" data-placement="left" title="Voltar para área de login">
                <a href="index.php">
                    <i class="fas fa-arrow-left fa-2x white-text"></i>
                </a>
            </p>
            <p class="my-3 h3-responsive white-text text-center font-weight-bold">Cadastre sua empresa</p>
        </h6>


        <!--Card content-->
        <div class="card-body pt-0">

            <div class="my-2 p-j">
                <p>Para cadastro de Empresa, cadastrar os dados iguais aos da Receita Federal.</p>
            </div>

            <form class="text-center needs-validation" novalidate action="#" method="POST" style="color: #aaa;">
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="md-form">
                            <input type="text" placeholder="Razão social" id="razaoSocialPj" name="loj_razaosocial" maxlength="250" length="250" required class="form-control">
                            <div class="invalid-feedback">Digite a Razão Social</div>
                        </div> <!-- ./End md-form -->
                    </div><!-- ./End col-md-6 -->
                    <div class="col-md-6">
                        <div class="md-form">
                            <input type="text" placeholder="Nome fantasia" id="nomeFantasia" name="loj_fantasia" maxlength="250" length="250" required class="form-control">
                            <div class="invalid-feedback">Digite o Nome Fantasia</div>
                        </div> <!-- ./End md-form -->
                    </div><!-- ./End col-md-6 -->
                </div> <!-- ./End form-row -->

                <div class="form-row">
                    <div class="col-md-6">
                        <div class="md-form">
                            <input type="email" placeholder="Email Corporativo" required id="emailCorporativo" name="pes_login" maxlength="250" length="250" class="form-control">
                            <div class="invalid-feedback">Digite o email corporativo</div>
                        </div> <!-- ./End md-form -->
                    </div><!-- ./End col-md-6 -->
                    <div class="col-md-6">
                        <div class="md-form">
                            <input type="text" placeholder="CNPJ" class="form-control" required id="cnpjEmpresa" name="pes_receita" autocomplete="on">
                            <div class="invalid-feedback">Digite seu CNPJ</div>
                        </div> <!-- ./End md-form -->
                    </div><!-- ./End col-md-6 -->
                </div> <!-- ./End form-row -->

                <div class="form-row">
                    <div class="col-md-6">
                        <div class="md-form">
                            <input type="text" placeholder="CEP" id="pesCep" name="end_cep" pattern="[0-9] {5} [\ -]? [0-9] {3}" maxlength="8" length="8" required class="form-control" autocomplete="on">
                            <div class="invalid-feedback">Digite o CEP</div>
                            <div class="valid-feedback">CEP é valido</div>
                        </div> <!-- ./End md-form -->
                    </div> <!-- ./End col-md-6 -->
                    <div class="col-md-6">
                        <div class="md-form">
                            <input type="text" placeholder="Localização" id="pesLocalizacao" name="end_localizacao" maxlength="250" required class="form-control">
                            <div class="invalid-feedback">Escolha a localização</div>
                        </div> <!-- ./End md-form -->
                    </div> <!-- ./End col-md-6 -->
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
                            <input type="password" placeholder="Senha" minlength="8" maxlength="32" length="32" name="senha" required id="senhaUsuarioPj" class="form-control">
                            <div class="invalid-feedback">Digite as senhas</div>
                        </div> <!-- ./End md-form -->
                    </div> <!-- ./End col-md-6 -->
                    <div class="col-md-6">
                        <div class="md-form">
                            <input type="password" placeholder="Repetir senha" minlength="8" maxlength="32" length="32" name="repetirSenha" required id="repetirSenhaPj"
                                   class="form-control">
                            <div class="invalid-feedback">Digite as senhas</div>
                        </div> <!-- ./End md-form -->
                    </div> <!-- ./End col-md-6 -->
                </div> <!-- ./End form-row -->

                <div class="text-center float-left col-md-6 d-block small mt-2">
                    <button class="btn btn-success btn-block btn-md" name="btnRegistrarPj" type="submit" onClick="validarSenha()">Registar&nbsp;&nbsp;<i class="fas fa-sign-in-alt"></i></button>
                </div> <!-- ./end text-center float-left col-md-6 d-block small mt-2 -->

                <div class="text-center float-right col-md-6 d-block small mt-2">
                    <a class="btn btn-info btn-block btn-md" name="btnLoginPj" href="login.php">Já possui conta?</a>
                </div> <!-- ./End text-center float-right col-md-6 d-block small mt-2 -->
        </div>
    </div><!-- ./End Material form register -->
    </form><!-- Form -->
</main>

<main>

</main>

<?php
include PROJECT_ROOT . "/html/_partHTML/footer2.php"
?>

</body>

</html>