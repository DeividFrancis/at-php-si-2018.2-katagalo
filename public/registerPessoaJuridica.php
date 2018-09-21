<?php
$titulo = "Registro de pessoa juridica";
require_once "../config.php";
require PROJECT_ROOT."/html/_partHTML/head.php" ?>

<body class="hidden-sn elegant-color clearfix animated fadeIn">
    <header>
        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title red-text" id="logoutModalLabel">Deseja Sair?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                    </div>
                    <div class="modal-body">Se você selecionar "SAIR", irá encerrar a sua sessão. Deseja mesmo assim?</div>
                    <div class="modal-footer">
                        <button class="btn btn-cyan btn-md col-md-4" type="button" data-dismiss="modal">Cancelar</button>
                        <a class="btn btn-danger btn-md col-md-4" href="login.html">Sair</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main class="container">
        <div class="card">
            <h6 class="card-header info-color-dark text-center py-3">
                <strong class="my-2 h4-responsive white-text font-weight-bold">Cadastre sua empresa no KataGalo</strong>
            </h6>

            <!--Card content-->
            <div class="card-body pt-0">

                <div class="my-2 p-j">
                    <p>Para cadastro de Empresa, cadastrar os dados iguais aos da Receita Federal.</p>
                </div>

                <!-- Form -->
                <form class="text-center" action="#" method="POST" style="color: #aaa;">
                    <div class="form-row">
                        <div class="col-md-6">
                            <!-- Razão Social -->
                            <div class="md-form">
                                <input type="text" id="razaoSocialPessoaJuridica" required class="form-control"
                                    autofocus>
                                <label for="razaoSocialPessoaJuridica">Razão social</label>
                            </div> <!-- ./End md-form -->
                        </div><!-- ./End col-md-6 -->

                        <div class="col-md-6">
                            <!-- Nome Fantasia -->
                            <div class="md-form">
                                <input type="text" id="nomeFantasiaPessoaJuridica" required class="form-control">
                                <label for="nomeFantasiaPessoaJuridica">Nome fantasia</label>
                            </div> <!-- ./End md-form -->
                        </div><!-- ./End col-md-6 -->
                    </div> <!-- ./End form-row -->

                    <div class="form-row">
                        <div class="col-md-6">
                            <!-- Email Corporativo -->
                            <div class="md-form">
                                <input type="email" required id="emailCorporativoPessoaJuridica" class="form-control">
                                <label for="emailCorporativoPessoaJuridica">Email Corporativo</label>
                            </div> <!-- ./End md-form -->
                        </div><!-- ./End col-md-6 -->

                        <div class="col-md-6">
                            <!-- CNPJ -->
                            <div class="md-form">
                                <input type="text" class="form-control" required placeholder="00.000.000/0000-00" id="cnpjPessoaJuridica"
                                    maxlength="18" autocomplete="off">
                                <label for="cnpjPessoaJuridica">CNPJ</label>
                            </div> <!-- ./End md-form -->
                        </div><!-- ./End col-md-6 -->
                    </div> <!-- ./End form-row -->

                    <div class="form-row">
                        <div class="col-md-6">
                            <!-- Estado de localização -->
                            <div class="md-form">
                                <select class="mdb-select md-form colorful-select dropdown-info" required id="estadoDeLocalizaçãoPessoaJuridica">
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
                                <label for="estadoDeLocalizaçãoPessoaJuridica">Estado de localização</label>
                            </div> <!-- ./End md-form -->
                        </div> <!-- ./End col-md-6 -->

                        <div class="col-md-6">
                            <!-- Qual o seguimento da empresa? -->
                            <div class="md-form">
                                <select class="mdb-select md-form colorful-select dropdown-info" required id="seguimentoEmpresaPessoaJuridica">
                                    <option value="1">Academias</option>
                                    <option value="2">Adm, Consultoria, Contabilidade, Advocacia, Publicidade e outros
                                        escritórios</option>
                                    <option value="4">Armazéns e Logística</option>
                                    <option value="5">Comércio atacadista, Varejista e Representação comercial</option>
                                    <option value="6">Engenharia, Construção Civil e Arquitetura</option>
                                    <option value="7">Eventos</option>
                                    <option value="8">Igrejas</option>
                                    <option value="9">Indústrias</option>
                                    <option value="10">Medicina e Veterinária</option>
                                    <option value="11">ONGs, Sindicatos e Associações</option>
                                    <option value="12">Prestação de serviços (profissionais liberais, oficinas,
                                        cabeleireiros e outros)</option>
                                    <option value="13">Restaurantes e Fast Food</option>
                                    <option value="14">Turismo e Hotelaria</option>
                                    <option value="15">Outros</option>
                                </select>
                                <label for="seguimentoEmpresaPessoaJuridica">Qual o seguimento da empresa?</label>
                            </div> <!-- ./End md-form -->
                        </div> <!-- ./End col-md-6 -->
                    </div> <!-- ./End form-row -->

                    <div class="form-row">
                        <div class="col-md-6">
                            <!-- Inscrição Estadual -->
                            <div class="md-form">
                                <input type="text" required id="InscricaoEstadualPessoaJuridica" class="form-control">
                                <label for="InscricaoEstadualPessoaJuridica">Inscrição Estadual</label>
                            </div> <!-- ./End md-form -->
                        </div> <!-- ./End col-md-6 -->

                        <div class="col-md-6">
                            <!-- Checkbox Isento -->
                            <div class="md-form">
                                <div class="form-check float-left">
                                    <input type="checkbox" class="form-check-input" id="checkboxIsentoPessoaJuridica">
                                    <label class="form-check-label" for="checkboxIsentoPessoaJuridica">Isento</label>
                                    <!-- FALTA FAZER O CÓDIGO JAVASCRIPT PARA CHECAR SE O INPUT INSCRIÇÃO ESTUDAL É ISENTO OU NÃO NO CHECKBOX -->
                                </div> <!-- ./End form-check float-left -->
                            </div> <!-- ./End md-form -->
                        </div> <!-- ./End col-md-6 -->
                    </div> <!-- ./End form-row -->

                    <div class="form-row">
                        <div class="col-md-6">
                            <!-- Senha -->
                            <div class="md-form">
                                <input type="password" minlength="6" maxlength="15" required id="senhaUsuarioPessoaJuridica"
                                    class="form-control" data-toggle="tooltip" data-placement="top" title="Digitar senha com no mínimo 6 caracteres de 'a-z', '0-9', e com máximo 15 caracteres">
                                <label for="senhaUsuarioPessoaJuridica">Senha</label>
                            </div> <!-- ./End md-form -->
                        </div> <!-- ./End col-md-6 -->

                        <div class="col-md-6">
                            <!-- Repetir Senha -->
                            <div class="md-form">
                                <input type="password" minlength="6" maxlength="15" required id="repetirSenhaUsuarioPessoaJuridica"
                                    class="form-control">
                                <label for="repetirSenhaUsuarioPessoaJuridica">Repetir Senha</label>
                            </div> <!-- ./End md-form -->
                        </div> <!-- ./End col-md-6 -->
                    </div> <!-- ./End form-row -->

                    <div class="text-center float-left col-md-6 d-block small mt-2">
                        <button class="btn btn-success btn-block btn-md" id="btnRegistrarPessoaJuridica" type="submit">Registar&nbsp;&nbsp;
                            <i class="fas fa-sign-in-alt"></i></button>
                    </div> <!-- ./end text-center float-left col-md-6 d-block small mt-2 -->

                    <div class="text-center float-right col-md-6 d-block small mt-2">
                        <a class="btn btn-info btn-block btn-md" id="btnLoginPessoaJuridica" href="loginPessoaJuridica.php">Já
                            possui conta?</a>
                    </div> <!-- ./End text-center float-right col-md-6 d-block small mt-2 -->
            </div>
        </div><!-- ./End Material form register -->
        </form><!-- Form -->
    </main>

    <main>

    </main>

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>

    <!-- Tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

    <!-- Outros JS's -->
    <script type="text/javascript" src="js/limiteDeCaracteres.js"></script>
    <script type="text/javascript" src="js/ajax.js"></script>
    <script type="text/javascript" src="js/mascaras.js"></script>

    <script>
        // Material Select Initialization
        $(document).ready(function () {
            $('.mdb-select').material_select();
        });

        // SideNav Initialization
        $(".button-collapse").sideNav();

        new WOW().init();

        // Tooltips Initialization
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
</body>

</html>