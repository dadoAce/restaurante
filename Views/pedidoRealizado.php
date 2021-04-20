 
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
        background-image: url(../Assets/imgs/portada.jpg);
        background-size: cover;
        background-attachment: local;
    } 

</style>
<section id="section-titulo" class=" h-100 bg-dark text-white d-flex flex-column justify-content-center align-items-center">

    <h2>Su Pedido Fue Realizado</h2>


    <a class="btn btn-success" href="<?php echo $this->base_url(); ?>" >Ordenar Mas Comdia</a>
</section> 

