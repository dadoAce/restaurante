<?php

class App {

    public $metodo;
    /* Cambiar Datos de ser necesarios */
//    public $base_url = "http://localhost/restaurante/";
    public $base_url = "http://restaurante.elmenuparahoy.com/";
    public $correo_Admin = "dadoromg@hotmail.com"; /* Direccion donde llegara el Mensaje */
    public $controlador_default = "Home";
    public $baseDatos = false;

    /*     * **************** */
    /*     * **************** */
    /*     * **************** */
    /*     * **************** */
    /*     * **************** */
    /*     * **************** */
    /*     * **************** */
    /*     * **************** */
    /* No cambiar los datos de abajo */

    public function __construct() {

        if (isset($_GET['url'])) {

            $metodo = $_GET['url'];
        } else {
            $archivoControlador = "Controlador/" . $this->controlador_default . ".php";
            if (file_exists($archivoControlador)) {
                require_once $archivoControlador;
                $controlador = new $this->controlador_default;
                $controlador->Principal();
            } else {
                echo "NO Existe el Archivo " . $archivoControlador;
                echo "<h1>Error</h1>";
            }
            return;
        }

        $url = rtrim($metodo, '/');
        $url = explode('/', $metodo);
        if ($metodo == "" || $metodo == "index.php") {
            echo "Vacio o Index";
        } else {
            $archivoControlador = 'Controlador/' . $url[0] . ".php";

            if (file_exists($archivoControlador)) {
                require_once $archivoControlador;
                $controlador = new $url[0];
                if (isset($url[1])) {

                    if (count($url) > 2) {
                        $controlador->{$url[1]}($url[2]);
                    } else {
                        $controlador->{$url[1]}();
                    }
                } else {
                    $controlador->index();
                }
            } else {
                echo " >:( NO Existe el Archivo " . $archivoControlador;
                echo "<h1>Error</h1>";
            }
        }
    }

    public function base_url() {
        return $this->base_url;
    }

}
