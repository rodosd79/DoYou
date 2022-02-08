<!-- Navegação para celular e tablet(vms chamar de nav2) -->
<div class="collapse navbar-collapse d-lg-none over-auto h-100" id="conteudoNavbarSuportado">
    <div class="d-flex">
        <!-- Fundo da nav2 (Também fecha ao apertar nele) -->
        <div class="top-0 left-0 w-100 h-100 bg-home" onclick="fechar()"></div>

        <div class="h-100 Header2 top-0 left-0 position-fixed over-auto">
            <!-- Botão de fechar -->
            <div class="Header3 w-100">
                
                <button type="button" class="btn but py-0 px-4" onclick="fechar()" aria-label="Fechar">
                    <span class="hperso">&times;</span>
                </button>

                <!-- Script que fecha a nav2 -->
                <script>
                    function fechar(){
                        var btn = document.getElementById('conteudoNavbarSuportado');
                        btn.classList.remove('show');
                    }
                </script>

            </div>

            <!-- Nav da nav2 kkk -->
            <aside class="w-100 pt-4 px-3">
            <nav class="align-items-start justify-content-center d-flex flex-column">

                        <div class="position-relative w-100">
                            <div class="d-flex align-items-center w-100">
                                <a href="index.php" aria-label="Início" class="w-100 nav-link">Início</a>
                            </div>
                        </div>

                        <div class="position-relative w-100">
                            <div class="d-flex align-items-center w-100">
                                <a href="index.php" aria-label="Sobre nós" class="w-100 nav-link">Sobre nós</a>
                            </div>
                        </div>

                        <!-- Dropdown -->
                        <div class="position-relative w-100 text-left">
                            <div class="d-flex align-items-center w-100 dropdown drophover nav-link">
                                <!-- Link p o dropdown -->
                                <a href="index.php" class="w-100" aria-label="Funcionalidades" style="color:inherit; text-decoration: none; cursor: default;" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Funcionalidades</a>

                                <svg style="overflow: visible; max-width: 18px; margin-top: 3px;" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><g transform="rotate(360 12 12)"><path d="M9 5l7 7-7 7"></path></g></svg>

                                <!-- Menu do dropdown -->
                                <div class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuLink" id="dropdownMenu">
                                    <a class="dropdown-item dropdown-perso" aria-label="Gráficos" href="#">Gráficos</a>
                                    <a class="dropdown-item dropdown-perso" aria-label="Conta Compartilhada" href="#">Conta Compatilhada</a>
                                    <a class="dropdown-item dropdown-perso" aria-label="Controle financeiro" href="#">Controle Financeiro</a>
                                </div>

                            </div>
                        </div>

                        <!-- Botão de entrar / cadastrar -->
                        <div class="position-relative w-100 mt-4">
                            <div class="d-flex align-items-center justify-content-center w-100">
                                <a href="index.php" aria-label="Entrar ou Cadastrar" class="btn myBtn nav-link">Entrar / Cadastrar</a>
                            </div>
                        </div>
            </aside>
            
        </div>
    </div>
</div>

<!-- Cabeçalho para pc+ -->
<header class="Header sticky-top" role="navigation">

    <!-- Div que é meio q um header secundário para guarda a logo, botão de menu e nav -->
    <div class="navbar-expand-lg d-flex align-items-center h-100 px-2 mx-auto px-sm-3 px-lg-5">

        <!-- Logo DoYou -->
            <div class="d-flex align-items-center flex-shrink-1 flex-grow-1 justify-content-start d-">
                <a href="/index.php" aria-current="page" aria-label="DoYou" class="pl-1 navbar-brand DoYou header-link-logo
                w-100">
                    DoYou
                </a>
            </div>
        <!--  -->

        <!-- Botão de menu -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
                <svg width="50" height="20" viewBox="0 0 50 20" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="50" height="5" rx="2.5" fill="white"/><rect x="15" y="15" width="35" height="5" rx="2.5" fill="white"/></svg>
            </button>
        <!--  -->


            <div class="justify-content-lg-end d-none d-lg-block">
                <!-- NAVEGAÇÃO NA NAVBAR -->
                <nav class="align-items-center justify-content-center d-md-flex d-sm-none">
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
                                <a class="dropdown-item dropdown-perso" aria-label="Gráficos" href="#">Gráficos</a>
                                <a class="dropdown-item dropdown-perso" aria-label="Conta Compartilhada" href="#">Conta Compatilhada</a>
                                <a class="dropdown-item dropdown-perso" aria-label="Controle financeiro" href="#">Controle Financeiro</a>
                            </div>
                        </div>
                    </div>
                    <!-- Botão de entrar / cadastrar -->
                    <div class="position-relative d-inline-block">
                        <div class="d-flex align-items-center w-100 mx-2">
                            <a href="index.php" aria-label="Entrar ou cadastrar" class="btn myBtn nav-link">Entrar / Cadastrar</a>
                        </div>
                    </div>
                </nav>
            </div> 
    </div>
</header>
