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
                                <a href="http://jamundi.gov.co/Ciudadanos/Paginas/Hackathon.aspx"><img src="images/patrocinadores/hackathon_logo.PNG" alt=""></a>
                            </div>
                            <!--footer-carousel-item end-->
                            <!--footer-carousel-item-->
                            <div class="footer-carousel-item">
                                <a href="https://www.comfandi.com.co/"><img src="images/patrocinadores/comfandi_logo.png" alt=""></a>
                            </div>
                            <!--footer-carousel-item end-->
                            <!--footer-carousel-item-->
                            <div class="footer-carousel-item">
                                <a href="https://edured.edu.co/"><img src="images/patrocinadores/edured_logo.png" alt=""></a>
                            </div>
                            <!--footer-carousel-item end-->
                            <!--footer-carousel-item-->
                            <div class="footer-carousel-item">
                                <a href="http://www.jamundi.gov.co/Paginas/Inicio.aspx"><img src="images/patrocinadores/jamundilogo.png" alt=""></a>
                            </div>
                            <!--footer-carousel-item end-->
                            <!--footer-carousel-item-->
                            <div class="footer-carousel-item">
                                <a href="http://www.jamundi.gov.co/SecretariayDependencias/Paginas/OFICINA-TIC.aspx"><img src="images/patrocinadores/logo tic.jpg" alt=""></a>
                            </div>
                            <!--footer-carousel-item end-->
                            <!--footer-carousel-item-->
                            <div class="footer-carousel-item">
                                <a href="http://www.jamundi.gov.co/Paginas/Inicio.aspx"><img src="images/patrocinadores/logo_alcalde.png" alt=""></a>
                            </div>
                            <!--footer-carousel-item end-->
                            <!--footer-carousel-item-->
                            <div class="footer-carousel-item">
                                <a href="https://www.ccc.org.co/"><img src="images/patrocinadores/logo_cccali.png" alt=""></a>
                            </div>
                            <!--footer-carousel-item end-->
                              <!--footer-carousel-item-->
                              <div class="footer-carousel-item">
                                <a href="http://www.sena.edu.co/es-co/Paginas/default.aspx"><img src="images/patrocinadores/sena_logo_blanco.png" alt=""></a>
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
                        <ul class="footer-contacts fl-wrap">
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

<script>
   $('.footer-carousel').slick({
        infinite: true,
        slidesToShow: 5,
        dots: false,
        arrows: false,
        centerMode: false,
        responsive: [{
                breakpoint: 1224,
                settings: {
                    slidesToShow: 4,
                    centerMode: false,
                }
            },
            {
                breakpoint: 568,
                settings: {
                    slidesToShow: 3,
                    centerMode: false,
                }
            }
        ]
    });
    $(".fc-cont-prev").on("click", function () {
        $(this).closest(".footer-carousel-wrap").find('.footer-carousel').slick('slickPrev');
    });
    $(".fc-cont-next").on("click", function () {
        $(this).closest(".footer-carousel-wrap").find('.footer-carousel').slick('slickNext');
    });
</script>