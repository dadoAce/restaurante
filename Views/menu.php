 
<style>
    html{
        height: 100%;
    }
    body{
        border:solid #f0f8ff;
        border-bottom: none;
        background: gray;
        height: 100%;
    }
    #section-titulo{   
        background-image: url(./Assets/imgs/portada.jpg);
        background-size: contain;
        background-attachment: fixed;
    }
    #tabla-total tr{
        border:solid;
    }
    nav a{
        font-weight: 800
    }
    .producto{
        border-bottom: solid white 1px;
    }
    .nav     .active{
        text-decoration: underline; 
    }
    @media(max-width:512px){
        .producto{
            border-bottom: 0px;
            margin-top: 5%;
        }
        .producto-nombre{ 
            border-bottom: white outset 1px;   
        }
        body{
            border: none;
            background: gray;
            height: 100%;
        }
    }

</style>
<section id="section-titulo" class=" h-25 bg-dark text-white d-flex flex-column justify-content-center align-items-center">

    <h2>Bienvenido</h2>
 
</section>
<section id='s-total' class="container  mt-2  "   >
    <table id="tabla-total" class="table bg-white  table-borderless table-active   table-light border-dark table-responsive-sm"> 

        <tbody>


        </tbody>
        <tfoot>
            <tr> 
            <tr  >
                <th colspan="3" class="text-right">Total:</th>
                <td id="total-pagar"></td>
                <td></td>
            </tr>
        <td colspan="4" class="text-right"><button id="btn-realizar-pedido" class="btn btn-primary d-none" data-toggle="modal" data-target="#modal_c">Realizar Pedido</button></td>
        <td></td>
        </tr>
        </tfoot>
    </table>
