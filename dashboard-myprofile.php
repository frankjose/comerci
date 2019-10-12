<!DOCTYPE HTML>
<html lang="en">
    <head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>Easybook - Hotel Booking Directory Listing Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <!--=============== css  ===============-->
        <link type="text/css" rel="stylesheet" href="css/reset.css">
        <link type="text/css" rel="stylesheet" href="css/plugins.css">
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <link type="text/css" rel="stylesheet" href="css/color.css">
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="images/favicon.ico">
    </head>
    <body>
        <!--loader-->
        <div class="loader-wrap">
            <div class="pin">
                <div class="pulse"></div>
            </div>
        </div>
        <!--loader end-->
        <!-- Main  -->
        <div id="main">
            <!-- header-->
            <header class="main-header">
            </header>
            <!--  header end -->
            <!--  wrapper  -->
            <div id="wrapper">
                <!-- content-->
                <div class="content">
                    <!-- section-->
                    <section class="flat-header color-bg adm-header">
                        <div class="wave-bg wave-bg2"></div>
                        <div class="container">
                            <div class="dasboard-wrap fl-wrap">
                                <div class="dasboard-breadcrumbs breadcrumbs"><a href="#">Inicio</a><a href="#">Crea tu negocio</a><span>Perfil</span></div>
                                <!--dasboard-sidebar-->
                                <div class="dasboard-sidebar">
                                    <div class="dasboard-sidebar-content fl-wrap">
                                        <div class="dasboard-avatar">
                                            <img src="images/avatar/1.jpg" alt="">
                                        </div>
                                        <div class="dasboard-sidebar-item fl-wrap">
                                            <h3>
                                                <span>Bienvenido </span>
                                                Alejandrina Reyes
                                            </h3>
                                        </div>
                                        <a href="dashboard-add-listing.php" class="ed-btn">Agregar productos</a>                                        
                                        <div class="user-stats fl-wrap">
                                            <ul>
                                                <li>
                                                    Productos	
                                                    <span>4</span>
                                                </li>

                                                <li>
                                                    Opiniones	
                                                    <span>9</span>	
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="#" class="log-out-btn color-bg">Salir <i class="far fa-sign-out"></i></a>
                                    </div>
                                </div>
                                <!--dasboard-sidebar end--> 
                                <!-- dasboard-menu-->
                                <div class="dasboard-menu">
                                    <div class="dasboard-menu-btn color3-bg">Dashboard Menu<i class="fal fa-bars"></i></div>
                                    <ul class="dasboard-menu-wrap">
                                        <li>
                                            <a href="dashboard-myprofile.php" class="user-profile-act"><i class="far fa-user"></i>Perfil</a>
                                            <ul>
                                                <li><a href="dashboard-myprofile.php">Editar Perfil</a></li>
                                                <li><a href="dashboard-password.php">Cambiar contraseña</a></li>
                                            </ul>
                                        </li>
                                        
                                        <li>
                                            <a href="dashboard-listing-table.php"><i class="far fa-th-list"></i> Mis productos  </a>
                                            <ul>
                                                <li><a href="#">Entradas</a><span>5</span></li>
                                                <li><a href="#">Comidas</a><span>2</span></li>
                                                <li><a href="#">Bebidas</a><span>3</span></li>
                                            </ul>
                                        </li>
                                        <li><a href="dashboard-review.html"><i class="far fa-comments"></i> Opiniones </a></li>
                                    </ul>
                                </div>
                                <!--dasboard-menu end-->
                               
                            </div>
                        </div>
                    </section>
                    <!-- section end-->
                    <!-- section-->
                    <section class="middle-padding">
                        <div id="seccion1" class="container"> 
                            <!--dasboard-wrap-->
                            <div class="dasboard-wrap fl-wrap">
                                <!-- dashboard-content--> 
                                <div class="dashboard-content fl-wrap">
                                    <div class="box-widget-item-header">
                                        <h3>Mi perfil</h3>
                                    </div>
                                    <!-- profile-edit-container--> 
                                    <div class="profile-edit-container">
                                        <div class="custom-form">
                                            <label>Representante legal o propietario <i class="far fa-user"></i></label>
                                            <input type="text" placeholder="Alejandrina Reyes" value=""/>
                                            <label>Razón social <i class="far fa-user"></i></label>
                                            <input type="text" placeholder="Restaurante doña aleja" value=""/>
                                            <label>Nit <i class="far fa-user"></i></label>
                                            <input type="text" placeholder="01234567-8" value=""/>
                                            <label>Slogan <i class="far fa-user"></i></label>
                                            <input type="text" placeholder="Restaurante doña aleja, la mejor comidaa tipica valluna" value=""/>
                                            <label>Correo electrónico<i class="far fa-envelope"></i>  </label>
                                            <input type="text" placeholder="restaurantealeja@gmail.com" value=""/>
                                            <label>Teléfono<i class="far fa-phone"></i>  </label>
                                            <input type="text" placeholder="(+57) 312 856 11 34" value=""/>
                                            <label>Teléfono adicional<i class="far fa-phone"></i>  </label>
                                            <input type="text" placeholder="(+57)  311 386 23 95" value=""/>
                                            <label> Dirección <i class="fas fa-map-marker"></i>  </label>
                                            <input type="text" placeholder="Km 6 - Vía potrerito, Jamundi, Valle" value=""/>
                                            <label> Sector <i class="far fa-globe"></i>  </label>
                                            <input type="text" placeholder="Comida" value=""/>
                                            <label> Categoria <i class="far fa-globe"></i>  </label>
                                            <input type="text" placeholder="Restaurantes" value=""/>
                                            <div class="row">
                                                <div class="col-sm-9">
                                                    <label> Descripción</label>                                              
                                                    <textarea cols="40" rows="3" placeholder="Sobre mi negocio..."></textarea>                                                    
                                                </div>
                                                <div class="col-sm-3">
                                                    <label>Cambiar foto de perfil</label> 
                                                    <div class="add-list-media-wrap">
                                                        <form class="fuzone">
                                                            <div class="fu-text">
                                                                <span><i class="fal fa-image"></i> Click aquí para elminar o cargar archivos</span>
                                                            </div>
                                                            <input type="file" class="upload">
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- profile-edit-container end--> 
                                    <div class="box-widget-item-header mat-top">
                                        <h3>Redes Sociales</h3>
                                    </div>
                                    <!-- profile-edit-container--> 
                                    <div class="profile-edit-container">
                                        <div class="custom-form">
                                            <label>Facebook <i class="fab fa-facebook"></i></label>
                                            <input type="text" placeholder="https://www.facebook.com/" value=""/>
                                            <label>Twitter<i class="fab fa-twitter"></i>  </label>
                                            <input type="text" placeholder="https://twitter.com/" value=""/>
                                            <label>Youtube<i class="fab fa-youtube"></i>  </label>
                                            <input type="text" placeholder="https://youtube.com" value=""/>
                                            <label> Instagram <i class="fab fa-instagram"></i>  </label>
                                            <input type="text" placeholder="https://www.instagram.com/" value=""/>
                                            <label> Página web<i class="far fa-globe"></i>  </label>
                                            <input type="text" placeholder="www.restaurante.com" value=""/>
                                            <button class="btn    color2-bg  float-btn">Guardar<i class="fal fa-save"></i></button>
                                        </div>
                                    </div>
                                    <!-- profile-edit-container end-->                                     
                                </div>
                                <!-- dashboard-list-box end--> 
                            </div>
                            <!-- dasboard-wrap end-->
                        </div>
                    </section>
                    <div class="limit-box fl-wrap"></div>
                </div>
                <!-- content end-->
            </div>
            <!--wrapper end -->
            <!--footer -->
            <footer class="main-footer">
                <!--subscribe-wrap-->
                <div class="subscribe-wrap color-bg  fl-wrap">
                    <div class="container">
                        <div class="sp-bg"> </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="subscribe-header">
                                    <h3>Subscribirse</h3>
                                    <p>Deseas recibir información sobre el mapa de emprendimiento 2019 en Jamundí.</p>
                                </div>
                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-5">
                                <div class="footer-widget fl-wrap">
                                    <div class="subscribe-widget fl-wrap">
                                        <div class="subcribe-form">
                                            <form id="subscribe">
                                                <input class="enteremail fl-wrap" name="email" id="subscribe-email" placeholder="Correo electrónico" spellcheck="false" type="text">
                                                <button type="submit" id="subscribe-button" class="subscribe-button"><i class="fas fa-rss-square"></i> Subscribirse</button>
                                                <label for="subscribe-email" class="subscribe-message"></label>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wave-bg"></div>
                </div>
                <!--subscribe-wrap end -->
                <!--footer-inner-->
                <div class="footer-inner">
                    <div class="container">
                        <!--footer-fw-widget-->
                        <div class="footer-fw-widget fl-wrap">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="footer-carousel-title">
                                        nuestros patrocinadores
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <!--footer-carousel-wrap-->
                                    <div class="footer-carousel-wrap fl-wrap">
                                        <div class="footer-carousel fl-wrap">
                                            <!--footer-carousel-item-->
                                            <div class="footer-carousel-item">
                                                <a href="#"><img src="images/partners/1.png" alt=""></a>
                                            </div>
                                            <!--footer-carousel-item end-->
                                            <!--footer-carousel-item-->
                                            <div class="footer-carousel-item">
                                                <a href="#"><img src="images/partners/1.png" alt=""></a>
                                            </div>
                                            <!--footer-carousel-item end-->                             
                                            <!--footer-carousel-item-->
                                            <div class="footer-carousel-item">
                                                <a href="#"><img src="images/partners/1.png" alt=""></a>
                                            </div>
                                            <!--footer-carousel-item end-->
                                            <!--footer-carousel-item-->
                                            <div class="footer-carousel-item">
                                                <a href="#"><img src="images/partners/1.png" alt=""></a>
                                            </div>
                                            <!--footer-carousel-item end-->      
                                            <!--footer-carousel-item-->
                                            <div class="footer-carousel-item">
                                                <a href="#"><img src="images/partners/1.png" alt=""></a>
                                            </div>
                                            <!--footer-carousel-item end-->
                                            <!--footer-carousel-item-->
                                            <div class="footer-carousel-item">
                                                <a href="#"><img src="images/partners/1.png" alt=""></a>
                                            </div>
                                            <!--footer-carousel-item end-->                                     
                                        </div>
                                        <div class="fc-cont  fc-cont-prev"><i class="fal fa-angle-left"></i></div>
                                        <div class="fc-cont  fc-cont-next"><i class="fal fa-angle-right"></i></div>
                                    </div>
                                    <!--footer-carousel-wrap end-->
                                </div>
                            </div>
                        </div>
                        <!--footer-fw-widget end-->
                        <div class="row">
                            <!--footer-widget -->
                            <div class="col-md-4">
                                <div class="footer-widget fl-wrap">
                                    <h3>About Us</h3>
                                    <div class="footer-contacts-widget fl-wrap">
                                        <p>In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam. </p>
                                        <ul  class="footer-contacts fl-wrap">
                                            <li><span><i class="fal fa-envelope"></i> Mail :</span><a href="#" target="_blank">yourmail@domain.com</a></li>
                                            <li> <span><i class="fal fa-map-marker-alt"></i> Adress :</span><a href="#" target="_blank">USA 27TH Brooklyn NY</a></li>
                                            <li><span><i class="fal fa-phone"></i> Phone :</span><a href="#">+7(111)123456789</a></li>
                                        </ul>
                                        <div class="footer-social">
                                            <span>Find us : </span>
                                            <ul>
                                                <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                                <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--footer-widget end-->
                            <!--footer-widget -->
                            <div class="col-md-4">
                                <div class="footer-widget fl-wrap">
                                    <h3>Our Last News</h3>
                                    <div class="widget-posts fl-wrap">
                                        <ul>
                                            <li class="clearfix">
                                                <a href="#"  class="widget-posts-img"><img src="images/all/1.jpg" class="respimg" alt=""></a>
                                                <div class="widget-posts-descr">
                                                    <a href="#" title="">Vivamus dapibus rutrum</a>
                                                    <span class="widget-posts-date"> 21 Mar 09.05 </span>
                                                </div>
                                            </li>
                                            <li class="clearfix">
                                                <a href="#"  class="widget-posts-img"><img src="images/all/1.jpg" class="respimg" alt=""></a>
                                                <div class="widget-posts-descr">
                                                    <a href="#" title=""> In hac habitasse platea</a>
                                                    <span class="widget-posts-date"> 7 Mar 18.21 </span>
                                                </div>
                                            </li>
                                            <li class="clearfix">
                                                <a href="#"  class="widget-posts-img"><img src="images/all/1.jpg" class="respimg" alt=""></a>
                                                <div class="widget-posts-descr">
                                                    <a href="#" title="">Tortor tempor in porta</a>
                                                    <span class="widget-posts-date"> 7 Mar 16.42 </span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--footer-widget end-->
                            <!--footer-widget -->
                            <div class="col-md-4">
                                <div class="footer-widget fl-wrap">
                                    <h3>Our  Twitter</h3>
                                    <div id="footer-twiit" class="fl-wrap"></div>
                                    <a href="#" class="twitter-link" target="_blank">Follow</a>
                                </div>
                            </div>
                            <!--footer-widget end-->
                        </div>
                        <div class="clearfix"></div>
                        <!--footer-widget -->
                        <div class="footer-widget">
                            <div class="row">
                                <div class="col-md-4"><a class="contact-btn color-bg" href="contact.html">Get In Touch<i class="fal fa-envelope"></i></a></div>
                                <div class="col-md-8">
                                    <div class="customer-support-widget fl-wrap">
                                        <h4>Customer support : </h4>
                                        <a href="tel:+19012300888" class="cs-mumber">+1(901)2300888</a>
                                        <a href="tel:+19012300888" class="cs-mumber-button color2-bg">Call Now <i class="far fa-phone-volume"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--footer-widget end -->
                    </div>
                </div>
                <!--footer-inner end -->
                <div class="footer-bg">
                </div>
                <!--sub-footer-->
                <div class="sub-footer">
                    <div class="container">
                        <div class="copyright"> &#169; EasyBook 2018 .  All rights reserved.</div>
                        <div class="subfooter-lang">
                            <div class="subfooter-show-lang"><span>Eng</span><i class="fa fa-caret-up"></i></div>
                            <ul class="subfooter-lang-tooltip">
                                <li><a href="#">Dutch</a></li>
                                <li><a href="#">Italian</a></li>
                                <li><a href="#">French</a></li>
                                <li><a href="#">Spanish</a></li>
                            </ul>
                        </div>
                        <div class="subfooter-nav">
                            <ul>
                                <li><a href="#">Terms of use</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Blog</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--sub-footer end -->
            </footer>
            <!--footer end -->
            <!--map-modal -->
            <div class="map-modal-wrap">
                <div class="map-modal-wrap-overlay"></div>
                <div class="map-modal-item">
                    <div class="map-modal-container fl-wrap">
                        <h3>Hotel Title</h3>
                        <div class="map-modal fl-wrap">
                            <div id="singleMap" data-latitude="40.7" data-longitude="-73.1"></div>
                        </div>
                        <a href="#" class="btn color2-bg">View Details <i class="fal fa-angle-right"></i></a>
                        <div class="map-modal-close"><i class="far fa-times"></i></div>
                    </div>
                </div>
            </div>
            <!--map-modal end -->            
            <!--register form -->
            <div class="main-register-wrap modal">
                <div class="reg-overlay"></div>
                <div class="main-register-holder">
                    <div class="main-register fl-wrap">
                        <div class="close-reg color-bg"><i class="fal fa-times"></i></div>
                        <ul class="tabs-menu">
                            <li class="current"><a href="#tab-1"><i class="fal fa-sign-in-alt"></i> Login</a></li>
                            <li><a href="#tab-2"><i class="fal fa-user-plus"></i> Register</a></li>
                        </ul>
                        <!--tabs -->                       
                        <div id="tabs-container">
                            <div class="tab">
                                <!--tab -->
                                <div id="tab-1" class="tab-content">
                                    <h3>Sign In <span>Easy<strong>Book</strong></span></h3>
                                    <div class="custom-form">
                                        <form method="post"  name="registerform">
                                            <label>Username or Email Address <span>*</span> </label>
                                            <input name="email" type="text"   onClick="this.select()" value="">
                                            <label >Password <span>*</span> </label>
                                            <input name="password" type="password"   onClick="this.select()" value="" >
                                            <button type="submit"  class="log-submit-btn"><span>Log In</span></button>
                                            <div class="clearfix"></div>
                                            <div class="filter-tags">
                                                <input id="check-a" type="checkbox" name="check">
                                                <label for="check-a">Remember me</label>
                                            </div>
                                        </form>
                                        <div class="lost_password">
                                            <a href="#">Lost Your Password?</a>
                                        </div>
                                    </div>
                                </div>
                                <!--tab end -->
                                <!--tab -->
                                <div class="tab">
                                    <div id="tab-2" class="tab-content">
                                        <h3>Sign Up <span>Easy<strong>Book</strong></span></h3>
                                        <div class="custom-form">
                                            <form method="post"   name="registerform" class="main-register-form" id="main-register-form2">
                                                <label >Full Name <span>*</span> </label>
                                                <input name="name" type="text"   onClick="this.select()" value="">
                                                <label>Email Address <span>*</span></label>
                                                <input name="email" type="text"  onClick="this.select()" value="">
                                                <label >Password <span>*</span></label>
                                                <input name="password" type="password"   onClick="this.select()" value="" >
                                                <button type="submit"     class="log-submit-btn"  ><span>Register</span></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!--tab end -->
                            </div>
                            <!--tabs end -->
                            <div class="log-separator fl-wrap"><span>or</span></div>
                            <div class="soc-log fl-wrap">
                                <p>For faster login or register use your social account.</p>
                                <a href="#" class="facebook-log"><i class="fab fa-facebook-f"></i>Connect with Facebook</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--register form end -->
            <a class="to-top"><i class="fas fa-caret-up"></i></a>
        </div>
        <!-- Main end -->
        <!--=============== scripts  ===============-->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/scripts.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=YOURAPIKEYHERE&libraries=places&callback=initAutocomplete"></script>        
    </body>
</html>