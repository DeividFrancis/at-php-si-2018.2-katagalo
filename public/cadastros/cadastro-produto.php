<?php 
require_once "../../config.php";
require_once PROJECT_ROOT."/html/_partHTML/head.php"; ?>

<body class="hidden-sn elegant-color clearfix animated fadeIn">
	<header>
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

	<main>
		<div class="container">
			<div class="card card-register mx-auto mt-5 animated bounceIn">
				<div class="card-header text-center white-text font-weight-bold h4 bg-dark">
					<h5>Cadastro Produto</h5>
				</div>
				<div class="card-body">
					<?php
					include '../../html/classes/Form.class.php';
					include '../../html/classes/Field.class.php';
					include '../../html/classes/Select.class.php';
					
					$form = new Form("Produto");
					$f1 = new Field("Barcode", "barcode");
					$f2 = new Field("Descrição", "descricao");
					$f3 = new Field("Preço (R$)", "preco");

					$f4 = new Select("Categoria", 'procId');
					$f4->addOption("Categoria 1", 1);
					$f4->addOption("Categoria 2", 2);
					$f4->addOption("Categoria 3", 3);

					$form->addRow(1,array($f1, $f4));
					$form->addRow(2,array($f2, $f3));
					$form->addButtom("Salvar", "salvar");
					
					echo $form->getHtml();
					?>
				</div>
			</div>
		</div>
	</main>
	<!-- JQuery-->
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
<?php //require_once PROJECT_ROOT."/html/_partHTML/footer.php"; ?>