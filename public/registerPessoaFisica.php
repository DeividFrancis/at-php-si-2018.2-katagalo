<?php
$titulo = "Cadastro de pessoa fisica";
require_once "../config.php";
require PROJECT_ROOT."/html/_partHTML/head.php" ?>

<body class="hidden-sn elegant-color clearfix animated fadeIn">
    <main class="container">
        <div class="card">
            <h6 class="card-header info-color-dark text-center py-3">
                <p class="my-3 h5-responsive white-text float-left font-weight-bold">
                    <a href="index.php">
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
                <form class="text-center" action="#" method="POST" style="color: #aaa;">
                    <div class="form-row">
                        <div class="col-md-6">
                            <!-- Primeiro Nome -->
                            <div class="md-form">
                                <input type="text" id="primeiroNomeUsuarioPessoaFisica" required class="form-control"
                                    autofocus>
                                <label for="primeiroNomeUsuarioPessoaFisica">Nome Completo</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6">
                            <!-- Email -->
                            <div class="md-form">
                                <input type="email" required id="emailUsuarioPessoaFisica" class="form-control">
                                <label for="emailUsuarioPessoaFisica">Email</label>
                            </div> <!-- ./End md-form -->
                        </div> <!-- ./End col-md-6 -->

                        <div class="col-md-6">
                            <!-- CPF -->
                            <div class="md-form">
                                <input type="text" class="form-control" placeholder="000.000.000-00" id="cpfUsuarioPessoaFisica"
                                    maxlength="14" autocomplete="off">
                                <label for="cpfUsuarioPessoaFisica">CPF</label>
                            </div> <!-- ./End md-form -->
                        </div> <!-- ./End col-md-6 -->
                    </div> <!-- ./End form-row -->

                    <div class="form-row">
                        <div class="col-md-6">
                            <!-- Data de Nascimento -->
                            <div class="md-form">
                                <input type="text" class="form-control" required id="dataNascimentoUsuarioPessoaFisica"
                                    placeholder="00/00/0000" id="dataNascimentoUsuarioPessoaFisica" maxlength="10"
                                    autocomplete="off">
                                <label for="dataNascimentoUsuarioPessoaFisica">Data de Nascimento</label>
                            </div> <!-- ./End md-form -->
                        </div> <!-- ./End col-md-6 -->

                        <div class="col-md-6">
                            <!-- Sexo -->
                            <div class="md-form">
                                <select class="mdb-select md-form colorful-select dropdown-info" required id="sexoUsuarioPessoaFisica">
                                    <option value="0" disabled selected>Escolha o sexo...</option>
                                    <option value="1">Masculino</option>
                                    <option value="2">Feminino</option>
                                </select>
                                <label for="sexoUsuarioPessoaFisica">Sexo</label>
                            </div> <!-- ./End md-form -->
                        </div> <!-- ./End col-md-6 -->
                    </div> <!-- ./End form-row -->

                    <div class="form-row">
                        <div class="col-md-6">
                            <!-- Senha -->
                            <div class="md-form">
                                <input type="password" minlength="6" maxlength="15" required id="senhaUsuarioPessoaFisica"
                                    class="form-control" data-toggle="tooltip" data-placement="top" title="Digitar senha com no mínimo 6 caracteres de 'a-z', '0-9', e com máximo 15 caracteres">
                                <label for="senhaUsuarioPessoaFisica">Senha</label>
                            </div> <!-- ./End md-form -->
                        </div> <!-- ./End col-md-6 -->

                        <div class="col-md-6">
                            <!-- Repetir Senha -->
                            <div class="md-form">
                                <input type="password" minlength="6" maxlength="15" required id="repetirSenhaUsuarioPessoaFisica"
                                    class="form-control">
                                <label for="repetirSenhaUsuarioPessoaFisica">Repetir Senha</label>
                            </div> <!-- ./End md-form -->
                        </div> <!-- ./End col-md-6 -->
                    </div> <!-- ./End form-row -->

                    <div class="text-center float-left col-md-6 d-block small mt-2">
                        <button class="btn btn-success btn-block btn-md" id="btnRegistrarPessoaFisica" type="submit">Registar&nbsp;&nbsp;
                            <i class="fas fa-sign-in-alt"></i></button>
                    </div>

                    <div class="text-center float-right col-md-6 d-block small mt-2">
                        <a class="btn btn-info btn-block btn-md" id="btnLoginPessoaFisica" href="loginPessoaFisica.php">Já
                            possui conta?</a>
                    </div>
            </div>
        </div><!-- ./End Material form register -->
        </form><!-- Form -->
    </main>

    <main>

    </main>

    	<!-- // JQuery -->
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>

    <!-- // Tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>

    <!-- // Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- // MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

    <!-- // Outros JS's -->
    <script type="text/javascript" src="js/limiteDeCaracteres.js"></script>
    <script type="text/javascript" src="js/ajax.js"></script>
    <script type="text/javascript" src="js/mascaras.js"></script>
    <script type="text/javascript" src="js/uploadImg.js"></script>

<script>
    // Material Select Initialization
    $(document).ready(function () {
        $('.mdb-select').material_select();
    });

    // SideNav Initialization
    $(".button-collapse").sideNav()

    new WOW().init()

    // Tooltips Initialization
    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
    })
</script>

</body>

</html>