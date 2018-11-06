<?php
$titulo = "Registro de pessoa juridica";
require_once "../config.php";
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
            <p class="my-3 h3-responsive white-text text-center font-weight-bold">Cadastre sua empresa</p>
        </h6>


        <!--Card content-->
        <div class="card-body pt-0">

            <div class="my-2 p-j">
                <p>Para cadastro de Empresa, cadastrar os dados iguais aos da Receita Federal.</p>
            </div>

            <!-- Form -->
            <form class="text-center" action="#" method="POST" name="cadastroEmpresa" onsubmit="return validarSenha();" style="color: #aaa;">
                <div class="form-row">
                    <div class="col-md-6">
                        <!-- Razão Social -->
                        <div class="md-form">
                            <input type="text" id="razaoSocialPj" name="razaoSocial" maxlength="250" length="250" required class="form-control" autofocus>
                            <label for="razaoSocialPj">Razão social</label>
                        </div> <!-- ./End md-form -->
                    </div><!-- ./End col-md-6 -->

                    <div class="col-md-6">
                        <!-- Nome Fantasia -->
                        <div class="md-form">
                            <input type="text" id="nomeFantasiaPj" name="fantasia" maxlength="250" length="250" required class="form-control">
                            <label for="nomeFantasiaPj">Nome fantasia</label>
                        </div> <!-- ./End md-form -->
                    </div><!-- ./End col-md-6 -->
                </div> <!-- ./End form-row -->

                <div class="form-row">
                    <div class="col-md-6">
                        <!-- Email Corporativo -->
                        <div class="md-form">
                            <input type="email" required id="emailCorporativoPj" name="emailEmpresa" maxlength="250" length="250" class="form-control">
                            <label for="emailCorporativoPj">Email Corporativo</label>
                        </div> <!-- ./End md-form -->
                    </div><!-- ./End col-md-6 -->

                    <div class="col-md-6">
                        <!-- CNPJ -->
                        <div class="md-form">
                            <input type="text" class="form-control" required id="cnpjEmpresa" name="cnpjEmpresa" maxlength="18" autocomplete="on">
                            <label for="cnpjEmpresa">CNPJ</label>
                        </div> <!-- ./End md-form -->
                    </div><!-- ./End col-md-6 -->
                </div> <!-- ./End form-row -->

                <div class="form-row">
                    <div class="col-md-6">
                        <!-- Estado de localização -->
                        <div class="md-form">
                            <select class="mdb-select md-form colorful-select dropdown-info" required id="estadoDeLocalizaçãoPj">
                                <option value="1">AC - Acre</option>
                                <option value="2">AL - Alagoas</option>
                                <option value="3">AP - Amapá</option>
                                <option value="4">AM - Amazonas</option>
                                <option value="5">BA - Bahia</option>
                                <option value="6">CE - Ceará</option>
                                <option value="7">DF - Distrito Federal</option>
                                <option value="8">ES - Espirito Santo</option>
                                <option value="9">GO - Goiás</option>
                                <option value="10">MA - Maranhão</option>
                                <option value="11">MT - Mato Grosso</option>
                                <option value="12">MS - Mato Grosso do Sul</option>
                                <option value="13">MG - Minas Gerais</option>
                                <option value="14">PA - Pará</option>
                                <option value="15">PB - Paraíba</option>
                                <option value="16">PR - Paraná</option>
                                <option value="17">PE - Pernambuco</option>
                                <option value="18">PI - Piauí</option>
                                <option value="19">RJ - Rio de Janeiro</option>
                                <option value="20">RN - Rio Grande do Norte</option>
                                <option value="21">RS - Rio Grande do Sul</option>
                                <option value="22">RO - Rondônia</option>
                                <option value="23">RR - Roraima</option>
                                <option value="24">SC - Santa Catarina</option>
                                <option value="25">SP - São Paulo</option>
                                <option value="26">SE - Sergipe</option>
                                <option value="27">TO - Tocanntins</option>
                            </select> <!-- ./End Select -->
                            <label for="estadoDeLocalizaçãoPj">Estado de localização</label>
                        </div> <!-- ./End md-form -->
                    </div> <!-- ./End col-md-6 -->

                    <div class="col-md-6">
                        <!-- Qual o seguimento da empresa? -->
                        <div class="md-form">
                            <select class="mdb-select md-form colorful-select dropdown-info" required id="seguimentoEmpresaPj">
                                <option value="1">Academias</option>
                                <option value="2">Adm, Consultoria, Contabilidade, Advocacia, Publicidade e outros escritórios</option>
                                <option value="4">Armazéns e Logística</option>
                                <option value="5">Comércio atacadista, Varejista e Representação comercial</option>
                                <option value="6">Engenharia, Construção Civil e Arquitetura</option>
                                <option value="7">Eventos</option>
                                <option value="8">Igrejas</option>
                                <option value="9">Indústrias</option>
                                <option value="10">Medicina e Veterinária</option>
                                <option value="11">ONGs, Sindicatos e Associações</option>
                                <option value="12">Prestação de serviços (profissionais liberais, oficinas, cabeleireiros e outros)</option>
                                <option value="13">Restaurantes e Fast Food</option>
                                <option value="14">Turismo e Hotelaria</option>
                                <option value="15">Outros</option>
                            </select>
                            <label for="seguimentoEmpresaPj">Qual o seguimento da empresa?</label>
                        </div> <!-- ./End md-form -->
                    </div> <!-- ./End col-md-6 -->
                </div> <!-- ./End form-row -->

                <div class="form-row">
                    <div class="col-md-6">
                        <!-- Senha -->
                        <div class="md-form">
                            <input type="password" minlength="8" maxlength="32" length="32" name="senha" required id="senhaUsuarioPj" class="form-control">
                            <label for="senhaUsuarioPj">Senha</label>
                        </div> <!-- ./End md-form -->
                    </div> <!-- ./End col-md-6 -->

                    <div class="col-md-6">
                        <!-- Repetir Senha -->
                        <div class="md-form">
                            <input type="password" minlength="8" maxlength="32" name="repetirSenha" length="32" required id="repetirSenhaUsuarioPj"
                                   class="form-control">
                            <label for="repetirSenhaUsuarioPj">Repetir Senha</label>
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
include PROJECT_ROOT."/html/_partHTML/footer2.php"
?>

</body>

</html>