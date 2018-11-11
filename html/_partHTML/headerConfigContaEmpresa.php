<header>
    <div id="slide-out" class="side-nav sn-bg-4 fixed mdb-sidenav">
        <ul class="custom-scrollbar list-unstyled scrollbar scrollbar-cyan">
            <li class="logo-sn d-block waves-effect">
                <div class="text-center" id="logo">
                    <a href="index.php" class="pl-0">
                        <img src="images/logo/kata-galo-logo.svg" class="animated pulse infinite img-fluid"></a>
                    <div class="mask waves-effect waves-light rgba-white-slight"></div>
                </div>
            </li> <!--/. Logo -->
            <hr>
            <li>
                <ul class="collapsible collapsible-accordion">
                    <li>
                        <a class="waves-effect arrow-r" href="configContaEmpresa.php">
                            <i class="fas fa-cog fa-lg fa-spin"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dados da conta
                        </a>
                    </li>
                    <hr>
                    <li>
                        <a class="waves-effect arrow-r" href="#">
                            <i class="fas fa-shopping-bag fa-lg"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Promoções em aberto
                        </a>
                    </li>
                    <hr>
                </ul>
            </li>
        </ul>
        <div class="sidenav-bg mask-strong"></div>
    </div> <!--/.End side-nav sn-bg-4 hidden -->

    <nav class="navbar navbar-expand navbar-dark bg-cyan hidden-sn d-print-block">
        <div class="float-left">
            <a href="#" data-activates="slide-out" class="button-collapse mr-md-3"><i class="fas fa-bars white-text"></i></a>
        </div> <!-- ./End fas fa-bars-->
        <form class="search-form form-inline mr-auto ml-auto mr-md-auto my-2 my-md-0" role="search" method="POST" action="index.php" autocomplete="on">
            <div class="input-group waves-dark">
                <input type="search" class="form-control mr-sm-5 ml-auto mr-0 mr-md-auto my-4 my-md-2" id="input-pesq" size="80px" placeholder="Pesquisar aqui..." aria-label="Search" aria-describedby="basic-addon2" style="height: 3.5rem;">
            </div>
        </form>
        <ol class="navbar-nav ml-auto ml-md-0 dropdown-backdrop">
            <li class="nav-item dropdown no-arrow mx-1">
                <a class="nav-link mr-md-3" href="#" id="accountDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="far fa-user fa-lg"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="accountDropdown">
                    <a class="dropdown-item" href="configContaUsuario.php">Perfil</a>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Sair</a>
                </div>
            </li>
        </ol>
    </nav>
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-lg">
                <div class="modal-header">
                    <h5 class="modal-title text-center red-text" id="logoutModalLabel">Deseja Sair?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="black-text font-weight-bold">&times;</span>
                    </button>
                </div>
                <div class="modal-body">Se você selecionar "SAIR", irá encerrar a sua sessão. Deseja mesmo assim?</div>
                <div class="modal-footer">
                    <button class="btn default-color-dark btn-md white-text col-md-4" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn danger-color-dark btn-md white-text col-md-4" href="index.php">Sair</a>
                </div>
            </div>
        </div>
    </div>
</header>