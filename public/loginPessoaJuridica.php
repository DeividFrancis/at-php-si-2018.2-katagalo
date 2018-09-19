<!DOCTYPE html>
<html>

<head>
<!-- Required meta tags always come first -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="author" content="Site Mercado" />
<title>Nome do Mercado - KataGalo</title>

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
                              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">X</span>
                              </button>
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
                                          <input type="text" class="form-control" required placeholder="00.000.000/0000-00" id="cnpjPessoaJuridica"
                                                maxlength="18" autocomplete="off" autofocus>
                                          <label for="cnpjPessoaJuridica">CNPJ</label>
                                    </div> <!-- ./End md-form -->
                              </div> <!-- ./End col-md-6 -->

                              <div class="col-md-6">
                                    <!-- Senha -->
                                    <div class="md-form">
                                          <input type="password" minlength="6" maxlength="15" required id="senhaUsuarioPessoaJuridica" class="form-control">
                                          <label for="senhaUsuarioPessoaJuridica">Senha</label>
                                    </div> <!-- ./End md-form -->
                              </div> <!-- ./End col-md-6 -->
                        </div> <!-- ./End form-row -->

                              <div class="text-center float-right col-md-6 d-block small mt-2">
                                    <button class="btn btn-success btn-block btn-md" id="btnLoginPessoaJuridica" type="submit">Entrar&nbsp;&nbsp;
                                          <i class="fas fa-sign-in-alt"></i>
                                    </button>
                              </div> <!-- ./End text-center float-right col-md-6 d-block small mt-2 -->

                              <div class="text-center float-right col-md-6 d-block small mt-2">
                                    <a href="index.php" type="button" class="btn btn-info btn-block btn-md" id="btnLoginRegisterPessoaJuridica">Voltar ao início&nbsp;&nbsp;
                                    </a>
                              </div> <!-- ./End text-center float-right col-md-6 d-block small mt-2 -->
                        </div><!-- ./End Material form register -->
                  </form><!-- Form -->
            </div> <!-- ./End card-body px-lg-5 pt-0 -->
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