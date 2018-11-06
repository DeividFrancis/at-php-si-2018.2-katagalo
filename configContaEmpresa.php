<?php
$titulo = "Configurações da conta - KataGalo";
require_once "./config.php";
include PROJECT_ROOT . "/html/_partHTML/head.php";
include PROJECT_ROOT . "/html/_partHTML/headerConfigContaEmpresa.php" ?>

<body class="hidden-sn cyan-skin clearfix animated fadeIn">
<main>
    <div class="content">
        <div class="container">
            <div class="form-row">
                <!-- ./Start foto do perfil -->
                <div class="col-md-4 mb-5">
                    <div class="card card-profile container">
                        <div class="card-avatar">
                            <div class="zoom">
                                <input type="file" required id="user-add-input" onchange="readURL(this, 'user-add');" name="foto" style="display:none"/>
                                <img class="rounded-circle container d-block img-fluid logo-perfil" src="images/logo_mercados/img-test-mercado.jpg" id="image-user-add" onclick='addImageUser()'/>
                            </div> <!-- ./End zoom -->
                        </div> <!-- ./End card-avatar -->
                        <div class="content">
                            <p class="card-title font-weight-bold h3-responsive text-center">NOME DA EMPRESA</p>
                        </div> <!-- ./End content -->
                    </div> <!-- ./End card card-profile container -->
                    <button class="btn btn-danger">teste</button>
                </div> <!-- ./End foto do perfil -->



                <div class="col-md-8 mb-4">
                    <div class="card">
                        <div class="card-header info-color-dark">
                            <p class="my-0 h3-responsive white-text text-center font-weight-bold">Dados do Perfil</p>
                        </div>
                        <div class="card-content">
                            <form class="text-center container" action="#" method="POST" style="color: #aaa;">
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
                                            <input type="text" placeholder="CNPJ (não pode edita)" class="form-control" required id="cnpjEmpresa" name="pes_receita" autocomplete="on" disabled>
                                            <div class="invalid-feedback">Digite seu CNPJ</div>
                                        </div> <!-- ./End md-form -->
                                    </div><!-- ./End col-md-6 -->
                                </div> <!-- ./End form-row -->

                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="md-form">
                                            <input type="text" placeholder="CEP" id="pesCep" name="end_cep" pattern="[0-9] {5} [\ -]? [0-9] {3}" maxlength="9" required class="form-control" autocomplete="on">
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

                                <div class="col-md-8 float-right">
                                    <div class="md-form">
                                        <button type="submit" name="btnConfirmarAtualizacao" class="btn btn-purple btn-block mb-2">Confirmar</button>
                                        <div class="clearfix"></div>
                                    </div> <!-- ./End md-form -->
                                </div> <!-- ./End col-md-8 float-right -->
                            </form> <!-- ./End form -->
                        </div> <!-- ./End card-content -->
                    </div> <!-- ./End card -->
                </div> <!-- ./End col-md-8 -->
            </div>
        </div>
    </div>
</main>

<main>

</main>

<?php
include PROJECT_ROOT . "/html/_partHTML/footer.php"
?>
</body>