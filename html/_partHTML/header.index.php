<header>
    <!-- Sidebar navigation -->
    <div id="slide-out" class="side-nav sn-bg-4 mdb-sidenav">
        <ul class="custom-scrollbar list-unstyled scrollbar scrollbar-cyan">

            <!-- Logo -->
            <li class="logo-sn d-block waves-effect">
                <div class="text-center" id="logo">
                    <a href="index.php" class="pl-0"><img src="images/logo/kata-galo-logo.svg" class="animated pulse infinite img-fluid"></a>
                    <div class="mask waves-effect waves-light rgba-white-slight"></div>
                </div>
            </li> <!--/. Logo -->

            <hr>

            <li>
                <!-- Side navigation links -->
            <li class="btn success-color d-block">
                <a href="login.php" name="btnIndexLogin" class="btn-sm white-text font-weight-bold">Fazer Login</a>
            </li>

            <hr>

            <li class="btn btn-unique d-block">
                <a href="registerEmpresa.php" name="btnIndexCadEmpresa" class="btn-sm white-text font-weight-bold">Cadastre sua empresa</a>
            </li>

            <hr>
            </li>
        </ul>
        <div class="sidenav-bg mask-strong"></div>
    </div>
    <!--/.End side-nav sn-bg-4 hidden -->

    <!-- ./Start Navbar -->
    <nav class="navbar navbar-expand navbar-dark bg-cyan static-top hidden-sn">

        <!-- ./Start SideNav slide-out button -->
        <div class="float-right">
            <a href="#" data-activates="slide-out" class="button-collapse mr-md-3" data-toggle="tooltip" data-placement="bottom" title="Clique aqui"><i class="fas fa-bars white-text"></i></a>
        </div> <!-- ./End fas fa-bars-->

        <!-- Navbar Search -->
        <form class="search-form form-inline mr-auto ml-auto mr-md-auto my-2 my-md-0" role="search" method="POST" autocomplete="on">
            <div class="input-group waves-dark">
                <input type="search" class="form-control ml-auto mr-0 mr-3 my-4 my-md-2" id="input-pesq" size="90px" placeholder="Pesquisar aqui..." aria-label="Search" aria-describedby="basic-addon2" style="height: 3.5rem;">
            </div>
        </form>
    </nav>
</header>