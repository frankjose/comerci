<header class="main-header">
                <div class="header-top fl-wrap">
                    <div class="container">
                        <div class="logo-holder">
                           <a href="index.html"><img src="images/LOGO_logo.png" alt=""></a>
                        </div>
                        <a href="dashboard-crearNegocio.php" class="add-hotel">Crea tu negocio <span><i class="far fa-plus"></i></span></a>                     
                        <div class="show-reg-form modal-open"><i class="fa fa-sign-in"></i>Entrar</div>
                  
                    </div>
                </div>
                <div class="header-inner fl-wrap">
                    <div class="container">
                        <div class="show-search-button"><span>Búsqueda rapida</span> <i class="fas fa-search"></i> </div>
                        <div class="wishlist-link"><i class="fal fa-heart"></i><span class="wl_counter">3</span></div>
                        <div class="header-user-menu">
                            <div class="header-user-name">
                                <span><img src="images/avatar/1.jpg" alt=""></span>
                                Mi Cuenta
                            </div>
                            <ul>
                                <li><a href="dashboard-myprofile.html"> Editar perfil</a></li>
                             
                                <li><a href="#">Salir</a></li>
                            </ul>
                        </div>
                        <div class="home-btn"><a href="index.html"><i class="fas fa-home"></i></a></div>
                        <div class="nav-button-wrap color-bg">
                            <div class="nav-button">
                                <span></span><span></span><span></span>
                            </div>
                        </div>
            
                        <div class="nav-holder main-menu">
                            <nav>
                                <ul>
                                    <li>
                                        <a href="index.php" class="act-link">Inicio </i></a>
                                       
                                    </li>
                                    <li>
                                        <a href="inversiones.php" >Emprendedores </i></a>                                   
                                    </li>
                                  
                                </ul>
                            </nav>
                        </div>
                     
                    </div>
                </div>
           
                <div class="header-search vis-search">
                    <div class="container">
                        <div class="row">
                           
                            <div class="col-sm-2">
                                <div class="header-search-input-item fl-wrap">
                                    <button class="header-search-button" onclick="window.location.href='listing.html'">Search <i class="far fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="close-header-search"><i class="fal fa-angle-double-up"></i></div>
                </div>
            </header>

            <script>
                    $(".nav-button-wrap").on("click", function () {
        $(".main-menu").toggleClass("vismobmenu");
    });
                </script>