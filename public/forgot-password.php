<!DOCTYPE html>
<html>

<?php

?>


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Recuperar senha - KataGalo</title>

    <link rel="icon" type="image/png" href="images/icons/favicon.png" />

    <!-- Chrome, Firefox OS, Opera and Vivaldi -->
    <meta name="theme-color" content="#17a2b8">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#17a2b8">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#17a2b8">

    <!-- Google Ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/v4-shims.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/v4-shims.js"></script>


    <!-- Modificed CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <!-- Material Design -->
    <link href="css/mdb.min.css" rel="stylesheet">

</head>

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
                        <p class="grey-text">Digite seu email abaixo e siga as instruções que lhe enviaremos no email para poder redefinir sua senha.</p>
                    </div>
                <form>
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="email" id="inputRecoverEmail" class="form-control" placeholder="Digite seu email" required autofocus="autofocus">
                            <label for="inputRecoverEmail">Digite seu email</label>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-danger btn-rounded btn-md btn-block" url="login.php">Recuperar Senha</button>
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