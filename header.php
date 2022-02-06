<header class="Header sticky-top" role="navigation">

    <!-- Div que é meio q um header secundário para guarda a logo, botão de menu e nav -->
    <div class="navbar-expand-md d-flex align-items-center h-100 px-2 mx-auto px-sm-3 px-lg-5">

        <!-- Logo DoYou -->
            <div class="d-flex align-items-center flex-shrink-1 flex-grow-1 justify-content-start justify-content-lg-start">
                <a href="/index.php" aria-current="page" aria-label="DoYou" class="pl-1 navbar-brand DoYou header-link-logo">
                    DoYou
                </a>
            </div>
        <!--  -->

        <!-- Botão de menu -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
                <svg width="50" height="20" viewBox="0 0 50 20" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="50" height="5" rx="2.5" fill="white"/><rect x="15" y="15" width="35" height="5" rx="2.5" fill="white"/></svg>
            </button>
        <!--  -->

        <!-- Navegação/Collapse do botão -->
            <div class="collapse navbar-collapse justify-content-md-end" id="conteudoNavbarSuportado">
                <!-- NAVEGAÇÃO NA NAVBAR -->
                <nav class="align-items-center justify-content-center h-100 d-lg-flex d-md-flex">
                    <div class="position-relative d-inline-block">
                        <div class="d-flex align-items-center w-100 mx-2">
                            <a href="index.php" aria-label="Início" class="nav-link">Início</a>
                        </div>
                    </div>
                    <div class="position-relative d-inline-block">
                        <div class="d-flex align-items-center w-100 mx-2">
                            <a href="index.php" aria-label="Sobre nós" class="nav-link">Sobre nós</a>
                        </div>
                    </div>
                    <div class="position-relative d-inline-block text-left">
                        <div class="d-flex align-items-center w-100 mx-2 dropdown drophover nav-link">
                            <!-- Dropdown -->
                            <a href="index.php" aria-label="Funcionalidades" style="color:inherit; text-decoration: none; cursor: default;" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Funcionalidades</a>
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><g transform="rotate(90 12 12)"><path d="M9 5l7 7-7 7"></path></g></svg>
                            <!-- Menu do dropdown -->
                            <div class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuLink" id="dropdownMenu">
                                <a class="dropdown-item dropdown-perso" href="#">Gráficos</a>
                                <a class="dropdown-item dropdown-perso" href="#">Conta Compatilhada</a>
                                <a class="dropdown-item dropdown-perso" href="#">Controle Financeiro</a>
                            </div>
                        </div>
                    </div>
                    <div class="position-relative d-inline-block">
                        <div class="d-flex align-items-center w-100 mx-2">
                            <a href="index.php" aria-label="Conta" class="nav-link">Conta</a>
                        </div>
                    </div>
                </nav>
            </div>
        <!--  -->   
    </div>
</header>