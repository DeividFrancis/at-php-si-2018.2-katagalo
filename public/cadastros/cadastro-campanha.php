<?php require_once PROJECT_ROOT."/html/_partHTML/head.php"; ?>
	<main>
		<div class="container">
			<div class="card card-register mx-auto mt-5 animated bounceIn">
				<div class="card-header text-center white-text font-weight-bold h4 bg-dark">
					<h5>Cadastro Campanha</h5>
				</div>
				<div class="card-body">
					<?php
					function __autoload($classe){include "../../html/classes/{$classe}.class.php";}
					
					// include '../../html/classes/Form.class.php';
					// include '../../html/classes/TextArea.class.php';
					// include '../../html/classes/Field.class.php';
					// include '../../html/classes/Select.class.php';
					
					$form = new Form("Campanha");
					$f1 = new TextArea("Observação" , "cam_observacao", null);
					$f2 = new Field("Inicio"    , "cam_inicio");
					$f3 = new Field("Fim"       , "cam_fim");
					$f4 = new Field("Descrição", "cam_descricao");
					$f5 = new Field("cadastro", "cam_cadastro", "hidden");
					$f5->addAttr("value", date('Y-m-d H:i:s'));
					$f6 = new Field("situacao", "cam_situacao", "hidden");
					$f6->addAttr("value", 1);

					$form->addRow(1,array($f2, $f3));
					$form->addRow(2,array($f4));
					$form->addRow(3,array($f1));
					$form->addRow(4,array($f5,$f6));
					$form->addButtom("Salvar", "salvar");
					
					echo $form->getHtml();
					?>						
				</div>
			</div>
		</div>
	</main>
<?php require_once '../footer.php';