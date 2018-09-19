<?php 
require_once "../config.php";
require PROJECT_ROOT."/html/_partHTML/head.php" ?>

<body class="hidden-sn cyan-skin clearfix animated fadeIn">
	<header>
		<!-- Sidebar navigation -->
		<div id="slide-out" class="side-nav sn-bg-4 mdb-sidenav">
			<ul class="custom-scrollbar list-unstyled scrollbar scrollbar-cyan">

				<!-- Logo -->
				<li class="logo-sm d-block waves-effect">
					<div class="text-center" id="logo">
						<a href="index.php"><img src="images/logo/kata-galo-logo.svg" class="animated pulse infinite img-fluid"></a>
						<div class="mask waves-effect waves-dark rgba-white-slight"></div>
					</div>
				</li>
				<!--/. Logo -->

				<hr>

				<li>
					<!-- Side navigation links -->
					<ul class="collapsible collapsible-accordion">
						<li>
							<a class="collapsible-header waves-effect arrow-r">
								<i class="fas fa-broom"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Limpeza<i class="fa fa-angle-down rotate-icon"></i>
							</a>
							<div class="collapsible-body">
								<ul class="list-unstyled">
									<li><a href="#" class="waves-effect">Alcoóis</a></li>
									<li><a href="#" class="waves-effect">Removedores</a></li>
									<li><a href="#" class="waves-effect">Casa em geral</a></li>
									<li><a href="#" class="waves-effect">Cozinha</a></li>
									<li><a href="#" class="waves-effect">Desodorante</a></li>
									<li><a href="#" class="waves-effect">Aromatizantes</a></li>
									<li><a href="#" class="waves-effect">Inseticidas</a></li>
									<li><a href="#" class="waves-effect">Roupas</a></li>
									<li><a href="#" class="waves-effect">Utensilios de limpeza</a></li>
								</ul>
							</div>
						</li>
						<hr>
						<li>
							<a class="collapsible-header waves-effect arrow-r">
								<i class="fas fa-cookie-bite"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alimentação<i class="fa fa-angle-down rotate-icon"></i>
							</a>
							<div class="collapsible-body">
								<ul class="list-unstyled">
									<li><a href="#" class="waves-effect">Açúcares</a></li>
									<li><a href="#" class="waves-effect">Adoçantes</a></li>
									<li><a href="#" class="waves-effect">Arroz</a></li>
									<li><a href="#" class="waves-effect">Farinácieos</a></li>
									<li><a href="#" class="waves-effect">Amido</a></li>
									<li><a href="#" class="waves-effect">Feijão</a></li>
									<li><a href="#" class="waves-effect">Massas secas</a></li>
									<li><a href="#" class="waves-effect">Óleo</a></li>
									<li><a href="#" class="waves-effect">Azeite</a></li>
									<li><a href="#" class="waves-effect">Vinagre</a></li>
									<li><a href="#" class="waves-effect">Ovos</a></li>
									<li><a href="#" class="waves-effect">Sal</a></li>
								</ul>
							</div>
						</li>
						<hr>
						<li>
							<a class="collapsible-header waves-effect arrow-r">
								<i class="fas fa-utensils"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Carnes<i class="fa fa-angle-down rotate-icon"></i>
							</a>
							<div class="collapsible-body">
								<ul class="list-unstyled">
									<li><a href="#" class="waves-effect">Aves</a></li>
									<li><a href="#" class="waves-effect">Bovinos</a></li>
									<li><a href="#" class="waves-effect">Suínos</a></li>
									<li><a href="#" class="waves-effect">Linguiças</a></li>
									<li><a href="#" class="waves-effect">Salsichas</a></li>
									<li><a href="#" class="waves-effect">Carnes Especiais</a></li>
									<li><a href="#" class="waves-effect">Carnes secas</a></li>
									<li><a href="#" class="waves-effect">Salgadas</a></li>
								</ul>
							</div>
						</li>
						<hr>
						<li>
							<a class="collapsible-header waves-effect arrow-r">
								<i class="fa fa-beer"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bebidas<i class="fa fa-angle-down rotate-icon"></i>
							</a>
							<div class="collapsible-body">
								<ul class="list-unstyled">
									<li><a href="#" class="waves-effect">Bebidas Lácteas</a></li>
									<li><a href="#" class="waves-effect">Águas</a></li>
									<li><a href="#" class="waves-effect">Bebida de Soja</a></li>
									<li><a href="#" class="waves-effect">Isotônicos e Energéticos</a></li>
									<li><a href="#" class="waves-effect">Energéticos</a></li>
									<li><a href="#" class="waves-effect">Refrigerantes</a></li>
									<li><a href="#" class="waves-effect">Sucos</a></li>
								</ul>
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
			</div> <!-- ./End fas fa-bars-->

			<!-- Navbar Search -->
			<form class="search-form form-inline mr-auto ml-auto mr-md-auto my-2 my-md-0" role="search" method="POST" action="index.php"
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
						<button class="btn btn-cyan btn-md col-md-4" type="button" data-dismiss="modal">Cancelar</button>
						<a class="btn btn-danger btn-md col-md-4" href="login.html">Sair</a>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!--Main layout-->
	<main>
		<div class="container">
			<div class="row wow animated bounceIn">
				<div class="col-md-4 mb-2 container img-fluid zoom">
					<img src="images/logos_produtos/img-test-produto.jpg" class="card-img-top" alt="Imagem do produto">
				</div>
				<!--./End Grid column -->

				<!--Grid column-->
				<div class="col-md-7">
					<div class="p-0">

						<!-- ./Tag Labels-->
						<div class="mb-3">
							<span class="badge badge-pill green mr-1">Novo</span>
							<span class="badge badge-pill red mr-1">Categoria: ---</span>
						</div>
						<div class="my-4">
							<strong>Nome do produto</strong>
						</div>

						<!-- Nav tabs -->
						<ul class="nav nav-tabs mb-tabs nav-justified primary-color-dark" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" data-toggle="tab" href="#unidade" role="tab">Unidade</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#peso" role="tab">Peso</a>
							</li>
						</ul>
						<!-- Tab panels -->
						<div class="tab-content">
							<!--Panel 1-->
							<div class="tab-pane fade ml-5 in show active" id="unidade" role="tabpanel">
								<span><del>R$ 0,00</del></span>
								<span class="ml-3">R$ 0,00</span>
							</div>
							<!--/.End Panel 1-->

							<div class="tab-pane fade ml-5" id="peso" role="tabpanel">
								<span><del>R$ 0,00</del></span>
								<span class="ml-3">R$ 0,00</span>
							</div>
							<!--/.End Panel 2-->
						</div>

						<div class="form-row my-3">
							<div class="col-md-5 my-3 text-center">
								<a class="ml-3" data-toggle="tooltip" id="alertaId" onClick="mudaCorAlerta(this.id)" data-placement="top" title="Receber Notificação"
								 data-original-title="Receber Notificação">
									<i class="fas fa-bell fa-lg"></i>&nbsp;&nbsp;Receber Notificação</a>
							</div>

							<span class="block-example text-center border-left border-gray"></span>

							<div class="col-md-5 my-3 text-center">
								<a class="ml-3" data-toggle="tooltip" id="favoritoId" onClick="mudaCorFav(this.id)" data-placement="top" title="Adicionar aos favoritos"
								 data-original-title="Adicionar aos favoritos">
									<i class="fas fa-heart fa-lg"></i>&nbsp;&nbsp;Adicionar aos favoritos</a>
							</div><!-- o evento onclick chama a função addFav la do arquivo js/ajax.js e passa como parametro o id do Produto Obs: substituir o idProd por codigo PHP para imprimir o id do produto -->
						</div>


						<!--Accordion wrapper-->
						<div class="accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
							<div class="card">
								<div class="card-header" role="tab" id="headingOne">
									<a data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
										<p class="mb-0">Descrição<i class="fa fa-angle-down rotate-icon"></i></p>
									</a>
								</div>
								<div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordionEx">
									<div class="card-body p-j">
										Descrição, Descrição, Descrição, Descrição, Descrição, Descrição, Descrição, Descrição, Descrição, Descrição,
										Descrição, Descrição, Descrição, Descrição, Descrição, Descrição, Descrição, Descrição, Descrição, Descrição,
										Descrição, Descrição, Descrição, Descrição, Descrição, Descrição, Descrição, Descrição, Descrição, Descrição,
										Descrição, Descrição, Descrição, Descrição, Descrição, Descrição,
										Descrição, Descrição, Descrição, Descrição, Descrição, Descrição, Descrição, Descrição, Descrição, Descrição,
										Descrição, Descrição, Descrição, Descrição, Descrição, Descrição, Descrição, Descrição, Descrição, Descrição,
										Descrição, Descrição, Descrição, Descrição, Descrição, Descrição, Descrição, Descrição, Descrição, Descrição,
										Descrição, Descrição, Descrição, Descrição, Descrição, Descrição.
									</div>
								</div>
							</div> <!-- Accordion card -->

							<!-- Accordion card -->
							<div class="card">
								<div class="card-header" role="tab" id="headingTwo">
									<a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										<p class="mb-0">Descrições Adicionais<i class="fa fa-angle-down rotate-icon"></i></p>
									</a>
								</div>
								<div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordionEx">
									<div class="card-body p-j">
										Descrição, Descrição, Descrição, Descrição, Descrição, Descrição, Descrição, Descrição, Descrição, Descrição,
										Descrição, Descrição, Descrição, Descrição, Descrição, Descrição, Descrição, Descrição, Descrição, Descrição,
										Descrição, Descrição, Descrição, Descrição, Descrição, Descrição, Descrição, Descrição, Descrição, Descrição,
										Descrição, Descrição, Descrição, Descrição, Descrição, Descrição.
									</div>
								</div><!-- Accordion card -->
							</div>

							<!-- Accordion card -->
							<div class="card">
								<div class="card-header" role="tab" id="headingThree">
									<a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
										<p class="mb-0">Informações importates<i class="fa fa-angle-down rotate-icon"></i></p>
									</a>
								</div>
								<div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordionEx">
									<div class="card-body p-j">
										Descrição, Descrição, Descrição, Descrição, Descrição, Descrição, Descrição, Descrição, Descrição, Descrição,
										Descrição, Descrição, Descrição, Descrição, Descrição, Descrição, Descrição, Descrição, Descrição, Descrição,
										Descrição, Descrição, Descrição, Descrição, Descrição, Descrição, Descrição, Descrição, Descrição, Descrição,
										Descrição, Descrição, Descrição, Descrição, Descrição, Descrição.
									</div>
								</div>
							</div> <!-- Accordion card -->
						</div>
						<!--/.Accordion wrapper-->
					</div>
					<!--Content-->
				</div>
				<!--Grid column-->
			</div>
			<!--Grid row-->
		</div>
	</main>

	<main>
		<!-- Section: Products v.5 -->
		<section class="text-center my-0">

			<!-- Section heading -->
			<h2 class="h2-responsive font-weight-bold text-center my-5">Produtos semelhantes</h2>

			<!-- Carousel Wrapper -->
			<div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

				<!-- Controls -->
				<div class="controls-top">
					<button type="button" class="btn-rounded btn-floating btn btn-cyan" href="#multi-item-example" data-slide="prev">
						<i class="fas fa-angle-left fa-2x"></i>
					</button>
					<button type="button" class="btn-rounded btn-floating btn btn-cyan" href="#multi-item-example" data-slide="next">
						<i class="fas fa-angle-right fa-2x"></i>
					</button>
				</div> <!-- Controls -->

				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li class="primary-color active" data-target="#multi-item-example" data-slide-to="0"></li>
					<li class="primary-color" data-target="#multi-item-example" data-slide-to="1"></li>
				</ol> <!-- Indicators -->

				<!-- Slides -->
				<div class="carousel-inner" role="listbox">

					<!-- First slide -->
					<div class="carousel-item active">
						<div class="col-md-4 mb-2 clearfix d-md-block">
							<div class="card card-cascade narrower card-ecommerce">
								<div class="zoom align-items-center overlay img-produtos container">
									<a href="produto-page.php">
										<img src="images/logos_produtos/img-test-produto.jpg" class="card-img-top" alt="">
									</a>
								</div> <!-- Card image -->
								<div class="card-body card-body-cascade text-center">
									<a href="produto-page.php" class="card-title my-4 animated bounceIn"><strong>Produto 1</strong></a>
									<!-- Card footer -->
									<div class="card-footer px-1">
										<span class="float-left"><del>R$ 0,00</del></span>
										<span class="text-center">R$ 0,00</span>
										<span class="float-right">
											<a class="ml-3" data-toggle="tooltip" id="alertaId" onClick="mudaCorAlerta(this.id)" data-placement="top"
											 title="Receber Notificação" data-original-title="Receber Notificação">
												<i class="fas fa-bell"></i></a>
											<a class="ml-3" data-toggle="tooltip" id="favoritoId" onClick="mudaCorFav(this.id)" data-placement="top"
											 title="Adicionar aos favoritos" data-original-title="Adicionar aos favoritos">
												<i class="fas fa-heart"></i></a>
											<!-- o evento onclick chama a função addFav la do arquivo js/ajax.js e passa como parametro o id do Produto Obs: substituir o idProd por codigo PHP para imprimir o id do produto -->
										</span> <!-- ./End float-right -->
									</div> <!-- ./End card-footer px-1 -->
								</div> <!-- ./End card-body card-body-cascade text-center -->
							</div><!-- ./End card card-cascade narrower card-ecommerce -->
						</div> <!-- ./End col-md-4 mb-2 clearfix d-md-block -->

						<div class="col-md-4 mb-2 clearfix d-none d-md-block">
							<div class="card card-cascade narrower card-ecommerce">
								<div class="zoom align-items-center overlay img-produtos container">
									<a href="produto-page.php">
										<img src="images/logos_produtos/img-test-produto.jpg" class="card-img-top" alt="">
									</a>
								</div> <!-- Card image -->
								<div class="card-body card-body-cascade text-center">
									<a href="produto-page.php" class="card-title my-4 animated bounceIn"><strong>Produto 2</strong></a>
									<!-- Card footer -->
									<div class="card-footer px-1">
										<span class="float-left"><del>R$ 0,00</del></span>
										<span class="text-center">R$ 0,00</span>
										<span class="float-right">
											<a class="ml-3" data-toggle="tooltip" id="alertaId" onClick="mudaCorAlerta(this.id)" data-placement="top"
											 title="Receber Notificação" data-original-title="Receber Notificação">
												<i class="fas fa-bell"></i></a>
											<a class="ml-3" data-toggle="tooltip" id="favoritoId" onClick="mudaCorFav(this.id)" data-placement="top"
											 title="Adicionar aos favoritos" data-original-title="Adicionar aos favoritos">
												<i class="fas fa-heart"></i></a>
											<!-- o evento onclick chama a função addFav la do arquivo js/ajax.js e passa como parametro o id do Produto Obs: substituir o idProd por codigo PHP para imprimir o id do produto -->
										</span> <!-- ./End float-right -->
									</div> <!-- ./End card-footer px-1 -->
								</div> <!-- ./End card-body card-body-cascade text-center -->
							</div><!-- ./End card card-cascade narrower card-ecommerce -->
						</div> <!-- ./End col-md-4 mb-2 clearfix d-md-block -->

						<div class="col-md-4 mb-2 clearfix d-none d-md-block">
							<div class="card card-cascade narrower card-ecommerce">
								<div class="zoom align-items-center overlay img-produtos container">
									<a href="produto-page.php">
										<img src="images/logos_produtos/img-test-produto.jpg" class="card-img-top" alt="">
									</a>
								</div> <!-- Card image -->
								<div class="card-body card-body-cascade text-center">
									<a href="produto-page.php" class="card-title my-4 animated bounceIn"><strong>Produto 3</strong></a>
									<!-- Card footer -->
									<div class="card-footer px-1">
										<span class="float-left"><del>R$ 0,00</del></span>
										<span class="text-center">R$ 0,00</span>
										<span class="float-right">
											<a class="ml-3" data-toggle="tooltip" id="alertaId" onClick="mudaCorAlerta(this.id)" data-placement="top"
											 title="Receber Notificação" data-original-title="Receber Notificação">
												<i class="fas fa-bell"></i></a>
											<a class="ml-3" data-toggle="tooltip" id="favoritoId" onClick="mudaCorFav(this.id)" data-placement="top"
											 title="Adicionar aos favoritos" data-original-title="Adicionar aos favoritos">
												<i class="fas fa-heart"></i></a>
											<!-- o evento onclick chama a função addFav la do arquivo js/ajax.js e passa como parametro o id do Produto Obs: substituir o idProd por codigo PHP para imprimir o id do produto -->
										</span> <!-- ./End float-right -->
									</div> <!-- ./End card-footer px-1 -->
								</div> <!-- ./End card-body card-body-cascade text-center -->
							</div><!-- ./End card card-cascade narrower card-ecommerce -->
						</div> <!-- ./End col-md-4 mb-2 clearfix d-md-block -->
					</div><!-- ./End First slide -->

					<!-- Second slide -->
					<div class="carousel-item">
						<div class="col-md-4 mb-2 clearfix d-md-block">
							<div class="card card-cascade narrower card-ecommerce">
								<div class="zoom align-items-center overlay img-produtos container">
									<a href="produto-page.php">
										<img src="images/logos_produtos/img-test-produto.jpg" class="card-img-top" alt="">
									</a>
								</div> <!-- Card image -->
								<div class="card-body card-body-cascade text-center">
									<a href="produto-page.php" class="card-title my-4 animated bounceIn"><strong>Produto 4</strong></a>
									<!-- Card footer -->
									<div class="card-footer px-1">
										<span class="float-left"><del>R$ 0,00</del></span>
										<span class="text-center">R$ 0,00</span>
										<span class="float-right">
											<a class="ml-3" data-toggle="tooltip" id="alertaId" onClick="mudaCorAlerta(this.id)" data-placement="top"
											 title="Receber Notificação" data-original-title="Receber Notificação">
												<i class="fas fa-bell"></i></a>
											<a class="ml-3" data-toggle="tooltip" id="favoritoId" onClick="mudaCorFav(this.id)" data-placement="top"
											 title="Adicionar aos favoritos" data-original-title="Adicionar aos favoritos">
												<i class="fas fa-heart"></i></a>
											<!-- o evento onclick chama a função addFav la do arquivo js/ajax.js e passa como parametro o id do Produto Obs: substituir o idProd por codigo PHP para imprimir o id do produto -->
										</span> <!-- ./End float-right -->
									</div> <!-- ./End card-footer px-1 -->
								</div> <!-- ./End card-body card-body-cascade text-center -->
							</div><!-- ./End card card-cascade narrower card-ecommerce -->
						</div> <!-- ./End col-md-4 mb-2 clearfix d-md-block -->

						<div class="col-md-4 mb-2 clearfix d-none d-md-block">
							<div class="card card-cascade narrower card-ecommerce">
								<div class="zoom align-items-center overlay img-produtos container">
									<a href="produto-page.php">
										<img src="images/logos_produtos/img-test-produto.jpg" class="card-img-top" alt="">
									</a>
								</div> <!-- Card image -->
								<div class="card-body card-body-cascade text-center">
									<a href="produto-page.php" class="card-title my-4 animated bounceIn"><strong>Produto 5</strong></a>
									<!-- Card footer -->
									<div class="card-footer px-1">
										<span class="float-left"><del>R$ 0,00</del></span>
										<span class="text-center">R$ 0,00</span>
										<span class="float-right">
											<a class="ml-3" data-toggle="tooltip" id="alertaId" onClick="mudaCorAlerta(this.id)" data-placement="top"
											 title="Receber Notificação" data-original-title="Receber Notificação">
												<i class="fas fa-bell"></i></a>
											<a class="ml-3" data-toggle="tooltip" id="favoritoId" onClick="mudaCorFav(this.id)" data-placement="top"
											 title="Adicionar aos favoritos" data-original-title="Adicionar aos favoritos">
												<i class="fas fa-heart"></i></a>
											<!-- o evento onclick chama a função addFav la do arquivo js/ajax.js e passa como parametro o id do Produto Obs: substituir o idProd por codigo PHP para imprimir o id do produto -->
										</span> <!-- ./End float-right -->
									</div> <!-- ./End card-footer px-1 -->
								</div> <!-- ./End card-body card-body-cascade text-center -->
							</div><!-- ./End card card-cascade narrower card-ecommerce -->
						</div> <!-- ./End col-md-4 mb-2 clearfix d-md-block -->

						<div class="col-md-4 mb-2 clearfix d-none d-md-block">
							<div class="card card-cascade narrower card-ecommerce">
								<div class="zoom align-items-center overlay img-produtos container">
									<a href="produto-page.php">
										<img src="images/logos_produtos/img-test-produto.jpg" class="card-img-top" alt="">
									</a>
								</div> <!-- Card image -->
								<div class="card-body card-body-cascade text-center">
									<a href="produto-page.php" class="card-title my-4 animated bounceIn"><strong>Produto 6</strong></a>
									<!-- Card footer -->
									<div class="card-footer px-1">
										<span class="float-left"><del>R$ 0,00</del></span>
										<span class="text-center">R$ 0,00</span>
										<span class="float-right">
											<a class="ml-3" data-toggle="tooltip" id="alertaId" onClick="mudaCorAlerta(this.id)" data-placement="top"
											 title="Receber Notificação" data-original-title="Receber Notificação">
												<i class="fas fa-bell"></i></a>
											<a class="ml-3" data-toggle="tooltip" id="favoritoId" onClick="mudaCorFav(this.id)" data-placement="top"
											 title="Adicionar aos favoritos" data-original-title="Adicionar aos favoritos">
												<i class="fas fa-heart"></i></a>
											<!-- o evento onclick chama a função addFav la do arquivo js/ajax.js e passa como parametro o id do Produto Obs: substituir o idProd por codigo PHP para imprimir o id do produto -->
										</span> <!-- ./End float-right -->
									</div> <!-- ./End card-footer px-1 -->
								</div> <!-- ./End card-body card-body-cascade text-center -->
							</div><!-- ./End card card-cascade narrower card-ecommerce -->
						</div> <!-- ./End col-md-4 mb-2 clearfix d-md-block -->
					</div><!-- Second slide -->
				</div> <!-- Slides -->
			</div> <!-- Carousel Wrapper -->
		</section> <!-- Section: Products v.5 -->
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
				<p class="white-text">Todo os direitos reservados &copy; <a href="index.html" class="grey-text">KataGalo.com.br</a></p>
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