</section>
<img src="./Assets/imgs/fork-free-img.png"  style="position: fixed;left: 5px;z-index: -1;" >
<img src="./Assets/imgs/knife-free-imge.png" style="position: fixed;right: 5px;z-index: -1;" >
<section class="container  pb-5">
    <nav class="bg-white">
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link text-center active" id="nav-home-tab" data-toggle="tab" href="#s1" role="tab" aria-controls="nav-home" aria-selected="true"><img width="50px" src="./Assets/imgs/comida-rapida.png" ><br>Pizzas</a>
            <a class="nav-item nav-link text-center" id="nav-profile-tab" data-toggle="tab" href="#s2" role="tab" aria-controls="nav-profile" aria-selected="false"><img width="50px" src="./Assets/imgs/hamburguesa-con-queso.png" ><br>Burgers</a> 
            <a class="nav-item nav-link  text-center" id="nav-profile-tab" data-toggle="tab" href="#s3" role="tab" aria-controls="nav-profile" aria-selected="false"><img width="50px" src="./Assets/imgs/alitas-de-pollo.png" ><br>Alitas</a> 
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">

        <div  class=" tab-pane fade   show active" id="s1" role="tabpanel">
            <section class="container h-25 bg-dark text-white d-flex flex-column justify-content-center align-items-center mb-1">
                <img width="75px" src="./Assets/imgs/comida-rapida.png" class="mt-4"><br>

                <h2>Pizzas</h2> 
            </section>
            <!--Seccion para escritorio-->
            <section class="producto row bg-dark text-white   pt-1 pb-1"  >

                <div class=" producto-nombre col-12 col-sm-4 d-flex flex-column justify-content-center align-items-center text-center">
                    <h5>COSA NOSTRA</h5>
                    <label>Jamón Serrano, Espinica y QUeso Filadelfia</label>
                </div>
                <div class=" col-3 col-sm-2 d-flex flex-column justify-content-center align-items-center pb-2" >
                    <label>Ch</label> 
                    <input type="button" class="btn btn-primary btn-add" value="$87" data-producto="Pizza" data-nombre="COSA NOSTRA"  data-size="Chica">
                </div> 
                <div class=" col-3 col-sm-2 d-flex flex-column justify-content-center align-items-center pb-2" >
                    <label>M</label> 
                    <input type="button" class="btn btn-primary btn-add" value="$129" data-producto="Pizza" data-nombre="COSA NOSTRA"  data-size="Mediana">
                </div> 
                <div class=" col-3 col-sm-2 d-flex flex-column justify-content-center align-items-center pb-2" >
                    <label>G</label> 
                    <input type="button" class="btn btn-primary btn-add" value="$175" data-producto="Pizza" data-nombre="COSA NOSTRA"  data-size="Grande">
                </div> 
                <div class=" col-3 col-sm-2 d-flex flex-column justify-content-center align-items-center pb-2" >
                    <label>J</label> 
                    <input type="button" class="btn btn-primary btn-add" value="$205" data-producto="Pizza" data-nombre="COSA NOSTRA"  data-size="Jumbo">
                </div> 
            </section>
            <section class="producto row bg-dark text-white   pt-1 pb-1"  >

                <div class=" producto-nombre col-12 col-sm-4 d-flex flex-column justify-content-center align-items-center text-center">
                    <h5>MEXICANA</h5>
                    <label>Cebola, Jitomate, Chorizo, Jalapeño y Aguacate</label>
                </div>
                <div class=" col-3 col-sm-2 d-flex flex-column justify-content-center align-items-center pb-2" >
                    <label>Ch</label> 
                    <input type="button" class="btn btn-primary btn-add" value="$87" data-producto="Pizza" data-nombre="MEXICANA"  data-size="Chica">
                </div> 
                <div class=" col-3 col-sm-2 d-flex flex-column justify-content-center align-items-center pb-2" >
                    <label>M</label> 
                    <input type="button" class="btn btn-primary btn-add" value="$129" data-producto="Pizza" data-nombre="MEXICANA"  data-size="Mediana">
                </div> 
                <div class=" col-3 col-sm-2 d-flex flex-column justify-content-center align-items-center pb-2" >
                    <label>G</label> 
                    <input type="button" class="btn btn-primary btn-add" value="$175" data-producto="Pizza" data-nombre="MEXICANA"  data-size="Grande">
                </div> 
                <div class=" col-3 col-sm-2 d-flex flex-column justify-content-center align-items-center pb-2" >
                    <label>J</label> 
                    <input type="button" class="btn btn-primary btn-add" value="$205" data-producto="Pizza" data-nombre="MEXICANA"  data-size="Jumbo">
                </div> 
            </section>
            <section class="producto row bg-dark text-white   pt-1 pb-1"  >

                <div class=" producto-nombre col-12 col-sm-4 d-flex flex-column justify-content-center align-items-center text-center">
                    <h5>ITALIANA</h5>
                    <label>Cebola, Jitomate, Chorizo, Jalapeño y Aguacate</label>
                </div>
                <div class=" col-3 col-sm-2 d-flex flex-column justify-content-center align-items-center pb-2" >
                    <label>Ch</label> 
                    <input type="button" class="btn btn-primary btn-add" value="$87" data-producto="Pizza" data-nombre="ITALIANA"  data-size="Chica">
                </div> 
                <div class=" col-3 col-sm-2 d-flex flex-column justify-content-center align-items-center pb-2" >
                    <label>M</label> 
                    <input type="button" class="btn btn-primary btn-add" value="$125" data-producto="Pizza" data-nombre="ITALIANA"  data-size="Mediana">
                </div> 
                <div class=" col-3 col-sm-2 d-flex flex-column justify-content-center align-items-center pb-2" >
                    <label>G</label> 
                    <input type="button" class="btn btn-primary btn-add" value="$165" data-producto="Pizza" data-nombre="ITALIANA"  data-size="Grande">
                </div> 
                <div class=" col-3 col-sm-2 d-flex flex-column justify-content-center align-items-center pb-2" >
                    <label>J</label> 
                    <input type="button" class="btn btn-primary btn-add" value="$195" data-producto="Pizza" data-nombre="ITALIANA"  data-size="Jumbo">
                </div> 
            </section>
            <section class="producto row bg-dark text-white   pt-1 pb-1"  >

                <div class=" producto-nombre col-12 col-sm-4 d-flex flex-column justify-content-center align-items-center text-center">
                    <h5>TRESS QUESOS</h5>
                    <label>Queso Mozzarella, Manchego y parmesano</label>
                </div>
                <div class=" col-3 col-sm-2 d-flex flex-column justify-content-center align-items-center pb-2" >
                    <label>Ch</label> 
                    <input type="button" class="btn btn-primary btn-add" value="$69" data-producto="Pizza" data-nombre="TRESS QUESOS"  data-size="Chica">
                </div> 
                <div class=" col-3 col-sm-2 d-flex flex-column justify-content-center align-items-center pb-2" >
                    <label>M</label> 
                    <input type="button" class="btn btn-primary btn-add" value="$125" data-producto="Pizza" data-nombre="TRESS QUESOS"  data-size="Mediana">
                </div> 
                <div class=" col-3 col-sm-2 d-flex flex-column justify-content-center align-items-center pb-2" >
                    <label>G</label> 
                    <input type="button" class="btn btn-primary btn-add" value="$165" data-producto="Pizza" data-nombre="TRESS QUESOS"  data-size=""Grande>
                </div> 
                <div class=" col-3 col-sm-2 d-flex flex-column justify-content-center align-items-center pb-2" >
                    <label>J</label> 
                    <input type="button" class="btn btn-primary btn-add" value="$205" data-producto="Pizza" data-nombre="TRESS QUESOS"  data-size="Jumbo">
                </div> 
            </section> 

        </div>
        <!--BUrgers-->
        <div class=" tab-pane fade " id="s2" role="tabpanel">
            <section class="container h-25 bg-dark text-white d-flex flex-column justify-content-center align-items-center mb-1">
                <img width="100px" src="./Assets/imgs/hamburguesa-con-queso.png" ><br>
                <h2>Burgers</h2> 
            </section> 
            <section class="producto row bg-dark text-white pt-1 pb-1 "  >

                <div class=" producto-nombre col-12 col-sm-6 d-flex flex-column justify-content-center align-items-center text-center ">
                    <h5>MASYE BURGER</h5>
                    <label>Queso amarillo, manchego, tocino, jamon, pepinillos,cebolla,jalapeño y lechuga</label>
                </div>
                <div class=" col-6 col-sm-3 d-flex flex-column justify-content-center align-items-center pb-2" >
                    <label>Sencilla</label> 
                    <input type="button" class="btn btn-primary btn-add" value="$70" data-producto="BURGER" data-nombre="MASYE BURGER"  data-size="Sencilla">
                </div>
                <div class=" col-6 col-sm-3 d-flex flex-column justify-content-center align-items-center pb-2">
                    <label>Con Papas</label>
                    <input type="button" class="btn btn-primary btn-add" value="$80" data-producto="BURGER" data-nombre="MASYE BURGER"  data-size="con Papas">
                </div>
            </section>
            <section class="producto row bg-dark text-white   pt-1 pb-1"  >

                <div class=" producto-nombre col-12 col-sm-6 d-flex flex-column justify-content-center align-items-center text-center">
                    <h5>COBLE CARNE</h5>
                    <label>Queso amarillo,jitomate, manchego, tocino, jamon, pepinillos,cebolla,jalapeño y lechuga</label>
                </div>
                <div class=" col-6 col-sm-3 d-flex flex-column justify-content-center align-items-center pb-2" >
                    <label>Sencilla</label> 
                    <input type="button" class="btn btn-primary btn-add" value="$80" data-producto="BURGER" data-nombre="COBLE CARNE"  data-size="Sencilla">
                </div>
                <div class=" col-6 col-sm-3 d-flex flex-column justify-content-center align-items-center pb-2">
                    <label>Con Papas</label>
                    <input type="button" class="btn btn-primary btn-add" value="$90" data-producto="BURGER" data-nombre="COBLE CARNE"  data-size="con Papas">
                </div>
            </section>
            <section class="producto row bg-dark text-white  pt-1 pb-1"  >

                <div class=" producto-nombre col-12 col-sm-6 d-flex flex-column justify-content-center align-items-center text-center">
                    <h5>ACUATICA</h5>
                    <label>Queso amarillo, manchego, tocino, jamon, pepinillos,cebolla,jalapeño y lechuga</label>
                </div>
                <div class=" col-6 col-sm-3 d-flex flex-column justify-content-center align-items-center pb-2 " >
                    <label>Sencilla</label> 
                    <input type="button" class="btn btn-primary btn-add" value="$60" data-producto="BURGER" data-nombre="ACUATICA"  data-size="Sencilla">
                </div>
                <div class=" col-6 col-sm-3 d-flex flex-column justify-content-center align-items-center pb-2">
                    <label>Con Papas</label>
                    <input type="button" class="btn btn-primary btn-add" value="$70" data-producto="BURGER" data-nombre="ACUATICA"  data-size="con Papas">
                </div>
            </section>

        </div>
        <!--Alitas-->
        <div class=" tab-pane fade " id="s3" role="tabpanel">
            <section class="container h-25 bg-dark text-white d-flex flex-column justify-content-center align-items-center mb-1">
                <img width="75px" src="./Assets/imgs/alitas-de-pollo.png" ><br>

                <h2>Alitas</h2> 
            </section> 
            <section class="producto row bg-dark text-white pt-1 pb-1 "  >

                <div class=" producto-nombre col-12 col-sm-6 d-flex flex-column justify-content-center align-items-center text-center ">
                    <h5>RED HOT</h5>
                    <label>Salsa Picosita Acompañadas de Adereza Ranch</label>
                </div>
                <div class=" col-6 col-sm-3 d-flex flex-column justify-content-center align-items-center pb-2" >
                    <label>6 pz</label> 
                    <input type="button" class="btn btn-primary btn-add" value="$70" data-producto="Alitas" data-nombre="RED HOT"  data-size="6 pz">
                </div>
                <div class=" col-6 col-sm-3 d-flex flex-column justify-content-center align-items-center pb-2">
                    <label>12 pz</label>
                    <input type="button" class="btn btn-primary btn-add" value="$80" data-producto="Alitas" data-nombre="RED HOT"  data-size="12 pz">
                </div>
            </section>
            <section class="producto row bg-dark text-white   pt-1 pb-1"  >

                <div class=" producto-nombre col-12 col-sm-6 d-flex flex-column justify-content-center align-items-center text-center">
                    <h5>GUANABANA HABANERO</h5>
                    <label>Salsa Dulce con un toque de Habanero</label>
                </div>
                <div class=" col-6 col-sm-3 d-flex flex-column justify-content-center align-items-center pb-2" >
                    <label>6 pz</label>
                    <input type="button" class="btn btn-primary btn-add" value="$80" data-producto="Alitas" data-nombre="GUANABANA HABANERO"  data-size="6 pz">
                </div>
                <div class=" col-6 col-sm-3 d-flex flex-column justify-content-center align-items-center pb-2">
                    <label>12 pz</label>
                    <input type="button" class="btn btn-primary btn-add" value="$90" data-producto="Alitas" data-nombre="GUANABANA HABANERO"  data-size="12 pz">
                </div>
            </section>
            <section class="producto row bg-dark text-white  pt-1 pb-1"  >

                <div class=" producto-nombre col-12 col-sm-6 d-flex flex-column justify-content-center align-items-center text-center">
                    <h5>MANGO HABANERO</h5>
                    <label>Salsa Dulce con un toque de Habanero</label>
                </div>
                <div class=" col-6 col-sm-3 d-flex flex-column justify-content-center align-items-center pb-2 " >
                    <label>6 pz</label>
                    <input type="button" class="btn btn-primary btn-add" value="$60" data-producto="Alitas" data-nombre="MANGO HABANERO"  data-size="6 pz">
                </div>
                <div class=" col-6 col-sm-3 d-flex flex-column justify-content-center align-items-center pb-2">
                    <label>12 pz</label>
                    <input type="button" class="btn btn-primary btn-add" value="$70"  data-producto="Alitas" data-nombre="MANGO HABANERO"  data-size="12 pz">
                </div>
            </section>

        </div>
    </div>
    <div id="alerta-add" class="alert alert-primary d-none" role="alert" style="position: fixed;    top: 0;    width: 100%;    left: 0;">
        Se Agrego Tu Producto
    </div>
    <div id="alerta-remove" class="alert alert-danger d-none" role="alert" style="position: fixed;    top: 0;    width: 100%;    left: 0;">
        Se Elimino Producto
    </div>
    <div id="modal_c" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title">Confirma Tu Pedido</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <a  href="<?php echo $this->base_url() . "Home/PedidoRealizado" ?>" class="btn btn-primary" >Confirmar</a>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center pt-2">

        <img src="./Assets/imgs/divider-free-img.png"  style=" z-index: -1;" >
    </div>
</section>

