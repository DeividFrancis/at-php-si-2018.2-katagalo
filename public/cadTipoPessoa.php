<?php 
$title = "Cadastro pessoa";
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
            <h6 class="card-header info-color-dark py-3">
                <p class="my-2 h5-responsive white-text text-center font-weight-bold">Escolha opção para cadastro</p>
            </h6>

            <!--Card content-->
            <div class="card-body">

                <!-- Form -->
                <form class="text-center" style="color: #eee;">
                    <div class="form-row">
                        <div class="col-md-6">
                            <!-- Pessoa Física -->
                            <div class="md-form">
                                <a href="registerPessoaFisica.php">
                                    <button type="button" class="btn btn-success btn-md btn-block">Pessoa Fisíca</button>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Pessoa Juridíca -->
                            <div class="md-form">
                                <a href="registerPessoaJuridica.php">
                                    <button type="button" class="btn btn-blue btn-md btn-block">Pessoa Juridíca</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </form><!-- Form -->
            </div>
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