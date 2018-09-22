<?php 
$titulo = "Login como pessoa física - KataGalo";
require_once "../config.php";
require PROJECT_ROOT."/html/_partHTML/head.php" ?>

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
                                                <input type="text" class="form-control" required placeholder="000.000.000-00"
                                                      id="cpfUsuarioPessoaFisica" maxlength="14" autocomplete="off"
                                                      autofocus>
                                                <label for="cpfUsuarioPessoaFisica">CPF</label>
                                          </div>
                                    </div>
                                    <div class="col-md-6">
                                          <!-- Senha -->
                                          <div class="md-form">
                                                <input type="password" minlength="6" maxlength="15" required id="senhaUsuarioPessoaFisica"
                                                      class="form-control">
                                                <label for="senhaUsuarioPessoaFisica">Senha</label>
                                          </div>
                                    </div>
                              </div>

                              <div class="text-center float-right col-md-6 d-block small mt-2">
                                    <button class="btn btn-success btn-block btn-md" id="btnLoginPessoaFisica" type="submit">Entrar&nbsp;&nbsp;
                                          <i class="fas fa-sign-in-alt"></i>
                                    </button> <!-- ./text-center float-right col-md-6 d-block small mt-2 -->
                              </div>
                              <div class="text-center float-right col-md-6 d-block small mt-2">
                                    <a href="forgot-password.php" type="button" class="btn btn-info btn-block btn-md" id="btnRecuperarSenhaPessoaFisica">Recuperar Senha
                                    </a>
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