<?php

class Home extends App {

    function __construct() {
        
    }

    public function index() {
        $pagina = "menu.php";
        include 'Views/principal.php';
    }
    public function Principal() {
        $pagina = "menu.php";
        include 'Views/principal.php';
    }
    public function PedidoRealizado() {
        $pagina = "pedidoRealizado.php";
        include 'Views/principal.php';
    }

}
