<?php 
$titulo = "Login - KataGalo";
require_once "../config.php";
include PROJECT_ROOT."/html/_partHTML/head.php" ?>

<body class="hidden-sn elegant-color clearfix animated fadeIn">
      <main class="container">
            <div class="card">
                  <h6 class="card-header info-color-dark float-left py-3">
                        <p class="my-2 h5-responsive white-text float-left font-weight-bold">
                              <a href="index.php">
                                    <i class="fas fa-arrow-left fa-2x white-text"></i>
                              </a>
                        </p>
                        <p class="my-3 h3-responsive white-text text-center font-weight-bold">Fazer Login</p>
                  </h6>

                  <!--Card content-->
                  <div class="card-body px-lg-5 pt-0">

                        <!-- Form -->
                        <form class="text-center" action="#" method="POST" style="color: #aaa;">
                              <div class="form-row">
                                    <div class="col-md-6">
                                          <!-- CPF -->
                                          <div class="md-form">
                                                <input type="text" class="form-control" required id="cpfcnpj" name="login" autocomplete="off" autofocus>
                                                <label for="cpfcnpj">CPF/CNPJ</label>
                                          </div>
                                    </div>
                                    <div class="col-md-6">
                                          <!-- Senha -->
                                          <div class="md-form">
                                                <input type="password" minlength="8" maxlength="32" name="senha" required id="senhaUsuario"
                                                      class="form-control">
                                                <label for="senhaUsuario">Senha</label>
                                          </div>
                                    </div>
                              </div>

                              <div class="text-center float-right col-md-4 d-block small mt-2">
                                    <button class="btn btn-success btn-block btn-md" id="btnLogin" type="submit">Entrar&nbsp;&nbsp;
                                          <i class="fas fa-sign-in-alt fa-lg"></i>
                                    </button> <!-- ./text-center float-right col-md-6 d-block small mt-2 -->
                              </div>
                              <div class="text-center float-right col-md-4 d-block small mt-2">
                                    <a class="btn btn-warning btn-block btn-md" href="register.php" id="btnLogin" type="button">Registrar&nbsp;&nbsp;
                                          <i class="fas fa-pencil-alt fa-lg"></i>
                                    </a> <!-- ./text-center float-right col-md-6 d-block small mt-2 -->
                              </div>
                              <div class="text-center float-right col-md-4 d-block small mt-2">
                                  <a href="forgot-password.php" type="button" class="btn btn-link btn-block btn-md" id="btnRecuperarSenha"><p class="blue-text font-weight-bold">Esqueci minha senha</p></a>
                              </div> <!-- ./End text-center float-right col-md-6 d-block small mt-2 -->
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