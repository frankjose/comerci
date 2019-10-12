<?php

require "../../model/MySQL.php";

$mySQL = new MySQL();
$mySQL->conectar();

$consulta = $mySQL->efectuarConsulta("SELECT * FROM commerci.categoria ");



?>

<div class="container">

    <div class="row">
        <!-- col-list-search-input-item -->
        <div class="profile-edit-container">
            <div class="custom-form">
                <label>Búsca cualquier producto o servicio <i class="fal fa-briefcase"></i></label>
                <input id="palabrasClave" type="text" placeholder="Búsca productos o servicios" value="" style="width: 60%">

            </div>
        </div>


    </div>
    <div class="row">
        <!-- col-list-search-input-item -->
        <div class="col-md-4">
            <div class="col-list-search-input-item in-loc-dec fl-wrap not-vis-arrow">
                <label>Categoría</label>
                <div class="listsearch-input-item">
                    <select data-placeholder="City" class="chosen-select" id="Selectcategoria" onchange="getSubCategoria($(this))">
                        <option>Todos</option>
                        <?php while ($row = mysqli_fetch_assoc($consulta)) {  ?>
                            <option value="<?php echo $row["id"] ?>"><?php echo $row["nombre"] ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
        </div>
        <!-- col-list-search-input-item end -->
        <!-- col-list-search-input-item -->
        <div class="col-md-4">
            <div class="col-list-search-input-item fl-wrap location autocomplete-container">
                <label>Sub Categoría</label>
                <div class="listsearch-input-item">
                    <select data-placeholder="City" class="chosen-select" id="subCategoria">

                    </select>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="col-list-search-input-item fl-wrap location autocomplete-container">
                <div class="col-list-search-input-item fl-wrap">
                    <button class="header-search-button" onclick="resultadosFiltrados()">Búscar <i class="far fa-search"></i></button>
                </div>
            </div>
        </div>


    </div>






    <div class="search-opt-wrap fl-wrap">
        <div class="search-opt-wrap-container">
            <!-- col-list-search-input-item -->

            <!-- col-list-search-input-item end -->
            <!-- col-list-search-input-item -->
            <div class="search-input-item">
                <div class="range-slider-title">
                    <ul class="fl-wrap filter-tags half-tags">

                        <li>
                            <input id="check-bb23" type="checkbox" name="check" onclick="mostrarRangosPrecios($(this))">
                            <label for="check-bb23">Por rango de precio</label>
                        </li>
                    </ul>
                </div>
                <div class="range-slider-wrap fl-wrap" id="rangosDePrecios" style="display: none">
                    <input class="range-slider" data-from="30000" data-to="90000" data-min="1000" data-max="500000" data-prefix="$">
                </div>
            </div>
            <br>
            <!-- col-list-search-input-item end -->
            <!-- col-list-search-input-item -->

            <!-- col-list-search-input-item end -->
            <!-- hidden-listing-filter -->
            <div class="hidden-listing-filter fl-wrap">
                <div class="row">
                    <div class="col-md-4">
                        <!--col-list-search-input-item -->
                        <div class="col-list-search-input-item fl-wrap">
                            <h4>Rating</h4>
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
                    </div>
                    <div class="col-md-8">
                        <!--col-list-search-input-item -->
                        <div class="col-list-search-input-item fl-wrap">

                            <div class="search-opt-container fl-wrap">
                                <!-- Checkboxes -->
                                <ul class="fl-wrap filter-tags half-tags">

                                    <li>
                                        <input id="check-bb5" type="checkbox" name="check" checked>
                                        <label for="check-bb5">Con Domicilio</label>
                                    </li>
                                    <li>
                                        <input id="check-dd5" type="checkbox" name="check">
                                        <label for="check-dd5">Con Telefono</label>
                                    </li>
                                    <li>
                                        <input id="check-cc5" type="checkbox" name="check">
                                        <label for="check-cc5">Redes Sociales</label>
                                    </li>
                                </ul>
                                <!-- Checkboxes end -->
                                <!-- Checkboxes -->
                                <ul class="fl-wrap filter-tags half-tags">
                                    <li>
                                        <input id="check-cc5" type="checkbox" name="check">
                                        <label for="check-cc5">Tarjeta credito</label>
                                    </li>
                                    <li>
                                        <input id="check-ff5" type="checkbox" name="check" checked>
                                        <label for="check-ff5">PSD</label>
                                    </li>
                                    <li>
                                        <input id="check-c4" type="checkbox" name="check">
                                        <label for="check-c4">Solo efectivo</label>
                                    </li>
                                </ul>
                                <!-- Checkboxes end -->
                            </div>
                        </div>
                        <!--col-list-search-input-item end-->
                    </div>
                </div>
            </div>
            <!-- hidden-listing-filter end -->
        </div>
        <div class="show-more-filters act-hiddenpanel color3-bg"><i class="fal fa-plus"></i><span>Más filtros</span></div>
    </div>
</div>
<script>
    $('.chosen-select').niceSelect();

    $(".range-slider").ionRangeSlider({
        type: "double",
        keyboard: true
    });
    $(".rate-range").ionRangeSlider({
        type: "single",
        hide_min_max: true,
    });
    $(".act-hiddenpanel").on("click", function() {
        $(this).toggleClass("active-hidden-opt-btn").find("span").text($(this).find("span").text() === 'Cerrar opciones' ? 'Más opciones' : 'Cerrar opciones');
        $(".hidden-listing-filter").slideToggle(400);
    });

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
                    $('.chosen-select').niceSelect("update");
                } else {
                    $("#subCategoria").val();
                }

            }
        });
    }

    function mostrarRangosPrecios(check) {
        if (check.is(':checked')) {
            $("#rangosDePrecios").show("slow");
        } else {
            $("#rangosDePrecios").hide("slow")

        }

    }

    function resultadosFiltrados() {

        var palabrasClave = $("#palabrasClave").val();

        var subCategoria = $("#subCategoria").val()
        var Selectcategoria = $("#Selectcategoria").val()

        var dataToSend = "";

        dataToSend = (palabrasClave) ? "palabrasClave=" + palabrasClave + "&" : '';
        dataToSend += (subCategoria) ? "subCategoria=" + subCategoria + "&" : '';
        dataToSend += (Selectcategoria && Selectcategoria !== "Todos") ? "Selectcategoria=" + Selectcategoria + "&" : '';
        console.log(dataToSend);
        loadComponent('components/searchMaper/results.php?' + dataToSend, '.result-search-container');


    }
</script>