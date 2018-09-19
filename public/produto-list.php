<!DOCTYPE html>
<html>

<head>
<!-- Required meta tags always come first -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Produtos Favoritos - KataGalo</title>

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

<body class="hidden-sn cyan-skin clearfix animated fadeIn" data-spy="scroll" data-target="#scrollspy" data-offset="15">
<header>
	<!-- Sidebar navigation -->
	<div id="slide-out" class="side-nav sn-bg-4 mdb-sidenav">
		<ul class="custom-scrollbar list-unstyled scrollbar scrollbar-cyan">

			<!-- Logo -->
			<li class="logo-sm d-block waves-effect">
				<div class="text-center" id="logo">
					<a href="index.php"><img src="images/logo/kata-galo-logo.svg" class="animated pulse infinite img-fluid"></a>
					<div class="mask waves-effect waves-light rgba-white-slight"></div>
				</div>
			</li>
			<!--/. Logo -->

			<hr>

			<li>
				<!-- Side navigation links -->
				<ul class="collapsible collapsible-accordion">
					<li>
						<!-- Checkbox 1 -->
						<div class="form-check">
							<input type="checkbox" class="form-check-input" id="checkbox1">
							<label class="form-check-label" for="checkbox1">Exemplo 1</label>
						</div>
						<hr>
						<!-- Checkbox 2 -->
						<div class="form-check">
							<input type="checkbox" class="form-check-input" id="checkbox2">
							<label class="form-check-label" for="checkbox2">Exemplo 2</label>
						</div>
						<hr>
						<!-- Checkbox 3 -->
						<div class="form-check">
							<input type="checkbox" class="form-check-input" id="checkbox3">
							<label class="form-check-label" for="checkbox3">Exemplo 3</label>
						</div>
					</li>
					<hr>
				</ul>
			</li>
		</ul>
		<div class="sidenav-bg mask-strong"></div>
	</div>
	<!--/.End side-nav sn-bg-4 hidden -->

	<!-- ./Start Navbar -->
	<nav class="navbar navbar-expand navbar-dark bg-cyan hidden-sn d-print-block">

		<!-- ./Start SideNav slide-out button -->
		<div class="float-left">
			<a href="#" data-activates="slide-out" class="button-collapse mr-md-3"><i class="fas fa-bars white-text"></i></a>
		</div> <!-- ./End fas fa-filter-->
		<!-- Navbar Search -->
		<form class="search-form form-inline mr-auto ml-auto mr-md-auto my-2 my-md-0" role="search" method="GET"
			autocomplete="on">
			<div class="input-group waves-dark">
				<input type="search" class="form-control mr-sm-5 ml-auto mr-0 mr-md-auto my-2 my-md-2" id="input-pesq" size="80px"
					placeholder="Pesquisar aqui..." aria-label="Search" aria-describedby="basic-addon2" style="height: 3.0rem;">
			</div>
		</form>
		<!-- Dropdown Menu Conta -->
		<ol class="navbar-nav ml-auto ml-md-0 dropdown-backdrop">
			<li class="nav-item dropdown no-arrow mx-1">
				<a class="nav-link mr-md-3" href="#" id="accountDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
					aria-expanded="false"><i class="far fa-user fa-lg"></i></a>
				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="accountDropdown">
					<a class="dropdown-item" href="produto-list.php">Lista de Produtos</a>
					<a class="dropdown-item" href="#">Configurações da Conta</a>
					<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Sair</a>
				</div>
			</li>
		</ol>
	</nav>
	<!-- Logout Modal-->
	<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title red-text" id="logoutModalLabel">Deseja Sair?</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
				</div>
				<div class="modal-body">Se você selecionar "SAIR", irá encerrar a sua sessão. Deseja mesmo assim?</div>
				<div class="modal-footer">
					<button class="btn btn-cyan btn-md col-md-4" type="button"  data-dismiss="modal">Cancelar</button>
					<a class="btn btn-danger btn-md col-md-4" href="index.php">Sair</a>
				</div>
			</div>
		</div>
	</div>
</header>

<main>
	<!-- ./Start Section produtos -->
	<section class="text-center my-0 container">
		<div class="row">

			<div class="col-md-4 mb-2 clearfix d-md-block">
				<div class="card card-cascade narrower card-ecommerce">
					<div class="align-items-center overlay zoom img-produtos animated bounceIn container">
						<a href="produto-page.php">
							<img src="images/logos_produtos/img-test-produto.jpg" class="card-img-top" alt="">
						</a>
					</div>
					<div class="container">
						<span class="badge badge-pill green mr-1 my-3 animated bounceIn">Novo</span>
						<span class="badge badge-pill red mr-1 my-3 animated bounceIn">Categoria: ----</span>
					</div>
					<div class="card-body card-body-cascade text-center">
						<a href="produto-pag.html">
							<p class="card-title animated bounceIn">
								<strong>Produto 1</strong>
							</p>
						</a>
						<div class="card-footer px-1">
							<span class="float-left"><del>R$ 0,00</del></span>
							<span class="text-center mr-1">R$ 0,00</span>
							<span class="float-right">
								<a class="ml-3" data-toggle="tooltip" id="alertaId" onClick="mudaCorAlerta(this.id)" data-placement="top" title="Receber Notificação" data-original-title="Receber Notificação">
									<i class="fas fa-bell"></i></a>
                                            	<a class="ml-3" data-toggle="tooltip" id="favoritoId" onClick="mudaCorFav(this.id)" data-placement="top" title="Adicionar aos favoritos" data-original-title="Adicionar aos favoritos">
									<i class="fas fa-heart"></i></a>
						</div> <!-- ./End card-footer px-1 -->
					</div> <!-- ./card-body card-body-cascade text-center -->
				</div> <!-- ./card card-cascade narrower card-ecommerce -->
			</div> <!-- ./col-md-4 mb-2 -->
		</div> <!-- ./class="row" -->
	</section><!-- ./End Section -->
</main>
<!--Main layout-->

<main>

</main>

<!--Footer-->
<footer class="page-footer text-center text-md-left pt-4">

	<!--Social buttons-->
	<div class="social-section text-center">
	<ul class="list-unstyled list-inline">
		<button type="button" class="btn btn-floating btn-rounded btn-fb"><i class="fab fa-facebook-f fa-lg"></i></button>
		<button type="button" class="btn btn-floating btn-rounded btn-tw"><i class="fa fa-twitter fa-lg"></i></button>
		<button type="button" class="btn btn-floating btn-rounded btn-gplus"><i class="fa fa-google-plus fa-lg"></i></button>
		<button type="button" class="btn btn-floating btn-rounded btn-li"><i class="fa fa-linkedin fa-lg"></i></button>
		<button type="button" class="btn btn-floating btn-rounded btn-ins"><i class="fa fa-instagram fa-lg"></i></button>
		<button type="button" class="btn btn-floating btn-rounded btn-pin"><i class="fa fa-pinterest fa-lg"></i></button>
	</ul>
	</div><!--/.Social buttons-->

	<!--Copyright-->
	<div class="footer-copyright py-3 text-left">
		<div class="container-fluid text-center">
			<p class="white-text">Todo os direitos reservados &copy; <a href="index.html" class="grey-text">KataGalo</a></p>
		</div>
	</div>
	<!--/.Copyright-->
</footer>
<!--/.End Footer-->

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