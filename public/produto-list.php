<?php
$titulo = "Lista de produtos favoritos - KataGalo";
require_once "../config.php";
require PROJECT_ROOT."/html/_partHTML/head.php";
require PROJECT_ROOT."/html/_partHTML/headerFiltro.php"?>

<body class="hidden-sn cyan-skin clearfix animated fadeIn" data-spy="scroll" data-target="#scrollspy" data-offset="15">
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
									<a class="ml-3" data-toggle="tooltip" id="alertaId" onClick="mudaCorAlerta(this.id)" data-placement="top"
									 title="Receber Notificação" data-original-title="Receber Notificação">
										<i class="fas fa-bell"></i></a>
									<a class="ml-3" data-toggle="tooltip" id="favoritoId" onClick="mudaCorFav(this.id)" data-placement="top" title="Adicionar aos favoritos"
									 data-original-title="Adicionar aos favoritos">
										<i class="fas fa-heart"></i></a>
							</div> <!-- ./End card-footer px-1 -->
						</div> <!-- ./card-body card-body-cascade text-center -->
					</div> <!-- ./card card-cascade narrower card-ecommerce -->
				</div> <!-- ./col-md-4 mb-2 -->
			</div> <!-- ./class="row" -->
		</section><!-- ./End Section -->
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
		</div>
		<!--/.Social buttons-->

		<!--Copyright-->
		<div class="footer-copyright py-3 text-left">
			<div class="container-fluid text-center">
				<p class="white-text">Todo os direitos reservados &copy; <a href="index.html" class="grey-text">KataGalo</a></p>
			</div>
		</div> <!--/.Copyright-->
	</footer> <!--/.End Footer-->

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