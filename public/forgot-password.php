<?php
$titulo = "Login como pessoa física - KataGalo";
require_once "../config.php";
include PROJECT_ROOT."/html/_partHTML/head.php"?>

<body class="hidden-sn elegant-color clearfix animated fadeIn">
<main class="container">
    <div class="card">
        <h6 class="card-header info-color-dark float-left py-3">
            <p class="my-2 h5-responsive white-text float-left font-weight-bold">
                <a href="login.php">
                    <i class="fas fa-arrow-left fa-2x white-text"></i>
                </a>
            </p>
            <p class="my-3 h3-responsive white-text text-center font-weight-bold">Recuperar Senha</p>
        </h6>

        <!--Card content-->
        <div class="card-body px-lg-5 pt-0">

            <!-- Form -->
            <form class="text-center" action="#" method="POST" style="color: #aaa;">
                <div class="my-3 p-j grey-text">
                    <p>Para recuperar a sua senha, digita abaixo o email que foi cadastrado, quando você fez o cadastro.</p>
                </div>

                <div class="form-row">
                    <div class="col-md-12">
                        <!-- CPF -->
                        <div class="md-form">
                            <input type="email" class="form-control" required id="emailRecuperarSenha" name="recuperarSenha" autocomplete="on" autofocus>
                            <label for="emailRecuperarSenha">Email</label>
                        </div>
                    </div>
                </div>

                <div class="text-center float-right col-md-7 small mt-2">
                    <button class="btn btn-danger btn-block btn-md" name="btnRecuperarSenha" type="submit">Entrar&nbsp;&nbsp;
                    </button> <!-- ./text-center float-right col-md-6 d-block small mt-2 -->
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