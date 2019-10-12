<?php
    
/*
 * Clase de conexion con la base de datos.
 */

/**
 * Description of Usuario
 *
 * @author fjose
 */
 class MySQL{
    
    //Datos de validacion para la conexion
    private $ipServidor ="172.16.29.228";
    private $usuarioBase ='root';
    private $contrasena = '';

    private $conexion;

    //Variable que devuelve las consultas efectuadas
    private $resultadoConsulta;

    //Metodo para conectar la base de datos
    public function conectar(){
        
        //Metodo de conexion a la BD
        $this->conexion = new mysqli($this->ipServidor, $this->usuarioBase, $this->contrasena);
        
        if(mysqli_connect_errno()){
            echo "Conexión Fallida A La Base De Datos: ".  mysqli_connect_error();
            exit();
        }
        else{
            $this->conexion->query("SET lc_time_names = 'es_ES'");
            $this->conexion->query("SET NAMES 'utf8'");
            $this->conexion->query("SET CHARACTER 'utf8'");
            $this->conexion->query("SET character_set_results = 'UTF8'");
        }
        
    }
    
    //Metodo que cierra la conexion
    public function desconectar(){
        mysqli_close($this->conexion);
    }

    public function numeroResultados(){
        return $this->resultadoConsulta->num_rows;
    }

        //Metodo que efectua una consulta devuelve su resultado
    public function efectuarConsulta($consulta){

        $this->resultadoConsulta = $this->conexion->query($consulta) or die("Error En La Consulta...");
        return $this->resultadoConsulta; 
    }

    //Ingresa Registros a una tabla en la base de datos
    public function ingresoRegistro($registro){
        
        $this->conexion->query($registro);
        return mysqli_insert_id($this->conexion);
    }
    
    public function ultimoID(){
        return $this->conexion->insert_id;
    }
}

?>
