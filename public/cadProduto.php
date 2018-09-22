<?php 
$title = "Cadastro pessoa";
require_once "../config.php";
require PROJECT_ROOT."/html/_partHTML/head.php" ?>

<body class="hidden-sn elegant-color clearfix animated fadeIn">
    <main class="container">
        <div class="card">
            <h6 class="card-header info-color-dark py-3">
                <p class="my-2 h5-responsive white-text text-center font-weight-bold">Escolha opção para cadastro</p>
            </h6>

            <!--Card content-->
            <div class="card-body">

                <?php
					include PROJECT_ROOT.'/html/classes/Form.class.php';
					include PROJECT_ROOT.'/html/classes/Field.class.php';
					include PROJECT_ROOT.'/html/classes/Select.class.php';
					
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