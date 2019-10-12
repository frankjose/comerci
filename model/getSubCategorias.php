<?php 

    require "MySQL.php";

    $mySQL = new MySQL();
    $mySQL->conectar();

    if(isset($_GET["cateria_id"])){
        $categoria_id = $_GET["cateria_id"];
        $consulta = $mySQL->efectuarConsulta("SELECT * FROM commerci.subcategoria WHERE commerci.subcategoria.categoria_id = '".$categoria_id."'");

        $informacion = array();

        while ($row = mysqli_fetch_assoc($consulta)){
        
            $clasificacion = array('id' => $row['id'],
            'nombre'=> $row['nombre']
            );
            
            array_push($informacion, $clasificacion);
        }
    
        echo json_encode($informacion);
    }

   

?>