<?php 
$titulo = "Tipo de Cadastro - KataGalo";
require_once "../config.php";
require PROJECT_ROOT."/html/_partHTML/head.php" ?>

<body class="hidden-sn elegant-color clearfix animated fadeIn">
    <main class="container">
        <div class="card">
            <h6 class="card-header info-color-dark py-3">
                <p class="my-3 h5-responsive white-text float-left font-weight-bold">
                    <a href="index.php">
                        <i class="fas fa-arrow-left fa-2x white-text"></i>
                    </a>
                </p>
                <p class="my-3 h5-responsive white-text text-center font-weight-bold">Escolha opção para cadastro</p>
            </h6>

            <!--Card content-->
            <div class="card-body">

                <!-- Form -->
                <form class="text-center" style="color: #eee;">
                    <div class="form-row">
                        <div class="col-md-6">
                            <!-- Pessoa Física -->
                            <div class="md-form">
                                <a href="register.php">
                                    <button type="button" class="btn btn-success btn-md btn-block">Pessoa Fisíca</button>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Pessoa Juridíca -->
                            <div class="md-form">
                                <a href="registerEmpresa.php">
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