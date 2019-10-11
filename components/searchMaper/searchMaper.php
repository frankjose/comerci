<!-- Map -->
<!--AQUI VA AEL MAPA-->

<!-- Map end -->
<!--col-list-wrap -->
<div class="col-list-wrap left-list">
    <div class="mobile-list-controls fl-wrap">
        <div class="container">
            <div class="mlc show-hidden-column-map schm"><i class="fal fa-map-marked-alt"></i> Show Map</div>
            <div class="mlc show-list-wrap-search"><i class="fal fa-filter"></i> Filter</div>
        </div>
    </div>
    <!--list-wrap-search   -->
    <div class="list-wrap-search fl-wrap lws_mobile" id="lisfw">
        <!--AQUI LOS FILTROS-->
    </div>
    <!--list-wrap-search end -->
    <!-- list-main-wrap-->
    <div class="list-main-wrap fl-wrap card-listing">
        <a class="custom-scroll-link back-to-filters" href="#lisfw"><i class="fas fa-angle-up"></i><span>Back to Filters</span></a>
        <div class="container result-search-container">


        </div>
    </div>
    <!-- list-main-wrap end-->
</div>
<!--col-list-wrap end -->
<div class="limit-box fl-wrap"></div>

<script>
    function showColumnhiddenmap() {

        if ($(window).width() < 1064) {
            
            $(".hid-mob-map").animate({
                right: 0
            }, 500, "easeInOutExpo").addClass("fixed-mobile");
        }
    }
    $(".map-item , .schm").on("click", function(e) {
        
        e.preventDefault();
        showColumnhiddenmap();
    });
    $('.map-close').on("click", function(e) {
        $(".hid-mob-map").animate({
            right: "-100%"
        }, 500, "easeInOutExpo").removeClass("fixed-mobile");
    });
    $(".show-list-wrap-search").on("click", function(e) {
        $(".lws_mobile").slideToggle(400);

    });
</script>