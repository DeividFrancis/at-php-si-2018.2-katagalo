<?php
$titulo = "Configuração da conta Pessoa Fisica - KataGalo";
require_once "../config.php";
require PROJECT_ROOT."/html/_partHTML/head.php";
require PROJECT_ROOT."/html/_partHTML/headerConfigConta.php"?>

<body class="hidden-sn cyan-skin clearfix animated fadeIn">
    <main class="container">
		<div class="content">
			<div class="container">
				<div class="
				form-row">
					<div class="col-md-8 mb-4">
						<div class="card">
							<div class="card-header info-color">
								<p class="my-0 h3-responsive white-text text-center font-weight-bold">PERFIL</p>
							</div>
							<div class="card-content">

								<form class="text-center container" action="#" method="POST" style="color: #aaa;">
									<div class="form-row">
										<div class="col-md-6">
											<div class="md-form">
												<input type="text" id="atualizaNomeCompletoPessoaFisica" required class="form-control" autofocus>
												<label for="atualizaNomeCompletoPessoaFisica">Nome Completo</label>
											</div>
										</div>
										<div class="col-md-6">
											<div class="md-form">
												<label class="control-label">Username</label>
												<input type="text" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-row">
										<div class="col-md-6">
											<div class="md-form">
												<label class="control-label">Email address</label>
												<input type="email" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="md-form">
												<label class="control-label">Fist Name</label>
												<input type="text" class="form-control">
											</div>
										</div>
									</div>
								<div class="form-row">
										<div class="col-md-6">
											<div class="md-form">
												<label class="control-label">Last Name</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="md-form">
												<label class="control-label">Adress</label>
												<input type="text" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-row">
										<div class="col-md-6">
											<div class="md-form">
												<label class="control-label">City</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="md-form">
												<label class="control-label">Country</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="md-form">
												<label class="control-label">Postal Code</label>
												<input type="text" class="form-control">
											</div>
										</div>
									</div>
									<button type="submit" class="btn btn-purple mb-2 float-md-right">Atualizar Perfil</button>
									<div class="clearfix"></div>
								</form>

							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card card-profile container">
							<div class="card-avatar">
								<div class="zoom">
									<input type="file" id="user-add-input" onchange="readURL(this, 'user-add');" name="foto" style="display:none"/>
									<img class="rounded-circle mx-auto d-block img-fluid container text-center logo-perfil" src="images/logo_mercados/img-test-mercado.jpg" id="image-user-add" onclick='addImageUser()'/>
								</div>
							</div>
							<div class="content">
								<p class="card-title font-weight-bold h3-responsive text-center">NOME DO USUARIO</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
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