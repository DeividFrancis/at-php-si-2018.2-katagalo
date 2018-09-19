<?php
$method = filter_input(INPUT_SERVER, 'REQUEST_METHOD');
if($method != "GET")
    header("HTTP/1.0 404 Not Found");
    require_once '../classes/Pessoa.class.php';
require_once 'formularios.php';
// $pes->set("situacao", "Situação");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.10/css/mdb.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <!-- Material form login -->
        <div class="card">
            <h5 class="card-header info-color white-text text-center py-4">
                <strong>Cadastro Pessoa</strong>
            </h5>
            <!--Card content-->
            <div class="card-body px-lg-5 pt-0">
                <?php 
                
                include './classes/Form.class.php';
                include './classes/Field.class.php';

                $form = new Form();
                $f1 = new Field("Nome", "nome");
                $f2 = new Field("Sobrenome", "sobrenome");
                $f3 = new Field("Sobrenome1", "sobrenome1");
                $f4 = new Field("Sobrenome2", "sobrenome2");
                $f5 = new Field("Sobrenome3", "sobrenome3");
                $f6 = new Field("Sobrenome4", "sobrenome4");
                $form->addRow(1,array($f1, $f2));
                $form->addRow(2,array($f3));
                $form->addRow(3,array($f4));
                echo $form->getHtml();
                ?>
            </div>
        </div>
        <!-- Material form login -->
    </div>

    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.10/js/mdb.min.js"></script>
</body>

</html>