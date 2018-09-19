<?php 
$title = "index";
require_once "../config.php";
require PROJECT_ROOT."/html/_partHTML/head.php" ?>

<body class="hidden-sn aqua-gradient clearfix animated fadeIn">

    <header>
        <div class="container">
            <div class="card card-login mx-auto mt-5 animated bounceIn">
                <div class="card-header text-center h5 red-text font-weight-bold">
                    <a href="index.php" class="h5 blue-text float-left">
                        <i class="fa fa-undo" tool></i>&nbsp;Voltar
                    </a>
                </div>
                <div class="card-body">
                    <div class="text-center mb-4">
                        <h4 class="red-text font-weight-bold">Você esqueceu sua senha?</h4>
                        <p class="grey-text">Digite seu email abaixo e siga as instruções que lhe enviaremos no email
                            para poder redefinir sua senha.</p>
                    </div>
                    <form>
                        <div class="form-group">
                            <div class="form-label-group">
                                <input type="email" id="inputRecoverEmail" class="form-control" placeholder="Digite seu email"
                                    required autofocus="autofocus">
                                <label for="inputRecoverEmail">Digite seu email</label>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-danger btn-rounded btn-md btn-block" url="login.php">Recuperar
                                Senha</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>

    <!-- Tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

    <!-- Outros JS's -->
    <script type="text/javascript" src="js/ajax.js"></script>
    <script type="text/javascript" src="js/limiteDeCaracteres.js"></script>

    <script>
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