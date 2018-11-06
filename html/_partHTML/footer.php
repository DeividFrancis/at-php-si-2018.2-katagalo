<!--Footer-->
<footer class="page-footer text-center text-md-left pt-4">

    <!--Social buttons-->
    <div class="social-section text-center">
        <ul class="list-unstyled list-inline">
            <button type="button" class="btn btn-floating btn-rounded btn-fb" data-toggle="tooltip" data-placement="top" title="Facebook">
                <i class="fab fa-facebook-f fa-lg"></i>
            </button>
            <button type="button" class="btn btn-floating btn-rounded btn-tw" data-toggle="tooltip" data-placement="top" title="Twitter">
                <i class="fab fa-twitter fa-lg"></i>
            </button>
            <button type="button" class="btn btn-floating btn-rounded btn-gplus" data-toggle="tooltip" data-placement="top" title="Google+">
                <i class="fab fa-google-plus-g fa-lg"></i>
            </button>
            <button type="button" class="btn btn-floating btn-rounded btn-li" data-toggle="tooltip" data-placement="top" title="Linkedin">
                <i class="fab fa-linkedin-in fa-lg"></i>
            </button>
            <button type="button" class="btn btn-floating btn-rounded btn-ins" data-toggle="tooltip" data-placement="top" title="Instagram">
                <i class="fab fa-instagram fa-lg"></i>
            </button>
            <button type="button" class="btn btn-floating btn-rounded btn-pin" data-toggle="tooltip" data-placement="top" title="Pinterest">
                <i class="fab fa-pinterest-p fa-lg"></i>
            </button>
        </ul>
    </div>
    <!--/.Social buttons-->

    <!--Copyright-->
    <div class="footer-copyright py-3 text-left">
        <div class="container-fluid text-center">
            <p class="white-text">Todo os direitos reservados &copy; <a href="index.php" class="grey-text">KataGalo</a></p>
        </div>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.End Footer-->

<!-- // JQuery -->
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<!--<script type="text/javascript" src="js/jquery-ui-1.12.1.js"></script>-->
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
<script type="text/javascript" src="js/submit.js"></script>
<script type="text/javascript" src="js/viaCep.js"></script>

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