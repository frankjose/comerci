<?php
require "../../model/MySQL.php";

$mySQL = new MySQL();
$mySQL->conectar();

$filtros = "";
if (isset($_GET["Selectcategoria"]) && isset($_GET["subCategoria"]) && !empty($_GET["Selectcategoria"]) && !empty($_GET["subCategoria"])) {
    $filtros = " cate.id = '" . $_GET["Selectcategoria"] . "'";

    $consulta = $mySQL->efectuarConsulta("    SELECT 
        p.id,
        p.nombre as producto,
        p.descuento,
        p.foto,
        p.precio,
        e.id as establecimiento_id,
        e.direccion,
        e.calificacion,
        cate.nombre,
        cate.id                 
        FROM 
        commerci.productos p INNER JOIN commerci.establecimiento e ON 
        p.establecimiento_id = e.id 
        INNER JOIN commerci.categoria cate ON p.categoria_id = cate.id
        WHERE " . $filtros . "
        ");
} else if (isset($_GET["palabrasClave"]) && !empty($_GET["palabrasClave"])) {
    echo "SubCAtegoria";
  
    $filtros = " p.nombre LIKE '%" . $_GET["palabrasClave"] . "%'";
    $consulta = $mySQL->efectuarConsulta("SELECT 
            p.id,
            p.nombre as producto,
            p.descuento,
            p.foto,
            p.precio,
            e.id as establecimiento_id,
            e.direccion,
            e.calificacion
            
            
            FROM 
            commerci.productos p INNER JOIN commerci.establecimiento e ON 
            p.establecimiento_id = e.id
            WHERE " . $filtros . "
            ");
} else {
    $filtros = "1";
    
    $consulta = $mySQL->efectuarConsulta("SELECT 
    p.id,
    p.nombre as producto,
    p.descuento,
    p.foto,
    e.id as establecimiento_id,
    p.precio,
    e.direccion,
    e.calificacion
    
    
    FROM 
    commerci.productos p INNER JOIN commerci.establecimiento e ON 
    p.establecimiento_id = e.id
    WHERE " . $filtros . "
    ");
}





?>

<!-- list-main-wrap-title-->
<div class="list-main-wrap-title fl-wrap">
    <h2>Resultados de: <span> Restaurantes </span></h2>
</div>
<!-- list-main-wrap-title end-->
<!-- list-main-wrap-opt-->
<div class="list-main-wrap-opt fl-wrap">

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

    <?php while ($row = mysqli_fetch_assoc($consulta)) {  ?>
        <div class="listing-item">
            <div class="hotel-card fl-wrap">
                <div class="geodir-category-img card-post">
                    <a href="detalleLocal.php?establecimiento_id=<?php echo $row["establecimiento_id"] ?>"><img src="<?php echo  $row['foto'] ?>" alt=""></a>
                    <div class="listing-counter"> <strong>$<?php echo  $row['precio'] ?></strong></div>
                    <?php $int = (int) $row['descuento'];
                        if ($int > 0) { ?>
                        <div class="sale-window">Descuento <?php echo  $row['descuento'] ?>%</div>
                    <?php } ?>
                    <div class="geodir-category-opt">
                        <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                        <h4><a href="listing-single.html"><?php echo $row['producto'] ?></a></h4>
                        <div class="geodir-category-location"><a href="#0" class="map-item"><i class="fas fa-map-marker-alt"></i> <?php echo  $row['direccion'] ?></a></div>
                        <div class="rate-class-name">
                            <div class="score"><?php echo(rand(10,50)) ?> Comentarios</div>
                            <span><?php echo  $row['calificacion'] ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    
    <!-- listing-item end -->
</div>
<!-- listing-item-container end-->
<!-- pagination-->
<div class="pagination">
    <a href="#" class="prevposts-link"><i class="fa fa-caret-left"></i></a>
    <a href="#">1</a>
    <a href="#" class="current-page">2</a>
    <a href="#">3</a>
    <a href="#">4</a>
    <a href="#" class="nextposts-link"><i class="fa fa-caret-right"></i></a>
</div>
<!-- pagination end-->

<script>
    $(".grid-opt li span").on("click", function() {
        $(".listing-item").matchHeight({
            remove: true
        });
        setTimeout(function() {
            $(".listing-item").matchHeight();
        }, 50);
        $(".grid-opt li span").removeClass("act-grid-opt");
        $(this).addClass("act-grid-opt");
        if ($(this).hasClass("two-col-grid")) {
            $(".listing-item").removeClass("has_one_column");
            $(".listing-item").addClass("has_two_column");
        } else if ($(this).hasClass("one-col-grid")) {
            $(".listing-item").addClass("has_one_column");
        } else {
            $(".listing-item").removeClass("has_one_column").removeClass("has_two_column");
        }
    });
    $(".notification-close").on("click", function() {
        $(this).parent(".notification").slideUp(500);
    });
</script>