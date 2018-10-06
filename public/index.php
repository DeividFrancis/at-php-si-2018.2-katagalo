<?php
$titulo = "Página inicial - KataGalo";
require_once "../config.php";
require PROJECT_ROOT."/html/_partHTML/head.php"?>

<body class="hidden-sn cyan-skin clearfix animated fadeIn">
	<!--Double navigation-->
	<header>
		<!-- ./Start Navbar -->
		<nav class="navbar navbar-expand navbar-dark bg-cyan hidden-sn d-print-block">

			<!-- Navbar Search -->
			<form class="search-form form-inline mr-auto ml-auto mr-md-auto my-2 my-md-0" role="search" method="POST" autocomplete="on">
				<div class="input-group waves-dark">
					<input type="search" class="form-control mr-sm-5 ml-auto mr-0 mr-md-auto my-2 my-md-2" id="input-pesq" size="80px" placeholder="Pesquisar aqui..." aria-label="Search" aria-describedby="basic-addon2" style="height: 3.0rem;">
				</div>
			</form>

            <div class="navbar-nav d-md-block ml-2">
                <a class="btn danger-color-dark white-text btn-md my-0" href="registerEmpresa.php">Cadastrar sua empresa</a>
            </div>

			<div class="navbar-nav d-md-block ml-2">
				<a class="btn btn-success btn-md my-0" href="login.php">Entrar</a>
			</div>

		</nav>
	</header>

	<main>
		<!-- Section: Products v.5 -->
		<section class="text-center my-0">

			<!-- Section heading -->
			<h2 class="h2-responsive font-weight-bold text-center my-5 animated bounceInUp">DESTAQUE DO DIA</h2>

			<!-- Carousel Wrapper -->
			<div id="multi-item-example" class="carousel slide carousel-multi-item container" data-ride="carousel">

				<!-- Controls -->
				<div class="controls-top container animated bounceInUp">

					<button type="button" class="btn-floating btn-rounded btn btn-cyan" href="#multi-item-example" data-slide="prev">
						<i class="fas fa-angle-left fa-2x"></i>
					</button>

					<button type="button" class="btn-floating btn-rounded btn btn-cyan" href="#multi-item-example" data-slide="next">
						<i class="fas fa-angle-right fa-2x"></i>
					</button>

				</div> <!-- Controls -->

				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li class="primary-color active" data-target="#multi-item-example" data-slide-to="0"></li>
					<li class="primary-color" data-target="#multi-item-example" data-slide-to="1"></li>
				</ol> <!-- ./End Indicators -->

				<!-- Slides -->
				<div class="carousel-inner" role="listbox">

					<!-- First slide -->
					<div class="carousel-item active">

						<div class="col-md-4 mb-2 clearfix d-md-block">
							<div class="card card-cascade narrower card-ecommerce">
								<div class="align-items-center overlay zoom img-produtos container">
									<a href="page-mercado.php">
										<img src="images/logos_produtos/img-test-produto.jpg" class="card-img-top" alt="">
									</a>
								</div> <!-- Card image -->
								<div class="card-body card-body-cascade text-center">
									<a href="page-mercado.php" class="card-title my-4 ml-4 animated bounceIn"><strong>Mercado 1</strong></a>
									<span class="float-right">
										<a class="ml-3" data-toggle="tooltip" id="favoritoId" onClick="mudaCorFav(this.id)" data-placement="top"
										 title="Adicionar aos favoritos" data-original-title="Adicionar aos favoritos"><i class="fas fa-heart"></i></a>
									</span>
								</div> <!-- ./End card-body card-body-cascade text-center -->
							</div><!-- ./End card card-cascade narrower card-ecommerce -->
						</div> <!-- ./End col-md-4 mb-2 clearfix d-md-block -->

						<div class="col-md-4 mb-2 clearfix d-none d-md-block">
							<div class="card card-cascade narrower card-ecommerce">
								<div class="align-items-center overlay zoom img-produtos container">
									<a href="page-mercado.php">
										<img src="images/logos_produtos/img-test-produto.jpg" class="card-img-top" alt="">
									</a>
								</div> <!-- Card image -->
								<div class="card-body card-body-cascade text-center">
									<a href="page-mercado.php" class="card-title my-4 ml-4 animated bounceIn"><strong>Mercado 2</strong></a>
									<span class="float-right">
										<a class="ml-3" data-toggle="tooltip" id="favoritoId" onClick="mudaCorFav(this.id)" data-placement="top"
										 title="Adicionar aos favoritos" data-original-title="Adicionar aos favoritos"><i class="fas fa-heart"></i></a>
									</span>
								</div> <!-- ./End card-body card-body-cascade text-center -->
							</div><!-- ./End card card-cascade narrower card-ecommerce -->
						</div> <!-- ./End col-md-4 mb-2 clearfix d-md-block -->

						<div class="col-md-4 mb-2 clearfix d-none d-md-block">
							<div class="card card-cascade narrower card-ecommerce">
								<div class="align-items-center overlay zoom img-produtos container">
									<a href="page-mercado.php">
										<img src="images/logos_produtos/img-test-produto.jpg" class="card-img-top" alt="">
									</a>
								</div> <!-- Card image -->
								<div class="card-body card-body-cascade text-center">
									<a href="page-mercado.php" class="card-title my-4 ml-4 animated bounceIn"><strong>Mercado 3</strong></a>
									<span class="float-right">
										<a class="ml-3" data-toggle="tooltip" id="favoritoId" onClick="mudaCorFav(this.id)" data-placement="top"
										 title="Adicionar aos favoritos" data-original-title="Adicionar aos favoritos"><i class="fas fa-heart"></i></a>
									</span>
								</div> <!-- ./End card-body card-body-cascade text-center -->
							</div><!-- ./End card card-cascade narrower card-ecommerce -->
						</div> <!-- ./End col-md-4 mb-2 clearfix d-md-block -->
					</div><!-- ./carousel-item active and First slide -->

					<!-- Second slide -->
					<div class="carousel-item">
						<div class="col-md-4 mb-2 clearfix d-md-block">
							<div class="card card-cascade narrower card-ecommerce">
								<div class="align-items-center overlay zoom img-produtos container">
									<a href="page-mercado.php">
										<img src="images/logos_produtos/img-test-produto.jpg" class="card-img-top" alt="">
									</a>
								</div> <!-- Card image -->
								<div class="card-body card-body-cascade text-center">
									<a href="page-mercado.php" class="card-title my-4 ml-4 animated bounceIn"><strong>Mercado 4</strong></a>
									<span class="float-right">
										<a class="ml-3" data-toggle="tooltip" id="favoritoId" onClick="mudaCorFav(this.id)" data-placement="top"
										 title="Adicionar aos favoritos" data-original-title="Adicionar aos favoritos"><i class="fas fa-heart"></i></a>
									</span>
								</div> <!-- ./End card-body card-body-cascade text-center -->
							</div><!-- ./End card card-cascade narrower card-ecommerce -->
						</div> <!-- ./End col-md-4 mb-2 clearfix d-md-block -->

						<div class="col-md-4 mb-2 clearfix d-none d-md-block">
							<div class="card card-cascade narrower card-ecommerce">
								<div class="align-items-center overlay zoom img-produtos container">
									<a href="page-mercado.php">
										<img src="images/logos_produtos/img-test-produto.jpg" class="card-img-top" alt="">
									</a>
								</div> <!-- Card image -->
								<div class="card-body card-body-cascade text-center">
									<a href="page-mercado.php" class="card-title my-4 ml-4 animated bounceIn"><strong>Mercado 5</strong></a>
									<span class="float-right">
										<a class="ml-3" data-toggle="tooltip" id="favoritoId" onClick="mudaCorFav(this.id)" data-placement="top"
										 title="Adicionar aos favoritos" data-original-title="Adicionar aos favoritos"><i class="fas fa-heart"></i></a>
									</span>
								</div> <!-- ./End card-body card-body-cascade text-center -->
							</div><!-- ./End card card-cascade narrower card-ecommerce -->
						</div> <!-- ./End col-md-4 mb-2 clearfix d-md-block -->

						<div class="col-md-4 mb-2 clearfix d-none d-md-block">
							<div class="card card-cascade narrower card-ecommerce">
								<div class="align-items-center overlay zoom img-produtos container">
									<a href="page-mercado.php">
										<img src="images/logos_produtos/img-test-produto.jpg" class="card-img-top" alt="">
									</a>
								</div> <!-- Card image -->
								<div class="card-body card-body-cascade text-center">
									<a href="page-mercado.php" class="card-title my-4 ml-4 animated bounceIn"><strong>Mercado 6</strong></a>
									<span class="float-right">
										<a class="ml-3" data-toggle="tooltip" id="favoritoId" onClick="mudaCorFav(this.id)" data-placement="top"
										 title="Adicionar aos favoritos" data-original-title="Adicionar aos favoritos"><i class="fas fa-heart"></i></a>
									</span>
								</div> <!-- ./End card-body card-body-cascade text-center -->
							</div><!-- ./End card card-cascade narrower card-ecommerce -->
						</div> <!-- ./End col-md-4 mb-2 clearfix d-md-block -->
					</div><!-- Second slide -->
				</div> <!-- Slides -->
			</div> <!-- Carousel Wrapper -->
		</section> <!-- Section: Products v.5 -->
	</main>

	<main>
		<section class="text-center my-2 container">
			<h2 class="h2-responsive font-weight-bold text-center my-2 animated bounceInUp">Lista de mercados</h2>

			<div class="row">
				<div class="col-md-4 mb-2 clearfix d-md-block">
					<div class="card card-cascade narrower card-ecommerce">
						<div class="align-items-center overlay zoom img-produtos container">
							<a href="page-mercado.php">
								<img src="images/logos_produtos/img-test-produto.jpg" class="card-img-top" alt="">
							</a>
						</div> <!-- Card image -->
						<div class="card-body card-body-cascade text-center">
							<a href="page-mercado.php" class="card-title my-4 ml-4 animated bounceIn"><strong>Mercado 1</strong></a>
							<span class="float-right">
								<a class="ml-3" data-toggle="tooltip" id="favoritoId" onClick="mudaCorFav(this.id)" data-placement="top" title="Adicionar aos favoritos"
								 data-original-title="Adicionar aos favoritos"><i class="fas fa-heart"></i></a>
							</span>
						</div> <!-- ./End card-body card-body-cascade text-center -->
					</div><!-- ./End card card-cascade narrower card-ecommerce -->
				</div> <!-- ./End col-md-4 mb-2 clearfix d-md-block -->

				<div class="col-md-4 mb-2 clearfix d-md-block">
					<div class="card card-cascade narrower card-ecommerce">
						<div class="align-items-center overlay zoom img-produtos container">
							<a href="page-mercado.php">
								<img src="images/logos_produtos/img-test-produto.jpg" class="card-img-top" alt="">
							</a>
						</div> <!-- Card image -->
						<div class="card-body card-body-cascade text-center">
							<a href="page-mercado.php" class="card-title my-4 ml-4 animated bounceIn"><strong>Mercado 2</strong></a>
							<span class="float-right">
								<a class="ml-3" data-toggle="tooltip" id="favoritoId" onClick="mudaCorFav(this.id)" data-placement="top" title="Adicionar aos favoritos"
								 data-original-title="Adicionar aos favoritos"><i class="fas fa-heart"></i></a>
							</span>
						</div> <!-- ./End card-body card-body-cascade text-center -->
					</div><!-- ./End card card-cascade narrower card-ecommerce -->
				</div> <!-- ./End col-md-4 mb-2 clearfix d-md-block -->

				<div class="col-md-4 mb-2 clearfix d-md-block">
					<div class="card card-cascade narrower card-ecommerce">
						<div class="align-items-center overlay zoom img-produtos container">
							<a href="page-mercado.php">
								<img src="images/logos_produtos/img-test-produto.jpg" class="card-img-top" alt="">
							</a>
						</div> <!-- Card image -->
						<div class="card-body card-body-cascade text-center">
							<a href="page-mercado.php" class="card-title my-4 ml-4 animated bounceIn"><strong>Mercado 3</strong></a>
							<span class="float-right">
								<a class="ml-3" data-toggle="tooltip" id="favoritoId" onClick="mudaCorFav(this.id)" data-placement="top" title="Adicionar aos favoritos"
								 data-original-title="Adicionar aos favoritos"><i class="fas fa-heart"></i></a>
							</span>
						</div> <!-- ./End card-body card-body-cascade text-center -->
					</div><!-- ./End card card-cascade narrower card-ecommerce -->
				</div> <!-- ./End col-md-4 mb-2 clearfix d-md-block -->
			</div> <!-- ./End class="row" -->
		</section><!-- ./End Section -->
	</main>
	<!--/Main layout-->

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
		</div> <!--/.Social buttons-->

		<!--Copyright-->
		<div class="footer-copyright py-3 text-left">
			<div class="container-fluid text-center">
				<p class="white-text">Todo os direitos reservados &copy;
					<a href="index.php" class="grey-text">KataGalo</a></p>
			</div>
		</div> <!--/.Copyright-->

	</footer><!--/.End Footer-->

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