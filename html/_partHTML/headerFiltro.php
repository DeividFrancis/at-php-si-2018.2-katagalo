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
				<a href="#" data-activates="slide-out" class="button-collapse mr-md-3"><i class="fas fa-filter fa-lg white-text"></i></a>
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
						<a class="dropdown-item" href="configContaPessoaFisica.php">Configurações da Conta</a>
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
						<a class="btn btn-danger btn-md col-md-4" href="index.php">Sair</a>
					</div>
				</div>
			</div>
		</div>
	</header>