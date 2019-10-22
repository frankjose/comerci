<?php

require "model/MySQL.php";

$mySQL = new MySQL();
$mySQL->conectar();

$consulta = $mySQL->efectuarConsulta('SELECT * FROM commerci.categoria ');



?>

<!DOCTYPE HTML>
<html lang="en">
    <head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>COMMERCI - JAMUNDÍ</title>
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
                <!-- header-top-->
                
            </header>
            <!--  header end -->
            <!--  wrapper  -->
            <div id="wrapper">
                <!-- content-->
                <div class="content">
                    <!--  section  -->
                    <section class="parallax-section single-par" data-scrollax-parent="true">
                        <div class="bg par-elem "  data-bg="images/establecimientos/inversiones/fondo.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="section-title center-align big-title">
                                <div class="section-title-separator"><span></span></div>
                                <h2><span>Negocios para invertir</span></h2>
                                <span class="section-separator"></span>
                                <h4>Aquí encontraras una vitrina de emprendedores jamundeños que esperan por tí, para que juntos hagamos crecer a Jamundí</h4>
                            </div>
                        </div>
                        <div class="header-sec-link">
                            <div class="container"><a href="#sec1" class="custom-scroll-link color-bg"><i class="fal fa-angle-double-down"></i></a></div>
                        </div>
                    </section>
                    <!--  section  end-->
                    <div class="breadcrumbs-fs fl-wrap">
                        <div class="container">
                            <div class="breadcrumbs fl-wrap"><a href="#">Inicio</a><a href="#">Negocios </a><span>Inversiones</span></div>
                        </div>
                    </div>
                    <!--  section-->
                    <section class="grey-blue-bg small-padding" id="sec1">
                        <div class="container">
                            <div class="row">
                                <!--filter sidebar -->
                                <div class="col-md-4">
                                    <div class="mobile-list-controls fl-wrap">
                                        <div class="mlc show-list-wrap-search fl-wrap"><i class="fal fa-filter"></i> Filtro</div>
                                    </div>
                                    <div class="fl-wrap filter-sidebar_item fixed-bar">
                                        <div class="filter-sidebar fl-wrap lws_mobile">
                                            <!--col-list-search-input-item -->
                                            <div class="col-list-search-input-item in-loc-dec fl-wrap not-vis-arrow">
                                                <label>Categoría</label>
                                                <div class="listsearch-input-item">
                                                    <select data-placeholder="City" class="chosen-select" id="Selectcategoria" onchange="getSubCategoria($(this))" >
                                                    <option>Todos</option>
                                                        <?php while ($row = mysqli_fetch_assoc($consulta)) {  ?>
                                                            <option value="<?php echo $row["id"] ?>"><?php echo $row["nombre"] ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--col-list-search-input-item end-->                      
                                            <!--FILTROS -->
                                            <!--col-list-search-input-item -->
                                            <div class="col-list-search-input-item in-loc-dec fl-wrap not-vis-arrow">
                                                <label>Negocios</label>
                                                <div class="listsearch-input-item">
                                                    <select data-placeholder="City" class="chosen-select" id="subCategoria"  >
                                                    <option>Todos</option>
                                                        <?php while ($row = mysqli_fetch_assoc($consulta)) {  ?>
                                                            <option value="<?php echo $row["id"] ?>"><?php echo $row["nombre"] ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--col-list-search-input-item end-->
  
                                            <!--col-list-search-input-item -->                                            
                                            <div class="col-list-search-input-item fl-wrap">
                                                <div class="range-slider-title">Rango de precios</div>
                                                <div class="range-slider-wrap fl-wrap">
                                                    <input class="range-slider" data-from="300" data-to="1200" data-step="50" data-min="50" data-max="2000" data-prefix="$">
                                                </div>
                                            </div>
                                            <!--col-list-search-input-item end-->                                        
                                            <!--col-list-search-input-item -->
                                            <div class="col-list-search-input-item fl-wrap">
                                                <label>Calificaciones</label>
                                                <div class="search-opt-container fl-wrap">
                                                    <!-- Checkboxes -->
                                                    <ul class="fl-wrap filter-tags">
                                                        <li class="five-star-rating">
                                                            <input id="check-aa2" type="checkbox" name="check" checked>
                                                            <label for="check-aa2"><span class="listing-rating card-popup-rainingvis" data-starrating2="5"><span>5 Estrellas</span></span></label>
                                                        </li>
                                                        <li class="four-star-rating">
                                                            <input id="check-aa3" type="checkbox" name="check">
                                                            <label for="check-aa3"><span class="listing-rating card-popup-rainingvis" data-starrating2="5"><span>4 Estrellas</span></span></label>
                                                        </li>
                                                        <li class="three-star-rating">                                          
                                                            <input id="check-aa4" type="checkbox" name="check">
                                                            <label for="check-aa4"><span class="listing-rating card-popup-rainingvis" data-starrating2="5"><span>3 Estrellas</span></span></label>
                                                        </li>
                                                    </ul>
                                                    <!-- Checkboxes end -->
                                                </div>
                                            </div>
                                            <!--col-list-search-input-item end--> 
                                           
                                            <!--col-list-search-input-item  -->                                         
                                            <div class="col-list-search-input-item fl-wrap">
                                                <button class="header-search-button" onclick="window.location.href='listing.html'">Buscar <i class="far fa-search"></i></button>
                                            </div>
                                            <!--col-list-search-input-item end--> 
                                        </div>
                                    </div>
                                </div>
                                <!--filter sidebar end-->
                                <!--listing -->
                                <div class="col-md-8">
                                    <!--col-list-wrap -->
                                    <div class="col-list-wrap fw-col-list-wrap post-container">
                                        <!-- list-main-wrap-->
                                        <div class="list-main-wrap fl-wrap card-listing">
                                            <!-- list-main-wrap-opt-->
                                            <div class="list-main-wrap-opt fl-wrap">
                                                <div class="list-main-wrap-title fl-wrap col-title">
                                                    <h2>Resultados para : <span>Jamundí </span></h2>
                                                </div>
                                                <!-- price-opt-->
                                                <div class="price-opt">
                                                    <span class="price-opt-title">Ordenar por:</span>
                                                    <div class="listsearch-input-item">
                                                        <select data-placeholder="Popularity" class="chosen-select no-search-select" >
                                                            <option>Popularidad</option>
                                                            <option>Calificación</option>
                                                            <option>Precio: más bajo a más alto</option>
                                                            <option>Precio: más alto a más bajo</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!-- price-opt end-->
                                                <!-- price-opt-->
                                                <div class="grid-opt">
                                                    <ul>
                                                        <li><span class="two-col-grid act-grid-opt"><i class="fas fa-th-large"></i></span></li>
                                                        <li><span class="one-col-grid"><i class="fas fa-bars"></i></span></li>
                                                    </ul>
                                                </div>
                                                <!-- price-opt end-->                               
                                            </div>
                                            <!-- list-main-wrap-opt end-->
                                            <!-- listing-item-container -->
                                            <div class="listing-item-container init-grid-items fl-wrap">
                                                <!-- listing-item  -->
                                                <div class="listing-item">
                                                    <article class="geodir-category-listing fl-wrap">
                                                        <div class="geodir-category-img">
                                                            <a href="listing-single.html"><img src="images/establecimientos/inversiones/calzado.jpeg" alt=""></a>
                                                            <div class="listing-avatar"><a href="author-single.html"><img src="images/user-women.png" alt=""></a>
                                                                <span class="avatar-tooltip">Propietario  <strong>Juana Sandoval</strong></span>
                                                            </div>
                                                            <div class="geodir-category-opt">
                                                                <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                                                <div class="rate-class-name">
                                                                    <div class="score"><strong>3 Empleados</strong></div>
                                                                    <span>Ventas por mes <br> $3 M</span>                                             
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="geodir-category-content fl-wrap title-sin_item">
                                                            <div class="geodir-category-content-title fl-wrap">
                                                                <div class="geodir-category-content-title-item">
                                                                    <h3 class="title-sin_map"><a href="listing-single.html">CALZADO SANDOVAL</a></h3>
                                                                    <div class="geodir-category-location fl-wrap"><a href="#" class="map-item"><i class="fas fa-map-marker-alt"></i> Jamundí, valle del cauca</a></div>
                                                                </div>
                                                            </div>
                                                            <p>Llevamos más de 40 años en el mercado, hacemos reparación de calzado en general. Guayos,zapatillas, sandalias.</p>
                                                         
                                                            <div class="geodir-category-footer fl-wrap">
                                                                <div class="geodir-category-price">Inversión <span>$10.000.000 x 20% </span></div>
                                                                <div class="geodir-opt-list">
                                                                    <a href="#" class="single-map-item" data-newlatitude="40.72956781" data-newlongitude="-73.99726866"><i class="fal fa-map-marker-alt"></i><span class="geodir-opt-tooltip">Ubicación</span></a>
                                                                    <a href="#" class="geodir-js-favorite"><i class="fal fa-heart"></i><span class="geodir-opt-tooltip">Favoritos</span></a>
                                                                </div>
                      
                                                            </div>
                                                            <div class="col-list-search-input-item fl-wrap">
                                                                <button class="header-search-button" onclick="window.location.href='listing.html'">Llamame <i class="far fa-phone"></i></button>
                                                                </div>
                                                                <p>....</p>
                                                        </div>
                                                    </article>
                                                </div>
                                                <!-- listing-item end -->
                                                <!-- listing-item  -->
                                                <div class="listing-item">
                                                    <article class="geodir-category-listing fl-wrap">
                                                        <div class="geodir-category-img">
                                                            <a href="listing-single.html"><img src="images/establecimientos/inversiones/jugos-abuela.jpeg" alt=""></a>
                                                            <div class="listing-avatar"><a href="author-single.html"><img src="images/user-women.png" alt=""></a>
                                                                <span class="avatar-tooltip">Propietario  <strong>Julieth Campos</strong></span>
                                                            </div>
                                                            
                                                            <div class="geodir-category-opt">
                                                                <div class="listing-rating card-popup-rainingvis" data-starrating2="4"></div>
                                                                <div class="rate-class-name">
                                                                    <div class="score"><strong>5 Empleados</strong> </div>
                                                                    <span>Ventas por mes <br>$3.5 M</span>                                             
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="geodir-category-content fl-wrap title-sin_item">
                                                            <div class="geodir-category-content-title fl-wrap">
                                                                <div class="geodir-category-content-title-item">
                                                                    <h3 class="title-sin_map"><a href="listing-single.html">JUGOS DE LA ABUELA</a></h3>
                                                                    <div class="geodir-category-location fl-wrap"><a href="#" class="map-item"><i class="fas fa-map-marker-alt"></i> Jamundí, valle del cauca</a></div>
                                                                </div>
                                                            </div>
                                                            <p>Venta de jugos naturales, limonadas,batidos saludables, té frio y caliente, café expresso, capuchino y antojos tipicos.</p>
                                                                <div class="geodir-category-footer fl-wrap">
                                                                <div class="geodir-opt-link">
                                                                    <div class="geodir-category-price">Inversión <span>$ 5.500.000 x 10%</span></div>
                                                                </div>
                                                                <div class="geodir-opt-list">
                                                                    <a href="#" class="single-map-item" data-newlatitude="40.76221766" data-newlongitude="-73.96511769"><i class="fal fa-map-marker-alt"></i><span class="geodir-opt-tooltip">Ubicación</span></a>
                                                                    <a href="#" class="geodir-js-favorite"><i class="fal fa-heart"></i><span class="geodir-opt-tooltip">Favoritos</span></a>
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="col-list-search-input-item fl-wrap">
                                                                <button class="header-search-button" onclick="window.location.href='listing.html'">Llamame <i class="far fa-phone"></i></button>
                                                                </div>
                                                                <p>...</p>
                                                        </div>
                                                    </article>
                                                </div>
                                                <!-- listing-item end -->                                                  
                                                <!-- listing-item  -->
                                                <div class="listing-item">
                                                    <article class="geodir-category-listing fl-wrap">
                                                        <div class="geodir-category-img">
                                                            <a href="listing-single.html"><img src="images/establecimientos/inversiones/delicias_pey.png" alt=""></a>
                                                            <div class="listing-avatar"><a href="author-single.html"><img src="images/user-men.png" alt=""></a>
                                                                <span class="avatar-tooltip">Propietario  <strong>Andres Mora</strong></span>
                                                            </div>
                                                            <div class="geodir-category-opt">
                                                                <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                                                <div class="rate-class-name">
                                                                    <div class="score"><strong>6 Empleados</strong> </div>
                                                                    <span>Ventas por mes <br>$5 M</span>                                             
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="geodir-category-content fl-wrap title-sin_item">
                                                            <div class="geodir-category-content-title fl-wrap">
                                                                <div class="geodir-category-content-title-item">
                                                                    <h3 class="title-sin_map"><a href="listing-single.html">LAS DELICIAS DE PEY</a></h3>
                                                                    <div class="geodir-category-location fl-wrap"><a href="#" class="map-item"><i class="fas fa-map-marker-alt"></i>Portal del jordan, Jamundí,  Valle del cauca</a></div>
                                                                </div>
                                                            </div>
                                                            <p> Comidas rápidas, colitas cubanas, salchipapa, hamburguesa, perros.</p>
                 
                                                            <div class="geodir-category-footer fl-wrap">
                                                                <div class="geodir-opt-link">
                                                                    <div class="geodir-category-price">Inversion  <span>libre x 15%</span></div>
                                                                </div>
                                                                <div class="geodir-opt-list">
                                                                    <a href="#" class="single-map-item" data-newlatitude="40.88496706" data-newlongitude="-73.88191222"><i class="fal fa-map-marker-alt"></i><span class="geodir-opt-tooltip">On the map</span></a>
                                                                    <a href="#" class="geodir-js-favorite"><i class="fal fa-heart"></i><span class="geodir-opt-tooltip">Save</span></a>
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="col-list-search-input-item fl-wrap">
                                                                <button class="header-search-button" onclick="window.location.href='listing.html'">Llamame <i class="far fa-phone"></i></button>
                                                                </div>
                                                                <p>...</p>
                                                        </div>
                                                    </article>
                                                </div>
                                                <!-- listing-item end -->                           
                                                <!-- listing-item  -->
                                                <div class="listing-item">
                                                    <article class="geodir-category-listing fl-wrap">
                                                        <div class="geodir-category-img">
                                                            <a href="listing-single.html"><img src="images/establecimientos/inversiones/visuteria_coco.jpeg" alt=""></a>
                                                            <div class="listing-avatar"><a href="author-single.html"><img src="images/user-men.png" alt=""></a>
                                                                <span class="avatar-tooltip">Propietario  <strong>Mario Perez</strong></span>
                                                            </div>
                                                            <div class="geodir-category-opt">
                                                                <div class="listing-rating card-popup-rainingvis" data-starrating2="3"></div>
                                                                <div class="rate-class-name">
                                                                    <div class="score"><strong>1 Empleado</strong> </div>
                                                                    <span>Ventas por mes <br>$700 Mil</span>                                             
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="geodir-category-content fl-wrap title-sin_item">
                                                            <div class="geodir-category-content-title fl-wrap">
                                                                <div class="geodir-category-content-title-item">
                                                                    <h3 class="title-sin_map"><a href="listing-single.html">BISUTERIA Y ARTESANIAS COCO</a></h3>
                                                                    <div class="geodir-category-location fl-wrap"><a href="#" class="map-item"><i class="fas fa-map-marker-alt"></i> PARQUE PRINCIPAL MUNICIPAL-KIOSKO 2, JAMUNDI </a></div>
                                                                </div>
                                                            </div>
                                                            <p>  Venta de artesanías, bisutería, bordados y tejidos. Ofrecemos joyas en acero y artesanías a los mejores precios y de la mejor calidad</p>
                                                            <div class="geodir-category-footer fl-wrap">
                                                                <div class="geodir-opt-link">
                                                                    <div class="geodir-category-price">Inversion <span>libre x 5%<</span></div>
                                                                </div>
                                                                <div class="geodir-opt-list">
                                                                    <a href="#" class="single-map-item" data-newlatitude="40.72228267" data-newlongitude="-73.99246214"><i class="fal fa-map-marker-alt"></i><span class="geodir-opt-tooltip">Ubicación</span></a>
                                                                    <a href="#" class="geodir-js-favorite"><i class="fal fa-heart"></i><span class="geodir-opt-tooltip">Favorito</span></a>
                                                                   
                                                                </div>
                                                            </div>
                                                            <div class="col-list-search-input-item fl-wrap">
                                                                <button class="header-search-button" onclick="window.location.href='listing.html'">Llamame <i class="far fa-phone"></i></button>
                                                                </div>
                                                                <p>...</p>
                                                        </div>
                                                    </article>
                                                </div>
                                                <!-- listing-item end -->                                                
                                            </div>
                                           
                                        <!-- list-main-wrap end-->
                                    </div>
                                    <!--col-list-wrap end -->
                                </div>
                                <!--listing  end-->
                            </div>
                            <!--row end-->
                        </div>
                        <div class="limit-box fl-wrap"></div>
                    </section>
                </div>
                <!-- content end-->
            </div>
            <!--wrapper end -->
           <!--footer -->
        <footer class="main-footer">
            <!--subscribe-wrap-->

            <!--sub-footer end -->
        </footer>
        <!--footer end -->
            <!--map-modal -->
            <div class="map-modal-wrap">
                <div class="map-modal-wrap-overlay"></div>
                <div class="map-modal-item">
                    <div class="map-modal-container fl-wrap">
                        <div class="map-modal fl-wrap">
                            <div id="singleMap" data-latitude="40.7" data-longitude="-73.1"></div>
                        </div>
                        <h3><i class="fal fa-location-arrow"></i><a href="#">Hotel Title</a></h3>
                        <input id="pac-input" class="controls fl-wrap controls-mapwn" type="text" placeholder="What Nearby ?   Bar , Gym , Restaurant ">
                        <div class="map-modal-close"><i class="fal fa-times"></i></div>
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
        <script type="text/javascript" src="js/map-single.js"></script>         
        
        <script type="text/javascript" src="js/ajax.js"></script>
        <script type="text/javascript" src="js/componentsBuilder.js"></script>
        
        <script> 
        function getSubCategoria(seletOpt) {

        var categoria_id = seletOpt.val()
        $.ajax({
            type: "POST",
            url: "model/getSubCategorias.php?cateria_id=" + categoria_id,
            dataType: "html",
            data: $(this).serialize(),
            beforeSend: function() {
                //imagenesCarga();
            },
            error: function(response, quepaso, otroobj) {
                alert('error recargando la pagina');
                //            console.log(response);
            },
            success: function(response) {
                $("#subCategoria").val();
                var myObj = JSON.parse(response);

                var x = document.getElementById("subCategoria");
                var options = "";
                if (myObj.length > 1) {
                    for (var j = 0; j < myObj.length; j++) {
                        options += "<option value='" + myObj[j].id + "'>" + myObj[j].nombre + "</option>"
                    }
                    x.innerHTML = options;
                    $('#categoria').niceSelect("update");
                } else {
                    $("#subCategoria").val();
                }

            }
        });
        } </script>
    </body>
</html>