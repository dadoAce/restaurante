<?php
 
/* Clase de ejemplo para modelo

 * Esta clase hereda los metodos de la Clase MODELO
 * Favor de checar los metodos basicos
 * 
 *  */

class plantillaModel extends Modelo {

    public $tabla = " ";
    public $pk = " ";
    /*Opcion de usar un archivo entidad para filtrar algunas devoluciones; Se incluye una entidad de ejemplo: */
    public $entidad = false; 
    public $entidad_nombre = " ";
    
    public $columnas = array( );

    public function __construct() {
        
    }

    /*     * Ejemplo de crear QUERY directa */

    
}
