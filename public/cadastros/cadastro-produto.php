<?php require_once "../header.php"; ?>
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
<?php require_once '../footer.php';