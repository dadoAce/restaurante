<?php
 
class BD {

    //Propiedades
    public $mysqli = null;

    function __construct() {
        
    }

    public function connection($query) {
        //--------------------------------Datos de la base de datos
        $db_host = "localhost";
        $db_username = "u518286121_userFB";
        $db_pass = "Datos_BD_2021"; 
        $db_name = "u518286121_datosFB";
//        $db_host = "localhost";
//        $db_username = "root";
//        $db_pass = "";
//        $db_name = "datos";

        //--------------------------------Ingresar para la conexion
        $mysqli = new mysqli($db_host, $db_username, $db_pass, $db_name) or die("No se puede Conectar a la Base de Datos");
        $mysqli->set_charset("utf8");

        //--------------------------------Comprobar la conexion
        if ($mysqli->connect_error) {
            die("Conexion Fallida: " . $mysqli->connect_error);
        }

        //--------------------------------Realizar la peticion
        $resulta = $mysqli->query($query);
        $this->cerrar($mysqli);
        if ($resulta) {
            return $resulta;
        } else {
            //echo "<br><p>Error en la peticion</p><br>";
        }
    }

    public function cerrar($mysqli) {
        mysqli_close($mysqli);
    }

    function getMysqli() {
        return $this->mysqli;
    }

    function setMysqli($mysqli) {
        $this->mysqli = $mysqli;
    }

    function select($query) {
        $result = $this->connection($query);
        if ($result->num_rows > 0) {
            $arreglo = array();

            while ($row = $result->fetch_assoc()) {
                array_push($arreglo, $row);
            }
            return $arreglo;
        } else {
            return false;
        }
    }

    function query($query) {
        $result = $this->connection($query);

        return $result;
    }

}
