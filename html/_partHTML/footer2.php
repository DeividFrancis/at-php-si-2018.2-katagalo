<footer class="page-footer text-center my-5 text-md-left pt-4">
    <div class="footer-copyright py-3 text-left">
        <div class="container-fluid text-center">
            <p class="white-text">Todo os direitos reservados &copy;
                <a href="index.php" class="grey-text">KataGalo</a>
            </p>
        </div>
    </div>

</footer>

<!-- // JQuery -->
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.12.1.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>

<!-- // Tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>

<!-- // Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<!-- // MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>

<!-- Outros JS's -->
<!--<script type="text/javascript" src="js/limiteDeCaracteres.js"></script>-->
<script type="text/javascript" src="js/ajax.js"></script>
<script type="text/javascript" src="js/mascaras.js"></script>
<script type="text/javascript" src="js/uploadImg.js"></script>
<script type="text/javascript" src="js/submit.js"></script>
<script type="text/javascript" src="js/viaCep.js"></script>
<!--<script type="text/javascript" src="js/validaCpf.js"></script>-->

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
        $('[data-toggle="tooltip"]').tooltip();
    })
</script>