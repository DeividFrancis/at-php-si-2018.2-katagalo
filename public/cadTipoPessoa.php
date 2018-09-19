<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="author" content="Site Mercado" />
    <title>Cadastro - KataGalo</title>

    <link rel="icon" type="image/png" href="images/icons/favicon.png" />

    <!-- Chrome, Firefox OS, Opera and Vivaldi -->
    <meta name="theme-color" content="#17a2b8">

    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#17a2b8">

    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#17a2b8">

    <!-- Google Ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/v4-shims.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/v4-shims.js"></script>

    <!-- Material Design Bootstrap -->
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/mdb.min.css" rel="stylesheet">
    <link href="css/style.css" type="text/css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
</head>

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