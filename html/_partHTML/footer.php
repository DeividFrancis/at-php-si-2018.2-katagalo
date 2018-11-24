<footer class="page-footer text-center text-md-left pt-4">
    <div class="social-section text-center">
        <ul class="list-unstyled list-inline">
            <button type="button" class="btn btn-floating btn-rounded btn-fb" title="Facebook"><i class="fab fa-facebook-f fa-lg"></i></button>
            <button type="button" class="btn btn-floating btn-rounded btn-tw" title="Twitter"><i class="fab fa-twitter fa-lg"></i></button>
            <button type="button" class="btn btn-floating btn-rounded btn-gplus" title="Google+"><i class="fab fa-google-plus-g fa-lg"></i></button>
            <button type="button" class="btn btn-floating btn-rounded btn-li" title="Linkedin"><i class="fab fa-linkedin-in fa-lg"></i></button>
            <button type="button" class="btn btn-floating btn-rounded btn-ins" title="Instagram"><i class="fab fa-instagram fa-lg"></i></button>
            <button type="button" class="btn btn-floating btn-rounded btn-pin" title="Pinterest"><i class="fab fa-pinterest-p fa-lg"></i></button>
        </ul>
    </div><!--/.Social buttons-->

    <div class="footer-copyright py-3 text-left">
        <div class="container-fluid text-center">
            <p class="white-text">Todo os direitos reservados &copy; <a href="index.php" class="grey-text">KataGalo</a></p>
        </div>
    </div><!--/.Copyright-->

</footer>

<!-- // JQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/mdb.min.js"></script>
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