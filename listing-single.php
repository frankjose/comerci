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
                <!-- header-top-->
                <div class="header-top fl-wrap">
                    <div class="container">
                        <div class="logo-holder">
                            <a href="index.html"><img src="images/logo.png" alt=""></a>
                        </div>
                        <a href="dashboard-add-listing.html" class="add-hotel">Registrarse <span><i class="far fa-plus"></i></span></a>                     
                        <div class="show-reg-form modal-open"><i class="fa fa-sign-in"></i>Ingresar</div>
                        <div class="lang-wrap">
                            <div class="show-lang"><img src="images/lan/1.png" alt=""> <span>Eng</span><i class="fa fa-caret-down"></i></div>
                            <ul class="lang-tooltip green-bg">
                                <li><a href="#"><img src="images/lan/4.png" alt=""> De</a></li>
                                <li><a href="#"><img src="images/lan/5.png" alt=""> It</a></li>
                                <li><a href="#"><img src="images/lan/2.png" alt=""> Fr</a></li>
                                <li><a href="#"><img src="images/lan/3.png" alt=""> Es</a></li>
                            </ul>
                        </div>
                        <div class="currency-wrap">
                            <div class="show-currency-tooltip"><i class="fas fa-dollar-sign"></i> <span>USD <i class="fa fa-caret-down"></i> </span></div>
                            <ul class="currency-tooltip">
                                <li><a href="#"><i class="far fa-euro-sign"></i> EUR</a></li>
                                <li><a href="#"><i class="far fa-pound-sign"></i> GBP</a></li>
                                <li><a href="#"><i class="far fa-ruble-sign"></i>RUR</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- header-top end-->
                <!-- header-inner-->
                <div class="header-inner fl-wrap">
                    <div class="container">
                        <div class="show-search-button"><span>Search</span> <i class="fas fa-search"></i> </div>
                        <div class="wishlist-link"><i class="fal fa-heart"></i><span class="wl_counter">3</span></div>
                        <div class="header-user-menu">
                            <div class="header-user-name">
                                <span><img src="images/avatar/1.jpg" alt=""></span>
                                My account
                            </div>
                            <ul>
                                <li><a href="dashboard-myprofile.html"> Edit profile</a></li>
                                <li><a href="dashboard-add-listing.html"> Add Listing</a></li>
                                <li><a href="dashboard-bookings.html">  Bookings  </a></li>
                                <li><a href="dashboard-review.html"> Reviews </a></li>
                                <li><a href="#">Log Out</a></li>
                            </ul>
                        </div>
                        <div class="home-btn"><a href="index.html"><i class="fas fa-home"></i></a></div>
                        <!-- nav-button-wrap-->
                        <div class="nav-button-wrap color-bg">
                            <div class="nav-button">
                                <span></span><span></span><span></span>
                            </div>
                        </div>
                        <!-- nav-button-wrap end-->
                        <!--  navigation -->
                        <div class="nav-holder main-menu">
                            <nav>
                                <ul>
                                    <li>
                                        <a href="#">Home <i class="fas fa-caret-down"></i></a>
                                        <!--second level -->
                                        <ul>
                                            <li><a href="index.html">Parallax Image</a></li>
                                            <li><a href="index2.html">Slider</a></li>
                                            <li><a href="index3.html">Video</a></li>
                                            <li><a href="index4.html">Slideshow</a></li>
                                        </ul>
                                        <!--second level end-->
                                    </li>
                                    <li>
                                        <a href="#" class="act-link">Listings <i class="fas fa-caret-down"></i></a>
                                        <!--second level -->
                                        <ul>
                                            <li><a href="listing.html">Column map</a></li>
                                            <li><a href="listing6.html">Column map 2</a></li>
                                            <li><a href="listing2.html">Fullwidth Map</a></li>
                                            <li><a href="listing3.html">Fullwidth Map 2</a></li>
                                            <li><a href="listing4.html">Without Map</a></li>
                                            <li><a href="listing5.html">Without Map 2</a></li>
                                            <li>
                                                <a href="#">Single <i class="fas fa-caret-down"></i></a>
                                                <!--third  level  -->
                                                <ul>
                                                    <li><a href="listing-single.html">Style 1</a></li>
                                                    <li><a href="listing-single2.html">Style 2</a></li>
                                                    <li><a href="listing-single3.html">Style 3</a></li>
                                                    <li><a href="listing-single4.html">Style 4</a></li>
                                                </ul>
                                                <!--third  level end-->
                                            </li>
                                        </ul>
                                        <!--second level end-->
                                    </li>
                                    <li>
                                        <a href="blog.html">News</a>
                                    </li>
                                    <li>
                                        <a href="#">Pages <i class="fas fa-caret-down"></i></a>
                                        <!--second level -->
                                        <ul>
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="contacts.html">Contacts</a></li>
                                            <li><a href="author-single.html">User single</a></li>
                                            <li><a href="help.html">Help FAQ</a></li>
                                            <li><a href="pricing-tables.html">Pricing</a></li>
                                            <li><a href="booking-single.html">Booking</a></li>
                                            <li><a href="dashboard.html">User Dashboard</a></li>
                                            <li><a href="blog2.html">Blog Classik</a></li>
                                            <li><a href="blog-single.html">Blog Single</a></li>
                                            <li><a href="dashboard-add-listing.html">Add Listing</a></li>
                                            <li><a href="404.html">404</a></li>
                                            <li><a href="invoice.html">Invoice</a></li>
                                            <li><a href="coming-soon.html">Coming Soon</a></li>
                                        </ul>
                                        <!--second level end-->
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- navigation  end -->
                        <!-- wishlist-wrap-->            
                        <div class="wishlist-wrap scrollbar-inner novis_wishlist">
                            <div class="box-widget-content">
                                <div class="widget-posts fl-wrap">
                                    <ul>
                                        <li class="clearfix">
                                            <a href="#"  class="widget-posts-img"><img src="images/gal/1.jpg" class="respimg" alt=""></a>
                                            <div class="widget-posts-descr">
                                                <a href="#" title="">Park Central</a>
                                                <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                                <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> 40 JOURNAL SQUARE PLAZA, NJ, US</a></div>
                                                <span class="rooms-price">$80 <strong> /  Awg</strong></span>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <a href="#"  class="widget-posts-img"><img src="images/gal/1.jpg" class="respimg" alt=""></a>
                                            <div class="widget-posts-descr">
                                                <a href="#" title="">Holiday Home</a>
                                                <div class="listing-rating card-popup-rainingvis" data-starrating2="3"></div>
                                                <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> 75 PRINCE ST, NY, USA</a></div>
                                                <span class="rooms-price">$50 <strong> /   Awg</strong></span>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <a href="#"  class="widget-posts-img"><img src="images/gal/1.jpg" class="respimg" alt=""></a>
                                            <div class="widget-posts-descr">
                                                <a href="#" title="">Moonlight Hotel</a>
                                                <div class="listing-rating card-popup-rainingvis" data-starrating2="4"></div>
                                                <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i>  70 BRIGHT ST NEW YORK, USA</a></div>
                                                <span class="rooms-price">$105 <strong> /  Awg</strong></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- wishlist-wrap end--> 
                    </div>
                </div>
                <!-- header-inner end-->
                <!-- header-search -->
                <div class="header-search vis-search">
                    <div class="container">
                        <div class="row">
                            <!-- header-search-input-item -->
                            <div class="col-sm-4">
                                <div class="header-search-input-item fl-wrap location autocomplete-container">
                                    <label>Destination or Hotel Name</label>
                                    <span class="header-search-input-item-icon"><i class="fal fa-map-marker-alt"></i></span>
                                    <input type="text" placeholder="Location" class="autocomplete-input" id="autocompleteid" value=""/>
                                    <a href="#"><i class="fal fa-dot-circle"></i></a>
                                </div>
                            </div>
                            <!-- header-search-input-item end -->
                            <!-- header-search-input-item -->
                            <div class="col-sm-3">
                                <div class="header-search-input-item fl-wrap date-parent">
                                    <label>Date In-Out </label>
                                    <span class="header-search-input-item-icon"><i class="fal fa-calendar-check"></i></span>
                                    <input type="text" placeholder="When" name="header-search"   value=""/>
                                </div>
                            </div>
                            <!-- header-search-input-item end -->                             
                            <!-- header-search-input-item -->
                            <div class="col-sm-3">
                                <div class="header-search-input-item fl-wrap">
                                    <div class="quantity-item">
                                        <label>Rooms</label>
                                        <div class="quantity">
                                            <input type="number" min="1" max="3" step="1" value="1">
                                        </div>
                                    </div>
                                    <div class="quantity-item">
                                        <label>Adults</label>
                                        <div class="quantity">
                                            <input type="number" min="1" max="3" step="1" value="1">
                                        </div>
                                    </div>
                                    <div class="quantity-item">
                                        <label>Children</label>
                                        <div class="quantity">
                                            <input type="number" min="0" max="3" step="1" value="0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- header-search-input-item end -->                             
                            <!-- header-search-input-item -->
                            <div class="col-sm-2">
                                <div class="header-search-input-item fl-wrap">
                                    <button class="header-search-button" onclick="window.location.href='listing.html'">Search <i class="far fa-search"></i></button>
                                </div>
                            </div>
                            <!-- header-search-input-item end -->                                                          
                        </div>
                    </div>
                    <div class="close-header-search"><i class="fal fa-angle-double-up"></i></div>
                </div>
                <!-- header-search  end -->
            </header>
            <!--  header end -->
            <!--  wrapper  -->
            <div id="wrapper">
                <!-- content-->
                <div class="content">
                    <!--  section  -->
                    <section class="list-single-hero" data-scrollax-parent="true" id="sec1">
                        <div class="bg par-elem "  data-bg="images/bg/1.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
                        <div class="list-single-hero-title fl-wrap">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="listing-rating-wrap">
                                            <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                        </div>
                                        <h2><span>Restaurante Doña Aleja</span></h2>
                                        <div class="list-single-header-contacts fl-wrap">
                                            <ul>
                                                <li><i class="far fa-phone"></i><a  href="#">(+57) 312 8561134 </a></li>
                                                <li><i class="far fa-map-marker-alt"></i><a  href="#">Potrerito, Jamundí, Valle del Cauca - COL</a></li>
                                                <li><i class="far fa-envelope"></i><a  href="#">restaurantealeja@gmail.com</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <!--  list-single-hero-details-->
                                        <div class="list-single-hero-details fl-wrap">
                                            <!--  list-single-hero-rating-->
                                            <div class="list-single-hero-rating">
                                                <div class="rate-class-name">
                                                    <div class="score"><strong>Muy bueno</strong>2 opiniones </div>
                                                    <span>4.5</span>                                             
                                                </div>
                                                <!-- list-single-hero-rating-list-->
                                                <div class="list-single-hero-rating-list">
                                                    <!-- rate item-->
                                                    <div class="rate-item fl-wrap">
                                                        <div class="rate-item-title fl-wrap"><span>Atención</span></div>
                                                        <div class="rate-item-bg" data-percent="100%">
                                                            <div class="rate-item-line color-bg"></div>
                                                        </div>
                                                        <div class="rate-item-percent">5.0</div>
                                                    </div>
                                                    <!-- rate item end-->
                                                    <!-- rate item-->
                                                    <div class="rate-item fl-wrap">
                                                        <div class="rate-item-title fl-wrap"><span>Calidad</span></div>
                                                        <div class="rate-item-bg" data-percent="90%">
                                                            <div class="rate-item-line color-bg"></div>
                                                        </div>
                                                        <div class="rate-item-percent">5.0</div>
                                                    </div>
                                                    <!-- rate item end-->                                                        
                                                    <!-- rate item-->
                                                    <div class="rate-item fl-wrap">
                                                        <div class="rate-item-title fl-wrap"><span>Precio</span></div>
                                                        <div class="rate-item-bg" data-percent="80%">
                                                            <div class="rate-item-line color-bg"></div>
                                                        </div>
                                                        <div class="rate-item-percent">4.0</div>
                                                    </div>
                                                    <!-- rate item end-->  
                                                    <!-- rate item-->
                                                    <div class="rate-item fl-wrap">
                                                        <div class="rate-item-title fl-wrap"><span>Satisfacción </span></div>
                                                        <div class="rate-item-bg" data-percent="90%">
                                                            <div class="rate-item-line color-bg"></div>
                                                        </div>
                                                        <div class="rate-item-percent">4.5</div>
                                                    </div>
                                                    <!-- rate item end--> 
                                                </div>
                                                <!-- list-single-hero-rating-list end-->
                                            </div>
                                            <!--  list-single-hero-rating  end-->
                                            <div class="clearfix"></div>
                                            <!-- list-single-hero-links-->
                                            <div class="list-single-hero-links">
                                                <a class="lisd-link" href="booking-single.html"><i class="fal fa-bookmark"></i> Guardar</a>
                                                <a class="custom-scroll-link lisd-link" href="#sec6"><i class="fal fa-comment-alt-check"></i> Agregar opinión</a>
                                            </div>
                                            <!--  list-single-hero-links end-->                                            
                                        </div>
                                        <!--  list-single-hero-details  end-->
                                    </div>
                                </div>
                                <div class="breadcrumbs-hero-buttom fl-wrap">
                                    <div class="breadcrumbs"><a href="#">Inicio</a><a href="#">Comidas</a><a href="#">Restaurantes</a><span>Restaurante Doña Aleja</span></div>
                                    
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--  section  end-->
                    <!--  section  -->
                    <section class="grey-blue-bg small-padding scroll-nav-container" id="sec2">
                        <!--  scroll-nav-wrapper  -->
                        <div class="scroll-nav-wrapper fl-wrap">
                            <div class="hidden-map-container fl-wrap">
                                <input id="pac-input" class="controls fl-wrap controls-mapwn" type="text" placeholder="What Nearby ?   Bar , Gym , Restaurant ">
                                <div class="map-container">
                                    <div id="singleMap" data-latitude="40.7427837" data-longitude="-73.11445617675781"></div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="container">
                                <nav class="scroll-nav scroll-init">
                                    <ul>
                                        <li><a class="act-scrlink" href="#sec1">Inicio</a></li>
                                        <li><a href="#sec2">Detalles</a></li>
                                        <li><a href="#sec3">Servicios</a></li>
                                        <li><a href="#sec4">Productos</a></li>
                                        <li><a href="#sec5">Opiniones</a></li>
                                    </ul>
                                </nav>
                                <a href="#" class="show-hidden-map">  <span>Como llegar</span> <i class="fal fa-map-marked-alt"></i></a>
                            </div>
                        </div>
                        <!--  scroll-nav-wrapper end  -->                    
                        <!--   container  -->
                        <div class="container">
                            <!--   row  -->
                            <div class="row">
                                <!--   datails -->
                                <div class="col-md-8">
                                    <div class="list-single-main-container ">
                                        <!-- fixed-scroll-column  -->
                                        <div class="fixed-scroll-column">
                                            <div class="fixed-scroll-column-item fl-wrap">
                                                <div class="showshare sfcs fc-button"><i class="far fa-share-alt"></i><span>Compartir </span></div>
                                                <div class="share-holder fixed-scroll-column-share-container">
                                                    <div class="share-container  isShare"></div>
                                                </div>
                                                <a class="fc-button custom-scroll-link" href="#sec6"><i class="far fa-comment-alt-check"></i> <span>  Agregar opinión </span></a>
                                                <a class="fc-button" href="#"><i class="far fa-heart"></i> <span>Favorito</span></a>
                                                <a class="fc-button" href="booking-single.html"><i class="far fa-bookmark"></i> <span> Guardar </span></a>
                                            </div>
                                        </div>
                                        <!-- fixed-scroll-column end   -->
                                        <div class="list-single-main-media fl-wrap">
                                            <!-- gallery-items   -->
                                            <div class="gallery-items grid-small-pad  list-single-gallery three-coulms lightgallery">
                                                <!-- 1 -->
                                                <div class="gallery-item ">
                                                    <div class="grid-item-holder">
                                                        <div class="box-item">
                                                            <img  src="images/establecimientos/plato-a-la-carta-doña-aleja.jpg"   alt="">
                                                            <a href="images/establecimientos/plato-a-la-carta-doña-aleja.jpg" class="gal-link popup-image"><i class="fa fa-search"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- 1 end -->
                                                <!-- 2 -->
                                                <div class="gallery-item">
                                                    <div class="grid-item-holder">
                                                        <div class="box-item">
                                                            <img  src="images/establecimientos/restaurante-donaaleja12.jpg"   alt="">
                                                            <a href="images/establecimientos/restaurante-donaaleja12.jpg" class="gal-link popup-image"><i class="fa fa-search"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- 2 end -->
                                                <!-- 3 -->
                                                <div class="gallery-item gallery-item-second">
                                                    <div class="grid-item-holder">
                                                        <div class="box-item">
                                                            <img  src="images/establecimientos/sancocho-aleja.jpg"   alt="">
                                                            <a href="images/establecimientos/sancocho-aleja.jpg" class="gal-link popup-image"><i class="fa fa-search"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- 3 end -->
                    
                                                <!-- 7 -->
                                                <div class="gallery-item">
                                                    <div class="grid-item-holder">
                                                        <div class="box-item">
                                                            <img  src="images/gal/1.jpg"   alt="">
                                                            <div class="more-photos-button dynamic-gal"  data-dynamicPath="[{'src': 'images/gal/1.jpg'}, {'src': 'images/gal/1.jpg'},{'src': 'images/gal/1.jpg'}]">Other <span>4 photos</span><i class="far fa-long-arrow-right"></i></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- 7 end -->
                                            </div>
                                            <!-- end gallery items -->                                          
                                        </div>
                                        <!-- list-single-header end -->
                                        <div class="list-single-facts fl-wrap">
                                            <!-- inline-facts -->
                                            <div class="inline-facts-wrap">
                                                <div class="inline-facts">
                                                    <i class="fal fa-bed"></i>
                                                    <div class="milestone-counter">
                                                        <div class="stats animaper">
                                                        </div>
                                                    </div>
                                                    <h6>Zona de hamacas</h6>
                                                </div>
                                            </div>
                                            <!-- inline-facts end -->
                                            <!-- inline-facts  -->
                                            <div class="inline-facts-wrap">
                                                <div class="inline-facts">
                                                    <i class="fal fa-users"></i>
                                                    <div class="milestone-counter">
                                                        <div class="stats animaper">
                                                            
                                                        </div>
                                                    </div>
                                                    <h6>Eventos sociales y empresariales</h6>
                                                </div>
                                            </div>
                                            <!-- inline-facts end -->
                                            <!-- inline-facts -->
                                            <div class="inline-facts-wrap">
                                                <div class="inline-facts">
                                                    <i class="fal fa-taxi"></i>
                                                    <div class="milestone-counter">
                                                        <div class="stats animaper">
                                                            
                                                        </div>
                                                    </div>
                                                    <h6>Parqueaderos amplios</h6>
                                                </div>
                                            </div>
                                            <!-- inline-facts end -->
                                            <!-- inline-facts -->
                                            <div class="inline-facts-wrap">
                                                <div class="inline-facts">
                                                    <i class="fal fa-cocktail"></i>
                                                    <div class="milestone-counter">
                                                        <div class="stats animaper">
                                                            
                                                        </div>
                                                    </div>
                                                    <h6>Comida típica vallecaucana y postres</h6>
                                                </div>
                                            </div>
                                            <!-- inline-facts end -->                                                                        
                                        </div>
                                        <!--   list-single-main-item -->
                                        <div class="list-single-main-item fl-wrap">
                                            <div class="list-single-main-item-title fl-wrap">
                                                <h3>Descripción </h3>
                                            </div>
                                            <p>Restaurante Doña Aleja, prestamos servicios de alimentos y bebidas de Cocina Típica Vallecaucana, con más de 25 años de experiencia en Calidad y Servicio.</p>
                                            <p>Conoce la mejor gastronomía de la región, en el más antiguo restaurante del sector, con más de 45 años de tradición el Restaurante Típico Doña Aleja La Original deleitando paladares. Con su espectacular Sancocho de Gallina en Fogón de leña y demás Comida Típica Vallecaucana. Ven y disfruta de su Ambiente Familiar.</p>
                                            <a href="https://www.youtube.com/watch?v=TY_sJF_ZKXM" class="btn flat-btn color-bg big-btn float-btn image-popup">Video Presentación <i class="fal fa-play"></i></a>
                                        </div>
                                        <!--   list-single-main-item end -->
                                        <!--   list-single-main-item -->
                                        <div class="list-single-main-item fl-wrap" id="sec3">
                                            <div class="list-single-main-item-title fl-wrap">
                                                <h3>Servicios</h3>
                                            </div>
                                            <div class="listing-features fl-wrap">
                                                <ul>
                                                    <li><i class="fal fa-wifi"></i> Zona Wi-Fi</li>    
                                                    <li><i class="fal fa-parking"></i> Parqueadero</li>
                                                    <li><i class="fal fa-plane"></i>Hamacas</li>
                                                    <li><i class="fal fa-paw"></i> Paseo a caballo</li>
                                                    <li><i class="fal fa-utensils"></i> Ambiente Familiar</li>
                                                    <li><i class="fal fa-wheelchair"></i>Juegos infantiles</li>
                                                    <li><i class="fal fa-rocket"></i>Tarjeta débito, crédito y efectivo</li>
                                                    <li><i class="fal fa-snowflake"></i>Eventos sociales y empresariales</li>
                                                    <li><i class="fal fa-snowflake"></i>Cocina Típica Vallecaucana</li>
                                                </ul>
                                            </div>
                                            <span class="fw-separator"></span>
                                            <div class="list-single-main-item-title no-dec-title fl-wrap">
                                                <h3>Tags</h3>
                                            </div>
                                            <div class="list-single-tags tags-stylwrap">
                                                <a href="#">Colombiana</a>
                                                <a href="#">Restaurante Cocina Típica Vallecaucana</a>
                                                <a href="#">Parrillada</a>
                                                <a href="#">Servicio de mesa</a> 
                                                                              
                                            </div>
                                        </div>
                                        <!--   list-single-main-item end -->     
                                                   
                                        <!--   list-single-main-item -->
                                        <div class="list-single-main-item fl-wrap" id="sec4">
                                            <div class="list-single-main-item-title fl-wrap">
                                                <h3>Productos</h3>
                                            </div>
                                            <!--   rooms-container -->
                                            <div class="rooms-container fl-wrap">
                                                <!--  rooms-item -->
                                                <div class="rooms-item fl-wrap">
                                                    <div class="rooms-media">
                                                        <img src="images/gal/1.jpg" alt="">
                                                        <div class="dynamic-gal more-photos-button" data-dynamicPath="[{'src': 'images/gal/slider/1.jpg'}, {'src': 'images/gal/slider/1.jpg'},{'src': 'images/gal/slider/1.jpg'}]">  View Gallery <span>3 photos</span> <i class="far fa-long-arrow-right"></i></div>
                                                    </div>
                                                    <div class="rooms-details">
                                                        <div class="rooms-details-header fl-wrap">
                                                            <span class="rooms-price">$27.000<strong>/ plato</strong></span>

                                                            <!-- productos -->
                                                            <h3>PUESTO DE GALLINA</h3>
                                                            <h5>Recomendado para: <span>1 persona</span></h5>
                                                        </div>
                                                        <p>Plato de sancocho de gallina, para 1 persona con gallina o pollo sudado y/o a la brasa con rica ensalada y arroz. .</p>
                                                      <div class="facilities-list fl-wrap">

                                                            <a href="rooms/room1.html" class="btn color-bg ajax-link">Details<i class="fas fa-caret-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--  rooms-item end -->
                                                <!--  rooms-item -->
                                                <div class="rooms-item fl-wrap">
                                                    <div class="rooms-media">
                                                        <img src="images/gal/1.jpg" alt="">
                                                        <div class="dynamic-gal more-photos-button" data-dynamicPath="[{'src': 'images/gal/slider/1.jpg'}, {'src': 'images/gal/slider/1.jpg'}, {'src': 'images/gal/slider/1.jpg'} ]">View Gallery <span>3 photos</span> <i class="far fa-long-arrow-right"></i></div>
                                                    </div>
                                                    <div class="rooms-details">
                                                        <div class="rooms-details-header fl-wrap">
                                                            <span class="rooms-price">$90.000 <strong></strong></span>
                                                            <h3>GALLINA FAMILIAR</h3>
                                                            <h5>Recomendado para: <span>6 personas</span></h5>
                                                        </div>
                                                        <p>Sancocho de gallina para seis personas con gallina o pollo sudado y/o a la brasa con rica ensalada y arroz.</p>
                                                        <p> Incluye patacones con aogao y menudencias a la brasa como entrada.</p>
                                                                                                                
                                                        <div class="facilities-list fl-wrap">
                                                           
                                                            <a href="rooms/room2.html" class="btn color-bg ajax-link">Details<i class="fas fa-caret-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--  rooms-item end -->   
                                                <!--  rooms-item -->
                                                <div class="rooms-item fl-wrap">
                                                    <div class="rooms-media">
                                                        <img src="images/gal/1.jpg" alt="">
                                                        <div class="dynamic-gal more-photos-button" data-dynamicPath="[{'src': 'images/gal/slider/1.jpg'},{'src': 'images/gal/slider/1.jpg'}, {'src': 'images/gal/slider/1.jpg'},{'src': 'images/gal/slider/1.jpg'}]"> View Gallery <span>4 photos</span> <i class="far fa-long-arrow-right"></i> </div>
                                                    </div>
                                                    <div class="rooms-details">
                                                        <div class="rooms-details-header fl-wrap">
                                                            <span class="rooms-price">$12.000 <strong> / person</strong></span>
                                                            <h3>JARRA DE LIMONADA - GRANDE </h3>
                                                        </div>
                                                        <p>Jarra de limonada con hielo para aproximadamente 6 personas</p>
                                                        <div class="facilities-list fl-wrap">
                                                         
                                                            <a href="rooms/room3.html" class="btn color-bg ajax-link">Details<i class="fas fa-caret-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--  rooms-item end -->                                                      
                                            </div>
                                            <!--   rooms-container end -->
                                        </div>
                                        <!-- list-single-main-item end -->
                                        <!-- list-single-main-item -->   
                                        <div class="list-single-main-item fl-wrap" id="sec5">
                                            <div class="list-single-main-item-title fl-wrap">
                                                <h3>Opiniones   -  <span> 2 </span></h3>
                                            </div>
                                            <!--reviews-score-wrap-->   
                                            <div class="reviews-score-wrap fl-wrap">
                                                <div class="review-score-total">
                                                    <span>
                                                    4.5
                                                    <strong>Calificación</strong>
                                                    </span>
                                                    <a href="#" class="color2-bg">Agregar Opinión</a>
                                                </div>
                                                <div class="review-score-detail">
                                                    <!-- review-score-detail-list-->
                                                    <div class="review-score-detail-list">
                                                        <!-- rate item-->
                                                        <div class="rate-item fl-wrap">
                                                            <div class="rate-item-title fl-wrap"><span>Comida</span></div>
                                                            <div class="rate-item-bg" data-percent="100%">
                                                                <div class="rate-item-line color-bg"></div>
                                                            </div>
                                                            <div class="rate-item-percent">5.0</div>
                                                        </div>
                                                        <!-- rate item end-->
                                                        <!-- rate item-->
                                                        <div class="rate-item fl-wrap">
                                                            <div class="rate-item-title fl-wrap"><span>Servicio</span></div>
                                                            <div class="rate-item-bg" data-percent="100%">
                                                                <div class="rate-item-line color-bg"></div>
                                                            </div>
                                                            <div class="rate-item-percent">5.0</div>
                                                        </div>
                                                        <!-- rate item end-->                                                        
                                                        <!-- rate item-->
                                                        <div class="rate-item fl-wrap">
                                                            <div class="rate-item-title fl-wrap"><span>Calidad/precio</span></div>
                                                            <div class="rate-item-bg" data-percent="100%">
                                                                <div class="rate-item-line color-bg"></div>
                                                            </div>
                                                            <div class="rate-item-percent">5.0</div>
                                                        </div>
                                                        <!-- rate item end-->  
                                                        <!-- rate item-->
                                                        <div class="rate-item fl-wrap">
                                                            <div class="rate-item-title fl-wrap"><span>Tiempo de entrega</span></div>
                                                            <div class="rate-item-bg" data-percent="90%">
                                                                <div class="rate-item-line color-bg"></div>
                                                            </div>
                                                            <div class="rate-item-percent">4.5</div>
                                                        </div>
                                                        <!-- rate item end--> 
                                                    </div>
                                                    <!-- review-score-detail-list end-->
                                                </div>
                                            </div>
                                            <!-- reviews-score-wrap end -->   
                                            <div class="reviews-comments-wrap">
                                                <!-- reviews-comments-item -->  
                                                <div class="reviews-comments-item">
                                                    <div class="review-comments-avatar">
                                                        <img src="images/user-women.png" alt=""> 
                                                    </div>
                                                    <div class="reviews-comments-item-text">
                                                        <h4><a href="#">Liza Rose</a></h4>
                                                        <div class="review-score-user">
                                                            <span>4.4</span>
                                                            <strong>Bueno</strong>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <p>" Buen sitio para almorzar y pasar la tarde con la familia, hay zonas verdes con juegos infantiles, sillas y hamacas al aire libre.  "</p>
                                                        <div class="reviews-comments-item-date"><span><i class="far fa-calendar-check"></i>12 Junio 2019</span><a href="#"><i class="fal fa-reply"></i> Reply</a></div>
                                                    </div>
                                                </div>
                                                <!--reviews-comments-item end--> 
                                                <!-- reviews-comments-item -->  
                                                <div class="reviews-comments-item">
                                                    <div class="review-comments-avatar">
                                                        <img src="images/user-men.png" alt=""> 
                                                    </div>
                                                    <div class="reviews-comments-item-text">
                                                        <h4><a href="#">Adam Koncy</a></h4>
                                                        <div class="review-score-user">
                                                            <span>4.7</span>
                                                            <strong>Muy Bueno</strong>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <p>" Platos muy grandes por porción, delicioso y típico sancocho valluno para compartir en familia. Ideal para ir el fin de semana y después ir por el cholado en Jamundi!!! "</p>
                                                        <div class="reviews-comments-item-date"><span><i class="far fa-calendar-check"></i>03 Septiembre 2019</span><a href="#"><i class="fal fa-reply"></i> Reply</a></div>
                                                    </div>
                                                </div>
                                                <!--reviews-comments-item end-->                                                                  
                                            </div>
                                        </div>
                                        <!-- list-single-main-item end -->   
                                        <!-- list-single-main-item -->   
                                        <div class="list-single-main-item fl-wrap" id="sec6">
                                            <div class="list-single-main-item-title fl-wrap">
                                                <h3>Agregar opinión</h3>
                                            </div>
                                            <!-- Add Review Box -->
                                            <div id="add-review" class="add-review-box">
                                                <!-- Review Comment -->
                                                <form id="add-comment" class="add-comment  custom-form" name="rangeCalc" >
                                                    <fieldset>
                                                        <div class="review-score-form fl-wrap">
                                                            <div class="review-range-container">
                                                                <!-- review-range-item-->
                                                                <div class="review-range-item">
                                                                    <div class="range-slider-title">Comida</div>
                                                                    <div class="range-slider-wrap ">
                                                                        <input type="text" class="rate-range" data-min="0" data-max="5"  name="rgcl"  data-step="1" value="4">
                                                                    </div>
                                                                </div>
                                                                <!-- review-range-item end --> 
                                                                <!-- review-range-item-->
                                                                <div class="review-range-item">
                                                                    <div class="range-slider-title">Servicio</div>
                                                                    <div class="range-slider-wrap ">
                                                                        <input type="text" class="rate-range" data-min="0" data-max="5"  name="rgcl"  data-step="1"  value="1">
                                                                    </div>
                                                                </div>
                                                                <!-- review-range-item end --> 
                                                                <!-- review-range-item-->
                                                                <div class="review-range-item">
                                                                    <div class="range-slider-title">Calidad/precio</div>
                                                                    <div class="range-slider-wrap ">
                                                                        <input type="text" class="rate-range" data-min="0" data-max="5"  name="rgcl"  data-step="1" value="5" >
                                                                    </div>
                                                                </div>
                                                                <!-- review-range-item end --> 
                                                                <!-- review-range-item-->
                                                                <div class="review-range-item">
                                                                    <div class="range-slider-title">Tiempo de entrega</div>
                                                                    <div class="range-slider-wrap">
                                                                        <input type="text" class="rate-range" data-min="0" data-max="5"  name="rgcl"  data-step="1" value="3">
                                                                    </div>
                                                                </div>
                                                                <!-- review-range-item end -->                                     
                                                            </div>
                                                            <div class="review-total">
                                                                <span><input type="text" name="rg_total"  data-form="AVG({rgcl})" value="0"></span>    
                                                                <strong>Tu calificación</strong>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label><i class="fal fa-user"></i></label>
                                                                <input type="text" placeholder="Nombre y Apellido *" value=""/>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label><i class="fal fa-envelope"></i>  </label>
                                                                <input type="text" placeholder="Correo electrónico *" value=""/>
                                                            </div>
                                                        </div>
                                                        <textarea cols="40" rows="3" placeholder="Escribe tu opinión:"></textarea>
                                                    </fieldset>
                                                    <button class="btn  big-btn flat-btn float-btn color2-bg" style="margin-top:30px">Enviar opinión <i class="fal fa-paper-plane"></i></button>
                                                </form>
                                            </div>
                                            <!-- Add Review Box / End -->
                                        </div>
                                        <!-- list-single-main-item end -->                                    
                                    </div>
                                </div>
                                <!--   datails end  -->
                                <!--   sidebar  -->
                                <div class="col-md-4">
                                    <!--box-widget-wrap -->  
                                    <div class="box-widget-wrap">
                                     <!--box-widget-item -->
                                     <div class="box-widget-item fl-wrap">
                                            <div class="box-widget">
                                                <div class="box-widget-content">
                                                    <div class="box-widget-item-header">
                                                        <h3> Horarios de atención</h3>
                                                    </div>
                                                    <div class="box-widget-list">
                                                        <ul>
                                                            <li><span><i class="fal fa-map-marker"></i> Domingo:</span> <a href="#">11:00 a 18:00</a></li>
                                                            <li><span><i class="fal fa-map-marker"></i> Lunes:</span> <a href="#">11:00 a 18:00</a></li>
                                                            <li><span><i class="fal fa-map-marker"></i> Martes:</span> <a href="#">11:00 a 18:00</a></li>
                                                            <li><span><i class="fal fa-map-marker"></i> Miércoles:</span> <a href="#">11:00 a 18:00</a></li>
                                                            <li><span><i class="fal fa-map-marker"></i> Jueves:</span> <a href="#">11:00 a 18:00</a></li>
                                                            <li><span><i class="fal fa-map-marker"></i> Viernes:</span> <a href="#">11:00 a 18:00</a></li>
                                                            <li><span><i class="fal fa-map-marker"></i> Sábado:</span> <a href="#">11:00 a 18:00</a></li>
                                                        </ul>
                                                    </div>
    
                                                </div>
                                            </div>
                                        </div>
                                        <!--box-widget-item end -->  

                                        
                                        <!--box-widget-item -->
                                        <div class="box-widget-item fl-wrap">
                                            <div class="box-widget">
                                                <div class="box-widget-content">
                                                    <div class="box-widget-item-header">
                                                        <h3> Rango de precios </h3>
                                                    </div>
                                                    <div class="claim-price-wdget fl-wrap">
                                                        <div class="claim-price-wdget-content fl-wrap">
                                                            <div class="pricerange fl-wrap"><span>Precio : </span> $25.000 - $120.000 </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    <!--box-widget-wrap end --> 
                                        
                                       
                                        <!--box-widget-item -->
                                        <div class="box-widget-item fl-wrap">
                                            <div class="box-widget">
                                                <div class="box-widget-content">
                                                    <div class="box-widget-item-header">
                                                        <h3> Contactanos</h3>
                                                    </div>
                                                    <div class="box-widget-list">
                                                        <ul>
                                                            <li><span><i class="fal fa-phone"></i> Teléfono :</span> <a href="#">(+57) 3128561134</a></li>
                                                            <li><span><i class="fal fa-phone"></i> Teléfono :</span> <a href="#">(+57) 3113862395</a></li>
                                                            <li><span><i class="fal fa-map-marker"></i> Dirección :</span> <a href="#"></a>Km 6 - Vía potrerito, Jamundi, Valle</li>
                                                            <li><span><i class="fal fa-envelope"></i> Correo :</span> <a href="#"></a>restaurantealeja@gmail.com</li>
                                                        </ul>
                                                    </div>
                                                    <div class="list-widget-social">
                                                        <ul>
                                                            <li><a href="https://www.facebook.com/pages/Jamundi-Do%C3%B1a-Aleja/151396201694676" target="_blank" ><i class="fab fa-facebook-f"></i></a></li>
                                                            <li><a href="https://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                                            <li><a href="https://www.instagram.com" target="_blank" ><i class="fab fa-instagram"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--box-widget-item end -->                          
 
                                            <!--box-widget-item -->
                                            <div class="box-widget-item fl-wrap">
                                            <div class="box-widget">
                                                <div class="box-widget-content">
                                                    <div class="box-widget-item-header">
                                                        <h3>Solicitud de reserva</h3>
                                                    </div>
                                                    <form name="bookFormCalc"   class="book-form custom-form">
                                                        <fieldset>
                                                            <div class="cal-item">
                                                                <div class="listsearch-input-item">
                                                                    <label>Tipo de evento</label>
                                                                    <select data-placeholder="Room Type" name="repopt"   class="chosen-select no-search-select" >
                                                                        <option value="0" selected>Seleccione...</option>
                                                                        <option value="81">Social o familiar </option>
                                                                        <option value="122">Empresarial</option>
                                                                        
                                                                    </select>
                                                                    <!--data-formula -->
                                                                    <input type="text" name="item_total" class="hid-input"  value=""  data-form="{repopt}">
                                                                </div>
                                                            </div>
                                                            <div class="cal-item">
                                                                <div class="bookdate-container  fl-wrap">
                                                                    <label><i class="fal fa-calendar-check"></i> Fecha </label>
                                                                    <input type="text"    placeholder="Seleccione..." name="bookdates"   value=""/>
                                                                    <div class="bookdate-container-dayscounter"><i class="far fa-question-circle"></i><span>Días : <strong>0</strong></span></div>
                                                                </div>
                                                            </div>
                                                            <div class="cal-item">
                                                                <div class="quantity-item fl-wrap">
                                                                    <label> Adultos</label>
                                                                    <div class="quantity">
                                                                        <input type="number" name="qty3" min="0" max="3" step="1" value="0">
                                                                        <input type="text" name="item_total" class="hid-input" value="0" data-form="{qty3} * {repopt} - {repopt}">
                                                                    </div>
                                                                </div>
                                                                <div class="quantity-item fl-wrap fcit">
                                                                    <label> Niños</label>
                                                                    <div class="quantity">
                                                                        <input type="number"  name="qty2" min="0" max="3" step="1" value="0">
                                                                        <select name="sale" class="hid-input">
                                                                            <option value=".7"  selected>sale</option>
                                                                        </select>
                                                                        <input type="text" name="item_total" class="hid-input" value="0" data-form="({repopt} * {sale})*{qty2}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                        <input type="number"  id="totaldays" name="qty5" class="hid-input">
                                                        <div class="total-coast fl-wrap"><strong>Total </strong> <span>$ <input type="text" name="grand_total" value="" data-form="SUM({item_total}) * {qty5}"></span></div>
                                                        <button class="btnaplly color2-bg">Enviar<i class="fal fa-paper-plane"></i></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!--box-widget-item end -->    
                                </div>
                                <!--   sidebar end  -->
                            </div>
                            <!--   row end  -->
                        </div>
                        <!--   container  end  -->
                    </section>
                    <!--  section  end-->
                </div>
                <!-- content end-->
                <div class="limit-box fl-wrap"></div>
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
                                    <p>Deseas recibir información sobre el mapa de emprendimiento 2019 en Jamundí</p>
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
                                        Nuestros patrocinadores
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
                                    <div class="footer-contacts-widget fl-wrap">
                                        <ul  class="footer-contacts fl-wrap">
                                            <li><span><i class="fal fa-envelope"></i> Correo :</span><a href="#" target="_blank">jefetic@jamundi.gov.co</a></li>
                                            <li> <span><i class="fal fa-map-marker-alt"></i> Dirección :</span><a href="#" target="_blank">Cra. 10 #9-74, Jamundí, Valle del Cauca</a></li>
                                            <li><span><i class="fal fa-phone"></i> Teléfono :</span><a href="#">+57(2) 516 62 06</a></li>
                                        </ul>
                                        <div class="footer-social">
                                            <span>Siguenos : </span>
                                            <ul>
                                                <li><a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="https://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                                <li><a href="https://www.youtube.com" target="_blank"><i class="fab fa-youtube"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--footer-widget end-->
                            

                        </div>
                        <div class="clearfix"></div>

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
                            <div class="subfooter-show-lang"><span>Esp</span><i class="fa fa-caret-up"></i></div>
                        </div>
                        <div class="subfooter-nav">
                            <ul>
                                <li><a href="#">Terminos de uso</a></li>
                                <li><a href="#">Politicas de privacidad</a></li>
                                <li><a href="#">Blog</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--sub-footer end -->
            </footer>
            <!--footer end -->          
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
            <!--ajax-modal-container-->
            <div class="ajax-modal-overlay"></div>
            <div class="ajax-modal-container">
                <!--ajax-modal -->
                <div class='ajax-loader'>
                    <div class='ajax-loader-cirle'></div>
                </div>
                <div id="ajax-modal" class="fl-wrap"> 
                </div>
                <!--ajax-modal-container end -->
            </div>
            <!--ajax-modal-container end -->
        </div>
        <!-- Main end -->
        <!--=============== scripts  ===============-->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/scripts.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=YOURAPIKEYHERE&libraries=places&callback=initAutocomplete"></script> 
        <script type="text/javascript" src="js/map-single.js"></script>         
    </body>
</html>