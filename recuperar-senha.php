<?php
$titulo = "Recuperar Senha - KataGalo";
require_once "./config.php";
include PROJECT_ROOT."/html/_partHTML/head.php" ?>

<body class="hidden-sn elegant-color animated fadeIn clearfix">

<main class="container animated fadeIn" style="display: none">
    <div class="py-5">
        <div class="container">
            <div class="col-md-8 mx-auto float-none white card">
                <h6 class="float-left py-3 border-bottom border-dark">
                    <p class="my-2 h3-responsive text-uppercase black-text text-center font-weight-bold">Recuperar conta</p>
                </h6>
                <div class="card-body">
                    <form method="post" action="#">
                        <div class="md-form input-group">
                            <input type="password" class="form-control border rounded" placeholder="Antiga Senha" id="pesAntigaSenha" name="pes_antigaSenha" required>
                            <div class="input-group-append">
                                <button class="btn btn-info m-0 px-2" id="showAntigaPassword" type="button" title="Mostrar senha">
                                    <i class="fas fa-eye fa-lg"></i>
                                </button>
                            </div>
                        </div>

                        <div class="md-form input-group">
                            <input type="password" class="form-control border rounded" placeholder="Nova Senha" id="pesNovaSenha" name="pes_novaSenha" required>
                            <div class="input-group-append">
                                <button class="btn btn-info m-0 px-2" type="button" id="showNovaPassword" title="Mostrar senha">
                                    <i class="fas fa-eye fa-lg"></i>
                                </button>
                            </div>
                        </div>

                        <div class="md-form input-group">
                            <input type="password" class="form-control border rounded" placeholder="Confirma Nova Senha" id="pesRepetirNovaSenha" name="pes_novaSenha" required>
                            <div class="input-group-append">
                                <button class="btn btn-info m-0 px-2" type="button" id="showRepetirNovaPassword" title="Mostrar senha">
                                    <i class="fas fa-eye fa-lg"></i>
                                </button>
                            </div>
                        </div>

                        <div class="col-md-12 d-block mt-2">
                            <button class="btn btn-lg info-color-dark btn-block" type="submit">Recuperar</button>
                        </div><!-- ./End botão recuperar -->
                    </form><!-- ./End Form -->
                </div><!-- ./End card-body -->
            </div><!-- ./End col-md-10 mx-auto float-none white card -->
        </div><!-- ./End row -->
    </div><!-- /.Main Container -->
</main> <!-- ./End main -->

<main></main>

<?php
include PROJECT_ROOT."/html/_partHTML/footer2.php"
?>

</body>
