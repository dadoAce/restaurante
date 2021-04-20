<?php

class DatosModelo {

    public $db;
    public $pk = "id_datos";
    public $columnas = array("informacion");

    public function __construct() {
        require_once 'Modelo/BD.php';
        $this->db = new BD();
    }

    public function verDatos() {
        $query = "select * from datos_usuario";
        $result = $this->db->select($query);
        return $result;
    }

    public function guardarInformacion($datos) {

        $cols = "";
        $values = "";
        foreach ($datos as $key => $v) {
            if (in_array($key, $this->columnas)) {
                $cols .= "$key,";
                $values .= "'$v',";
            } else {
                return "Erro, valor $key no se encuentra";
            }
        }

        $cols = substr($cols, 0, -1);
        $values = substr($values, 0, -1);
        $query = "insert into datos_usuario($cols) values($values)";
        $result = $this->db->query($query);
        return $result[0];
    }

}
