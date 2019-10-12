<?php 

    require "MySQL.php";

    $mySQL = new MySQL();
    $mySQL->conectar();


        $consulta = $mySQL->efectuarConsulta("SELECT 
        p.id,
        p.nombre as producto,
        p.descuento,
        p.foto,
        p.precio,
        e.direccion,
        e.calificacion,
        e.nombre,
        e.latitud,
        e.longitud,
        e.logo,
        p.descuento
        
        
        FROM 
        commerci.productos p INNER JOIN commerci.establecimiento e ON 
        p.establecimiento_id = e.id
        
        GROUP BY e.id
        ");


        $informacion = array();
        while ($row = mysqli_fetch_assoc($consulta)){
        
            $clasificacion = array('foto' => $row['foto'],
            'nombre'=> $row['nombre'],
            'direccion'=> $row['direccion'],
            'descuento'=> $row['descuento'],
            'calificacion'=> $row['calificacion'],
            'latitud'=> $row['latitud'],
            'longitud'=> $row['longitud'],

        );
            
            array_push($informacion, $clasificacion);
        }
    
        echo json_encode($informacion);
    

   

?>