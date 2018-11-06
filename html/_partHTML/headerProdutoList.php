<header>
    <!-- Sidebar navigation -->
    <div id="slide-out" class="side-nav sn-bg-4 mdb-sidenav">
        <ul class="custom-scrollbar list-unstyled scrollbar scrollbar-cyan">

            <!-- Logo -->
            <li class="logo-sm d-block waves-effect">
                <div class="text-center" id="logo">
                    <a href="index.php" class="pl-0"><img src="images/logo/kata-galo-logo.svg" class="animated pulse infinite img-fluid"></a>
                    <div class="mask waves-effect waves-light rgba-white-slight"></div>
                </div>
            </li>
            <!--/. Logo -->

            <hr>

            <li>
                <!-- Side navigation links -->
                <ul class="collapsible collapsible-accordion">
                    <li>
                        <a class="collapsible-header waves-effect arrow-r">
                            <i class="fas fa-broom fa-lg"></i>Categorias<i class="fa fa-angle-down rotate-icon"></i>
                        </a>
                        <div class="collapsible-body">
                            <ul class="list-unstyled">
                                <li><a href="#" class="waves-effect">Alcoóis</a></li>
                                <li><a href="#" class="waves-effect">Removedores</a></li>
                                <li><a href="#" class="waves-effect">Casa em geral</a></li>
                                <li><a href="#" class="waves-effect">Cozinha</a></li>
                                <li><a href="#" class="waves-effect">Desodorante</a></li>
                                <li><a href="#" class="waves-effect">Aromatizantes</a></li>
                                <li><a href="#" class="waves-effect">Inseticidas</a></li>
                                <li><a href="#" class="waves-effect">Roupas</a></li>
                                <li><a href="#" class="waves-effect">Utensilios de limpeza</a></li>
                            </ul>
                        </div>
                    </li>
                    <hr>
                    <li>
                        <a class="collapsible-header waves-effect arrow-r">
                            <i class="fas fa-cookie-bite fa-lg"></i>Ofertas<i class="fa fa-angle-down rotate-icon"></i>
                        </a>
                        <div class="collapsible-body">
                            <ul class="list-unstyled">
                                <li><a href="#" class="waves-effect">Açúcares</a></li>
                                <li><a href="#" class="waves-effect">Adoçantes</a></li>
                                <li><a href="#" class="waves-effect">Arroz</a></li>
                                <li><a href="#" class="waves-effect">Farinácieos</a></li>
                                <li><a href="#" class="waves-effect">Amido</a></li>
                                <li><a href="#" class="waves-effect">Feijão</a></li>
                                <li><a href="#" class="waves-effect">Massas secas</a></li>
                                <li><a href="#" class="waves-effect">Óleo</a></li>
                                <li><a href="#" class="waves-effect">Azeite</a></li>
                                <li><a href="#" class="waves-effect">Vinagre</a></li>
                                <li><a href="#" class="waves-effect">Ovos</a></li>
                                <li><a href="#" class="waves-effect">Sal</a></li>
                            </ul>
                        </div>
                    </li>
                    <hr>
                    <li>
                        <a class="collapsible-header waves-effect arrow-r">
                            <i class="fas fa-utensils fa-lg"></i>Marcas<i class="fa fa-angle-down rotate-icon"></i>
                        </a>
                        <div class="collapsible-body">
                            <ul class="list-unstyled">
                                <li><a href="#" class="waves-effect">Aves</a></li>
                                <li><a href="#" class="waves-effect">Bovinos</a></li>
                                <li><a href="#" class="waves-effect">Suínos</a></li>
                                <li><a href="#" class="waves-effect">Linguiças</a></li>
                                <li><a href="#" class="waves-effect">Salsichas</a></li>
                                <li><a href="#" class="waves-effect">Carnes Especiais</a></li>
                                <li><a href="#" class="waves-effect">Carnes secas</a></li>
                                <li><a href="#" class="waves-effect">Salgadas</a></li>
                            </ul>
                        </div>
                    </li>
                    <hr>
                </ul>
            </li>
        </ul>
        <div class="sidenav-bg mask-strong"></div>
    </div> <!--/.End side-nav sn-bg-4 hidden -->
        </ul>
        <div class="sidenav-bg mask-strong"></div>
    </div>
    <!--/.End side-nav sn-bg-4 hidden -->

    <!-- ./Start Navbar -->
    <nav class="navbar navbar-expand navbar-dark bg-cyan hidden-sn d-print-block">

        <!-- ./Start SideNav slide-out button -->
        <div class="float-left">
            <a href="#" data-activates="slide-out" class="button-collapse mr-md-3"><i class="fas fa-filter fa-lg white-text"></i></a>
        </div> <!-- ./End fas fa-filter-->
        <!-- Navbar Search -->
        <form class="search-form form-inline mr-auto ml-auto mr-md-auto my-2 my-md-0" role="search" method="GET"
              autocomplete="on">
            <div class="input-group waves-dark">
                <input type="search" class="form-control mr-sm-5 ml-auto mr-0 mr-md-auto my-4 my-md-2" id="input-pesq" size="80px" placeholder="Pesquisar aqui..." aria-label="Search" aria-describedby="basic-addon2" style="height: 3.5rem;">
            </div>
        </form>
        <!-- Dropdown Menu Conta -->
        <ol class="navbar-nav ml-auto ml-md-0 dropdown-backdrop">
            <li class="nav-item dropdown no-arrow mx-1">
                <a class="nav-link mr-md-3" href="#" id="accountDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                   aria-expanded="false"><i class="far fa-user fa-lg"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="accountDropdown">
                    <a class="dropdown-item" href="configContaUsuario.php">Configurações da Conta</a>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Sair</a>
                </div>
            </li>
        </ol>
    </nav>
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
                    <a class="btn btn-danger btn-md col-md-4" href="index.php">Sair</a>
                </div>
            </div>
        </div>
    </div>
</header>