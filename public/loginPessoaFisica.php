<?php 
$titulo = "Login como pessoa física - KataGalo";
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
                              <div class="modal-body">Se você selecionar "SAIR", irá encerrar a sua sessão.
                                    Deseja mesmo assim?</div>
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
                  <h6 class="card-header info-color-dark float-left py-3">
                        <a href="cadTipoPessoa.php">
                              <p class="my-2 h5-responsive white-text font-weight-bold">
                                    <i class="fas fa-undo fa-lg"></i>&nbsp;&nbsp;Voltar
                              </p>
                        </a>
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
                                    </button>
                              </div>
                              <div class="text-center float-right col-md-6 d-block small mt-2">
                                    <a href="index.php" type="button" class="btn btn-info btn-block btn-md" id="btnLoginRegisterPessoaFisica">Voltar
                                          ao início&nbsp;&nbsp;
                                    </a>
                              </div>
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